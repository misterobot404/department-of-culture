<?php

namespace App\Http\Controllers;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

use App\Application;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use function Matrix\add;

class ApplicationController extends Controller
{
    public function index($eventId)
    {
        $applications = Application::where('event_id', '=', $eventId)->get()->all();

        $filename = "event" . "$eventId" . ".xlsx";
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // remove unused key
        foreach ($applications as $key => $value) {
            unset($applications[$key]->id);
            unset($applications[$key]->event_id);
            unset($applications[$key]->updated_at);
        }
        // print row header
        $key_array = [];
        if ($applications != null) {
            foreach ($applications[0]->toArray() as $key => $value) {
                if ($key == "email") $key_array[] = "Электронная почта";
                if ($key == "phone") $key_array[] = "Контактный телефон";
                else if ($key == "created_at") $key_array[] = "Дата подачи заявки";

                else if ($key == "received_data") {
                    $received_data = json_decode($value);
                    unset($received_data->event_id);
                    foreach ($received_data as $received_key => $received_value) {
                        $key_array[] = $received_key;
                    }
                }
            }
        }
        $sheet->fromArray($key_array);
        // print row received data
        foreach ($applications as $key => $value) {

            //// print mail / phone / data time
            // change UTF
            $temp_datatime = $value->created_at;
            $row_exl = $value->toArray();
            $row_exl["created_at"] = $temp_datatime;
            $row_exl["created_at"]->setTimezone('Asia/Vladivostok');
            $received_data = json_decode($row_exl["received_data"]);
            unset($row_exl["received_data"]);
            $sheet->fromArray($row_exl, NULL, 'A' . ($key + 2));

            $value_array = [];
            //// print other received data
            foreach ($received_data as $received_key => $received_value) {
                if ($received_key != "event_id")
                    $value_array[] = $received_value;
            }
            $sheet->fromArray($value_array, NULL, 'D' . ($key + 2));
        }

        $writer = new Xlsx($spreadsheet);
        $writer->save($filename);

        $response = new BinaryFileResponse($filename);
        $response->headers->set('Content-Type', 'applications/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            $filename
        );
        return $response;
    }

    public function store(Request $request)
    {
        if (Application::where('email', '=', $request->input("email"))
            ->where('event_id', '=', $request->input("event_id"))->exists()) {
            return back()->withError('Эта почта уже используется')->withInput();
        }
        $application = new Application();
        $application->event_id = $request->input("event_id");
        $application->email = $request->input("email");
        $application->phone = $request->input("phone");
        $values = $request->input();
        unset($values["_token"]);
        unset($values["email"]);
        unset($values["phone"]);
        $application->received_data = json_encode($values);
        $application->save();

        return redirect('/application-created');
    }
}

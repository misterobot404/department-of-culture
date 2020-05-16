<?php

namespace App\Http\Controllers;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

use App\Application;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use function Matrix\add;

class EventController extends Controller
{
    public function index($eventId)
    {
        if ($eventId == 1) {
            return response()->file(storage_path("app/public/Polozhenie_Khrustalna_Nota.docx"));
        }
        else if ($eventId == 2) {
            return response()->file(storage_path("app/public/Polozhenie_Stikhia_Tantsa.docx"));
        }
        else return back();
    }

}

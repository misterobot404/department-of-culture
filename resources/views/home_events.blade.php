@extends('layouts.layout')
@section('title', "События")

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header"><h4 class="my-auto">События</h4></div>
            <div class="card-body d-flex p-3">
                <div class="card mx-3 mt-3" style="width: 22rem;">
                    <img src="{{ asset('assets/images/event1.jpg') }}" class="card-img-top" alt="event1">
                    <div class="card-body">
                        <h5 class="card-title text-dark font-weight-bold">Открытый городской фестиваль вокально-хоровой, джазовой музыки «Хрустальная нота»</h5>
                        <p class="card-text">пт, 12 февр. | Комсомольский-на-Амуре Театр Драмы</p>
                        <div class="d-flex justify-content-center">
                            <a href="/application/1" class="btn btn-primary">Получить заявки</a>
                        </div>
                    </div>
                </div>
                <div class="card mx-3 mt-3" style="width: 22rem;">
                    <img src="{{ asset('assets/images/event2.jpg') }}" class="card-img-top" alt="event2">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-dark font-weight-bold">Открытый городской конкурс хареографического искуства «Стихия танца»</h5>
                        <p class="card-text">сб, 27 февр. | Комсомольский-на-Амуре Театр Драмы</p>
                        <div class="text-center mt-auto">
                            <a href="/application/2" class="btn btn-primary">Получить заявки</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

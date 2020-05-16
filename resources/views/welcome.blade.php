<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@extends('layouts.html_head')
@section('title', "Главная")

<body>
<!-- Hero -->
<div class="text-center pt-5">
    <!-- Large logo -->
    <img height="180" src="{{ asset('assets/images/logo_large.jpg') }}" alt="Responsive image">
    <h2 class="text-uppercase font-weight-bold text-dark mt-3 text-center">{{ config('app.name') }}</h2>
    <!-- Auth / admin panel -->
    @if (Route::has('login'))
        <div class="d-flex justify-content-center links mt-2">
            @auth
                <a href="{{ url('/home') }}" class="d-flex">
                    <span style="height: 24px" class="material-icons"> edit </span>
                    <span class="d-block mt-1 ml-1"> Панель управления </span>
                </a>
            @else
                <a href="{{ route('login') }}" class="d-flex">
                    <span style="height: 24px" class="material-icons">account_circle</span>
                    <span class="d-block mt-1 ml-1">Войти</span>
                </a>
            @endauth
        </div>
@endif
<!-- Banner img -->
    <div class="card mt-4 w-100">
        <img
            class="card-img-top img-fluid"
            src="{{ asset('assets/images/hero.jpg') }}"
            alt="Card image"
            style="min-width: 100%"
        >
        <div class="card-img-overlay d-flex dp-0 border-0 align-content-center">
            <h1 class="d-none d-sm-block mx-auto my-auto display-3 text-white text-uppercase">Отдел культуры</h1>
        </div>
    </div>
</div>
<!-- Events-->
<div class="mt-5">
    <h2 class="pt-4 font-weight-bold text-dark text-center">Предстоящие события</h2>
    <div class="d-flex justify-content-center mt-2">
        <div class="card mx-3 mt-3" style="width: 34rem;">
            <img src="{{ asset('assets/images/event1.jpg') }}" class="card-img-top" alt="event1">
            <div class="card-body">
                <h5 class="card-title text-dark font-weight-bold">Открытый городской фестиваль вокально-хоровой, джазовой музыки «Хрустальная нота»</h5>
                <p class="card-text">пт, 12 февр. | Комсомольский-на-Амуре Театр Драмы</p>
                <div class="text-center mt-auto">
                    <a href="/event/specification/1" class="btn btn-outline-primary mx-1">Получить положение</a>
                    <a href="/event1" class="btn btn-primary px-4 mx-1">Заполнить заявку</a>
                </div>
            </div>
        </div>
        <div class="card mx-3 mt-3" style="width: 34rem;">
            <img src="{{ asset('assets/images/event2.jpg') }}" class="card-img-top" alt="event2">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title text-dark font-weight-bold">Открытый городской конкурс хареографического искуства «Стихия танца»</h5>
                <p class="card-text">сб, 27 февр. | Комсомольский-на-Амуре Театр Драмы</p>
                <div class="text-center mt-auto">
                    <a href="/event/specification/2" class="btn btn-outline-primary mx-1">Получить положение</a>
                    <a href="/event2" class="btn btn-primary px-4 mx-1">Заполнить заявку</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Photo gallery -->
<div class="mt-5">
    <h2 class="pt-4 font-weight-bold text-dark text-center">Фото галерея</h2>
    <div id="carouselExampleInterval" class="carousel slide mt-4 mx-auto w-75" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="3000">
                <img src="{{ asset('assets/images/PhotoGallery/1.jpg') }}" class="d-block w-100" alt="1">
            </div>
            <div class="carousel-item" data-interval="3000">
                <img src="{{ asset('assets/images/PhotoGallery/2.jpg') }}" class="d-block w-100" alt="2">
            </div>
            <div class="carousel-item" data-interval="3000">
                <img src="{{ asset('assets/images/PhotoGallery/3.jpg') }}" class="d-block w-100" alt="3">
            </div>
            <div class="carousel-item" data-interval="3000">
                <img src="{{ asset('assets/images/PhotoGallery/4.jpg') }}" class="d-block w-100" alt="4">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!-- About us -->
<div class="mt-5 text-center">
    <h2 class="pt-4 font-weight-bold text-dark text-center">О нас</h2>
    <p class="w-50 mx-auto mt-2 mb-4 font-weight-bold text-dark text-center" style="min-width: 290px">
        Отдел культуры администрации города Комсомольска-на-Амуре Хабаровского края является
        отраслевым органом администрации города Комсомольска-на-Амуре в форме
        муниципального казенного учреждения, созданным для осуществления управленческих
        функций в области культуры и обеспечения культурной деятельности на территории
        муниципального образования городского округа "Город Комсомольск-на-Амуре".
    </p>
    <img class="w-75" src="{{ asset('assets/images/about_us.jpg') }}" alt="aboutus">
</div>
<!-- Footer -->
<div class="text-center pt-5">
    <p>© 2020 {{ config('app.name') }}</p>
</div>
</body>
</html>

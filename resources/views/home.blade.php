@extends('layouts.layout')
@section('title', "Панель управления")

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header"><h4 class="my-auto">Возможности</h4></div>
            <div class="card-body d-flex p-3">
                <div class="card m-3" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title">Управление событями</h5>
                        <p class="card-text">Создать, изменить или удалить событие или положение.</p>
                        <div class="text-center">
                            <a href="/home" class="btn btn-primary w-50" style="min-width: 124px;">
                                Перейти
                            </a>
                        </div>

                    </div>
                </div>
                <div class="card m-3" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title">Информация о заявках</h5>
                        <p class="card-text">Получить всю информацию по заявкам.</p>
                        <div class="text-center">
                            <a href="/home/events" class="btn btn-primary w-50" style="min-width: 124px;">
                                Перейти
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

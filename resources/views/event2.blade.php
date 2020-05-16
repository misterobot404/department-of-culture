<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@extends('layouts.layout')
@section('title', "Заявка")

@section('content')
    <div class="container w-50" style="min-width: 400px;">
        <div class="card">
            <h4 class="card-header font-weight-bold">Стихии танца. Заявка</h4>
            <div class="card-body">
                <form method="post" action="/application">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="event_id" value="2">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputNameGroup">Полное наименование коллектива *</label>
                            <input type="text" name="Полное наименование коллектива" class="form-control" value="{{ old('Полное наименование коллектива') }}" id="inputNameGroup" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputNumberPerson">Количество исполнителей *</label>
                            <input type="number" name="Количество исполнителей" class="form-control" value="{{ old('Количество исполнителей') }}" id="inputNumberPerson" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputNameSol">ФИ солиста (если выступление сольное)</label>
                            <input type="text" name="ФИ солиста" class="form-control" value="{{ old('ФИ солиста') }}" id="inputNameSol">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputNameConcertmaster">ФИО балетмейстера-постановщика *</label>
                            <input type="text" name="ФИО балетмейстера-постановщика" class="form-control" value="{{ old('ФИО балетмейстера-постановщика') }}" id="inputNameConcertmaster">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputNameHead">ФИО руководителя направляющей организации *</label>
                            <input type="text" name="ФИО руководителя направляющей организации" class="form-control" value="{{ old('ФИО руководителя направляющей организации') }}" id="inputNameHead" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputNameHead">Организация (учреждение), в которой работает балетмейстер *</label>
                            <input type="text" name="Организация, в которой работает балетмейстер" class="form-control" value="{{ old('Организация, в которой работает балетмейстер') }}" id="inputNameHead" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputAge">Форма выступления *</label>
                            <select id="inputAge" name="Форма выступления" class="form-control" required>
                                <option value="" disabled selected>Выберите...</option>
                                <option>Сольный номер (1-2 исполнителя)</option>
                                <option>Малая формы (до 6 человек)</option>
                                <option>Ансамбль</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputAge">Хореографическое направление *</label>
                            <select id="inputAge" name="Хореографическое направление" class="form-control" required>
                                <option value="" disabled selected>Выберите...</option>
                                <option>Классический танец</option>
                                <option>Народный танец</option>
                                <option>Эстрадный танец</option>
                                <option>Современный танец</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputAge">Возрастая категория исполнител(я/ей) *</label>
                            <select id="inputAge" name="Возрастая категория исполнител(я/ей)" class="form-control" required>
                                <option value="" disabled selected>Выберите...</option>
                                <option>Младшая возрастная категория (до 9 лет)</option>
                                <option>Средняя возрастная категория (10-13 лет)</option>
                                <option>Старшая возрастная категория (14-18 лет)</option>
                                <option>Взрослая возрастная категория (19 и старше)</option>
                                <option>Смешанные возрастные группы</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputTime">Хронометраж *</label>
                            <input type="text" name="Хронометраж" class="form-control" id="inputTime" value="{{ old('Хронометраж') }}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPhone">Контактный телефон *</label>
                            <input type="text" name="phone" class="form-control" id="inputPhone" value="{{ old('phone') }}" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail">E-mail *</label>
                            <input type="email" name="email" class="form-control" id="inputEmail" value="{{ old('email') }}" required>
                        </div>
                        <small class="d-flex form-text text-muted col-md-6 align-items-center">
                            @if (session('error'))
                                <span class="text-danger">{{ session('error') }}</span>
                            @else
                                Будьте внимательны. Для одной заявки можно использовать только один E-mail.
                            @endif
                        </small>
                    </div>
                    <small id="passwordHelpBlock" class="form-text text-muted">
                        * Обязательные поля.
                    </small>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Отправить заявку</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@extends('layouts.layout')
@section('title', "Заявка")

@section('content')
    <div class="container w-50" style="min-width: 400px;">
        <div class="card">
            <h4 class="card-header font-weight-bold">Хрустальная нота. Заявка</h4>
            <div class="card-body">
                <form method="post" action="/application">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="event_id" value="1">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputNameGroup">Полное наименование коллектива *</label>
                            <input type="text" name="Полное наименование коллектива" class="form-control" value="{{ old('Полное наименование коллектива') }}" id="inputNameGroup" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputNumberPerson">Количество человек в коллективе *</label>
                            <input type="number" name="Количество человек в коллективе" class="form-control" value="{{ old('Количество человек в коллективе') }}" id="inputNumberPerson" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputNameSol">ФИ солиста (если выступление сольное)</label>
                            <input type="text" name="ФИ солиста" class="form-control" value="{{ old('ФИ солиста') }}" id="inputNameSol">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputNomination">Номинация *</label>
                            <select id="inputNomination" name="Номинация" class="form-control" required>
                                <option value="" disabled selected>Выберите...</option>
                                <option>Детские хоровые коллективы (от 12 человек)</option>
                                <option>Вокальные группы (до 11 человек включительно)</option>
                                <option>Вокальные ансамбли (до 5 человек включительно)</option>
                                <option>Солисты</option>
                                <option>Ансамбли и оркестры исполняющие джаз</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputNameHead">ФИО руководителя *</label>
                            <input type="text" name="ФИО руководителя" class="form-control" value="{{ old('ФИО руководителя') }}" id="inputNameHead" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputNameConcertmaster">ФИО концертмейстера (если есть)</label>
                            <input type="text" name="ФИО концертмейстера" class="form-control" value="{{ old('ФИО концертмейстера') }}" id="inputNameConcertmaster">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputRepertoire">Репертуар по порядку выступления *</label>
                            <input type="text" name="Репертуар по порядку выступления" class="form-control" id="inputRepertoire" value="{{ old('Репертуар по порядку выступления') }}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputAge">Возрастная категория *</label>
                            <select id="inputAge" name="Возрастная категория" class="form-control" required>
                                <option value="" disabled selected>Выберите...</option>
                                <option>Юниоры (4-8 лет включительно)</option>
                                <option>Младшая группа (9-11 лет включительно)</option>
                                <option>Средняя группа (12-15 лет включительно)</option>
                                <option>Старшая группа (16-18 лет включительно)</option>
                                <option>Взрослая группа (19-25 лет включительно)</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputTime">Хронометраж *</label>
                            <input type="text" name="Хронометраж" class="form-control" id="inputTime" value="{{ old('time') }}" required>
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

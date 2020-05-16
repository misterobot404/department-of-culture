<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@extends('layouts.layout')
@section('title', "Заявка")

@section('content')
    <div class="container d-flex align-items-center justify-content-center" style="min-width: 400px; min-height: 76vh">
        <div class="card">
            <h4 class="card-header font-weight-bold">Успех!</h4>
            <div class="card-body text-center">
                <div class="card-text">
                    Ваша заявка успешно создана и ожидает рассмотрения модератором.
                </div>
                <a href="/" class="btn btn-primary mt-3">Главная страница</a>
            </div>
        </div>
    </div>
@endsection


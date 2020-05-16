<!doctype html>
<html>
@extends('layouts.html_head')

<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex mr-0" style="white-space: normal !important;" href="{{ url('/') }}">
                <img style="max-height: 40px" src="{{ asset('assets/images/logo_large.jpg') }}">
                <h4 class="ml-2 my-auto">{{ config('app.name') }}</h4>
            </a>

            @auth
            <div class="mx-4 d-none d-md-block" style="height: 40px; border-right: 1px solid #333; opacity: 0.5">
            </div>
            <a class="d-none d-md-block my-auto text-decoration-none text-dark" href="{{ url('/home') }}">
                <h4 class="my-auto">Управление</h4>
            </a>
            @endauth

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @auth
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Выйти') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
</html>

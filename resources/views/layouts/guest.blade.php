<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        @vite(['resources/css/app.scss'])
    </head>
    <body class="guest">
       <header>
            <div class="container">
                <a href="/" class="logo">
                    <img src="/img/logo.png" alt="Учебный центр Армтек">
                </a>
                @if(request()->routeIs('login'))
                    <ul class="header-tools">
                        <li><a href="{{ route('register') }}" class="button bg-orange">Регистрация</a></li>
                    </ul>
                @else
                    <ul class="header-tools guest-tools">
                        <li><a class="color-black">Уже есть аккаунт?</a></li>
                        <li><a href="{{ route('login') }}" class="button button-framed color-gray">Войти</a></li>
                    </ul>
                @endif
            </div>
        </header>
        <main>
            {{ $slot }}
        </main>
        <div class="cookies">
            <p>Мы используем <a href="">cookies</a>, чтобы сохранять ваш поиск, рекомендовать полезное и создавать другие удобства на сайте</p>
            <button id="close-cookies">Окей</button>
        </div>
        @vite(['resources/js/app.js'])
    </body>
</html>

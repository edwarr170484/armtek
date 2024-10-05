<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        @vite(['resources/css/app.scss'])
    </head>
    <body>
       <header>
            <div class="container">
                <a href="/" class="logo">
                    <img src="/img/logo.png" alt="Учебный центр Армтек">
                </a>
                <ul class="header-tools guest-tools">
                    <li><a href="" class="color-black">Уже есть аккаунт?</a></li>
                    <li><a href="" class="button button-framed color-gray">Войти</a></li>
                </ul>
            </div>
        </header>
    </body>
</html>

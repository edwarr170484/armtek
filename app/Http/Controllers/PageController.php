<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    public function index(Request $request): View
    {
        return view('index');
    }

    public function about(Request $request): View
    {
        return view('page.about', ['breadcrumbs' => ['/about' => 'О нас'], 'title' => 'Учебный центр ARMTEK']);
    }

    public function personal(Request $request): View
    {
        return view('page.personal', ['breadcrumbs' => ['/personal' => 'Политика обработки персональных данных'], 'title' => 'Политика обработки персональных данных']);
    }

    public function oferta(Request $request): View
    {
        return view('page.oferta', ['breadcrumbs' => ['/oferta' => 'Договор публичной оферты'], 'title' => 'Договор публичной оферты']);
    }

    public function cookie(Request $request): View
    {
        return view('page.cookie', ['breadcrumbs' => ['/cookie' => 'Обработка файлов Cookies'], 'title' => 'Обработка файлов Cookies']);
    }

    public function payments(Request $request): View
    {
        return view('page.payments', ['breadcrumbs' => ['/payments' => 'Оплата'], 'title' => 'Оплата']);
    }

    public function sales(Request $request): View
    {
        return view('page.sales', ['breadcrumbs' => ['/sales' => 'Акции'], 'title' => '', 'image' => '/img/banners/sales-banner.jpg']);
    }
}
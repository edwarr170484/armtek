<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function contacts(Request $request): View
    {
        return view('page.contacts', ['breadcrumbs' => ['/contacts' => 'Контакты'], 'title' => 'Всегда на связи']);
    }
}
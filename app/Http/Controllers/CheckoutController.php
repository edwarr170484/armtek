<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CheckoutController extends Controller
{
    public function cart(Request $request): View
    {
        return view('checkout.cart', ['breadcrumbs' => ['/checkout/cart' => 'Корзина'], 'title' => 'Корзина']);
    }
}
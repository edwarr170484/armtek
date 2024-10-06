<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CatalogController extends Controller
{
    public function courses(?string $name = null): View
    {
        if($name){
            return view('catalog.course', ['breadcrumbs' => [
                                                            '/courses' => 'Курсы', '/courses/course' => 'Устройство легкового автомобиля'], 
                                                            'title' => 'Экспертность - Устройство легкового автомобиля', 
                                                            'image' => '/img/cards/card-1.png']);
        } else {
            return view('catalog.courses', ['breadcrumbs' => [
                                                            '/courses' => 'Электронные курсы'], 
                                                            'title' => 'Экспертность - Ваше преимущество перед конкурентами', 
                                                            'image' => '/img/banners/courses-banner.png']);
        }
    }
}
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

    public function trainings(?string $name = null): View
    {
        if($name){
            return view('catalog.training', ['breadcrumbs' => [
                                                            '/trainings' => 'Тренинги', '/trainings/training' => 'Подбор автозапчастей легкового автомобиля. Базовый уровень'], 
                                                            'title' => 'Подбор автозапчастей легкового автомобиля. Базовый уровень', 
                                                            'image' => '/img/banners/training-banner.png']);
        } else {
            return view('catalog.trainings', ['breadcrumbs' => [
                                                            '/trainings' => 'Тренинги'], 
                                                            'title' => 'Обучение, которое помогает в бизнесе', 
                                                            'image' => '/img/banners/trainings-banner.png']);
        }
    }

    public function programs(?string $name = null): View
    {
        if($name){
            return view('catalog.program', ['breadcrumbs' => [
                                                            '/trainings' => 'Тренинги', '/trainings/training' => 'Легковая программа. Базовый уровень'], 
                                                            'title' => 'Легковая программа. Базовый уровень', 
                                                            'image' => '/img/banners/program-banner.jpg']);
        } else {
            return view('catalog.programs', ['breadcrumbs' => [
                                                            '/trainings' => 'Комплексные программы'], 
                                                            'title' => 'Сделайте первый шаг на пути развития своего бизнеса', 
                                                            'image' => '/img/banners/programs-banner.jpg']);
        }
    }

    public function certificates(Request $request): View
    {
        return view('catalog.certificates', ['breadcrumbs' => [
                                                            '/certificates' => 'Подарочные сертификаты'], 
                                                            'title' => '«Определенность цели является отправной точкой всех достижений», – У. Клемент Стоун', 
                                                            'image' => '/img/banners/certificates-banner.png']);
    }
}
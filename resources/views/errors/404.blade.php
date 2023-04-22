@extends('layouts.all')

@php
    $title = "404 - Пропуск ЛЕГКО";
    $description = "Пропуск ЛЕГКО - помощь в оформлении пропусков на МКАД, ТТК, СК. Защита от аннуляции. Гарантия получения";
@endphp

@section('title', $title)
@section('description', $description)

@section('content')

    <x-header></x-header>

    <x-all-win></x-all-win>

    <x-menu></x-menu>

    <section class="e404">
        <div class="_container">
            <h1>404</h1>
            <p>К сожалению данная страница не найдена!</p>
            <p>Но если Вы попали на наш сайт то Вам нужен пропуск:</p>
            <a href="#recollMsg" class="btn">Заказать консультацию</a>
        </div>
    </section>

    <x-rules></x-rules>
    <x-advantages></x-advantages>

    <x-contacts></x-contacts>

@endsection

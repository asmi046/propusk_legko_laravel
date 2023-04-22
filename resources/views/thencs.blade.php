@extends('layouts.all')

@php
    $title = "Пропуск ЛЕГКО - помощь в оформлении пропусков на МКАД, ТТК, СК";
    $description = "Пропуск ЛЕГКО - помощь в оформлении пропусков на МКАД, ТТК, СК. Защита от аннуляции. Гарантия получения";
@endphp

@section('title', $title)
@section('description', $description)

@section('content')

    <x-header></x-header>

    <x-all-win></x-all-win>

    <x-menu></x-menu>
    <x-banner-thancs></x-banner-thancs>
    <x-propusc-check></x-propusc-check>

    <x-rules></x-rules>
    <x-advantages></x-advantages>


    <x-contacts></x-contacts>

@endsection

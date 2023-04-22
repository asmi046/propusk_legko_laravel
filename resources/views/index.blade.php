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
    <x-banner></x-banner>
    <x-propusc-check></x-propusc-check>
    <x-propusc-type></x-propusc-type>
    <x-sales></x-sales>
    <x-advantages></x-advantages>
    <x-rules></x-rules>
    <x-how></x-how>
    <x-docs></x-docs>



    <x-contacts></x-contacts>
@endsection

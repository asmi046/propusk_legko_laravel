@extends('layouts.all')

@php
    $title = "Оформление пропуска - Пропуск ЛЕГКО";
    $description = "Пропуск ЛЕГКО - помощь в оформлении пропусков на МКАД, ТТК, СК. Защита от аннуляции. Гарантия получения";
@endphp

@section('title', $title)
@section('description', $description)

@section('content')

    <x-header></x-header>

    <x-all-win></x-all-win>

    <x-menu></x-menu>

    <section class="buy_section">
        <div class="__container">
            <h1>Оформление пропуска</h1>
            <p><strong>Пропуск на:</strong> {{ request()->zone}}</p>
            <p><strong>Тип пропуска:</strong> {{ request()->diurnal_pass}}</p>
            <p><strong>Вид пропуска:</strong> {{ request()->day_time}}</p>

            <form action="{{route('send_pay')}}" method="POST" class="buy_form d_flex f_gap_25 f_col m_b_22 m_t_22">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <input type="hidden" name="diurnal_pass" value="{{ request()->diurnal_pass}}">
                <input type="hidden" name="zone" value="{{ request()->zone}}">
                <input type="hidden" name="day_time" value="{{ request()->day_time}}">
                <input name="name" type="text" placeholder="Введите номер авто" value="">
                <input name="phone" required type="tel" placeholder="+ 7 (___) ___ __ __" value="">
                <input type="submit" value="Отправить" class="btn">
            </form>

        </div>



    </section>

    <x-advantages></x-advantages>

    <x-contacts></x-contacts>

@endsection

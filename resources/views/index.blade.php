@extends('layouts.all')

@php
    $title = "Пропуск ЛЕГКО - помощь в оформлении пропусков на МКАД, ТТК, СК";
    $description = "Пропуск ЛЕГКО - помощь в оформлении пропусков на МКАД, ТТК, СК. Защита от аннуляции. Гарантия получения";
@endphp

@section('title', $title)
@section('description', $description)

@section('content')

    <x-header></x-header>
    <div id="windowsApp">
        <modal-window rout="/send_consult" redirect="/thencs" hesh="consultMsg" title="Помощь специалиста" subtitle="Оставьте контактные данные и наши специалисты помогут оформить пропуск" ></modal-window>
        <modal-window rout="/send_consult" redirect="/thencs" hesh="recollMsg" title="Заказ обратного звонка" subtitle="Оставьте контактные данные и наши специалисты помогут оформить пропуск" ></modal-window>
    </div>
    <x-menu></x-menu>
    <x-banner></x-banner>
    <x-propusc-check></x-propusc-check>
    <x-propusc-type></x-propusc-type>
    <x-sales></x-sales>
    <x-how></x-how>
    <x-docs></x-docs>
    <x-rules></x-rules>
    <x-advantages></x-advantages>


    <script>

        function initMap () {
            var myMap = new ymaps.Map("map", {
                // Координаты центра карты
                center: [55.75399399999374,37.62209300000001],
                // Масштаб карты
                zoom: 13,
                // Выключаем все управление картой
                controls: []
            });

            var myGeoObjects = [];

            // Указываем координаты метки

            hint = "Место"

            myGeoObjects = new ymaps.Placemark([55.75399399999374,37.62209300000001],{
                                            hintContent: '<div class="map-hint">'+hint+'</div>',
                                            balloonContent: '<div class="map-hint">'+hint+'</div>',
                                            });

            var clusterer = new ymaps.Clusterer({
                clusterDisableClickZoom: false,
                clusterOpenBalloonOnClick: false,
            });

            clusterer.add(myGeoObjects);
            myMap.geoObjects.add(clusterer);
            // Отключим zoom
            myMap.behaviors.disable('scrollZoom');

        }

        ymaps.ready( () => {
            this.initMap()
        });
    </script>

    <section id="map">
        <div class="contacts_blk">

            <h2>Контакты</h2>
            <p><strong>Телефон: </strong> <a href="tel:+79258212449">+7 925 821 24 49</a></p>
            <p><strong>WhatsApp: </strong> <a href="tel:+79258212449">+7 925 821 24 49</a></p>
            <p><strong>Telegram: </strong> <a href="tel:+79258212449">+7 925 821 24 49</a></p>

            <br/>
            <p><strong>Адрес:</strong></p>
            <br/>
            <p>Москва, Ярославское шоссе, д. 19с1, офис 16</p>

        </div>
    </section>

@endsection

<script>
    const coord = {{Config::get('contact.coord')}}
    const hint = "{{Config::get('contact.maptext')}}"

    function initMap () {
        var myMap = new ymaps.Map("map", {
            // Координаты центра карты
            center: coord,
            // Масштаб карты
            zoom: 13,
            // Выключаем все управление картой
            controls: []
        });

        var myGeoObjects = [];

        // Указываем координаты метки

        myGeoObjects = new ymaps.Placemark(coord, {
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
    <div id="contacts" class=" contacts_blk">

        <h2>Контакты</h2>
        <p><strong>Телефон: </strong> <a href="tel:{{str_replace(['(',')',' '], '',Config::get('contact.phone'))}}">{{Config::get('contact.phone')}}</a></p>
        <p><strong>WhatsApp: </strong> <a href="https://wa.me/{{str_replace(['(',')',' ', '+'], '',Config::get('contact.phone'))}}">{{Config::get('contact.phone')}}</a></p>

        <br/>
        <p><strong>Адрес:</strong></p>
        <br/>
        <p>{{Config::get('contact.adress')}}</p>
        <a href="#recollMsg" class="btn m_t_22">Получить консультацию</a>
    </div>
</section>

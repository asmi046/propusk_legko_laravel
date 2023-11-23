<div class="category-card__list border_block d_flex f_col">

    <p class="category-card__list-day">Дневной пропуск на <span class="card__list-abbr">{{$type}}</span></p>
    <hr class="gradient">

    <form action="{{route('show_buy')}}" method="GET" class="d_flex f_col f_gap_25">
        <input type="hidden" name="zone" value="{{$type}}">
        <input type="hidden" class="day_time" name="day_time" value="Дневной">

        <label class="category-card__list-price d_flex" for="elem_{{Str::slug($type)}}_1">
            <input id="elem_{{Str::slug($type)}}_1" type="radio" name="diurnal_pass" value="Разовый / срок изготовления 2 (5 000 руб)" checked/>
            <div><div for="OneTime">Разовый / срок изготовления 2 дня<br> <span class="card__list-price">5 000 руб</span></div></div>
        </label>

        <label class="category-card__list-price d_flex" for="elem_{{Str::slug($type)}}_2">
            <input id="elem_{{Str::slug($type)}}_2" type="radio" name="diurnal_pass" value="Годовой / срок изготовления 10 (13 000 руб)"/>
            <div>
                <div for="OneTime">Годовой / срок изготовления 10 дней<br> <span class="card__list-price">13 000 руб</span></div>
            </div>
        </label>

        <input type="submit" value="Получить консультацию" class="btn max_w_256">
    </form>
</div>

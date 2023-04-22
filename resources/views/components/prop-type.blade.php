<div class="category-card__list border_block d_flex f_col">

    <p class="category-card__list-day">Дневной пропуск на <span class="card__list-abbr">{{$type}}</span></p>
    <hr class="gradient">

    <form action="#" class="d_flex f_col f_gap_25">
        <label class="category-card__list-price d_flex" for="elem_1">
            <input id="elem_1" type="radio" name="diurnalPass" value="OneTime" checked/>
            <div><div for="OneTime">Разовый / срок изготовления 2 дня<br> <span class="card__list-price">5 000 руб</span></div></div>
        </label>

        <label class="category-card__list-price d_flex" for="elem_2">
            <input id="elem_2" type="radio" name="diurnalPass" value="OneTime"/>
            <div><div for="OneTime">Разовый / срок изготовления 10 дней<br> <span class="card__list-price">13 000 руб</span></div></div>
        </label>

        <input type="submit" value="Заказать пропуск" class="btn max_w_256">
    </form>
</div>

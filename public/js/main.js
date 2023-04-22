let sales_btn = document.querySelectorAll(".sales_btn")
for (let elem of sales_btn)
    elem.addEventListener("click", function (e) {
        e.preventDefault();

        for (let elem_tmp of sales_btn)
            elem_tmp.classList.remove("btn-active")

        elem.classList.add("btn-active")

        truck_count.value = elem.innerHTML;
    });

let day_zone_select = document.querySelectorAll(".day_zone_select")
for (let elem of day_zone_select)
    elem.addEventListener("click", function (e) {
        e.preventDefault();

        for (let elem_tmp of day_zone_select)
            elem_tmp.classList.remove("active")

        elem.classList.add("active")

        let day_time = document.querySelectorAll(".day_time")

        for (let elem_tmp of day_time)
            elem_tmp.value = elem.innerHTML;
    });

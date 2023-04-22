document.addEventListener("DOMContentLoaded", () => {
let menu_btn = document.querySelectorAll(".toggle_menu")
let menu_punkts = document.querySelectorAll(".puncts .menu-list a")

for (let elem of menu_punkts)
elem.addEventListener("click", function (e) {
    for (let elem1 of menu_btn)
        elem1.click();
});

for (let elem of menu_btn)
    elem.addEventListener("click", function (e) {

        elem.classList.toggle("active")

        let menu_elem = document.querySelector(".menu_wrapper")

        if (menu_elem) menu_elem.classList.toggle("active")
    });

});

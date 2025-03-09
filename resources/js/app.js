import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

window.onscroll = function () {
    const header = document.querySelector("header");
    const fixedNav = header.offsetTop;

    if (window.pageYOffset > fixedNav) {
        header.classList.add("navbar-fixed");
    } else {
        header.classList.remove("navbar-fixed");
    }
};

const hamburger = document.getElementById("hamburger");
const navMenu = document.getElementById("nav-menu");
const iconMenu = document.getElementById("icon-menu");

hamburger.addEventListener("click", function () {
    navMenu.classList.toggle("hidden");
    if (navMenu.classList.contains("hidden")) {
        iconMenu.innerHTML = '<i data-feather = "menu"></i>';
    } else {
        iconMenu.innerHTML = '<i data-feather = "x"></i>';
    }
    feather.replace();
});

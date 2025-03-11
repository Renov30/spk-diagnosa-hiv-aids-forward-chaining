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

document.querySelectorAll(".menu-item").forEach((item) => {
    item.addEventListener("click", () => {
        document.querySelectorAll(".content").forEach((content) => {
            content.classList.add("hidden");
            content.classList.add("opacity-0");
            content.classList.remove("opacity-100");
        });
        document.querySelectorAll(".menu-item").forEach((menu) => {
            menu.classList.remove("shadow-md");
            menu.classList.add("text-secondary");
        });
        item.classList.add("shadow-md");
        item.classList.remove("text-secondary");

        const target = item.getAttribute("data-target");
        const targetElement = document.getElementById(target);
        document.getElementById(target).classList.remove("hidden");
        setTimeout(() => {
            targetElement.classList.add("opacity-100");
            targetElement.classList.remove("opacity-0");
        }, 10);
    });
});


let swiperContent = new Swiper(".myContent", {
    spaceBetween: 50,
    grabCursor: true,
    loop: true,
    pagination: {
        el: ".content-pagination",
        clickable: true,
    },
    breakpoints: {
        941: {
            slidesPerView: 3,
        },

        768: {
            slidesPerView: 2,
        },
        450: {
            slidesPerView: 1,
        },
        350: {
            slidesPerView: 1,
        },
    }
});

let swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    loop: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 100,
        modifier: 2,
        slideShadows: true,
    },
    pagination: {
        el: ".swiper-pagination",
    },
});

let swiperSlide = new Swiper(".mySlide", {
    loop: true,
    breakpoints: {
        941: {
            slidesPerView: 3,
        },
        768: {
            slidesPerView: 2,
        },
        450: {
            slidesPerView: 1,
        },
        320: {
            slidesPerView: 1,
        },
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
    },
});
$(document).ready(function () {
    $('.floatingDate').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        clearBtn: true,
        todayHighlight: true,
        dropdown: true,
    });
});

$(document).ready(function () {
    $('.timepicker').timepicker({
        timeFormat: 'h:mm p',
        interval: 30,
        dynamic: false,
        dropdown: true,
        scrollbar: true,
    });
});


document.addEventListener("DOMContentLoaded", function () {
    var navbarToggler = document.querySelector(".navbar-toggler");
    var navbarCollapse = document.querySelector(".navbar-collapse");

    document.addEventListener("click", function (event) {
        var isClickInsideNavbar = navbarToggler.contains(event.target) || navbarCollapse.contains(event.target);

        if (!isClickInsideNavbar && navbarCollapse.classList.contains("show")) {
            navbarToggler.setAttribute("aria-expanded", "false");
            navbarCollapse.classList.remove("show");
        }
    });
});

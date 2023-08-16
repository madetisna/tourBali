<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/css/bali-activities.css">
    <title>Document</title>
</head>

<body>
<nav class="navbar navbar-expand-lg fixed-top">
        <div class="container px-5">
            <a class="navbar-brand fs-1 fw-bold" href="#"><i class="bi bi-car-front"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navbarNav">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tour/aboutUs">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tour/airportService">Airport Transfer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tour/tourPakages">Tour Ideas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tour/baliActivities">Activities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tour/contactUs">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section>
        <div class="hero">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide content-img">
                        <img src="/img/kecakUluwatu.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide content-img">
                        <img src="/img/SeafoodDinnerjimbaranBeach.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide content-img">
                        <img src="/img/tanjungBenoa.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide content-img">
                        <img src="/img/pandawaBeach.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide content-img">
                        <img src="/img/balanganBeach.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide content-img">
                        <img src="/img/garudaWisnuKencana.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide content-img">
                        <img src="/img/waterBlowNusaDua.jpg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
</body>
<script>
        let swiper = new Swiper(".mySwiper", {
            breakpoints: {
                450: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 1,
                },
                1366: {
                    slidesPerView: 2,
                },
            },
            spaceBetween: 20,
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
</html>
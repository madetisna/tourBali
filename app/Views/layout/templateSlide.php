<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?= base_url('/css/layout/templateSlide.css') ?>">
    <title>Document</title>
</head>

<body>
    <section class="content-slide section-padding">
        <div class="container bg-light">
            <div class="swiper mySlide">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="<?= base_url('/tour/southTour')?>">
                            <img src="<?= base_url('/img/uluwatu-tour.jpg') ?>" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="<?= base_url('/tour/ubudTour')?>">
                            <img src="<?= base_url('/img/ubudArtMarket.png') ?>" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="<?= base_url('/tour/eastTour')?>">
                            <img src="<?= base_url('img/lempuyang-luhur.jpg') ?>" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="<?= base_url('')?>">
                            <img src="<?= base_url('img/waterBlowNusaDua.jpg') ?>" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="http://">
                            <img src="<?= base_url('img/kintamani-tour.jpg') ?>" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="http://">
                            <img src="<?= base_url('img/menjanganIsland.jpg') ?>" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="http://">
                            <img src="<?= base_url('img/balanganBeach.jpg') ?>" alt="">
                        </a>
                    </div>
                </div>
                <div class="pt-3">
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="/js/templateSlide.js"></script>
</body>

</html>
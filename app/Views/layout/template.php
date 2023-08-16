 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-timepicker@0.5.2/dist/css/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    <link rel="stylesheet" href="<?= base_url('/css/layout/template.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/css/mainServiceCss/' . $css . '.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/css/tourIdeas/' . $css . '.css') ?>">
    <title><?= $title; ?></title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container px-5">
            <a class="navbar-brand fs-1 fw-bold" href="#"><i class="bi bi-car-front"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navbarNav">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link" href=<?= base_url('/home') ?>>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=<?= base_url('/tour/aboutUs') ?>>About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=<?= base_url('/tour/airportService') ?>>Airport Transfer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=<?= base_url('/tour/tourPakages') ?>>Tour Ideas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=<?= base_url('tour/contactUs') ?>>Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    

    <?= $this->renderSection('content'); ?>

    <footer class="main-footer">
        <div class="footer-content">
            <div class="container-fluid p-5">
                <div class="row">
                    <div class="footer-item col-12 col-md-6">
                        <div class="container">
                            <div class="title-box">
                                <h2 class="text-center">Griya Bali Trans</h2>
                                <p class="text-start p-3">Griya Bali Trans is a trusted Tour and Transport service that prioritizes honesty and high professionalism in providing safe services to customers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="footer-item col-12 col-md-6">
                        <div class="title-box ">
                            <h2 class="text-center">Information</h2>    
                            <div class=" d-flex justify-content-center align-items-center">
                                <div class="container p-3">
                                    <div class="row">
                                        <div class="col-12 col-md-4">
                                            <ul class="nav d-block">
                                                <li class="nav-item">
                                                    <a class="nav-link" href=<?= base_url('/home') ?>>HOME</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href=<?= base_url('/tour/aboutUS') ?>>ABOUT US</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href=<?= base_url('/tour/airportService') ?>>AIRPORT SERVICE</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href=<?= base_url('/tour/tourPakages') ?>>TOUR IDEAS</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <ul class="nav d-block">
                                                <li class="nav-item">
                                                    <a class="nav-link" href=<?= base_url('/tour/contactUs') ?>>CONTACT US</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href=<?= base_url('/tour/ubudTour') ?>>UBUD TOUR</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href=<?= base_url('/tour/anyTour') ?>>TOUR ON REQUEST</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href=<?= base_url('/tour/southTour') ?>>SOUTH TOUR</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <ul class="nav d-block">
                                                <li class="nav-item">
                                                    <a class="nav-link" href=<?= base_url('/tour/eastTour') ?>>EAST TOUR</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href=<?= base_url('/tour/northTour') ?>>NORTH TOUR</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href=<?= base_url('/tour/kintamaniTour') ?>>KINTAMANI TOUR</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-timepicker@0.5.2/dist/js/bootstrap-timepicker.min.js"></script>
    <script src="/js/index.js"></script>
    <script src="/js/templateSlide.js"></script>

    <script>
        AOS.init({
            once: true,
        });
    </script>
</body>

</html>
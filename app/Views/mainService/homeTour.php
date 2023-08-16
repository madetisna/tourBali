<?= $this->extend('layout/template'); ?>
<?= $this->section('content') ?>
<section id="home">
    <div class="main-home">
        <div class="overlay d-inline-flex justify-content-start">
            <div class="row container">
                <div class="main-title text-start col-12 col-md-12 col-lg-12" data-aos="zoom-in-up" data-aos-duration="3000">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12">
                                <h3>Welcome to Bali</h3>
                                <h1>HOLIDAY IN BALI WITH US
                                </h1>
                                <h2 class="text-start mt-3">Start From (IDR 540K)</h2>
                            </div>
                            <div class="col-12 col-md-12 col-lg-6">
                                <p class="text-start mt-3">Travel around Bali in a new car with your personal, english speaking
                                    driver. Get 10 hours daily service, fuel and unlimited mileage to go just anywhere you
                                    want</p>
                                <div class="btn-about text-start mt-3">
                                    <a href=" <?= base_url('/tour/anyTour') ?>" class="btn btn-success">GET STARTED <i class="bi bi-arrow-right-circle-fill "></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-me section-padding" id="about">
    <div class="about-content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-text text-center px-5">
                        <h2 class="">Welcome To Griya Bali Trans.com</h2>
                        <p class="mt-4">Griya Bali Trans is a travel agent in Bali for your
                            convenience and assistance. Booking Griya Bali trans is the best way to start your
                            journey while living in Bali. We will help guests wherever they want and we will arrange the
                            guests' travel from arriving in Bali to returning to their respective countries. Guests
                            don't need to worry about our drivers because we are professional and experienced.
                        </p>
                        <p>We help our clients in all stages. From reservation booking and route planning to the moment you end your journey with us, we will take care of all your needs. We provide a 10 hour car service with English speaking drivers. Do what you want, go anywhere for 10 consecutive hours because our commitment is no other than making your Bali experience unforgettable.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="main-service">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 content-service">
                <div class="container">
                    <div class="row gx-5">
                        <div class="col-12 col-md-12 pb-md-0 pb-3">
                            <div class="container px-5 mt-5">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <h5>Leet's See The Bali With us With You and Your Famliy</h5>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="content-service-text">
                                            <p>Enjoy the best travel experience in Bali with our Best Tour Services. Providing tour packages specially designed to suit your needs and preferences, we will take you to explore the beauty of the island of Bali to the fullest. With tour guides who are knowledgeable about hidden places and local culture...</p>
                                        </div>
                                        <div class="btn-tour-service pb-md-0 pb-3">
                                            <a href="<?= base_url('/tour/tourPakages') ?>" class="btn btn-success ">GET STARTED <i class="bi bi-arrow-right-circle-fill "></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12">
                            <div class="container">
                                <div class="swiper myContent">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="<?= base_url('/img/aboutMe.jpg') ?>" class="img-fluid" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?= base_url('img/content5.jpg') ?>" class="img-fluid" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?= base_url('img/gallery3.jpg') ?>" class="img-fluid" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?= base_url('img/kintamani-tour.jpg') ?>" class="img-fluid" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?= base_url('img/gallery10.jpeg') ?>" class="img-fluid" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?= base_url('img/content-3.jpg') ?>" class="img-fluid" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?= base_url('img/content8.jpg') ?>" class="img-fluid" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?= base_url('img/content7.jpg') ?>" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <!-- <div class="content-pagination"></div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 content-service section-padding">
                <div class="container p-5">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <img src="<?= base_url('/img/background-transfer-removebg.png') ?>" class="d-block img-fluid" alt="">
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="content-service-text pt-5">
                                <h5>AIRPORT & HOTEL TRANSFER SERVICE</h5>
                                <p>Enjoy the best trip with trusted service from our professional drivers. When you arrive in Bali, our friendly driver will meet you at Ngurah Rai International Airport. we will meet you on time and drive you directly to your hotel in full comfort. Not only that, we also provide transportation services to several areas in Bali such as Kuta, Seminyak, Legian, Sanur, Denpasar and many more.</p>
                            </div>
                            <div class="btn-transfer-service pt-md-0 pt-3">
                                <a href="<?= base_url('/tour/airportService') ?>" class="btn btn-success"> GET STARTED <i class="bi bi-arrow-right-circle-fill "></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <section class="rate-content">
    <div class="rate container-fluid">
        <div class="row align-items-center">
            <div class="col-md-3">
            </div>
            <div class="col-md-12">
                <div class="container">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide card">
                                <div class="container p-5">
                                    <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, cupiditate.
                                        Officiis ipsum laborum quos ut? Deleniti harum numquam ad temporibus.</h6>
                                </div>
                            </div>
                            <div class="swiper-slide card">
                                <div class="container p-5">
                                    <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, cupiditate.
                                        Officiis ipsum laborum quos ut? Deleniti harum numquam ad temporibus.</h6>
                                </div>
                            </div>
                            <div class="swiper-slide card">
                                <div class="container p-5">
                                    <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, cupiditate.
                                        Officiis ipsum laborum quos ut? Deleniti harum numquam ad temporibus.</h6>
                                </div>
                            </div>
                            <div class="swiper-slide card">
                                <div class="container p-5">
                                    <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, cupiditate.
                                        Officiis ipsum laborum quos ut? Deleniti harum numquam ad temporibus.</h6>
                                </div>
                            </div>
                            <div class="swiper-slide card">
                                <div class="container p-5">
                                    <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, cupiditate.
                                        Officiis ipsum laborum quos ut? Deleniti harum numquam ad temporibus.</h6>
                                </div>
                            </div>
                            <div class="swiper-slide card">
                                <div class="container p-5">
                                    <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, cupiditate.
                                        Officiis ipsum laborum quos ut? Deleniti harum numquam ad temporibus.</h6>
                                </div>
                            </div>
                            <div class="swiper-slide card">
                                <div class="container p-5">
                                    <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, cupiditate.
                                        Officiis ipsum laborum quos ut? Deleniti harum numquam ad temporibus.</h6>
                                </div>
                            </div>
                            <div class="swiper-slide card">
                                <div class="container p-5">
                                    <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, cupiditate.
                                        Officiis ipsum laborum quos ut? Deleniti harum numquam ad temporibus.</h6>
                                </div>
                            </div>
                            <div class="swiper-slide card">
                                <div class="container p-5">
                                    <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, cupiditate.
                                        Officiis ipsum laborum quos ut? Deleniti harum numquam ad temporibus.</h6>
                                </div>
                            </div>
                            <div class="swiper-slide card">
                                <div class="container p-5">
                                    <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, cupiditate.
                                        Officiis ipsum laborum quos ut? Deleniti harum numquam ad temporibus.</h6>
                                </div>
                            </div>
                            <div class="swiper-slide card">
                                <div class="container p-5">
                                    <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, cupiditate.
                                        Officiis ipsum laborum quos ut? Deleniti harum numquam ad temporibus.</h6>
                                </div>
                            </div>
                            <div class="swiper-slide card">
                                <div class="container p-5">
                                    <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, cupiditate.
                                        Officiis ipsum laborum quos ut? Deleniti harum numquam ad temporibus.</h6>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<section class="image">
    <div class="image-slide-content d-flex align-items-center justify-content-center">
        <div class="row container">
            <div class="col-12">
                <div class="container">
                    <h1 class="text-center">Explore The Beauty Of Island Bali</h1>
                    <h2 class="text-center">With Our Best Transportation</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="contact" class="main-contact section-padding">
    <div class="title-contact">
        <h1>Contact Us</h1>
    </div>
    <div class="contact-content container">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="icon-contact">
                        <a href="tel:6281338012014">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg>
                        </a>
                    </div>
                    <h5>
                        Call us at
                        <p>(+62)087668</p>
                    </h5>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="icon-contact">
                        <a href="mailto:adhistaratisna@gmail.com">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-envelope-paper" viewBox="0 0 16 16">
                                <path d="M4 0a2 2 0 0 0-2 2v1.133l-.941.502A2 2 0 0 0 0 5.4V14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V5.4a2 2 0 0 0-1.059-1.765L14 3.133V2a2 2 0 0 0-2-2H4Zm10 4.267.47.25A1 1 0 0 1 15 5.4v.817l-1 .6v-2.55Zm-1 3.15-3.75 2.25L8 8.917l-1.25.75L3 7.417V2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v5.417Zm-11-.6-1-.6V5.4a1 1 0 0 1 .53-.882L2 4.267v2.55Zm13 .566v5.734l-4.778-2.867L15 7.383Zm-.035 6.88A1 1 0 0 1 14 15H2a1 1 0 0 1-.965-.738L8 10.083l6.965 4.18ZM1 13.116V7.383l4.778 2.867L1 13.117Z" />
                            </svg>
                        </a>
                    </div>
                    <h5>
                        E-mail us at
                        <p>bali@gmail.com</p>
                    </h5>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="icon-contact">
                        <a href="https://wa.me/62081237883707">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                            </svg>
                        </a>
                    </div>
                    <h5>
                        WhatsApp
                        <p>(+62)081338012014</p>
                    </h5>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>
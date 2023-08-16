<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="main-hero bg-light">
    <div class="hero d-flex justify-content-center align-items-end">
        <div class="row container">
            <div class="col-6 col-md-12 ">
                <div class="hero-title pb-3"> </div>
            </div>
        </div>
    </div>
</section>
<section class="main-content section-padding">
    <div class="content container">
        <div class="content-title">
            <div class="content-title-text">
                <h2>AIRPORT AND HOTEL TRANSFER SERVICE</h2>
                <p>Enjoy the best trip with trusted service from our professional drivers. When you arrive in Bali, our friendly driver will meet you at Ngurah Rai International Airport. we will meet you on time and drive you directly to your hotel in full comfort. Not only that, we also provide transportation services to several areas in Bali such as Kuta, Seminyak, Legian, Sanur, Denpasar and many more.</p>
                <p>Our friendly drivers and air-conditioned vehicles make your journey from the airport to your hotel or back from hotel to airport comfortable. Experience our transportation service as you explore Bali. With a fleet of modern vehicles and experienced drivers, we guarantee a safe, comfortable and memorable trip.</p>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-12 col-lg-8">
                <div class="main-content">
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <div class="content-car">
                                <div class="card p-4">
                                    <img src="/img/mobil3.png" class="d-block w-100" alt="">
                                    <div class="content-car-text mt-5">
                                        <h2 class="text-center">TOYOTA AVANZA</h2>
                                        <h5 class="text-center mt-2">Recommended for 4 passengers </h5>
                                        <h5 class="text-center mt-2 mb-3">(Maximum 7 without luggage)</h5>
                                        <h6 class="text-center"><i class="bi bi-check-circle-fill"></i> Driver & Fuel</h6>
                                        <h6 class="text-center"><i class="bi bi-check-circle-fill"></i> Parking Fees</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="content-car">
                                <div class="card p-4">
                                    <img src="/img/suzukiAPV.png" class="d-block w-100" alt="">
                                    <div class="content-car-text mt-4">
                                        <h2 class="text-center">SUZUKI APV</h2>
                                        <h5 class="text-center mt-2">Recommended for 4 passengers </h5>
                                        <h5 class="text-center mt-2 mb-3">(Maximum 7 without luggage)</h5>
                                        <h6 class="text-center"><i class="bi bi-check-circle-fill"></i> Driver & Fuel</h6>
                                        <h6 class="text-center"><i class="bi bi-check-circle-fill"></i> Parking Fees</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="content-car">
                                <div class="card p-4">
                                    <img src="/img/ToyotaInnova.png" class="d-block w-100" alt="">
                                    <div class="content-car-text mt-5">
                                        <h2 class="text-center">TOYOTA INNOVA</h2>
                                        <h5 class="text-center mt-2">Recommended for 4 passengers </h5>
                                        <h5 class="text-center mt-2 mb-3">(Maximum 7 without luggage)</h5>
                                        <h6 class="text-center"><i class="bi bi-check-circle-fill"></i> Driver & Fuel</h6>
                                        <h6 class="text-center"><i class="bi bi-check-circle-fill"></i> Parking Fees</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="content-car">
                                <div class="card p-4">
                                    <img src="/img/toyotaHiace.png" class="d-block w-100" alt="">
                                    <div class="content-car-text mt-5">
                                        <h2 class="text-center">TOYOTA HIACE</h2>
                                        <h5 class="text-center mt-2">Recommended for 10 passengers </h5>
                                        <h5 class="text-center mt-2 mb-3">(Maximum 14 without luggage)</h5>
                                        <h6 class="text-center"><i class="bi bi-check-circle-fill"></i> Driver & Fuel</h6>
                                        <h6 class="text-center"><i class="bi bi-check-circle-fill"></i> Parking Fees</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form col-12 col-lg-4">
                <div class="card">
                    <div class="container p-5">
                        <div class="form-text mb-3">
                            <p>Please Fill Out The Form Below And We Will Get Back To You Very Soon</p>
                        </div>
                        <form class="form-booking" action="<?= base_url('insertData/airportTransfer') ?>" method="post">
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class=" mb-3">
                                        <label for="floatingInput" class="label-car">Please Choose A Car</label>
                                        <select id="floatingInput" class="form-select" name="car" required>
                                            <option selected disabled></option>
                                            <option name="car">Toyota Avanza</option>
                                            <option name="car">Toyota Innova</option>
                                            <option name="car">Toyota Hiace</option>
                                            <option name="car">Suzuki APV</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class=" mb-3">
                                        <label for="floatingInput">Full Name</label>
                                        <input type="text" selected class="form-control" id="floatingInput" name="name" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class=" mb-3">
                                        <label for="floatingInput">Email Address</label>
                                        <input type="email" class="form-control" id="floatingInput" name="emailAddress" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class=" mb-3">
                                        <label for="floatingInput">Phone Or WhatsApp</label>
                                        <input type="text" class="form-control" id="floatingInput" name="phoneNumber" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class=" mb-3">
                                        <label for="floatingInput">Number of Person</label>
                                        <input type="number" class="form-control" id="floatingInput" name="numberPerson" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class=" mb-3">
                                        <label for="floatingDate1">Pickup Date<i class="bi bi-calendar2-event-fill ms-2"></i></label>
                                        <input type="text" class="form-control floatingDate bi bi-calendar2-event-fill me-2" id="floatingDate1" name="pickupDate" uired />
                                    </div>
                                </div>
                                <div class="col-12 col-md-12 mb-3">
                                    <div class="">
                                        <label for="timepicker">Pickup Time<i class="bi bi-calendar3-event ms-2"></i></label>
                                        <input type="text" class="form-control timepicker" id="timepicker" name="pickupTime" required />
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class=" mb-3">
                                        <label for="floatingInput">Pickup Location</label>
                                        <input type="text" class="form-control" id="floatingInput" name="pickupLocation" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class=" mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Massage</label>
                                        <textarea class="form-control h-100" id="exampleFormControlTextarea1" name="massage" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="btn-form-booking text-start">
                                    <button type="submit" class="btn w-100 btn-warning" name="submit">BOOKING</button>
                                </div>
                        </form>
                    </div>
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
                <div class="card mb-3 mb-md-0">
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
                <div class="card mb-3 mb-md-0">
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
<?= $this->endSection('content'); ?>
<?= $page = 'trasnferService'; ?>
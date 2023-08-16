<?= $this->extend('layout/template'); ?>

<?= $this->section('content') ?>
<section class="main-hero">
    <div class="hero d-flex justify-content-center align-items-center">
        <div class="row container-fluid px-5">
            <div class="col-12">
                <div class="hero-title pb-5">
                    <h2 class="text-center">START EXPLORE THE ISLAND OF BALI!!</h2>
                    <h4 class="text-center mb-3">The Best Price Rent and Driver Car in Bali </h4>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="content-tour section-padding">
    <div class="any-tour container">
        <div class="content-title">
            <div class="content-title-text">
                <p>Come on, let's explore the charms of Bali together! Holidays with us will give you the opportunity to explore amazing places, enjoy delicious culinary delights, and create beautiful memories to be cherished.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="main-content">
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <div class="content-car">
                                <div class="card p-4">
                                    <img src="/img/mobil3.png" class="d-block w-100" alt="">
                                    <div class="content-car-text mt-5">
                                        <h2 class="text-center">TOYOTA AVANZA</h2>
                                        <h4 class="text-center">(IDR 540,000 / 10 hours)</h4>
                                        <h6 class="text-center">Over Time : 10% from price/hours</h6>
                                        <h6 class="text-center mt-2">Recommended for 4 passengers </h6>
                                        <h6 class="text-center mt-2 mb-3">(Maximum 7 without luggage)</h6>
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
                                        <h4 class="text-center">(IDR 570,000 / 10 hours)</h4>
                                        <h6 class="text-center">Over Time : 10% from price/hours</h6>
                                        <h6 class="text-center mt-2">Recommended for 4 passengers </h6>
                                        <h6 class="text-center mt-2 mb-3">(Maximum 7 without luggage)</h6>
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
                                        <h4 class="text-center">(IDR 1,000,00 / 10 hours)</h4>
                                        <h6 class="text-center">Over Time : 10% from price/hours</h6>
                                        <h6 class="text-center mt-2">Recommended for 4 passengers </h6>
                                        <h6 class="text-center mt-2 mb-3">(Maximum 7 without luggage)</h6>
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
                                        <h4 class="text-center">(IDR 1,200,00 / 10 hours)</h4>
                                        <h6 class="text-center">Over Time : 10% from price/hours</h6>
                                        <h6 class="text-center mt-2">Recommended for 4 passengers </h6>
                                        <h6 class="text-center mt-2 mb-3">(Maximum 7 without luggage)</h6>
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
                        <form class="form-booking" action="<?= base_url('insertData/anyTour') ?>" method="post">
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
                                        <label for="floatingDate1">Start Tour<i class="bi bi-calendar2-event-fill ms-2"></i></label>
                                        <input type="text" class="form-control floatingDate bi bi-calendar2-event-fill me-2" id="floatingDate1" name="pickupDateStart" uired />
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class=" mb-3">
                                        <label for="floatingDate1">End Tour<i class="bi bi-calendar2-event-fill ms-2"></i></label>
                                        <input type="text" class="form-control floatingDate bi bi-calendar2-event-fill me-2" id="floatingDate1" name="pickupDateEnd" uired />
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
<?= $this->include('layout/templateSlide');?>
<?= $this->endSection('content'); ?>
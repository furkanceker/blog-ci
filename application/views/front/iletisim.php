<?php $this->load->view('front/include/header'); ?>
<!-- Page Header-->
<header class="masthead" style="background-image: url('<?= base_url('assets/front/') ?>assets/img/contact-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>İletişim</h1>
                            <span class="subheading">Bizimle İletişime Geçin.</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p>İletişime geçmek ister misiniz? Bana mesaj göndermek için aşağıdaki formu doldurun, size en kısa sürede geri döneceğim!</p>
                        <div class="my-5">
                            <form id="contactForm" action="" method="post">
                                <div class="form-floating">
                                    <input class="form-control" id="name" type="text" placeholder="İsminizi girin..." />
                                    <label for="name">İsim</label>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="email" type="email" placeholder="Email adresinizi girin..." />
                                    <label for="email">Email</label>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="phone" type="tel" placeholder="Telefon numarası girin..." />
                                    <label for="phone">Telefon</label>
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" id="message" placeholder="Mesajınızı girin..." style="height: 12rem"></textarea>
                                    <label for="message">Mesaj</label>
                                </div>
                                <br />
                                <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Gönder</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
<?php $this->load->view('front/include/footer'); ?>  
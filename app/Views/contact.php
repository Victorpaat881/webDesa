<?= $this->extend('layout/__layout'); ?>

<?= $this->section('content'); ?>

<section>
    <div class="header-inner two">
        <div class="inner text-center">
            <h4 class="title text-white uppercase">Desa Tenga</h4>
            <h5 class="text-white uppercase">Get Many More Features</h5>
        </div>
        <div class="overlay bg-opacity-5"></div>
        <img src="http://placehold.it/1920x800" alt="" class="img-responsive">
    </div>
</section>

<div class="clearfix"></div>
<section class="sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="col-md-12 nopadding">
                    <div id="map" class="map" style="height:fit-content">
                        <div style="max-width:100%;overflow:hidden;color:red; height:600px">
                            <div id="embed-ded-map-canvas" style="height:100%; width:100%;max-width:100%; height:600px"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Tenga,+Minahasa+Selatan,+North+Sulawesi,+Indonesia&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div>
                            <style>
                                #embed-ded-map-canvas img.text-marker {
                                    max-width: none !important;
                                    background: none !important;
                                }

                                img {
                                    max-width: none
                                }
                            </style>
                        </div>
                    </div>
                </div>
                <!--end map-->

                <div class="clearfix"></div>
                <br>
                <div class="smart-forms bmargin">
                    <h3>Contact Form</h3>
                    <p>Tinggalkan Pesan untuk terhubung</p>
                    <br>
                    <br>
                    <form method="post" action="php/smartprocess.php" id="smart-form" novalidate="novalidate">
                        <div>
                            <div class="section">
                                <label class="field prepend-icon">
                                    <input type="text" name="sendername" id="sendername" class="gui-input" placeholder="Enter name">
                                    <span class="field-icon"><i class="fa fa-user"></i></span> </label>
                            </div>
                            <!-- end section -->

                            <div class="section">
                                <label class="field prepend-icon">
                                    <input type="email" name="emailaddress" id="emailaddress" class="gui-input" placeholder="Email address">
                                    <span class="field-icon"><i class="fa fa-envelope"></i></span> </label>
                            </div>
                            <!-- end section -->

                            <div class="section colm colm6">
                                <label class="field prepend-icon">
                                    <input type="tel" name="telephone" id="telephone" class="gui-input" placeholder="Telephone">
                                    <span class="field-icon"><i class="fa fa-phone-square"></i></span> </label>
                            </div>
                            <!-- end section -->

                            <div class="section">
                                <label class="field prepend-icon">
                                    <input type="text" name="sendersubject" id="sendersubject" class="gui-input" placeholder="Enter subjec">
                                    <span class="field-icon"><i class="fa fa-lightbulb-o"></i></span> </label>
                            </div>
                            <!-- end section -->

                            <div class="section">
                                <label class="field prepend-icon">
                                    <textarea class="gui-textarea" id="sendermessage" name="sendermessage" placeholder="Enter message"></textarea>
                                    <span class="field-icon"><i class="fa fa-comments"></i></span> <span class="input-hint"> <strong>Hint:</strong> Please enter between 80 - 300 characters.</span> </label>
                            </div>
                            <!-- end section -->

                            <!--<div class="section">
                            <div class="smart-widget sm-left sml-120">
                                <label class="field">
                                    <input type="text" name="captcha" id="captcha" class="gui-input sfcode" maxlength="6" placeholder="Enter CAPTCHA">
                                </label>
                                <label class="button captcode">
                                    <img src="php/captcha/captcha.php?<?php echo time(); ?>" id="captchax" alt="captcha">
                                    <span class="refresh-captcha"><i class="fa fa-refresh"></i></span>
                                </label>
                            </div> 
                        </div>-->

                            <div class="result"></div>
                            <!-- end .result  section -->

                        </div>
                        <!-- end .form-body section -->
                        <div class="form-footer">
                            <button type="submit" data-btntext-sending="Sending..." class="button btn-primary orange-2">Submit</button>
                            <button type="reset" class="button"> Cancel </button>
                        </div>
                        <!-- end .form-footer section -->
                    </form>
                </div>
                <!-- end .smart-forms section -->
            </div>
            <div class="col-md-4"> <br>
                <h4>Address Info</h4>
                Desa Tenga,Kec.Tenga kabupaten Minahasa Selatan <br>
                Telephone: +62 821-1264-9171<br>
                WhatsApp: +62 821-1264-9171<br>
                <br>
                E-mail: <a href="mailto:makaudistesa@gmail.com">makaudistesa@gmail.com</a><br>
                Website: <a href="<?= base_url() ?>">DesaTenga.id</a>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>

<?= $this->endSection(); ?>
<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<section class="sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-centered">
                <div class="text-box padding-4 border">
                    <div class="smart-forms smart-container wrap-3">
                        <h4 class="uppercase">Registration Form</h4>
                        <?= view('Myth\Auth\Views\_message_block') ?>

                        <form action="<?= url_to('register') ?>" method="post">
                            <?= csrf_field() ?>
                            <div>
                                <div class="spacer-t30 spacer-b30">
                                    <div class="tagline"><span> REGISTRATION </span></div><!-- .tagline -->
                                </div>

                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input type="text" name="username" id="username" class="gui-input" placeholder="Enter username">
                                        <span class="field-icon"><i class="fa fa-user"></i></span>
                                    </label>
                                </div><!-- end section -->

                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input type="text" name="email" id="email" class="gui-input" placeholder="Enter email or UserName">
                                        <span class="field-icon"><i class="fa fa-user"></i></span>
                                    </label>
                                </div><!-- end section -->

                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input type="password" name="password" id="password" class="gui-input" placeholder="Enter password">
                                        <span class="field-icon"><i class="fa fa-lock"></i></span>
                                    </label>
                                </div><!-- end section -->

                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input type="password" name="pass_confirm" id="password" class="gui-input" placeholder="Enter password Confirmation">
                                        <span class="field-icon"><i class="fa fa-lock"></i></span>
                                    </label>
                                </div><!-- end section -->
                            </div><!-- end .form-body section -->
                            <div class="form-footer">
                                <button type="submit" class="button btn-primary">Sign in</button>
                            </div><!-- end .form-footer section -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--end item-->
    </div>
</section>

<?= $this->endSection() ?>
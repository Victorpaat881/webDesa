<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<section class="sec-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-centered">
				<div class="text-box padding-4 border">
					<div class="smart-forms smart-container wrap-3">
						<h4 class="uppercase">Login Form</h4>
						<?= view('Myth\Auth\Views\_message_block') ?>

						<form action="<?= url_to('login') ?>" method="post">
							<?= csrf_field() ?>

							<div>
								<div class="spacer-t30 spacer-b30">
									<div class="tagline"><span> OR Login </span></div><!-- .tagline -->
								</div>

								<?php if ($config->validFields === ['email']) : ?>
									<div class="section">
										<label class="field prepend-icon">
											<input type="text" name="login" id="login" class="gui-input" placeholder="Enter username">
											<span class="field-icon"><i class="fa fa-user"></i></span>
										</label>
									</div><!-- end section -->
								<?php else : ?>
									<div class="section">
										<label class="field prepend-icon">
											<input type="text" name="login" id="login" class="gui-input" placeholder="Enter email or UserName">
											<span class="field-icon"><i class="fa fa-user"></i></span>
										</label>
									</div><!-- end section -->
								<?php endif; ?>

								<div class="section">
									<label class="field prepend-icon">
										<input type="password" name="password" id="password" class="gui-input" placeholder="Enter password">
										<span class="field-icon"><i class="fa fa-lock"></i></span>
									</label>
								</div><!-- end section -->

								<?php if ($config->allowRemembering) : ?>
									<div class="section">
										<label class="switch block">
											<input type="checkbox" name="remember" id="remember" checked="" <?php if (old('remember')) : ?> checked <?php endif ?>>
											<span class="switch-label" for="remember" data-on="YES" data-off="NO"></span>
											<span> Keep me logged in ?</span>
										</label>
									</div><!-- end section -->
								<?php endif; ?>


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
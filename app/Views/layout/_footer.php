<section class=" sec-padding section-orange-2">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-centered text-center">
                <h2 class=" uppercase section-title text-white">Artikel Desa Tenga</h2>
                <p class="text-white"></p>
                <br />
                <br />
                <a class="btn btn-border white-2 btn-large btn-round" href="#">Back To Top</a>
            </div>
        </div>
    </div>
</section>
<!--end section-->
<div class="clearfix"></div>

<section class="section-dark sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 clearfix">
                <div class="item-holder">
                    <h4 class="uppercase footer-title less-mar3">Recent Posts</h4>
                    <div class="footer-title-bottomstrip"></div>
                    <div class="clearfix"></div>
                    <?php for ($i = 0; $i < 2; $i++) : ?>
                        <div class="image-left"><img style="width: 80px;" src="<?= base_url() ?>assets/images/media/blognews.jpeg" alt="blog" /></div>
                        <div class="text-box-right">
                            <h5 class="text-white less-mar3"><a href="<?= base_url('home/blog/' . $latest_posts[$i]['post_id']) ?>"><?= $latest_posts[$i]['title'] ?></a></h5>
                            <p><?= date('M Y', strtotime($latest_posts[$i]['created_at'])) ?></p>
                            <div class="footer-post-info"><span>By <?= $latest_posts[$i]['author'] ?></span></div>
                        </div>
                        <?php if ($i == 0) : ?>
                            <div class="divider-line solid dark margin"></div>
                        <?php endif ?>
                    <?php endfor ?>
                </div>
            </div>
            <!--end item-->

            <div class="col-md-3 clearfix">
                <div class="item-holder">
                    <h4 class="uppercase footer-title less-mar3">Newsletter</h4>
                    <div class="clearfix"></div>
                    <div class="footer-title-bottomstrip"></div>
                    <div class="newsletter">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sit et justo amet. Suspendisse et justo.</p>
                        <br />
                        <form method="get" action="index.html">
                            <input class="email_input" name="samplees" id="samplees" value="E-mail Address" onFocus="if(this.value == 'E-mail Address') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'E-mail Address';}" type="text">
                            <input name="" value="Go" class="input_submit orange2" type="submit">
                        </form>
                    </div>
                    <div class="margin-top3"></div>
                    <ul class="social-icons-3 white">
                        <li><a class="twitter" href="https://twitter.com/codelayers"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.facebook.com/codelayers"><i class="fa fa-facebook"></i></a></li>

                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!--end item-->

            <div class="col-md-3 clearfix">
                <div class="item-holder">
                    <h4 class="uppercase footer-title less-mar3">Tentang Desa</h4>
                    <div class="clearfix"></div>
                    <div class="footer-title-bottomstrip"></div>
                    <ul class="usefull-links orange2">
                        <li><a href="#"><i class="fa fa-angle-right"></i> Home</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> Visi Misi Desa</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> Sejarah Desa</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> Fasilitas Desa</a></li>
                        <li class="last"><a href="#"><i class="fa fa-angle-right"></i> Organisasi Desa</a></li>
                    </ul>
                </div>
            </div>
            <!--end item-->

        </div>
    </div>
</section>
<!--end section-->
<div class="clearfix"></div>

<section class="section-copyrights sec-moreless-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <span>Copyright © 2023 <a href="https://1.envato.market/hasta-html-by-codelayers">hasta</a> By <a href="#">Desa Tenga</a> | All rights reserved.</span>
            </div>
        </div>
    </div>
</section>
<!--end section-->
<div class="clearfix"></div>

<a href="#" class="scrollup orange2"></a><!-- end scroll to top of the page-->
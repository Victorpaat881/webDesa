<?= $this->extend('layout/__layout'); ?>

<?= $this->section('content'); ?>

<section>
    <div class="header-inner two">
        <div class="inner text-center">
            <h4 class="title text-white uppercase">Desa Tenga</h4>
            <h5 class="text-white uppercase">Artikel Desa Tenga</h5>
        </div>
        <div class="overlay bg-opacity-5"></div>
        <img src="http://placehold.it/1920x800" alt="" class="img-responsive">
    </div>
</section>
<!--end section-->
<div class="clearfix"></div>
<section class="sec-padding">
    <div class="container">
        <div class="row">
            <?php foreach ($posts as $key => $post) : ?>
                <div class="col-md-4 bmargin">
                    <div class="blog-holder-12">
                        <div class="image-holder">
                            <div class="overlay bg-opacity-1">
                                <div class="post-date-box three"> <?= date('d', strtotime($post['created_at'])) ?> <span><?= date('Y, M', strtotime($post['created_at'])) ?></span> </div>
                                <!-- <div class="post-date-box three four"> 25 <span>May, 2020</span> </div> -->
                            </div>
                            <img class="img-responsive" alt="" src="<?= ($post['banner'] == '') ? 'http://placehold.it/1000x800' : $post['banner'] ?>">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <br>
                    <a href="#">
                        <h4 class="less-mar1"><?= $post['title'] ?></h4>
                    </a>
                    <div class="blog-post-info">
                        <span><i class="fa fa-user"></i> By <?= $post['author'] ?></span>
                        <!-- <span><i class="fa fa-comments-o"></i> 0 Comments</span>  -->
                    </div>
                    <br>
                    <div style="max-height: 200px; overflow:auto">
                        <?= $post['content'] ?>
                    </div>
                    <br>
                    <a class="btn btn-border light btn-round btn-small" href="<?= base_url('home/blog/' . $post['post_id']) ?>">Read more</a>
                </div>
                <!--end item-->
                <?php if (($key + 1) % 3 == 0) : ?>
                    <div class="clearfix"></div>
                    <div class="col-divider-margin-4"></div>
                <?php endif ?>
            <?php endforeach ?>
            <!-- <br>
            <div class=" divider-line solid light margin opacity-7"></div>
            <div class="col-md-12">

                <ul class="blog-pagenation">
                    <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li><a class="active" href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>

            </div> -->

        </div>
    </div>
</section>
<!--end section-->
<div class="clearfix"></div>


<?= $this->endSection(); ?>
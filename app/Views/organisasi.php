<?= $this->extend('layout/__layout'); ?>

<?= $this->section('content'); ?>
<section class="sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12 bmargin">
                <div class="col-md-12 col-sm-12 col-xs-12 nopadding bmargin">
                    <h5>Latest Posts</h5>
                    <div class="clearfix"></div>
                    <?php foreach ($latest_posts as $key => $latest_post) : ?>
                        <div class="sidebar-posts">
                            <div class="image-left"><img style="width:80px" src="<?= base_url() ?>assets/images/media/blognews.jpeg" alt=""></div>
                            <div class="text-box-right">
                                <h6 class="less-mar3 nopadding"><a href="<?= base_url('home/blog/' . $latest_post['post_id']) ?>"><?= $latest_post['title'] ?></a></h6>
                                <p>Read More</p>
                                <div class="post-info"> <span>By <?= $latest_post['author'] ?></span><span> <?= date('M Y', strtotime($latest_post['created_at'])) ?></span> </div>
                            </div>
                        </div>
                        <!--end item-->
                    <?php endforeach ?>
                </div>
                <!--end sidebar box-->

                <div class="clearfix"></div>
                <br>
                <div class="col-md-12 col-sm-12 col-xs-12 nopadding bmargin">
                    <h5>Tags</h5>
                    <div class="clearfix"></div>
                    <ul class="tags-2">
                        <?php foreach ($tags as $tag) : ?>
                            <li><a class="<?= in_array($tag['tag_id'], $post_tags ?? []) ? 'active' : '' ?>" href="#"><?= $tag['name'] ?></a></li>
                        <?php endforeach ?>
                    </ul>
                </div>
                <!--end sidebar box-->
                <!--end sidebar box-->

            </div>
            <!--end left column-->

            <div class="col-md-8 col-sm-12 col-xs-12 bmargin"> <br>
                <img src="<?= base_url() ?>assets/images/dokumentasi/organisasi.jpg" alt="struktur Organisasi" class="w-100 image-responsive">
            </div>
            <!--end right column-->

        </div>
    </div>
</section>
<div class="clearfix"></div>

<?= $this->endSection(); ?>
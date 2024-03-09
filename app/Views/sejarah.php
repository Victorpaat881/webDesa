<?= $this->extend('layout/__layout'); ?>

<?= $this->section('content'); ?>

<!-- <div class="pagenation-holder">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Left Sidebar</h3>
            </div>
            <div class="col-md-6 text-right">
                <div class="pagenation_links"><a href="index.html">Home</a><i> / </i> <a href="index.html">Pages</a> <i> / </i> Left Sidebar</div>
            </div>
        </div>
    </div>
</div> -->
<div class="clearfix"></div>
<section class="sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12 bmargin"> <br>
                <h3>Sejarah Desa</h3>
                <p>
                    Tenga adalah sebuah kecamatan yang berada di Kabupaten Minahasa Selatan, provinsi Sulawesi Utara, Indonesia. Penduduk kecamatan ini berjumlah 19.093 (2020), dengan luas wilayah 173,50 km², dan kepadatan penduduk 110,05 jiwa/km².
                </p>
                <h3> Batas-batas Wilayah</h3>
                <ul>
                    <li>
                        <strong>Sebelah Utara</strong> : Laut Sulawesi
                    </li>
                    <li>
                        <strong>Sebelah Timur</strong> : Kecamatan Motoling Barat dan Kumelembuai
                    </li>
                    <li>
                        <strong>Sebelah Selatan</strong> : Kecamatan Amurang Barat
                    </li>
                    <li>
                        <strong>Sebelah Barat</strong> : Kecamatan Sinonsayang
                    </li>
                </ul>
                <h3>Pemerintahan</h3>
                <p>
                    Kecamatan Tenga terdiri dari 20 desa, dimana untuk tingkat desa dipimpin oleh seorang kepala desa (hukum tua) yang dipilih langsung oleh rakyat. Semua wilayah di kecamatan Tenga berstatus desa, dan masing-masing desa dibagi menjadi beberapa Satuan Lingkungan Setempat (SLS) yang diberi nama Jaga atau Lingkungan dan masing-masing jaga atau lingkungan dipimpin oleh seorang kepala jaga atau disebut juga kepala lingkungan.
                </p>
                <h3>
                    Demografi
                </h3>
                <p>
                    Sementara itu, keberagaman agama dan budaya menjadi bagian dari masyarakat kecamatan Tenga. Berdasarkan data Badan Pusat Statistik kabupaten Minahasa Selatan tahun 2019 mencatat bahwa 80,33% penduduknya memeluk agama Kristen, dimana Protestan 76,54% dan Katolik 3,79%, kemudian yang memeluk agama Islam berjumlah 19,42%, Konghucu 0,24% dan Hindu 0,01%. Untuk sarana rumah ibadah, terdapat 39 bangunan gereja Protestan, 3 bangunan gereja Katolik dan 1 bangunan Masjid.
                </p>
            </div>
            <!--end left column-->



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
            </div>
        </div>
</section>
<div class="clearfix"></div>

<?= $this->endSection(); ?>
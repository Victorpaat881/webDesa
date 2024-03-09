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
                <h2>Visi Desa</h2>
                <p>Visi desa adalah cita-cita bersama yang mengarah pada pengembangan berkelanjutan, pemberdayaan masyarakat, dan peningkatan kualitas hidup melalui optimalisasi sumber daya lokal, pembangunan infrastruktur yang efektif, serta pemeliharaan kearifan lokal untuk menciptakan lingkungan desa yang dinamis dan harmonis.</p>
                <br>
                <br>
                <h2>Misi Desa</h2>
                Misi desa bertumpu pada:
                <ul style="list-style-type:disclosure-closed">
                    <li>
                        <p>
                            Pengembangan Berkelanjutan: Melakukan upaya pemeliharaan dan pemanfaatan sumber daya alam secara bijak, serta merancang kebijakan pembangunan yang berkelanjutan untuk meningkatkan kesejahteraan masyarakat.
                        </p>
                    </li>
                    <li>
                        <p>
                            Pemberdayaan Masyarakat: Memberdayakan penduduk desa melalui program-program pelatihan, pendidikan, dan pelibatan aktif dalam pengambilan keputusan lokal untuk menciptakan lingkungan yang inklusif dan partisipatif.
                        </p>
                    </li>
                    <li>
                        <p>
                            Optimalisasi Sumber Daya Lokal: Menggali potensi lokal seperti pertanian, kerajinan, dan kearifan lokal sebagai basis ekonomi yang kuat untuk meningkatkan taraf hidup masyarakat.
                        </p>
                    </li>
                    <li>
                        <p>
                            Pembangunan Infrastruktur Efektif: Menyusun rencana pembangunan infrastruktur yang tepat guna dan efisien untuk mendukung konektivitas, layanan kesehatan, dan pendidikan guna mendukung perkembangan desa secara menyeluruh.
                        </p>
                    </li>
                    <li>
                        <p>
                            Pemeliharaan Kearifan Lokal: Menjaga dan menghormati nilai-nilai budaya serta kearifan lokal sebagai bagian integral dari identitas desa, agar kekayaan warisan budaya tetap terpelihara.
                        </p>
                    </li>
                </ul>
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
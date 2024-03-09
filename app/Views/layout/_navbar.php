<div id="header">
    <div class="container">

        <div class="navbar navbar-default yamm">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target="#navbar-collapse-grid" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>

            <div id="navbar-collapse-grid" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown"><a href="<?= base_url() ?>" class="dropdown-toggle <?= $menu == 'home' ? 'active' : '' ?>">Home</a></li>
                    <?php if (user()) : ?>
                        <li class="dropdown"><a href="#" class="dropdown-toggle <?= $menu == 'admin' ? 'active' : '' ?>">Admin</a>
                            <ul class="dropdown-menu two" role="menu">
                                <li> <a href="<?= base_url('admin/posts') ?>">Artikel</a></li>
                                <li> <a href="<?= base_url('admin/category') ?>">Kategori</a></li>
                                <li> <a href="<?= base_url('admin/tag') ?>">Label</a></li>
                                <li> <a href="<?= base_url('admin/laporan') ?>">Laporan Desa</a></li>
                                <?php if (user()->username == 'superuser') : ?>
                                    <li> <a href="<?= base_url('admin/user') ?>">User</a></li>
                                    <li> <a href="<?= base_url('admin/chatbot') ?>">Chatbot</a></li>
                                <?php endif ?>
                            </ul>
                        </li>
                    <?php endif ?>
                    <li class="dropdown"><a href="#" class="dropdown-toggle <?= $menu == 'about' ? 'active' : '' ?>">Tentang Desa</a>
                        <ul class="dropdown-menu two" role="menu">
                            <li> <a href="<?= base_url('home/visimisi') ?>">Visi Misi</a> </li>
                            <li> <a href="<?= base_url('home/sejarah') ?>">Sejarah Desa</a> </li>
                            <li> <a href="<?= base_url('home/fasilitas') ?>">Fasilitas Desa</a> </li>
                            <li> <a href="<?= base_url('home/organisasi') ?>">Perangkat Desa</a> </li>
                            <li> <a href="<?= base_url('home/kependudukan') ?>">Data Kependudukan Desa</a> </li>
                        </ul>
                    </li>
                    <li class="dropdown"> <a href="<?= base_url('home/blog') ?>" class="dropdown-toggle <?= $menu == 'blog' ? 'active' : '' ?>">Blog</a></li>
                    <li class="dropdown"> <a href="<?= base_url('home/contact') ?>" class="dropdown-toggle <?= $menu == 'contact' ? 'active' : '' ?>">Contact</a></li>
                </ul>
                <?php if (user()) : ?>
                    <a class="btn btn-orange-2 dark btn-xround pull-right top-margin " href="<?= base_url() ?>">Dashboard</a>
                <?php else : ?>
                    <a class="btn btn-orange-2 dark btn-xround pull-right top-margin " href="<?= base_url('login') ?>">Login !</a>
                <?php endif ?>
            </div>
        </div>
    </div>
</div>
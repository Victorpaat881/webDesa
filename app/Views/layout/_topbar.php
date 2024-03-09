<div class="topbar light topbar-padding">
    <div class="container">
        <a href="index.html" class="logo two toppadd">
            <!-- <img src="<?= base_url() ?>assets/images/logo.png" alt="Hasta Logo" /> -->
            <h1 style="font-family:'Courier New', Courier, monospace; margin:0; font-weight:bold">DESA TENGA</h1>
        </a>
        <ul class="toplist toppadding">
            <li>Customer Care</li>
            <li class="lineright">(888) 123-4567</li>
            <?php if (!user()) : ?>
                <li class="lineright"><a href="<?= base_url('login') ?>">Login</a></li>
                <li class="lineright"><a href="<?= base_url('register') ?>">Register</a></li>
            <?php else : ?>
                <li class="lineright"><a href="<?= base_url('logout') ?>">Logout</a></li>
            <?php endif ?>
            <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
            <li class="last"><a href="#"><i class="fa fa-linkedin"></i></a></li>
        </ul>
    </div>
</div>
<div class="clearfix"></div>
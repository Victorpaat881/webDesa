<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<!--<![endif]-->
<!--<![endif]-->
<html lang="en">

<head>
    <?= $this->include('layout/_head'); ?>
    <?= $this->renderSection('pagecss') ?>
    <?= $this->include('layout/_chatbotcss'); ?>

</head>

<body>
    <div class="site_wrapper">
        <?= $this->include('layout/_topbar'); ?>
        <?= $this->include('layout/_navbar'); ?>

        <?= $this->renderSection('content') ?>

        <?= $this->include('layout/_chatbotbody'); ?>
        <?= $this->include('layout/_footer'); ?>
    </div>
    <!--end sitewraper-->

    <?= $this->include('layout/_scriptfile'); ?>
    <?= $this->include('layout/_chatbotscript'); ?>
    <?= $this->renderSection('pagescript') ?>
</body>

</html>
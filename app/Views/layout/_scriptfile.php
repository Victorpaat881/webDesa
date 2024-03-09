  <!-- ========== Js files ========== -->

  <script type="text/javascript" src="<?= base_url() ?>assets/js/universal/jquery.js"></script>
  <script src="<?= base_url() ?>assets/js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/js/mainmenu/customeUI.js"></script>
  <script src="<?= base_url() ?>assets/js/mainmenu/jquery.sticky.js"></script>
  <script src="<?= base_url() ?>assets/js/masterslider/masterslider.min.js"></script>
  <script type="text/javascript">
      (function($) {
          "use strict";
          var slider = new MasterSlider();
          // adds Arrows navigation control to the slider.
          slider.control('arrows');
          slider.control('bullets');

          slider.setup('masterslider', {
              width: 1600, // slider standard width
              height: 650, // slider standard height
              space: 0,
              speed: 45,
              layout: 'fullwidth',
              loop: true,
              preload: 0,
              autoplay: true,
              view: "parallaxMask"
          });
      })(jQuery);
  </script>

  <script type="text/javascript" src="<?= base_url() ?>assets/js/cubeportfolio/jquery.cubeportfolio.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>assets/js/cubeportfolio/main.js"></script>
  <script src="<?= base_url() ?>assets/js/owl-carousel/owl.carousel.js"></script>
  <!-- <script src="<?= base_url() ?>assets/js/owl-carousel/custom.js"></script> -->
  <script src="<?= base_url() ?>assets/js/scrolltotop/totop.js"></script>

  <script src="<?= base_url() ?>assets/js/scripts/functions.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/js/quill/quill.js" type="text/javascript"></script>
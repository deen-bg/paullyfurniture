

<body>
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left"  >
  </section>
  <main id="main">
    <div class="row">
      <?php 
        foreach($categories_recom as $val_rec) : ?>
          <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="hover01 column">
              <figure>
                <a href="<?=base_url('category/'.$val_rec['id'].'/?slug='.$val_rec['name']);?>">
                  <img src="<?=base_url('assets/images/category/'.$val_rec['img_cover']);?>" id="about-product-banner" class="img-fluid " style="width: 100%;">
                  <p class="relatedtxt"><?=$val_rec['name'];?></p>
                </a>
              </figure>
            </div>
          </div>
      <?php endforeach; ?>
    </div>
    <div class="row">
      <?php 
        foreach($categories_lists as $val_active) : ?>
          <div class="col-12 col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
            <div class="hover01 column">
              <figure>
                <a href="<?=base_url('category/'.$val_active['id'].'/?slug='.$val_active['name']);?>">
                  <img src="<?=base_url('assets/images/category/'.$val_active['img_cover']);?>" id="about-product-banner" class="img-fluid " style="width: 100%;">
                  <p class="relatedtxt"><?=$val_active['name'];?></p>
                </a>
              </figure>
            </div>
          </div>
      <?php endforeach; ?>
    </div>
<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-sm-12 col-lg-12 col-md-12 col-xl-12">
      <a href="https://liff.line.me/1645278921-kWRPP32q/?accountId=338mkkak" target="_blank">
        <img src="<?=base_url('assets/img/banner/bannernew.png');?>" style="width: 100%;">
      </a>
      </div>
    </div>
  </div>
</section>

  <section id="contact"  >
    <div class="container wow fadeInUp">
      <div data-aos="fade-up">  
        <h1  class="text-center " id="contactus">CONTACT US</h1>
          <div class="row ">
            <div class="col-12 col-sm-12 col-lg-6 col-md-6 col-xl-6  wow fadeInUp ">
              <div align="center">
                <ul id="footer-11" target="_blank">
                  <a href="https://liff.line.me/1645278921-kWRPP32q/?accountId=338mkkak">
                    <img src="<?=base_url('assets/img/contact/qr.png');?>"  id="contactus-qr" class="mb-5" >
                </a>
                <a href="https://liff.line.me/1645278921-kWRPP32q/?accountId=338mkkak">
                  <img src="<?=base_url('assets/img/contact/buy.png');?>"  id="contactus-qr" class="mb-5" >
                </a>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-lg-6 col-md-6 col-xl-6 mb-2 mt-2 wow fadeInUp ">
              <div id="footer-contact-1">
                  <a href="tel:0814591408" target="_blank">
                    <h4  id="footer-1" style="color: black;"><img src="<?=base_url('assets/img/contact/iconpually-08.png');?>" style="width: 7%; ">&nbsp;&nbsp;&nbsp; 0814591408</h4>
                    </a>
                    <a href="https://liff.line.me/1645278921-kWRPP32q/?accountId=338mkkak" target="_blank">
                      <h4 id="footer-1"style="color: black;"  ><img src="<?=base_url('assets/img/contact/iconpually-09.png');?>" style="width: 7%; ">&nbsp;&nbsp;&nbsp; @paullyfurniture </h4>
                    </a>
                    <a href="https://www.facebook.com/Paullyfurniture/" target="_blank">
                      <h4  id="footer-1" style="color: black;"><img src="<?=base_url('assets/img/contact/iconpually-10.png');?>" style="width: 7%;  ">&nbsp;&nbsp;&nbsp; paullyfurniture</h4>
                    </a>
                    <a href="https://www.instagram.com/paullyfurniture/?hl=th" target="_blank">
                      <h4  id="footer-1"style="color: black;"><img src="<?=base_url('assets/img/contact/iconpually-12.png');?>" style="width: 7%;">&nbsp;&nbsp;&nbsp; paullyfurniture</h4>
                    </a>
                    <a href="mailto:paullyfur1418@gmail.com" target="_blank">
                      <h4  id="footer-1"style="color: black;"><img src="<?=base_url('assets/img/contact/iconpually-11.png');?>" style="width: 7%; ">&nbsp;&nbsp;&nbsp; paullyfur1418@gmail.com</h4>
                   </a>
                </a>
          </div>
        </div>
      </div>
    </div>
  </section>
 
  <script src="<?=base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
  <script src="<?=base_url('assets/vendor/glightbox/js/glightbox.min.js');?>"></script>
  <script src="<?=base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js');?>"></script>
  <script src="<?=base_url('assets/vendor/php-email-form/validate.js');?>"></script>
  <script src="<?=base_url('assets/vendor/purecounter/purecounter.js');?>"></script>
  <script src="<?=base_url('assets/vendor/swiper/swiper-bundle.min.js');?>"></script>
  <script src="<?=base_url('assets/vendor/waypoints/noframework.waypoints.js');?>"></script>

  <script src=" <?=base_url('assets/lib/aos/aos.js');?>"></script> 
  <script src=" <?=base_url('assets/lib/wow/wow.min.js');?>"></script> 
  <script src="<?=base_url('assets/js/main.js');?>"></script>

  <script>
    AOS.init();
    new WOW().init();
  </script>
</body>
</html>
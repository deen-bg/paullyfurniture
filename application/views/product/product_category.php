
<body>
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="container text-center text-md-left"  >
    </section>
    <section class=" pt-0 pb-0 mt-3" id="product" >
        <div class="container" id="product">
            <div class="row">
                <div data-aos="fade-up"data-aos-duration="1000">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3 mt-5 mb-3 ">
                        <h3 id="detail-sofa" style="margin-top: 0px; text-align: center;" ><?=$this->security->xss_clean($this->input->get('slug', TRUE));?></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container mb-3">
        <div class="row">
            <?php
                if($nums > 0) : 
                    foreach($product_groups as $val_protype) :
                        echo '<div class="col-12 col-sm-12 col-lg-4 col-md-4 col-xl-4 mb-3 mb-3">';
                            echo '<div class="card" style="width:100%;">';
                                echo '<a href="'.base_url('detail/'.$val_protype['p_id'].'/?slug='.$val_protype['type_name'].'&name='.$val_protype['p_name']).'">';
                                    echo '<img src="'.base_url('assets/images/product/cover/'.$val_protype['p_id'].'/'.$val_protype['img_cover']).'" alt="card one" class="card-img-top">';
                                    echo '<div class="card-body">';
                                        echo '<h5 class="card-title">'.$val_protype['p_name'].'</h5>';
                                        echo '<p class="card-text">'.number_format($val_protype['price'],2).'</p>';
                                    echo '</div>';
                                echo '</a>';
                            echo '</div>';
                        echo '</div>';
                    endforeach;
                else : 
                    echo '<div class="col-12 col-sm-12 col-lg-12 col-md-12 col-xl-12 mb-3 mb-3">';
                        echo '<h3 align="center">ไม่พบสินค้า</h3>';
                        echo '<a href="'.base_url('home').'"><h3 align="center">กลับสู่หน้าหลัก</h3></a>';
                    echo '</div>';
                endif;
            ?>
        </div>
    </div>

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
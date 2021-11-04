
<body>
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center mt-5">
        <div class="container text-center text-md-left"  >
    </section>
    <section class=" pt-0 pb-0 mt-5 pt-5" id="product" >
        <div class="container" id="product"></div>
    </section>
    <section style="padding-bottom: 0px;padding-top: 0px;">
        <div class="container">
            <div data-aos="fade-up"data-aos-duration="1000">
                <div class="row">
                    <div class="col-12 col-sm-12 col-lg-6 col-md-6 col-xl-6 mb-3 mb-3">
                        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                            <div class="carousel-inner">
                                <?php 
                                    $i=1;
                                    if($nums > 0) : 
                                        foreach($albums_thumbnails as $album) : 
                                            if($i ==1) : 
                                                $active ='active';
                                                echo '<div class="carousel-item '.$active.'">';
                                                    echo '<img src="'.base_url('assets/images/product/'.$album['product_id'].'/'.$album['img_name']).'" class="d-block w-100" alt="'.$album['img_name'].'">';
                                                echo '</div>';
                                            else : 
                                                $active ='';
                                                echo '<div class="carousel-item '.$active.'">';
                                                    echo '<img src="'.base_url('assets/images/product/'.$album['product_id'].'/'.$album['img_name']).'" class="d-block w-100" alt="'.$album['img_name'].'">';
                                                echo '</div>';
                                            endif;
                                            $i++;
                                        endforeach;
                                    else : 
                                        if($productdescs[0]['img_cover'] !='') : 
                                            echo '<div class="carousel-item active">';
                                                echo '<img src="'.base_url('assets/images/product/cover/'.$productdescs[0]['id'].'/'.$productdescs[0]['img_cover']).'" class="d-block w-100" alt="'.$productdescs[0]['img_cover'].'">';
                                            echo '</div>';
                                        else : 
                                            echo '<div class="carousel-item active">';
                                                echo '<img src="'.base_url('assets/images/product/noimage.jpg').'" class="d-block w-100" alt="noimage">';
                                            echo '</div>';
                                        endif;
                                    endif; 
                                ?>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden"></span>
                            </button>
                        </div>
                    </div>
                    <!-- details -->
                    <div class="col-12 col-sm-12 col-lg-6 col-md-6 col-xl-6 mb-3">
                        <div data-aos="fade-up"data-aos-duration="1000">
                            <h3 class="detail-text"  id="detail-text-product" style="margin-top: 0px; text-align: center;"><?=$productdescs[0]['name'];?></h3>
                            <p  id="product-detail">
                                <?=$productdescs[0]['dsc'];?>
                            </p>
                            <div align="center">
                                <h3 id="detail-text-product">สนใจติดต่อ</h3>
                            </div>
                        </div>
                        <div align="center">
                            <a href="https://www.facebook.com/Paullyfurniture/" target="_blank">
                                <button type="button" class="btn btn-primary" id="btn-detail">FACEBOOK</button>
                            </a>
                            <a href="https://liff.line.me/1645278921-kWRPP32q/?accountId=338mkkak" target="_blank">
                                <button type="button" class="btn btn-success" id="btn-detail">LINE</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=" pt-0 pb-0 mt-3" id="product" >
        <div class="container" id="product">
            <div class="row">
                <div data-aos="fade-up"data-aos-duration="1000">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3 mt-5 mb-3 ">
                        <h3 id="detail-text-product" style="margin-top: 0px; text-align: center; color: #a1a1a1;" >สินค้าที่เกี่ยวข้อง</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div data-aos="fade-up"data-aos-duration="1000">
        <div class="container mb-3">
            <div class="row">
                <?php 
                    foreach($product_relateds as $related) : 
                        echo '<div class="col-12 col-sm-12 col-lg-3 col-md-3 col-xl-3 mb-3 mb-3">';
                            echo '<div class="card" style="width:100%;">';
                                echo '<a href="'.base_url('detail/'.$related['p_id'].'/?slug='.$related['type_name'].'&name='.$related['p_name']).'">';
                                    echo '<img src="'.base_url('assets/images/product/cover/'.$related['p_id'].'/'.$related['img_cover']).'" alt="'.$related['img_cover'].'" class="card-img-top">';
                                    echo '<div class="card-body">';
                                        echo '<h5 class="card-title">'.$related['p_name'].'</h5>';
                                        echo '<p class="card-text">ราคา '.number_format($related['price'],2).'</p>';
                                    echo '</div>';
                                echo '</a>';
                            echo '</div>';
                        echo '</div>';
                    endforeach;
                ?>
            </div>
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
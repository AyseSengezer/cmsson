<section class="main-container">
    <div class="container">
        <div class="row">

            <!-- main start -->
            <!-- ================ -->
            <div class="main col-md-12">

                <!-- page-title start -->
                <!-- ================ -->
                <h1 class="page-title">Resim Galerileri</h1>
                <div class="separator-2"></div>
                <div class="row">

                    <?php foreach ($galleries as $gallery) { ?>
                        <!-- col-sm-4 büyük ekran ok.. col-sm-6 küçük ekran ok.. -->
                        <!-- hidden ve visible kullanılarak yapılacak -->
                        <div class="col-sm-6 display1">
                            <div class="image-box shadow text-center mb-20">
                                <div class="overlay-container overlay-visible">
                                    <img src="<?php echo get_picture("galleries_v/images/$gallery->folder_name", get_gallery_cover_image($gallery->folder_name), "364x216"); ?>" alt="<?php echo $gallery->title; ?>">
                                    <a href="<?php echo base_url("fotograf-galerisi/$gallery->url"); ?>" class="overlay-link"><i class="fa fa-link"></i></a>
                                    <div class="hidden-xs">
                                        <div class="text">
                                            <p class="lead margin-clear">
                                                <?php echo $gallery->title; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 display2">
                            <div class="image-box shadow text-center mb-20">
                                <div class="overlay-container overlay-visible">
                                    <img src="<?php echo get_picture("galleries_v/images/$gallery->folder_name", get_gallery_cover_image($gallery->folder_name), "364x216"); ?>" alt="<?php echo $gallery->title; ?>">
                                    <a href="<?php echo base_url("fotograf-galerisi/$gallery->url"); ?>" class="overlay-link"><i class="fa fa-link"></i></a>
                                    <div class="">
                                        <div class="text">
                                            <p class="lead margin-clear">
                                                <?php echo $gallery->title; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</section>
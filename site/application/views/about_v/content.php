<?php $image = get_image();
// print_r($image);
// die();
?>


<!-- banner start -->
<!-- ================ -->
<div class="banner dark-translucent-bg" style="background-image:url('<?php echo base_url("assets/images"); ?>/b/4.jpg'); background-position: 50% 27%; min-height:350px !important;">
    <!-- breadcrumb start -->
    <!-- ================ -->
    <!--    <div class="breadcrumb-container">-->
    <!--        <div class="container">-->
    <!--            <ol class="breadcrumb">-->
    <!--                <li><i class="fa fa-home pr-10"></i><a class="link-dark" href="index.html">Home</a></li>-->
    <!--                <li class="active">Page About</li>-->
    <!--            </ol>-->
    <!--        </div>-->
    <!--    </div>-->
    <!-- breadcrumb end -->

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center col-md-offset-2 pv-20">
                <h3 class="title logo-font object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100"><?php echo $settings->company_name; ?></h3>
                <div class="separator object-non-visible mt-10" data-animation-effect="fadeIn" data-effect-delay="100"></div>
                <p class="text-center object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">
                    <?php echo character_limiter(strip_tags($settings->about_us), 150); ?>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- banner end -->

<!-- main-container start -->
<!-- ================ -->
<section class="main-container padding-bottom-clear">

    <div class="container">
        <div class="row">

            <!-- main start -->
            <!-- ================ -->
            <div class="main col-md-6">
                <h3 class="title">Who <strong>Hakkımızda</strong></h3>
                <div class="separator-2"></div>
                <div class="row">
                    <div class="col-md-12">
                        <p>
                            <?php echo $settings->about_us; ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="owl-carousel content-slider-with-controls">
                    <?php foreach ($image as $slideimage) { ?>
                        <div class="overlay-container overlay-visible">

                            <img src="<?php echo get_picture("galleries_v/images/isyeri-cekimleri", $slideimage->url, "364x216"); ?>" alt="">
                            <a href="<?php echo get_picture("galleries_v/images/isyeri-cekimleri", $slideimage->url, "851x606"); ?>" class="overlay-link  popup-img">
                                <i class="fa fa-plus"></i>
                            </a>
                            <div class="overlay-bottom hidden-sm-down">
                                <div class="text">
                                    <h3 class="title">Stüdyodan resimler</h3>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <!-- main end -->

        </div>
    </div>

    <!-- section start -->
    <!-- ================ -->
    <div class="section light-gray-bg">
        <div class="container">
            <h3>Neden bizi <strong>seçmelisiniz</strong></h3>
            <div class="separator-2"></div>
            <div class="row">
                <!-- accordion start -->
                <!-- ================ -->
                <div class="col-md-6">
                    <div class="panel-group collapse-style-1" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                        <i class="fa fa-rocket pr-10"></i>Misyon
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <?php echo strip_tags($settings->mission); ?>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">
                                        <i class="fa fa-leaf pr-10"></i>Vizyon
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <?php echo strip_tags($settings->vision); ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- accordion end -->
            </div>
            <!-- clients start -->
        </div>
    </div>
    <!-- section end -->

</section>
<!-- main-container end -->
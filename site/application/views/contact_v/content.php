<?php $settings = get_settings(); ?>

<!-- banner start -->
<!-- ================ -->
<div class="banner dark-translucent-bg" style="background-image:url('<?php echo base_url("assets/images");?>/b/2.jpg'); background-position: 50% 30%;">
    <div class="container">
        <div class="row justify-content-lg-center">
            <div class="col-lg-8 text-center pv-20">
                <h1 class="page-title text-center">Bize Ulaşın</h1>
                <div class="separator"></div>
                <p class="lead text-center">
                    Bize ulaşmak için aşağıdaki kanallardan herhangi birini kullanabilirsiniz
                </p>
                <ul class="list-inline mb-20 text-center">
                    <li class="list-inline-item"><i class="text-default fa fa-map-marker pr-2"></i><?php echo strip_tags($settings->address); ?></li>
                    <li class="list-inline-item"><a href="tel:+00 1234567890" class="link-dark"><i class="text-default fa fa-phone pl-10 pr-2"></i><?php echo $settings->phone_1; ?></a></li>
                    <li class="list-inline-item"><a href="mailto:info@theproject.com" class="link-dark"><i class="text-default fa fa-envelope-o pl-10 pr-2"></i><?php echo $settings->email;?></a></li>
                </ul>
               
                <div class="separator"></div>
                <ul class="social-links circle animated-effect-1 margin-clear text-center space-bottom" style="display:inline-block !important;">
                    <?php if($settings->facebook) { ?>
                        <li class="facebook"><a target="_blank" href="<?php echo $settings->facebook; ?>"><i class="fa fa-facebook"></i></a></li>
                    <?php } ?>

                    <?php if($settings->twitter) { ?>
                        <li class="twitter"><a target="_blank" href="<?php echo $settings->twitter; ?>"><i class="fa fa-twitter"></i></a></li>
                    <?php } ?>
                    <?php if($settings->instagram) { ?>
                        <li class="instagram"><a target="_blank" href="<?php echo $settings->instagram; ?>"><i class="fa fa-instagram"></i></a></li>
                    <?php } ?>
                    <?php if($settings->linkedin) { ?>
                        <li class="linkedin"><a target="_blank" href="<?php echo $settings->linkedin; ?>"><i class="fa fa-linkedin"></i></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- banner end -->

<!-- main-container start -->
<!-- ================ -->
<section class="main-container">

    <div class="container">
        <div class="row">

            <!-- main start -->
            <!-- ================ -->
            <div class="main col-md-12 space-bottom">
                <h2 class="title">Bize yazın</h2>
                <div class="row">
                    <div class="col-md-6">

                        <!-- <p>Fiyat teklifi almak için aşağıdaki formu kullanabilirsiniz..</p>
                        <div class="alert alert-success hidden" id="MessageSent">
                           Mesaj başarılı bir şekil bize ulaştı.
                        </div>

                        <div class="alert alert-danger hidden" id="MessageNotSent">
                           Mesaj gönderilirken bir hata oluştu! Lütfen tekrar deneyiniz..
                        </div> -->
                        
                        <div class="contact-form">
                            <form method="post" action="<?php echo base_url("mesaj-gonder"); ?>
                            " class="margin-clear" role="form">
                                <div class="form-group has-feedback">
                                    <label for="name">Ad-Soyad*</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="">
                                    <i class="fa fa-user form-control-feedback"></i>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="email">E-Posta*</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="">
                                    <i class="fa fa-envelope form-control-feedback"></i>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="subject">Konu*</label>
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="">
                                    <i class="fa fa-navicon form-control-feedback"></i>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="message">Mesajınız*</label>
                                    <textarea class="form-control" rows="6" id="message" name="message" placeholder=""></textarea>
                                    <i class="fa fa-pencil form-control-feedback"></i>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <?php echo $captcha["image"]; ?>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group has-feedback">
                                            <input type="text" class="form-control" id="captcha" name="captcha" placeholder="Doğrulama kodu..">
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

                                <button type="submit"  class="submit-button btn btn-default">Gönder</button>
                                
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6" style="display:inline !important;" >
                        <div id="map-canvas" ></div>
                    </div>
                </div>
            </div>
            <!-- main end -->
        </div>
    </div>
</section>
<!-- main-container end -->

<!-- section start -->
<!-- ================ -->

<div class="clearfix"></div>
<?php $settings = get_settings(); ?>

<div class="header-container">
  <!-- header start -->
  <!-- classes:  -->
  <!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
  <!-- "fixed-desktop": enables fixed navigation only for desktop devices e.g. class="header fixed fixed-desktop clearfix" -->
  <!-- "fixed-all": enables fixed navigation only for all devices desktop and mobile e.g. class="header fixed fixed-desktop clearfix" -->
  <!-- "dark": dark version of header e.g. class="header dark clearfix" -->
  <!-- "centered": mandatory class for the centered logo layout -->
  <!-- ================ -->
  <header class="header dark fixed clearfix">
    <div class="container">
      <div class="row">
        <div class="col-md-auto hidden-md-down pl-3">
          <!-- header-first start -->
          <!-- ================ -->
          <div class="header-first clearfix">

            <!-- logo -->
            <div id="logo" class="logo">
              <a href="<?php echo base_url(""); ?>"><img id="logo_img" src="<?php echo base_url("assets/images"); ?>/logo_purple.png" alt="The Project"></a>
            </div>

            <!-- name-and-slogan -->
            <div class="site-slogan">
              Tel:<?php echo $settings->phone_1; ?> Email:<?php echo $settings->email; ?>

            </div>

          </div>
          <!-- header-first end -->

        </div>
        <div class="col-lg-8">

          <!-- header-second start -->
          <!-- ================ -->
          <div class="header-second clearfix">

            <!-- main-navigation start -->
            <!-- classes: -->
            <!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
            <!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
            <!-- ================ -->
            <div class="main-navigation animated with-dropdown-buttons">
              <nav class="navbar navbar-expand-lg navbar-light p-0">
                <div class="navbar-brand clearfix hidden-lg-up">

                  <!-- logo -->
                  <div id="logo-mobile" class="logo">
                    <a href="<?php echo base_url(); ?>"><img id="logo-img-mobile" src="<?php echo base_url("assets/images"); ?>/logo_purple.png" alt="The Project"></a>
                  </div>

                  <!-- name-and-slogan -->
                  <div class="site-slogan">
                    Multipurpose HTML5 Template
                  </div>

                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-1" aria-controls="navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>




                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                  <!-- main-menu -->
                  <ul class="nav navbar-nav ">

                    <!-- mega-menu start -->
                    <li class="nav-item  active">
                      <a href="<?php echo base_url(); ?>
                          " class="nav-link">Anasayfa</a>
                    </li>

                    <li class="nav-item dropdown ">
                      <a href="#" class="nav-link dropdown-toggle" id="third-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Galeriler</a>
                      <ul class="dropdown-menu" aria-labelledby="third-dropdown">
                        <li><a href="<?php echo base_url("fotograf-galerisi"); ?>">Resim Galerisi</a></li>
                        <li><a href="<?php echo base_url("video-galerisi"); ?>">Video Galerisi</a></li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a href="<?php echo base_url("hakkimizda"); ?>" class="nav-link">Hakkımızda</a>
                    </li>
                    <li class="nav-item">
                      <a href="<?php echo base_url("iletisim"); ?>" class="nav-link">İletişim</a>
                    </li>
                    <!-- mega-menu end -->



                  </ul>
                  <!-- main-menu end -->
                </div>


              </nav>
            </div>
            <!-- main-navigation end -->
          </div>
          <!-- header-second end -->

        </div>

      </div>
    </div>
  </header>
  <!-- header end -->
</div>
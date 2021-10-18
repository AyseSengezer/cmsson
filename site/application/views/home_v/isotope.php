<?php $image = get_image(); ?>
<?php $nisanimage = get_isotopenisan(); ?>
<?php $dugunimage = get_isotopedugun(); ?>

<!-- main-container start -->
<!-- ================ -->
<section class="container">

  <div class="container">
    <h1 class="page-title">Galeriler</h1>
    <div class="separator-2"></div>
    <div class="row">

      <!-- main start -->
      <!-- ================ -->
      <div class="main col-12">

        <!-- isotope filters start -->
        <div class="filters">
          <ul class="nav nav-pills">
            <li class="nav-item"><a class="nav-link active" href="#" data-filter="*">Tümü</a></li>
            <li class="nav-item"><a class="nav-link" href="#" data-filter=".dugun-galerisi">Düğün Galerisi</a></li>
            <li class="nav-item"><a class="nav-link" href="#" data-filter=".nisan-galerisi">Nişan Galerisi</a></li>
            <li class="nav-item"><a class="nav-link" href="#" data-filter=".isyeri-cekimleri">İşyeri Çekimleri</a></li>
          </ul>
        </div>
        <!-- isotope filters end -->

        <div class="isotope-container row grid-space-10">
          <div class="col-lg-3 col-md-6 isotope-item web-design">

          </div>
          <?php foreach ($nisanimage as $nisanimages) { ?>
            <div class="col-lg-3 col-md-6 isotope-item nisan-galerisi">
              <div class="image-box shadow-2 text-center mb-20">
                <div class="overlay-container">
                  <img src="<?php echo get_picture("galleries_v/images/nisan-galerisi", $nisanimages->url, "350x216"); ?>" alt="">
                  <a href="<?php echo get_picture("galleries_v/images/nisan-galerisi", $nisanimages->url, "851x606"); ?>" class="overlay-link small popup-img">
                    <i class="fa fa-plus"></i>
                  </a>
                </div>
              </div>
            </div>
          <?php } ?>

          <?php foreach ($dugunimage as $dugunimages) { ?>

            <div class="col-lg-3 col-md-6 isotope-item dugun-galerisi">
              <div class="image-box shadow-2 text-center mb-20">
                <div class="overlay-container">
                  <img src="<?php echo get_picture("galleries_v/images/dugun-galerisi", $dugunimages->url, "350x216"); ?>" alt="">
                  <a href="<?php echo get_picture("galleries_v/images/dugun-galerisi", $dugunimages->url, "851x606"); ?>" class="overlay-link small popup-img">
                    <i class="fa fa-plus"></i>
                  </a>
                </div>
              </div>
            </div>

          <?php } ?>
          <?php foreach ($image as $images) { ?>
            <div class="col-lg-3 col-md-6 isotope-item isyeri-cekimleri">
              <div class="image-box shadow-2 text-center mb-20">
                <div class="overlay-container">
                  <img src="<?php echo get_picture("galleries_v/images/isyeri-cekimleri", $images->url, "350x216"); ?>" alt="">
                  <a href="<?php echo get_picture("galleries_v/images/isyeri-cekimleri", $images->url, "851x606"); ?>" class="overlay-link small popup-img">
                    <i class="fa fa-plus"></i>
                  </a>
                </div>
              </div>
            </div>
          <?php } ?>

        </div>

      </div>
      <!-- main end -->

    </div>
  </div>
</section>
<!-- main-container end -->

<!-- main end -->
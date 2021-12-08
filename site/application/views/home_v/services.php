<section class="main-container">

    <div class="container">
        <h1 class="page-title">Hizmetler</h1>
        <div class="separator-2"></div>




        <div class="row">
            <?php foreach ($slides as $service) { ?>
                <div class="col-sm-6">
                    <div class="image-box style-2 mb-20 bordered light-gray-bg">
                        <div class="overlay-container overlay-visible">
                            <img src="assets/images/section-image-5.jpg" alt="">
                            <div class="overlay-bottom laed p text-left">
                                <p class="lead margin-clear "><?php echo $service->title ?></p>
                                <p class="lead margin-clear "><?php echo $service->description ?></p>
                            </div>
                        </div>

                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>
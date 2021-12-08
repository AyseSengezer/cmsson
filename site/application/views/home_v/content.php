<div class="page-wrapper">

    <?php $this->load->view("{$viewFolder}/slider"); ?>

    <section class="main-container">

        <div class="container">

            <div class="row">
                <!-- main start -->

                <?php $this->load->view("{$viewFolder}/services"); ?>


            </div>
            <div class="container">
                <div class="row">
                    <!-- main start -->

                    <?php $this->load->view("home_v/gallerieshome_v/image_galleries/list_content"); ?>

                    <!-- main end -->
                </div>
            </div>

            <div class="row">
                <!-- main start -->
                <?php $this->load->view("{$viewFolder}/isotope"); ?>


                <!-- main end -->
            </div>
        </div>
    </section>
</div>
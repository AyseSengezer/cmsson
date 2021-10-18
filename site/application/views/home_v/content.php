<div class="page-wrapper">

    <?php $this->load->view("{$viewFolder}/slider"); ?>

    <section class="main-container">

        <div class="container">

            <div class="row">
                <!-- main start -->
                <?php $this->load->view("{$viewFolder}/isotope"); ?>

            </div>


            <div class="row">
                <!-- main start -->

                <?php $this->load->view("{$viewFolder}/services"); ?>

                <!-- main end -->
            </div>
        </div>
    </section>
</div>
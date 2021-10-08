<div class="page-wrapper">

    <?php $this->load->view("{$viewFolder}/slider"); ?>
    
    <section class="main-container">

        <div class="container">



            <div class="row">
                <!-- main start -->
             <div class="col-md-9">
              <?php $this->load->view("home_v/gallerieshome_v/image_galleries/list_content"); ?>   
             </div>   
             <div class="col-md-3">
                <?php $this->load->view("home_v/gallerieshome_v/video_galleries/list_content"); ?>

             </div> 
                

                <!-- main end -->
            </div>
            
           
            <div class="row">
                <!-- main start -->
                
                <?php $this->load->view("{$viewFolder}/services"); ?>

                <!-- main end -->
            </div>
        </div>
    </section>
</div>
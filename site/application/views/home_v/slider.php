<div class="pv-40 banner light-gray-bg">
        <div class="container clearfix">

          <!-- slideshow start -->
          <!-- ================ -->
          <div class="slideshow">

            <!-- slider revolution start -->
            <!-- ================ -->
            <div class="slider-revolution-5-container">
              <div id="slider-banner-boxedwidth" class="slider-banner-boxedwidth rev_slider" data-version="5.0">
                <ul class="slides">
                  <!-- slide 1 start -->
                  <!-- ================ -->
                  <?php foreach ($slides as $slide) { ?> 
                    
                    <li class="text-center" data-transition="slidehorizontal" data-slotamount="default" data-masterspeed="default" data-title="<?php echo $slide->title; ?> ">

                    <!-- main image -->
                    <img  src="<?php echo get_picture("slides_v",$slide->img_url,"1920x650"); ?>"
                    alt="slidebg1" 
                    data-bgposition="center top"  
                    data-bgrepeat="no-repeat" 
                    data-bgfit="cover" 
                    class="rev-slidebg">

                    <!-- Transparent Background -->
                    <div class="tp-caption dark-translucent-bg"
                      data-x="center"
                      data-y="center"
                      data-start="0"
                      data-transform_idle="o:1;"
                      data-transform_in="o:0;s:600;e:Power2.easeInOut;"
                      data-transform_out="o:0;s:600;"
                      data-width="5000"
                      data-height="450">
                    </div>

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption large_white"
                      data-x="center"
                      data-y="110"
                      data-start="1000"
                      data-width="650"
                      data-transform_idle="o:1;"
                      data-transform_in="y:[100%];sX:1;sY:1;s:1150;e:Power4.easeInOut;"
                      data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                      data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                      data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"><?php echo $slide->title; ?>
                      
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption large_white tp-resizeme hidden-xs"
                      data-x="center"
                      data-y="155"
                      data-start="1300"
                      data-width="500"
                      data-transform_idle="o:1;"
                      data-transform_in="o:0;s:2000;e:Power4.easeInOut;">
                      <div class="separator light"></div>
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption medium_white hidden-xs"
                      data-x="center"
                      data-y="190"
                      data-start="1300"
                      data-width="650"
                      data-transform_idle="o:1;"
                      data-transform_in="y:[100%];sX:1;sY:1;s:800;e:Power4.easeInOut;"
                      data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;"
                      data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                      data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"><?php echo $slide->description; ?>
                      
                   
                      
                    </div>

                  </li>
                    <?php }; ?>

                  
                  <!-- slide 1 end -->

               
                </ul>
                <div class="tp-bannertimer"></div>
              </div>
            </div>
            <!-- slider revolution end -->

          </div>
          <!-- slideshow end -->

        </div>
      </div>
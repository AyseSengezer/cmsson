isotope view:

<div class="main col-12">
    <!-- isotope filters start -->
    <div class="filters">
        <ul class="nav nav-pills">
            <li class="nav-item"><a class="nav-link active" href="#" data-filter="*">All</a></li>
            <li class="nav-item"><a class="nav-link" href="#" data-filter=".nisan-galerisi">Nişan Galerisi</a></li>
            <li class="nav-item"><a class="nav-link" href="#" data-filter=".dugun-galerisi">Düğün Galerisi</a></li>
        </ul>
    </div>
    <!-- isotope filters end -->

    <div class="isotope-container row grid-space-10 ">
                   
        <?php foreach($query->result() as $row){ ?>
            <?php if($row->folder_name = "nisan-galerisi") { ?>
           
                <div class="col-lg-4 col-md-6 isotope-item nisan-galerisi">
                    <div class="image-box shadow-2 text-center mb-20">
                        <div class="overlay-container">
                            <img src="<?php echo get_picture("galleries_v/images/$row->folder_name",$row->url, "350x216"); ?>" alt="">
                            <div class="overlay-top">
                                <div class="text">
                                    <h3><a href="#"><?php echo $row->url;  ?><?php echo $row->folder_name;  ?></a></h3>
                                    <p class="small">Web Design</p>
                                </div>
                            </div>
                            <div class="overlay-bottom">
                                <div class="links">
                                    <a href="portfolio-item.html" class="btn btn-gray-transparent btn-animated btn-sm">View Details <i class="pl-10 fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>

        <?php foreach($query->result() as $row){ ?>
            <?php if($row->folder_name = "dugun-galerisi") { ?>
            
                <div class="col-lg-4 col-md-6 isotope-item dugun-galerisi">
                    <div class="image-box shadow-2 text-center mb-20">
                        <div class="overlay-container">
                            <img src="<?php echo get_picture("galleries_v/images/$row->folder_name",$row->url, "350x216"); ?>" alt="">
                            <div class="overlay-top">
                                <div class="text">
                                    <h3><a href="portfolio-item.html"><?php echo $row->url;  ?><?php echo $row->folder_name;  ?></a></h3>
                                    <p class="small">Web Design</p>
                                </div>
                            </div>
                            <div class="overlay-bottom">
                                <div class="links">
                                    <a href="portfolio-item.html" class="btn btn-gray-transparent btn-animated btn-sm">View Details <i class="pl-10 fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
            
        </div>

</div>

isotope controller/index:
<?php 
public function index(){
        //anasayfa
        $viewData = new stdClass();
        $this->load->model("slide_model");//modeli çağır
        $this->load->model("gallery_model");//modeli çağır
        $this->load->model("image_model");//modeli çağır

        $slides= $this->slide_model->get_all(// isActive 1 olan verileri getir
            array(
                "isActive" => 1
            ), "rank ASC"
        );
        //isotope
        $this->db->select('galleries.id, images.gallery_id, galleries.folder_name, images.url')
         ->from('galleries')
         ->join('images', 'galleries.id = images.gallery_id');
        $query = $this->db->get();
        
        //isotope bitti
        $viewData->slides = $slides;//viewData ya gönder
        $viewData->query = $query;//viewData ya gönder
        $viewData->viewFolder = "home_v";
        $this->load->view($viewData->viewFolder, $viewData);
     
        
    } 


    <button class="btn btn-danger"><a href="<?php echo base_url("anasayfa-galerisi"); ?>">anasayfa-galerisi</a></button>
                <?php $this->load->view("{$viewFolder}/gallerieshome_v"); ?
 ?>



 <?php $this->load->view("home_v/gallerieshome_v/image_galleries/list_content"); ?>
<?php
class Home extends CI_Controller {
    public $viewFolder ="";

    public function __construct()
    {
        parent::__construct();

        $this->viewFolder ="homepage";
        $this->load->helper("text");
    }
    public function index(){
        //anasayfa
        $viewData = new stdClass();
        $this->load->model("slide_model");//modeli çağır
         
        $slides= $this->slide_model->get_all(// isActive 1 olan verileri getir
            array(
                "isActive" => 1
            ), "rank ASC"
        );

        
        $viewData->slides = $slides;//viewData ya gönder
        $viewData->viewFolder = "home_v";
        $this->load->view($viewData->viewFolder, $viewData);
        
       
    } 
    
    public function product_list(){
        echo "ürünler";
    }

    public function about_us(){


        $viewData = new stdClass();
        $viewData->viewFolder = "about_v";

        $this->load->model("settings_model");

        $viewData->settings = $this->settings_model->get();

        $this->load->view($viewData->viewFolder, $viewData);

    }

    public function contact(){

        $viewData = new stdClass();
        $viewData->viewFolder = "contact_v";

        $this->load->helper("captcha");

        $config = array(
            "word"          => '',
            "img_path"      => 'captcha/',
            "img_url"       => base_url("captcha"),
            // "font_path"     => 'fonts/corbel.ttf',
            "img_width"     => 150,
            "img_height"    => 50,
            "expiration"    => 7200,
            "word_length"   => 5,
            "font_size"     => 40,
            "img_id"        => "captcha_img",
            "pool"          => "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ",
            "colors"        => array(
                'background' => array(255,255,255),
                'border'     => array(255,255,255),
                'text'       => array(0,0,0),
                'grid'       => array(255,40,40)
            )

        );

        $viewData->captcha = create_captcha($config);

        $this->session->set_userdata("captcha", $viewData->captcha["word"]);

        $this->load->view($viewData->viewFolder, $viewData);

    }

    public function send_contact_message(){

        $this->load->library("form_validation");

        $this->form_validation->set_rules("name", "Ad", "trim|required");
        $this->form_validation->set_rules("email", "E-posta", "trim|required|valid_email");
        $this->form_validation->set_rules("subject", "Konu", "trim|required");
        $this->form_validation->set_rules("message", "Mesaj", "trim|required");
        $this->form_validation->set_rules("captcha", "Doğrulama Kodu", "trim|required");


        if($this->form_validation->run() === FALSE){

            // TODO Alert...

            redirect(base_url("iletisim"));


        } else {


            if($this->session->userdata("captcha") == $this->input->post("captcha")){

                $name = $this->input->post("name");
                $email = $this->input->post("email");
                $subject = $this->input->post("subject");
                $message = $this->input->post("message");

                $email_message = "{$name} isimli ziyaretçi. Mesaj Bıraktı <br><b>Mesaj : </b> {$message} <br> <b>E-posta : </b> {$email}";

                if(send_mail("", "Site İletişim Mesajı | $subject", $email_message)){

                    redirect(base_url("iletisim"));
                } else {
                    echo "işlem başarısız";
                }

            } else {

                // TOdO Alert..

                redirect(base_url("iletisim"));

            }

        }

    }

    /************** Galeri için kullanilan metodlar **************/

    public function image_gallery_list(){

        $viewData = new stdClass();
        $viewData->viewFolder    = "galleries_v";
        $viewData->subViewFolder = "image_galleries";
        $viewData->viewName      = "list_content";

        $this->load->model("gallery_model");

        $viewData->galleries = $this->gallery_model->get_all(
            array(
                "isActive"      => 1,
                "gallery_type"  => "image"
            ), "rank DESC"
        );

        $this->load->view($viewData->viewFolder, $viewData);
        // print_r($viewData);
        // die();
        // burada folder_name var
    }

    public function image_gallery($gallery_url = ""){

        if($gallery_url){

            $viewData = new stdClass();
            $viewData->viewFolder    = "galleries_v";
            $viewData->subViewFolder = "image_galleries";
            $viewData->viewName      = "item_content";
            $viewData->gallery       = get_gallery_by_url($gallery_url);

            $this->load->model("image_model");

            $viewData->images = $this->image_model->get_all(
                array(
                    "isActive"      => 1,
                    "gallery_id"    => $viewData->gallery->id,
                ), "rank DESC"
            );
        
            $this->load->view($viewData->viewFolder, $viewData);
            // print_r($viewData);
            // die();
        }

    }

    public function video_gallery_list(){

        $viewData = new stdClass();
        $viewData->viewFolder    = "galleries_v";
        $viewData->subViewFolder = "video_galleries";
        $viewData->viewName      = "list_content";

        $this->load->model("gallery_model");

        $viewData->galleries = $this->gallery_model->get_all(
            array(
                "isActive"      => 1,
                "gallery_type"  => "video"
            ), "rank DESC"
        );

        $this->load->view($viewData->viewFolder, $viewData);

    }

    public function video_gallery($gallery_url = ""){

        if($gallery_url){

            $viewData = new stdClass();
            $viewData->viewFolder    = "galleries_v";
            $viewData->subViewFolder = "video_galleries";
            $viewData->viewName      = "item_content";
            $viewData->gallery       = get_gallery_by_url($gallery_url);

            $this->load->model("video_model");

            $viewData->videos = $this->video_model->get_all(
                array(
                    "isActive"      => 1,
                    "gallery_id"    => $viewData->gallery->id,
                ), "rank DESC"
            );

            $this->load->view($viewData->viewFolder, $viewData);

        }

    }
   
    public function image_home_gallery($gallery_url = ""){// image_gallery
        if($gallery_url){
    
            $viewData = new stdClass();
            $viewData->viewFolder    = "home_v/gallerieshome_v";
            $viewData->subViewFolder = "image_galleries";
            $viewData->viewName      = "item_content";
            $viewData->gallery       = get_gallery_by_url($gallery_url);
    
            $this->load->model("image_model");
    
            $viewData->images = $this->image_model->get_all(
                array(
                    "isActive"      => 1,
                    "gallery_id"    => $viewData->gallery->id,
                ), "rank DESC"
            );
        
            $this->load->view($viewData->viewFolder, $viewData);
            // print_r($viewData);
            // die();
        }
    }

    public function video_home_gallery($gallery_url = ""){

        if($gallery_url){

            $viewData = new stdClass();
            $viewData->viewFolder    = "home_v/gallerieshome_v";
            $viewData->subViewFolder = "video_galleries";
            $viewData->viewName      = "item_content";
            $viewData->gallery       = get_gallery_by_url($gallery_url);

            $this->load->model("video_model");

            $viewData->videos_home = $this->video_model->get_all(
                array(
                    "isActive"      => 1,
                    "gallery_id"    => $viewData->gallery->id,
                ), "rank DESC"
            );

            $this->load->view($viewData->viewFolder, $viewData);

        }

    }


   
}
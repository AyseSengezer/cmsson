<?php

// session ile verileri çağırmak için

function get_settings(){

    $t = &get_instance();

    //    $settings = $t->session->userdata("settings");

    //    if(empty($settings)){

        $t->load->model("settings_model"); // modeli çağır

        $settings = $t->settings_model->get(); // verileri al

        $t->session->set_userdata("settings", $settings); //session at
    //    }

    return $settings;// çalıştır

    //  not <?php $settings = get_settings();  ile sayfadan çağır $settings->adress gibi autoload kütüphane ekle session
}

function send_mail($toEmail = "", $subject = "", $message = ""){

    $t = &get_instance();

    $t->load->model("emailsettings_model");

    $email_settings = $t->emailsettings_model->get(
        array(
            "isActive"  => 1
        )
    );

    if(empty($toEmail))
        $toEmail = $email_settings->to;

    $config = array(

        "protocol"   => $email_settings->protocol,
        "smtp_host"  => $email_settings->host,
        "smtp_port"  => $email_settings->port,
        "smtp_user"  => $email_settings->user,
        "smtp_pass"  => $email_settings->password,
        "starttls"   => true,
        "charset"    => "utf-8",
        "mailtype"   => "html",
        "wordwrap"   => true,
        "newline"    => ("\r\n"),
    );

    $t->load->library("email", $config);

    $t->email->from($email_settings->from, $email_settings->user_name);
    $t->email->to($toEmail);
    $t->email->subject($subject);
    $t->email->message($message);

    return $t->email->send();
    
            

}

// function send_mail($toEmail = "", $subject = "", $message = ""){

//     $t = &get_instance();

//     $t->load->model("emailsettings_model");

//     $email_settings = $t->emailsettings_model->get(
//         array(
//             "isActive"  => 1
//         )
//     );

//     if(empty($toEmail))
//         $toEmail = $email_settings->to;

//     $config = array(

//         "protocol"   => $email_settings->protocol,
//         "smtp_host"  => $email_settings->host,
//         "smtp_port"  => $email_settings->port,
//         "smtp_user"  => $email_settings->user,
//         "smtp_pass"  => $email_settings->password,
//         "starttls"   => true,
//         "charset"    => "utf-8",
//         "mailtype"   => "html",
//         "wordwrap"   => true,
//         "newline"    => "\r\n"
//     );
    

//     $t->load->library("email", $config);

//     $t->email->from($email_settings->from, $email_settings->user_name);
//     $t->email->to($toEmail);
//     $t->email->subject($subject);
//     $t->email->message($message);

//     return $t->email->send();

// }

// resim getirmek için
function get_picture($path = "", $picture = "", $resolution = "50x50"){


    if($picture != ""){

        if(file_exists(FCPATH . "panel/uploads/$path/$resolution/$picture")){
            $picture = base_url("panel/uploads/$path/$resolution/$picture");
        } else {
            $picture = base_url("assets/assets/images/default_image.png");

        }

    } else {

        $picture = base_url("assets/assets/images/default_image.png");

    }

    return $picture;

}

function get_gallery_cover_image($folderName){

    $path = "panel/uploads/galleries_v/images/$folderName/350x216";

    if($handle = opendir($path)){
        while(($file = readdir($handle)) !== false){

            if($file != "." & $file != ".."){
                return $file;
            }

        }


    }


}

function get_gallery_by_url($url = ""){

    $t = &get_instance();
    $t->load->model("gallery_model");

    $gallery = $t->gallery_model->get(
        array(
            "isActive"  => 1,
            "url"       => $url
        )
    );

    return ($gallery) ? $gallery : false;

}



function image_home_list(){//image_gallery_list
    $t = &get_instance();
    $t->load->model("gallery_model");

    $galleries = $t->gallery_model->get_all(
        array(
            "isActive"      => 1,
            "gallery_type"  => "image"
        ), "rank DESC"
    );
    return ($galleries) ? $galleries : false;
    // print_r($galleries);
    // die();
    // burada folder_name var
}

function video_home_list(){
    $t = &get_instance();


    $t->load->model("gallery_model");

    $galleries_video = $t->gallery_model->get_all(
        array(
            "isActive"      => 1,
            "gallery_type"  => "video"
        ), "rank DESC"
    );
    return ($galleries_video) ? $galleries_video : false;

}


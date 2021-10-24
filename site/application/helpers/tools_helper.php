<?php

// session ile verileri çağırmak için

function get_settings()
{

    $t = &get_instance();

    //    $settings = $t->session->userdata("settings");

    //    if(empty($settings)){

    $t->load->model("settings_model"); // modeli çağır

    $settings = $t->settings_model->get(); // verileri al

    $t->session->set_userdata("settings", $settings); //session at
    //    }

    return $settings; // çalıştır

    //  not <?php $settings = get_settings();  ile sayfadan çağır $settings->adress gibi autoload kütüphane ekle session
}

function get_image()
{
    // ! işyeri çekimlerini hakkımızda sayfasına getirmek için.... gallery_id 20 sabit kalmalı
    $t = &get_instance();

    //    $settings = $t->session->userdata("settings");

    //    if(empty($settings)){

    $t->load->model("image_model"); // modeli çağır

    $image = $t->image_model->get_all(
        array(
            "isActive" => 1,
            "gallery_id" => 20
        ),
        "rank DESC"
    ); // verileri al

    $t->session->set_userdata("image", $image); //session at
    //    }



    return $image; // çalıştır

    // print_r($image);
    // die();

    //  not <?php $settings = get_settings();  ile sayfadan çağır $settings->adress gibi autoload kütüphane ekle session
}

function get_isotopenisan()
{
    // ! gallery_id sabit kalmalı
    $t = &get_instance();

    //    $settings = $t->session->userdata("settings");

    //    if(empty($settings)){

    $t->load->model("image_model"); // modeli çağır

    $nisanimage = $t->image_model->get_all(
        array(
            "isActive" => 1,
            "gallery_id" => 13
        ),
        "rank DESC"
    ); // verileri al

    $t->session->set_userdata("nisanimage", $nisanimage); //session at
    //    }



    return $nisanimage; // çalıştır

    // print_r($image);
    // die();

    //  not <?php $settings = get_settings();  ile sayfadan çağır $settings->adress gibi autoload kütüphane ekle session
}

function get_isotopedugun()
{
    // ! gallery_id sabit kalmalı
    $t = &get_instance();

    //    $settings = $t->session->userdata("settings");

    //    if(empty($settings)){

    $t->load->model("image_model"); // modeli çağır

    $dugunimage = $t->image_model->get_all(
        array(
            "isActive" => 1,
            "gallery_id" => 14
        ),
        "rank DESC"
    ); // verileri al

    $t->session->set_userdata("dugunimage", $dugunimage); //session at
    //    }



    return $dugunimage; // çalıştır

    // print_r($image);
    // die();

    //  not <?php $settings = get_settings();  ile sayfadan çağır $settings->adress gibi autoload kütüphane ekle session
}

function get_isotopemezun()
{
    // ! gallery_id sabit kalmalı
    $t = &get_instance();

    //    $settings = $t->session->userdata("settings");

    //    if(empty($settings)){

    $t->load->model("image_model"); // modeli çağır

    $mezunimage = $t->image_model->get_all(
        array(
            "isActive" => 1,
            "gallery_id" => 17
        ),
        "rank DESC"
    ); // verileri al

    $t->session->set_userdata("mezunimage", $mezunimage); //session at
    //    }



    return $mezunimage; // çalıştır

    // print_r($image);
    // die();

    //  not <?php $settings = get_settings();  ile sayfadan çağır $settings->adress gibi autoload kütüphane ekle session
}

function send_mail($toEmail = "", $subject = "", $message = "")
{

    $t = &get_instance();

    $t->load->model("emailsettings_model");

    $email_settings = $t->emailsettings_model->get(
        array(
            "isActive"  => 1
        )
    );

    if (empty($toEmail))
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

// resim getirmek için
function get_picture($path = "", $picture = "", $resolution = "50x50")
{


    if ($picture != "") {

        if (file_exists(FCPATH . "panel/uploads/$path/$resolution/$picture")) {
            $picture = base_url("panel/uploads/$path/$resolution/$picture");
        } else {
            $picture = base_url("assets/assets/images/default_image.png");
        }
    } else {

        $picture = base_url("assets/assets/images/default_image.png");
    }

    return $picture;
}

function get_gallery_cover_image($folderName)
{

    $path = "panel/uploads/galleries_v/images/$folderName/364x216";

    if ($handle = opendir($path)) {
        while (($file = readdir($handle)) !== false) {

            if ($file != "." & $file != "..") {
                return $file;
            }
        }
    }
}

function get_gallery_by_url($url = "")
{

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

function image_home_list()
{ //image_gallery_list
    $t = &get_instance();
    $t->load->model("gallery_model");

    $galleries = $t->gallery_model->get_all(
        array(
            "isActive"      => 1,
            "gallery_type"  => "image"
        ),
        "rank DESC"
    );
    return ($galleries) ? $galleries : false;
    // print_r($galleries);
    // die();
    // burada folder_name var
}

function video_home_list()
{
    $t = &get_instance();


    $t->load->model("gallery_model");

    $galleries_video = $t->gallery_model->get_all(
        array(
            "isActive"      => 1,
            "gallery_type"  => "video"
        ),
        "rank DESC"
    );
    return ($galleries_video) ? $galleries_video : false;
}

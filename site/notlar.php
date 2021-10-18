// ! ÖNEMLİ NOTLAR

// ! dikkat : ana sayfada galeri çalışsın: home_v/content.php

<div class="col-md-9">
    <?php $this->load->view("home_v/gallerieshome_v/image_galleries/list_content"); ?>
</div>
<div class="col-md-3">
    <?php $this->load->view("home_v/gallerieshome_v/video_galleries/list_content"); ?>

</div>

// ! dikkat : panel galleryList sil butonu kaldırıldı.. galeri isimleri silinemeyecek..sadece isim değişecek

<button data-url="<?php echo base_url("galleries/delete/$item->id"); ?>" class="btn btn-sm btn-danger btn-outline remove-btn">
    <i class="fa fa-trash"></i> Sil</button>
<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Yeni Glari Ekle
        </h4>
        <div class="widget">
           
            <hr class="widget-separator">
            <div class="widget-body">
             
                <form action="<?php echo base_url("galleries/save"); ?>" method="post">
                    <div class="form-group">
                        <label>Galeri Adı</label>
                        <input class="form-control"  placeholder="Galerinin adını giriniz" name="title">
                        <?php if(isset($form_error)){ ?>
                            <small class="input-form-error text-center"><?php echo form_error("title"); ?></small>
                        <?php } ?>
                    </div> 
                    <div class="form-group">
                        <label for="control-demo-6" class="">Galeri Türü</label>
                        <div id="control-demo-6" class="">
                            <select class="form-control" name="gallery_type">
                                <option <?php echo (isset($gallery_type) && $gallery_type == "image") ? "selected" : ""; ?> value="image">Resim</option>
                                <option <?php echo (isset($gallery_type) && $gallery_type == "video") ? "selected" : ""; ?> value="video">Video</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-md btn-outline">Kaydet</button>
                    <a href="<?php echo base_url("galleries"); ?>" class="btn btn-md btn-outline btn-danger">İptal</a>
                </form>
            </div><!-- .widget-body -->
        </div>
    </div><!-- END column -->
  
<?php $settings = get_settings(); ?>

<meta charset="utf-8">
<title><?php echo $settings->company_name; ?></title>
<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo base_url("panel/uploads/settings_v/$settings->logo"); ?>">
<meta name="description" content="">
<meta name="author" content="aSengezer">

<!-- Mobile Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php $this->load->view("includes/include_style"); ?>
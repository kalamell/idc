<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>public/vendors/slick/slick.css">
    <link rel="stylesheet" href="<?php echo base_url();?>public/vendors/slick/slick-theme.css">
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/main.css">
    <title><?php echo $title;?></title>
    <meta name="description" content="<?php echo $description;?>">

  <style>
  #desc {
  all: initial;
  * {
    all: unset;
  }
}

.videoWrapper {
	position: relative;
	padding-bottom: 56.25%; /* 16:9 */
	padding-top: 25px;
	height: 0;
}
.videoWrapper iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}
  </style>
    
  </head>
  <body id="root">
    <div class="wrapper">
      <?php $this->load->view('header_menu');?>
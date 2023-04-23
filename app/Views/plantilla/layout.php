<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/bootstrap-4.0.0-dist/css/bootstrap.css">

    <title><?=$this->renderSection('titulo')?></title>
  </head>
  <body>

    <?=$this->include('plantilla/menu')?>
    
    <?=$this->renderSection('contenido')?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url(); ?>public/js/jquery-3.6.4.js"></script>
	<script src="<?php echo base_url(); ?>public/js/popper.min.js"></script>
	<script src="<?php echo base_url(); ?>public/bootstrap-4.0.0-dist/js/bootstrap.js"></script>
  </body>
</html>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Test Project - Stories And Articles</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="<?php echo URL::asset('css/vendor/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo URL::asset('css/custom.css'); ?>">
  </head>
  <body>

    <div class="main row">
      <?php echo $content; ?>
    </div>

    <script type="text/javascript" src="<?php echo URL::asset('scripts/vendor/jquery.js') ?>"></script>
    <script type="text/javascript" src="<?php echo URL::asset('scripts/vendor/bootstrap.min.js') ?>"></script>
  </body>
</html>

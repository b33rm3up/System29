<?php
#
# ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
#
# System29 LayoutMaster
#
# @author           Taras Palasyk (https://github.com/0e29)
# @copyright        Copyright (c) 2019, Taras Palasyuk. All rights reserved.
# @licence          BSD 3-Clause License
# @version          Version 0.1
# @revision         December 14, 2019 @ 1:50 AM
# @category         Template / Layout
# @filename         LayoutMaster.php
#
# ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
#
?>
<!doctype html>
<html class="no-js" lang="en-ca">
     <head>
         <meta charset="utf-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
         <title><?php echo $this->title; ?> | <?php echo APP_SITE_NAME; ?></title>
         <meta name="description" content="">
         <meta name="viewport" content="width=device-width, initial-scale=1">

<?php
foreach ($this->css as $css) {
	 echo '<link href="' . $css . '" rel="stylesheet">' . "\n";
}
?>
     </head>
<body>
     <!--[if lt IE 8]>
         <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
     <![endif]-->
 
<div class="container">
     <footer>
         <p>&copy; <?php echo date('Y')."&nbsp;".APP_FOOTER_CR; ?></p>
      </footer>
</div>  

<?php
foreach ($this->js as $js) {
    echo '<script src="' . $js . '" ></script>' . "\n";
}

foreach ($this->js_def as $js_def) {
    echo '<script src="' . $js_def . '" async defer></script>' . "\n";
}
?>
</body>
</html>
<!DOCTYPE html>
<html lang="my">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">

        <title><?php echo SITE_TITLE ?></title>

        <link href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo BASE_URL; ?>assets/css/print.css" rel="stylesheet" type="text/css" media="print">
        <link rel="shortcut icon" href="<?php echo BASE_URL; ?>assets/images/favicon.png">

        <?php
        if(isset($css)){
            foreach ($css as $css_inc){
                echo '<link rel="stylesheet" href="'.BASE_URL.$css_inc.'" type="text/css">';
                echo "\n\t\t";
            }
        }

        if(isset($css_url)){
            foreach ($css_url as $css_inc_url){
                echo '<link rel="stylesheet" href="'.$css_inc_url.'" type="text/css">';
                echo "\n\t\t";
            }
        }

        if(isset($custom_css)){
            echo $custom_css;
            echo "\n\t";
        }
        ?>
        <script type="text/javascript">
            var BASE_URL = '<?php echo BASE_URL; ?>';
        </script>

	</head>
    <body>
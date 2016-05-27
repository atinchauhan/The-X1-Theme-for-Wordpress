<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <title>
        <?php wp_title( '|', true, 'right'); ?>
    </title>
</head>
<body>
<div class="header">
    <h1>
    <?php bloginfo('name'); ?><br>
    <h2><?php bloginfo('description'); ?></h2>
    </h1>
</div>
<nav class="menu">
    <?php wp_nav_menu( array('theme_location' => 'header-menu')); ?>
</nav>
</body>
</html>
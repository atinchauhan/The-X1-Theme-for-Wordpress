<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <script   src="https://code.jquery.com/jquery-3.1.0.slim.min.js"   integrity="sha256-cRpWjoSOw5KcyIOaZNo4i6fZ9tKPhYYb6i5T9RSVJG8="   crossorigin="anonymous"></script>
    <title>
        <?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php bloginfo('description'); ?>
    </title>
</head>
<body>
<div class="header">
    <div class="hdtext">
            <h1>
            <?php bloginfo('name'); ?><br>
            <h2><?php bloginfo('description'); ?></h2>
            </h1>
    </div>
    <div class="hdimg">
        <?php echo get_avatar(get_the_author_meta( 'ID' ),                          100); ?>
    </div>
</div>
<nav class="menu">
    <?php wp_nav_menu( array('theme_location' => 'header-menu')); ?>
</nav>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <title><?php wp_title("|",true,"right"); ?></title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/frontend/app/favicon.png"
          mce_href="<?php echo get_template_directory_uri(); ?>/images/frontend/app/favicon.png" type="image/x-png">

    <link href="<?php echo get_template_directory_uri(); ?>/css/frontend/src/index.css" rel="stylesheet" type="text/css">
    <!--[if lte IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/frontend/lib/html5.js"></script>
    <![endif]-->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/frontend/lib/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/frontend/lib/jquery.ellipsis.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/frontend/src/googleAnalytics.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/frontend/src/index.js"></script>
</head>
<body>
<header class="header">
    <h1 class="logo">
        <a href="<?php
        $mainBlog=get_blog_details(1);
        echo $mainBlog->siteurl;
        ?>">logo</a>
    </h1>
    <?php wp_nav_menu(); ?>
    <form role="search" method="get" id="searchform" class="search" action="<?php echo home_url(); ?>">
        <input type="text" name="s" class="searchInput" id="searchInput" placeholder="Search...">
    </form>
</header>



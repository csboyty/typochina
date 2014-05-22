<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <title><?php wp_title("|",true,"right"); ?></title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/frontend/app/favicon.png"
          mce_href="<?php echo get_template_directory_uri(); ?>/images/frontend/app/favicon.png" type="image/x-png">
    <!--[if lte IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/frontend/lib/html5.js"></script>
    <![endif]-->
    <link href="<?php echo get_template_directory_uri(); ?>/css/frontend/src/index.css" rel="stylesheet" type="text/css">
    <script src="<?php echo get_template_directory_uri(); ?>/js/frontend/lib/jquery-1.11.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/frontend/lib/jquery.ellipsis.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/frontend/src/googleAnalytics.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/frontend/src/index.js"></script>

</head>
<body>

<section class="leftMain asideMain" id="leftMain">

</section>

<section class="indexMain" id="indexMain">
        <img class="logoBig" src="<?php echo get_template_directory_uri(); ?>/images/frontend/app/logoBig.png">
        <ul class="langMenu">
            <li><a href="<?php
                $mainBlog=get_blog_details(3);
                echo $mainBlog->siteurl;
                ?>" id="chinese">汉字</a></li>

            <li><a href="<?php
                $mainBlog=get_blog_details(2);
                echo $mainBlog->siteurl;
                ?>" id="english">西文</a></li>
        </ul>
</section>

<section class="rightMain asideMain" id="rightMain">

</section>

</body>
</html>
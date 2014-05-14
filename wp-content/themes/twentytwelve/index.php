<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <title><?php wp_title("|",true,"right"); ?></title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/frontend/app/favicon.png"
          mce_href="<?php echo get_template_directory_uri(); ?>/images/frontend/app/favicon.png" type="image/x-png">

    <link href="<?php echo get_template_directory_uri(); ?>/css/frontend/src/index.css" rel="stylesheet" type="text/css">
    <script src="<?php echo get_template_directory_uri(); ?>/js/frontend/lib/jquery-1.11.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/frontend/src/googleAnalytics.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/frontend/src/index.js"></script>

</head>
<body class="indexBody" id="indexBody">

<section class="leftMain asideMain" id="leftMain">

</section>

<section class="indexMain" id="indexMain">
    <header class="indexHeader" id="indexHeader">
        <h1 class="indexLogo">
            <a href="<?php echo home_url(); ?>">logo</a>
        </h1>
    </header>

    <section class="indexMainItem">
        <section class="left">
            <h2 class="text"><a href="#" id="chinese">《汉字》</a></h2>
            <!--<object class="object" data="<?php /*echo get_template_directory_uri(); */?>/data/Chinese.swf">
            <embed class="object" src="<?php /*echo get_template_directory_uri(); */?>/data/Chinese.swf"></embed>
        </object>-->
        </section>

        <aside class="right">
            <h2 class="text"><a href="#" id="english">Typography</a></h2>
            <!--<object class="object" data="<?php /*echo get_template_directory_uri(); */?>/data/Typography.swf">
                <embed class="object" src="<?php /*echo get_template_directory_uri(); */?>/data/Typography.swf"></embed>
            </object>-->
        </aside>
    </section>

</section>

<section class="rightMain asideMain" id="rightMain">

</section>

</body>
</html>
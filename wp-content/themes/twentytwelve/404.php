<!DOCTYPE html>
<html>
<head>
    <meta name="renderer" content="webkit">
    <meta http-equiv="refresh" content="5;url=<?php echo home_url(); ?>">
    <title><?php wp_title("|",true,"right"); ?></title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/frontend/app/favicon.png"
          mce_href="<?php echo get_template_directory_uri(); ?>/images/frontend/app/favicon.png" type="image/x-png">
    <!--[if lte IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/frontend/lib/html5.js"></script>
    <![endif]-->
    <link href="<?php echo get_template_directory_uri(); ?>/css/frontend/src/index.css" rel="stylesheet" type="text/css">

    <script>
        window.onload=function(){
            var seconds=5;

            setInterval(function(){
                if(seconds>0){
                    --seconds;
                    if(navigator.appName.indexOf("Explorer") > -1){
                        document.getElementById('seconds').innerText = seconds;
                    } else{
                        document.getElementById('seconds').textContent = seconds;
                    }
                }
            },1000);
        }
    </script>
</head>
<body class="indexBody">
<header class="header">
    <h1 class="logo">
        <a href="<?php echo home_url(); ?>">
            logo
        </a>
    </h1>
</header>
<section class="main">
    <div class="_404Container">
        <h1 class="_404Title">404</h1>
        <p class="_404Content">
            很抱歉，您访问的页面不存在。
            <br>
            系统将在<span id="seconds" class="redTxt">5</span>秒后，跳转到网站入口页。
        </p>
    </div>
</section>
</body>
</html>
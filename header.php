

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_deregister_script('jquery'); ?>
  <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
   <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
   <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
   

   <title>American village</title>

</head>

<body>
   <header>
        <div class="container">
            <!-- headerここから -->
            <ul id="nav">
                <li><a href="#">Menu01</a></li>
                <li><a href="#">Menu02</a></li>
                <li><a href="#">Menu03</a></li>
                <li><a href="#">Menu04</a></li>
            </ul>
            <div class="main-photo">
                <!-- small-logo左上のロゴ -->
                <img class="top-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="アメリカンビレッジロゴ">
                <!-- ハンバーガー -->
                <div id="toggle" class="js-hamburger hamburger">
                    <span></span>
                </div>
                <!-- ドロワー -->
                <div id="drower-bg"></div>
                <ul class="drower js-drower">
                    <li class="drower-menu"><a href="#">Menu01</a</li>
                    <li class="drower-menu"><a href="#">Menu01</a</li>
                    <li class="drower-menu"><a href="#">Menu01</a</li>
                    <li class="drower-menu"><a href="#">Menu01</a</li>
                </ul>




                <!-- スライダー -->
                <div class="sp-img">
                    <!-- top photo -->
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <picture class="center-img">
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/img/visual_1_sp.png" media="(max-width: 767px)">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/visual_1_pc.png" alt="アメリカンビレッジ夜景">
                                </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture class="center-img">
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/img/visual_2_sp.png" media="(max-width: 767px)">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/visual_2_pc.png" alt="アメリカンビレッジ夜景">
                                </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture class="center-img">
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/img/visual_3_sp.png" media="(max-width: 767px)">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/visual_3_pc.png" alt="アメリカンビレッジ夜景">
                                </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture class="center-img">
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/img/visual_4_sp.png" media="(max-width: 767px)">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/visual_4_pc.png" alt="アメリカンビレッジ夜景">
                                </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture class="center-img">
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/img/visual_5_sp.png" media="(max-width: 767px)">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/visual_5_pc.png" alt="アメリカンビレッジ夜景">
                                </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture class="center-img">
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/img/visual_6_sp.png" media="(max-width: 767px)">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/visual_6_pc.png" alt="アメリカンビレッジ夜景">
                                </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture class="center-img">
                                    <source srcset="<?php echo get_template_directory_uri(); ?>/img/visual_7_sp.png" media="(max-width: 767px)">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/visual_7_pc.png" alt="アメリカンビレッジ夜景">
                                </picture>
                            </div>
                        </div>
                    </div>
                    <picture>
                    <!-- sign-logo右側のロゴ -->
                        <source srcset="<?php echo get_template_directory_uri(); ?>/img/visual_text_sp.png" media="(max-width: 767px)">
                        <img class="sign-logo" src="<?php echo get_template_directory_uri(); ?>/img/visual_text_pc.png" alt="アメリカンビレッジのサインロゴ">
                    </picture>
                <p>進化し続ける「街」<br class="header-br">アメリカンビレッジマガジン<p>
                </div>
            </div>
    </header>
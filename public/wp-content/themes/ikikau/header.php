<!doctype html>
<html lang="ja">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <!--[if lt IE 9]>
  <script src="<?php bloginfo('template_directory'); ?>/common/js/html5.js" type="text/javascript"></script>
  <![endif]-->
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/common/css/base.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header id="header">
  <div class="container">
    <h1><a href="/"><img alt="ちょっと週末の贅沢をお届け。 marcierge" src="<?php bloginfo('template_directory'); ?>/common/images/components/header/logo.png"></a></h1>

    <!--
    <div class="sub">
      <ul class="info">
        <li><a href="#"><img alt="マルシェルジュとは？" src="<?php bloginfo('template_directory'); ?>/common/images/components/header/nav_about.png"></a></li>
        <li><a href="#"><img alt="掲載のお問い合わせ" src="<?php bloginfo('template_directory'); ?>/common/images/components/header/nav_contact.png"></a></li>
      </ul>

      <ul class="social">
        <li><a href="#"><img alt="Twitter" src="<?php bloginfo('template_directory'); ?>/common/images/components/header/btn_social_twitter.png"></a></li>
        <li><a href="#"><img alt="Facebook" src="<?php bloginfo('template_directory'); ?>/common/images/components/header/btn_social_facebook.png"></a></li>
      </ul>
    </div> -->
  </div>
</header>

<!--
<nav id="navigator">
  <div class="container">
    <ul>
      <li class="event"><a href="#"><img alt="イベントを探す" src="<?php bloginfo('template_directory'); ?>/common/images/components/header/nav_event.png"></a></li>
      <li class="feature"><a href="#"><img alt="特集" src="<?php bloginfo('template_directory'); ?>/common/images/components/header/nav_feature.png"></a></li>
      <li class="atoz"><a href="#"><img alt="AtoZ Shop&amp;Creator File" src="<?php bloginfo('template_directory'); ?>/common/images/components/header/nav_atoz.png"></a></li>
      <li class="blog"><a href="#"><img alt="BLOG" src="<?php bloginfo('template_directory'); ?>/common/images/components/header/nav_blog.png"></a></li>
    </ul>
  </div>
</nav>
-->

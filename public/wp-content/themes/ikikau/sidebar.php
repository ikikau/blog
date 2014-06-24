<div class="sidebar">
  <div class="side_container">
    <img src="<?php bloginfo('template_directory'); ?>/common/images/common/profile_pic.png">
    <small class="author_title">ブロガー方書き</small>
    <h3 class="author_name">ブロガー名</h3>
    <p class="author_profile">ブロガープロフィール</p>
    <ul class="author_detail">
      <li><a href="#" class="author_website">ウェブサイトURL</a></li>
      <li><a href="#" class="author_more">詳しいプロフィールと出品情報</a></li>
    </ul>
  </div>

  <div class="thumbnail_container clearfix">
    <h3>最近の投稿サムネ</h3>
    <ul>
      <li><img src="<?php bloginfo('template_directory'); ?>/common/images/common/thumbnail_dummy.png"></li>
      <li><img src="<?php bloginfo('template_directory'); ?>/common/images/common/thumbnail_dummy.png"></li>
      <li class="last"><img src="<?php bloginfo('template_directory'); ?>/common/images/common/thumbnail_dummy.png"></li>
      <li><img src="<?php bloginfo('template_directory'); ?>/common/images/common/thumbnail_dummy.png"></li>
      <li><img src="<?php bloginfo('template_directory'); ?>/common/images/common/thumbnail_dummy.png"></li>
      <li class="last"><img src="<?php bloginfo('template_directory'); ?>/common/images/common/thumbnail_dummy.png"></li>
    </ul>
  </div>

  <div class="category_container">
  <h3 class="category_heading">カテゴリ</h3>
  <ul>
    <?php
    //引数：「echo」で出力せず、結果を変数$stringに代入します。
      $string = wp_list_categories(array(
            'title_li' =>'',
            'show_count' => 1,
            'echo' => 0 //変数等へ値を返す
          ));
    // preg_replace関数で正規表現で検索、置換します。
      $string = preg_replace('/<\/a> (\([0-9]*\))/', ' $1</a>', $string);
    //置換したデータを出力します。
    echo $string;
      ?>
  </ul>
  <strong></strong>
  </div>

  <div class="pastentry_container">
  <h3 class="pastentry_heading">過去のエントリー</h3>
  <ul class="entry">
    <?php query_posts('showposts=5'); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <li><?php the_date('Y年m月d日'); ?></br><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php endwhile; endif; ?>
  </ul>
  </div>

  <div class="monthlyentry_container">
  <h3 class="monthlyentry_heading">月ごとのエントリー</h3>
  <ul class="backnumber">
    <?php
        $string = wp_get_archives(array(
            'show_post_count' => 1,
            'echo' => 0
          ));
        echo preg_replace('/<\/a>&nbsp;(\([0-9]*\))/', ' <span class="count">$1</spn></a>', $string);?>
  </ul>
  </div>
</div>
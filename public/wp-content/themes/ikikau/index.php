<?php get_header(); ?>

<div class="blog container">
<article>
  <small class="pankuzu"><a href="#">トップページ</a> > Blog</small>
  <div class="blog_header">
    <img src="<?php bloginfo('template_directory'); ?>/common/images/common/seperator.png">
    <a href="<?php echo home_url(); ?>"><h1 class="blog_title">これはブログのダミータイトルです。</h1></a>
    <h4 class="blog_author">西加奈子</h4>
    <img src="<?php bloginfo('template_directory'); ?>/common/images/common/seperator.png">
  </div>
<?php query_posts('showposts=1'); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="section">
  <div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
  <div class="date"><?php the_date(); ?></div>
  <div class="content">
  <?php the_content(); ?>
  </div>
</div><!--section-->
<?php endwhile; ?>
<?php endif; ?>

<!-- ページナビゲーション -->
<div class="nav-below">
      <span class="nav-previous"><?php previous_post_link('%link', '＜ 前の記事へ'); ?></span>
      <span class="nav-top"><a href="#">Blogトップ</a></span>
      <span class="nav-next"><?php next_post_link('%link', '次の記事へ ＞'); ?></span>
 </div>
 <!-- /ページナビゲーション-->


</article>

<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
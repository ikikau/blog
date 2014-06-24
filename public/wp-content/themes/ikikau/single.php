<?php get_header(); ?>

<div class="blog container">
<article>
  <small class="pankuzu"><a href="#">トップページ</a> > <a href="<?php echo home_url(); ?>">Blog</a> > <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></small>
  <div class="blog_header">
    <img src="<?php bloginfo('template_directory'); ?>/common/images/common/seperator.png">
    <a href="<?php echo home_url(); ?>"><h1 class="blog_title">これはブログのダミータイトルです。</h1></a>
    <h4 class="blog_author">西加奈子</h4>
    <img src="<?php bloginfo('template_directory'); ?>/common/images/common/seperator.png">
  </div>
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
       <div class="section">
            <h1 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <div class="blog_info">
                 <ul>
                      <li class="cal"><?php the_time('Y年m月j日') ?></li>
                      <li class="cat"><?php the_category(', ') ?></li>
                      <li class="tag"><?php the_tags('', ', '); ?></li>
                 </ul>
                 <br class="clear" />
            </div>

            <?php if(has_post_thumbnail()) { echo the_post_thumbnail(); } ?>
            <div class="content">
              <?php the_content(); ?>
            </div>
       </div><!-- /.post -->
  <?php endwhile; ?>

      <div class="nav-below">
            <span class="nav-previous"><?php previous_post_link('%link', '＜ 前の記事へ'); ?></span>
            <span class="nav-top"><a href="#">Blogトップ</a></span>
            <span class="nav-next"><?php next_post_link('%link', '次の記事へ ＞'); ?></span>
       </div><!-- /.nav-below -->

<!-- Commetns -->
       <?php comments_template(); ?>

  <?php else : ?>

      <h2 class="title">記事が見つかりませんでした。</h2>
      <p>検索で見つかるかもしれません。</p><br />
      <?php get_search_form(); ?>

  <?php endif; ?>




</article>

<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>




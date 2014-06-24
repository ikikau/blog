<?php
/**
 * The template for displaying Category pages
 *
 * Used to display archive-type pages for posts in a category.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div class="blog container">
<article>
  <small class="pankuzu"><a href="#">トップページ</a> > <a href="<?php echo home_url(); ?>">Blog</a> > <?php printf( __( 'カテゴリー: %s', 'twentytwelve' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></small>
  <div class="blog_header">
    <img src="<?php bloginfo('template_directory'); ?>/common/images/common/seperator.png">
    <a href="<?php echo home_url(); ?>"><h1 class="blog_title">これはブログのダミータイトルです。</h1></a>
    <h4 class="blog_author">西加奈子</h4>
    <img src="<?php bloginfo('template_directory'); ?>/common/images/common/seperator.png">
  </div>

    <?php if ( have_posts() ) : ?>
      <header class="archive-header">

      <?php if ( category_description() ) : // Show an optional category description ?>
        <div class="archive-meta"><?php echo category_description(); ?></div>
      <?php endif; ?>
      </header><!-- .archive-header -->

      <?php while (have_posts()) : the_post(); ?>
        <div class="section">
        <div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
        <div class="date"><?php the_date(); ?></div>
        <?php the_content(); ?>
        </div><!--section-->
      <?php endwhile; ?>

    <?php else : ?>
      <?php get_template_part( 'content', 'none' ); ?>
    <?php endif; ?>


</article>

<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
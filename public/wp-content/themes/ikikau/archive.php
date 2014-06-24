<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Twelve already
 * has tag.php for Tag archives, category.php for Category archives, and
 * author.php for Author archives.
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
  <small class="pankuzu"><a href="#">トップページ</a> > <a href="<?php echo home_url(); ?>">Blog</a> > <?php
          if ( is_day() ) :
            printf( __( 'Daily Archives: %s', 'twentytwelve' ), '<span>' . get_the_date() . '</span>' );
          elseif ( is_month() ) :
            printf( __( 'Monthly Archives: %s', 'twentytwelve' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'twentytwelve' ) ) . '</span>' );
          elseif ( is_year() ) :
            printf( __( 'Yearly Archives: %s', 'twentytwelve' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'twentytwelve' ) ) . '</span>' );
          else :
            _e( 'Archives', 'twentytwelve' );
          endif;
        ?></small>
  <div class="blog_header">
    <img src="<?php bloginfo('template_directory'); ?>/common/images/common/seperator.png">
    <a href="<?php echo home_url(); ?>"><h1 class="blog_title">これはブログのダミータイトルです。</h1></a>
    <h4 class="blog_author">西加奈子</h4>
    <img src="<?php bloginfo('template_directory'); ?>/common/images/common/seperator.png">
  </div>
    <?php if ( have_posts() ) : ?>
      <header class="archive-header">
        <h1 class="archive-title"></h1>
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


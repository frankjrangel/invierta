<?php get_header(); ?>
<h1 class="titulo-archivo"><?php the_title(); ?></h1>
<div id="content">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>
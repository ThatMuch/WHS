<?
/**
 * @author      ThatMuch
 * @version     0.1.0
 * @since       mars_1.0.0
 */
?>

<?php get_header(); ?>
<main id="page" class="section__area bg__white line">

      <section class="container pt-5">
    <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
      </section>


</main>



<?php get_footer(); ?>

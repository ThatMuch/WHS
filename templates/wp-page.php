<?
/**
 * @author      ThatMuch
 * @version     0.1.0
 * @since       mars_1.0.0
 */
?>

<?php get_header(); ?>
<main id="page">

      <section class="container pt-5 pb-5">
    <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
      </section>


</main>



<?php get_footer(); ?>

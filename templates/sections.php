<?
/**
 * Template for ACF flexible elements
 *
 * @author      ThatMuch
 * @version     0.1.0
 * @since       mars_1.0.0
 *
 *
 */
?>
<?php /* Template Name: Sections */ ?>

<?php get_header(); ?>
<main id="sections">


  <?php if (have_posts()): while (have_posts()): the_post() ?>
  <div class="sections">
    <?php whs_sections() ?>
  </div>
  <?php endwhile; endif ?>

</main>

<?php get_footer() ?>
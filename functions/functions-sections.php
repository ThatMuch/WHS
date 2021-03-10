<?php
/**
 * functions to output ACFs flexible content
 *
 * @author     ThatMuch
 * @version    0.1.0
 * @since      mars_1.0.0
 *
 *
 */


/*==================================================================================
  SETTINGS/SETUP
==================================================================================*/


/* ADD TITLES BLOCKS
/––––––––––––––––––––––––––––––––––––*/
// adds the title sub-field to the ACF-row. Edit `name` at `add_filter` to match your ACF-value.
// » https://www.advancedcustomfields.com/resources/acf-fields-flexible_content-layout_title/
function whs_sections_backendtitle( $title, $field, $layout, $i ) {
  if (!empty(get_sub_field('title'))) {
  	$title = get_sub_field('title')." ($title)";
  }
  return $title;
}
add_filter('acf/fields/flexible_content/layout_title/name=sections', 'whs_sections_backendtitle', 10, 4);

/* GATHER SECTIONS
/––––––––––––––––––––––––*/
function whs_sections() {
  ob_start('sanitize_output');
  if (have_rows('sections')):
    while (have_rows('sections')): the_row();
     // if (get_row_layout() == 'articles') : whs_section_articles(); endif;
     // if (get_row_layout() == 'carousel') : whs_section_carousel(); endif;
      if (get_row_layout() == 'contact') : whs_section_contact(); endif;
      if (get_row_layout() == 'faq') : whs_section_faq(); endif;
    // if (get_row_layout() == 'gallery') : whs_section_gallery(); endif;
      if (get_row_layout() == 'header') : whs_section_header(); endif;
      if (get_row_layout() == 'link') : whs_section_link(); endif;
     // if (get_row_layout() == 'logos') : whs_section_logos(); endif;
    //  if (get_row_layout() == 'portfolio') : whs_section_portfolio(); endif;
    //  if (get_row_layout() == 'price') : whs_section_price(); endif;
    //  if (get_row_layout() == 'services') : whs_section_services(); endif;
    //  if (get_row_layout() == 'stats') : whs_section_stats(); endif;
      if (get_row_layout() == 'team') : whs_section_team(); endif;
      if (get_row_layout() == 'testimonials') : whs_section_testimonials(); endif;
      if (get_row_layout() == 'text_image') : whs_section_text_img(); endif;
      if (get_row_layout() == 'text') : whs_section_text(); endif;
      if (get_row_layout() == 'store') : whs_section_method(); endif;
    endwhile;
  endif;
  return ob_get_flush();
  var_dump('coco');
}


/*==================================================================================
  BLOCKS
==================================================================================*/
// add your custom sections here...

/* TEXT
/––––––––––––––––––––––––*/
function whs_section_text() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-text.php');
  return ob_get_flush();
}
/* TEXT + IMAGE
/––––––––––––––––––––––––*/
function whs_section_text_img() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-text-image.php');
  return ob_get_flush();
}

/* LINK
/––––––––––––––––––––––––*/
function whs_section_link() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-link.php');
  return ob_get_flush();
}

/* SERVICES
/––––––––––––––––––––––––*/
function whs_section_services() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-services.php');
  return ob_get_flush();
}

/* TEAM
/––––––––––––––––––––––––*/
function whs_section_team() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-team.php');
  return ob_get_flush();
}

/* PORTFOLIO
/––––––––––––––––––––––––*/
function whs_section_portfolio() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-portfolio.php');
  return ob_get_flush();
}

/* TESTIMONIALS
/––––––––––––––––––––––––*/
function whs_section_testimonials() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-testimonials.php');
  return ob_get_flush();
}

/* PRICE
/––––––––––––––––––––––––*/
function whs_section_price() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-price.php');
  return ob_get_flush();
}

/* LOGOS
/––––––––––––––––––––––––*/
function whs_section_logos() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-logos.php');
  return ob_get_flush();
}

/* CAROUSEL
/––––––––––––––––––––––––*/
function whs_section_carousel() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-carousel.php');
  return ob_get_flush();
}

/* GALLERY
/––––––––––––––––––––––––*/
function whs_section_gallery() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-gallery.php');
  return ob_get_flush();
}

/* CONTACT
/––––––––––––––––––––––––*/
function whs_section_contact() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-contact.php');
  return ob_get_flush();
}

/* STATS
/––––––––––––––––––––––––*/
function whs_section_stats() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-stats.php');
  return ob_get_flush();
}

/* FAQ
/––––––––––––––––––––––––*/
function whs_section_faq() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-faq.php');
  return ob_get_flush();
}
/* Header
/––––––––––––––––––––––––*/
function whs_section_header() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-header.php');
  return ob_get_flush();
}
/* Articles
/––––––––––––––––––––––––*/
function whs_section_articles() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-articles.php');
  return ob_get_flush();
}
/* Méthode
/––––––––––––––––––––––––*/
function whs_section_method() {
  ob_start('sanitize_output');
    include (get_theme_file_path().'/templates/section-method.php');
  return ob_get_flush();
}

?>
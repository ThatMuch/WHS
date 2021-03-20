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
      if (get_row_layout() == 'texte') : whs_section_texte(); endif;
      if (get_row_layout() == 'store') : whs_section_method(); endif;
      if (get_row_layout() == 'programme') : whs_section_program(); endif;
      if (get_row_layout() == 'referent') : whs_section_referent(); endif;

      if (get_row_layout() == 'program_steps') : whs_section_program_steps(); endif;
      if (get_row_layout() == 'program_details') : whs_section_program_details(); endif;
      if (get_row_layout() == 'liste_img') : whs_section_list_img(); endif;
      if (get_row_layout() == 'events') : whs_section_events(); endif;
      if (get_row_layout() == 'program_prices') : whs_section_program_prices(); endif;
      if (get_row_layout() == 'program_faq') : whs_section_program_faq(); endif;
      if (get_row_layout() == 'liste_icons') : whs_section_liste_icons(); endif;
      if (get_row_layout() == 'card') : whs_section_card(); endif;
      if (get_row_layout() == 'formidable') : whs_section_formidable(); endif;
      if (get_row_layout() == 'thematique') : whs_section_thematique(); endif;
    endwhile;
  endif;
  return ob_get_flush();
}


/*==================================================================================
  BLOCKS
==================================================================================*/
// add your custom sections here...

/* thematique
/––––––––––––––––––––––––*/
function whs_section_thematique() {
  ob_start('sanitize_output');
    include (get_theme_file_path().'/templates/section-thematique.php');
  return ob_get_flush();
}
/* formidable
/––––––––––––––––––––––––*/
function whs_section_formidable() {
  ob_start('sanitize_output');
    include (get_theme_file_path().'/templates/section-formidable.php');
  return ob_get_flush();
}
/* card
/––––––––––––––––––––––––*/
function whs_section_card() {
  ob_start('sanitize_output');
    include (get_theme_file_path().'/templates/section-card.php');
  return ob_get_flush();
}
/* liste_icons
/––––––––––––––––––––––––*/
function whs_section_liste_icons() {
  ob_start('sanitize_output');
    include (get_theme_file_path().'/templates/section-liste_icons.php');
  return ob_get_flush();
}
/* program_faq
/––––––––––––––––––––––––*/
function whs_section_program_faq() {
  ob_start('sanitize_output');
    include (get_theme_file_path().'/templates/section-program_faq.php');
  return ob_get_flush();
}
/* program_prices
/––––––––––––––––––––––––*/
function whs_section_program_prices() {
  ob_start('sanitize_output');
    include (get_theme_file_path().'/templates/section-program_prices.php');
  return ob_get_flush();
}
/* events
/––––––––––––––––––––––––*/
function whs_section_events() {
  ob_start('sanitize_output');
    include (get_theme_file_path().'/templates/section-events.php');
  return ob_get_flush();
}
/* list_img
/––––––––––––––––––––––––*/
function whs_section_list_img() {
  ob_start('sanitize_output');
    include (get_theme_file_path().'/templates/section-list_img.php');
  return ob_get_flush();
}
/* program_steps
/––––––––––––––––––––––––*/
function whs_section_program_steps() {
  ob_start('sanitize_output');
    include (get_theme_file_path().'/templates/section-program_steps.php');
  return ob_get_flush();
}
/* program_details
/––––––––––––––––––––––––*/
function whs_section_program_details() {
  ob_start('sanitize_output');
    include (get_theme_file_path().'/templates/section-program_details.php');
  return ob_get_flush();
}

/* TEXT
/––––––––––––––––––––––––*/
function whs_section_text() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-text.php');
  return ob_get_flush();
}
/* TEXTE
/––––––––––––––––––––––––*/
function whs_section_texte() {
  ob_start('sanitize_output');
    include (get_theme_file_path().'/templates/section-texte.php');
  return ob_get_flush();
}
/* TEXT + IMAGE
/––––––––––––––––––––––––*/
/* function whs_section_text_img() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-text-image.php');
  return ob_get_flush();
}
 */
/* LINK
/––––––––––––––––––––––––*/
/* function whs_section_link() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-link.php');
  return ob_get_flush();
}
 */
/* SERVICES
/––––––––––––––––––––––––*/
/* function whs_section_services() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-services.php');
  return ob_get_flush();
}
 */
/* TEAM
/––––––––––––––––––––––––*/
function whs_section_team() {
  ob_start('sanitize_output');
    include (get_theme_file_path().'/templates/section-team.php');
  return ob_get_flush();
}

/* PORTFOLIO
/––––––––––––––––––––––––*/
/* function whs_section_portfolio() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-portfolio.php');
  return ob_get_flush();
} */

/* TESTIMONIALS
/––––––––––––––––––––––––*/
function whs_section_testimonials() {
  ob_start('sanitize_output');
    include (get_theme_file_path().'/templates/section-testimonials.php');
  return ob_get_flush();
}

/* PRICE
/––––––––––––––––––––––––*/
/* function whs_section_price() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-price.php');
  return ob_get_flush();
} */

/* LOGOS
/––––––––––––––––––––––––*/
/* function whs_section_logos() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-logos.php');
  return ob_get_flush();
} */

/* CAROUSEL
/––––––––––––––––––––––––*/
/* function whs_section_carousel() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-carousel.php');
  return ob_get_flush();
} */

/* GALLERY
/––––––––––––––––––––––––*/
/* function whs_section_gallery() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-gallery.php');
  return ob_get_flush();
} */

/* CONTACT
/––––––––––––––––––––––––*/
function whs_section_contact() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-contact.php');
  return ob_get_flush();
}

/* STATS
/––––––––––––––––––––––––*/
/* function whs_section_stats() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-stats.php');
  return ob_get_flush();
} */

/* FAQ
/––––––––––––––––––––––––*/
function whs_section_faq() {
  ob_start('sanitize_output');
    include (get_theme_file_path().'/templates/section-faq.php');
  return ob_get_flush();
}
/* Header
/––––––––––––––––––––––––*/
function whs_section_header() {
  ob_start('sanitize_output');
    include (get_theme_file_path().'/templates/section-header.php');
  return ob_get_flush();
}
/* Articles
/––––––––––––––––––––––––*/
/* function whs_section_articles() {
  ob_start('sanitize_output');
    include (get_template_directory().'/templates/section-articles.php');
  return ob_get_flush();
} */
/* Méthode
/––––––––––––––––––––––––*/
function whs_section_method() {
  ob_start('sanitize_output');
    include (get_theme_file_path().'/templates/section-method.php');
  return ob_get_flush();
}
/* Programme
/––––––––––––––––––––––––*/
function whs_section_program() {
  ob_start('sanitize_output');
    include (get_theme_file_path().'/templates/section-program.php');
  return ob_get_flush();
}
/* Référent
/––––––––––––––––––––––––*/
function whs_section_referent() {
  ob_start('sanitize_output');
    include (get_theme_file_path().'/templates/section-referent.php');

  return ob_get_flush();
}

?>
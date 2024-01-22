<?php

/**
 *
 * Template Name: Whatsapp-mpay
 *
 * The template for displaying content from pagebuilder.
 *
 * This is the template that displays pages without title in fullwidth layout. Suitable for use with Pagebuilder.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package axis-new
 */

get_header();
get_template_part( 'components/header-s');
 get_template_part( 'components/Whatsapp-mpay/banner');
 get_template_part( 'components/header-s1');
 get_template_part( 'components/Whatsapp-mpay/whatsapp-mpay');
 get_template_part( 'components/contacts');
 get_template_part( 'components/footer-s');
 ?>

<?php get_footer(); ?>
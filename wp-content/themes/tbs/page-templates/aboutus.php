<?php
/**
 * Template Name: Giới thiệu
 * Description:
 *
 * Tip:
 *
 * @package WordPress
 * @subpackage tbs
 * @since tbs 1.0
 */
wp_enqueue_style('about-style', get_template_directory_uri() . '/assets/css/about.css', [], filemtime(get_template_directory() . '/assets/css/non-homepage.css'), 'all');
get_header();
$pageID = get_queried_object_id();
?>

<?php get_footer(); ?>

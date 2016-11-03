<?php
/*
  Template Name: Home Page
*/
get_header(); ?>

  <?php get_template_part('template-parts/content', 'hero'); ?>

  <?php get_template_part('template-parts/content', 'cta'); ?>

  <?php get_template_part('template-parts/content', 'industry'); ?>

  <?php get_template_part('template-parts/content', 'about'); ?>

  <?php get_template_part('template-parts/content', 'equipment'); ?>

  <?php get_template_part('template-parts/content', 'contact'); ?>

<?php get_footer(); ?>

<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage Spartan
 * @since Spartan 1.0
 */

get_header();

?>

<div id="o-header"></div>

<!-- C. WORK AREA +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- C.1. PAGE HEADER ------------------------------- -->

<?php get_template_part('inc/search-block'); ?>

<?php get_template_part('inc/navigation-home'); ?>

<!-- C.1. END --------------------------------------- -->

<main class="p-main">

  <!-- C.1. PAGE HEADER ------------------------------- -->

  <?php get_template_part('section-front'); ?>

  <!-- C.1. END --------------------------------------- -->

  <!-- C.2. SECTIONS -------------------------------- -->

  <?php get_template_part('section-blocks'); ?>

  <?php get_template_part('section-carousel'); ?>

  <!-- C.2. END ------------------------------------- -->

  <!-- C.3. FOOTER  --------------------------------- -->

  <?php get_footer(); ?>

  <!-- C.3. END ------------------------------------- -->

</main>

<!-- C. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- D. JAVASCRIPT ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- D.1. FOOTER JS -->

<?php get_template_part('inc/footer-scripts'); ?>

<!-- D. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
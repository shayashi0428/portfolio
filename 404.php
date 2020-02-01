<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Portfolio
 */

get_header();
?>

<main role="main" class="page-wrap">
  <div class="container">
    
    <section>
      <div class="content-404 page-basic">
        <h1 class="page-title"><?php _e('Page not found', 'portfolio'); ?></h1>
        <div class="page-content">
          <p><?php _e('Sorry, but it looks like nothing was found at this location.', 'portfolio'); ?></p>
        </div>
      </div>
    </section>

  </div>      
</main>

<?php get_footer(); ?>    
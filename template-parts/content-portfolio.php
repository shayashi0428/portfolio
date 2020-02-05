<?php
/**
 * Template part for displaying content of portfolio
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Portfolio
 */

?>

<?php
$add_post_class = post_custom('add-post-class');
$demo_link = post_custom('demo-link');                
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(array('portfolio-item', $add_post_class)); ?>>

  <!-- Shadow background rectangles -->
  <div class="img-shadow"></div>

  <!-- Titles -->
  <h3 class="portfolio-title">
    <?php if ($demo_link): ?>
      <a href="<?php echo esc_url(home_url($demo_link)); ?>" target="_blank"><?php the_title(); ?></a>
    <?php
    else:
      the_title();
    endif;
    ?>
  </h3>

  <!-- Content -->
  <p class="portfolio-description"><?php echo wp_trim_words(get_the_content()) ?></p>

  <!-- Demo links -->
  <?php if ($demo_link): ?>
    <a href="<?php echo esc_url(home_url($demo_link)); ?>" target="_blank" class="link demo-link"><span></span>DEMO</a>
  <?php endif; ?>

  <!-- Thumbnails -->
  <?php if (has_post_thumbnail()): ?>
    <div class="portfolio-img-container">
      <div class="content">
        <?php
        $thumbnail_id = get_post_thumbnail_id();
        $thumbnail_alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
        $post_title = get_the_title();
        $alt_text = $thumbnail_alt == '' ? $post_title: $thumbnail_alt;
        $attr = array(
          'title' => esc_attr($post_title),
          'alt' => esc_attr($alt_text)
        );
        if ($demo_link):
        ?>
          <a href="<?php echo esc_url(home_url($demo_link)); ?>" target="_blank"><?php the_post_thumbnail('post-thumbnail', $attr); ?></a>
        <?php
        else:
          the_post_thumbnail('post-thumbnail', $attr);
        endif;
        ?>
      </div>
    </div>
  <?php endif; ?>

</div>
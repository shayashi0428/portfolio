<?php
/**
 * Template part for displaying content of posts / pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Portfolio
 */

?>

<article id="psot-<?php the_ID(); ?>" <?php post_class('entry entry-basic'); ?>>

  <!-- Thumbnails -->
  <?php if (has_post_thumbnail()): ?>
    <div class="entry-thumbnail">
      <div class="content">
        <?php
        $thumbnail_id = get_post_thumbnail_id();
        $thumbnail_alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
        $post_title = get_the_title();
        $alt_text = $thumbnail_alt == '' ? $post_title : $thumbnail_alt;
        $attr = array(
          'title' => esc_attr($post_title),
          'alt' => esc_attr($alt_text)
        );
        the_post_thumbnail('post-thumbnail', $attr);
        ?>
      </div>
    </div>
  <?php endif; ?>

  <!-- Titles -->
  <h1 class="entry-title"><?php the_title(); ?></h1>

  <!-- Dates & categories -->
  <?php if (is_single()): ?>
    <div class="entry-meta">
      <span class="entry-date">
        <time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('M j, Y') ?></time>
      </span>
      <?php if (has_category()): ?>
        <div class="categories">
          <?php the_category(' '); ?>
        </div>
      <?php endif; ?>
    </div>
  <?php endif; ?>

  <!-- Content -->
  <div class="entry-content">
    <?php
    the_content();
    wp_link_pages();
    ?>
  </div>

  <!-- Demo links -->
  <?php
  $demo_link = post_custom('demo-link');
  if ($demo_link):
  ?>
    <a href="<?php echo esc_url(home_url($demo_link));?>" target="_blank" class="link entry-link"><span></span>DEMO</a>
  <?php endif; ?>

</article>
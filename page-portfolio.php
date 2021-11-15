<?php
/**
 * The template for displaying temporary portfolio page
 *
 * This is the template that displays a temporary portfolio page.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Portfolio
 */

$works = [
  [
    'title' => 'éclat Aesthetics',
    'desc' => 'An SEO and design focused website created with Webflow. Increased site traffic and sales with teamwork.',
    'keywords' => [ 'Webflow', 'SEO', 'Teamwork' ],
    'link' => 'https://www.eclatspa.co/',
    'img' => 'screenshot-eclat.png'
  ],
  [
    'title' => 'shunp clinic',
    'desc' => 'A blog site for Japanese comedian. Achieved design focused content developing custom WordPress theme.',
    'keywords' => [ 'WordPress', 'Custom Theme' ],
    'link' => 'https://shun-p.net/',
    'img' => 'screenshot-shunp.png'
  ],
  [
    'title' => 'redfish world',
    'desc' => 'A WordPress site for Japanese illustrator. Highlighted user interface with CSS & JS animations.',
    'keywords' => [ 'WordPress', 'Custom Theme' ],
    'link' => 'https://redfish-world.com/',
    'img' => 'screenshot-redfish.png'
  ],
  [
    'title' => 'car shop nanba',
    'desc' => 'A WordPress site developed customizing an existing theme. Improved site performance.',
    'keywords' => [ 'WordPress' ],
    'link' => 'https://carshopnanba.co.jp/',
    'img' => 'screenshot-carshop.png'
  ],
  [
    'title' => 'weather app',
    'desc' => 'A Weather app created using React. Accessing forecast data with Open Weather API.',
    'keywords' => [ 'React', 'Private Project' ],
    'link' => 'https://sachie-hayashi.com/demo/weather-app/',
    'img' => 'screenshot-weather-app.png'
  ],
];

get_header();
?>
  <section class="portfolio-temporary-wrapper">
    <div class="container">
      <h1 class="sr-only">Work</h1>
      <div class="portfolio-temporary-content">

        <?php foreach ($works as $work) : ?>

          <a href="<?php echo esc_url( $work['link'] ) ?>" target="_blank" class="portfolio-temporary-card shadow">
            <div class="portfolio-temporary-card-img">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/img/' . esc_attr( $work['img'] ) ); ?>" alt="<?php echo esc_attr( $work['title'] ); ?>" class="content w-100">
            </div>
            <div class="portfolio-temporary-card-content">
              <h2 class="portfolio-temporary-card-title"><?php echo esc_html( $work['title'] ) ?></h2>
              <p><?php echo esc_html( $work['desc'] ) ?></p>
              <div class="portfolio-temporary-card-btn-wrap">
                
                <?php 
                foreach ( $work['keywords'] as $keyword ) :
                  echo '<span class="portfolio-temporary-card-btn">' . esc_html( $keyword ) . '</span>';              
                endforeach;
                ?>

              </div>
            </div>
          </a>

        <?php endforeach; ?>
      </div>
    </div>
  </section>

<?php
get_footer();
?>
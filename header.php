<?php
/**
 * The template for displaying the header
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Portfolio
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <!-- <meta name="description" content="Sachie Hayashi - Front end web developer based in Vancouver"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php wp_head(); ?>
  </head>
  <body <?php body_class('base-grid'); ?>>
    <header>
    <!-- -------------------- Navigation -------------------- -->
      <nav id="header-nav" class="navbar">
        <div id="nav-toggle" class="nav-toggle">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div id="screen-overlay" class="screen-overlay"></div>
        <div id="slide-nav" class="main-nav">
          <ul id="nav-menu-links" class="nav-menu-links list-unstyled">
            <li>
              <a href="<?php echo esc_url(home_url()); ?>">HOME</a>
            </li>
            <li>
              <a href="<?php echo esc_url(home_url('#about')); ?>">ABOUT</a>
            </li>
            <li>
              <a href="<?php echo esc_url(home_url('#portfolio')); ?>">PORTFOLIO</a>
            </li>
            <li>
              <a href="<?php echo esc_url(home_url('#contact')); ?>">CONTACT</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
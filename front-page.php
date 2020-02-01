<?php
/**
 * The template for displaying the front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Portfolio
 */

get_header();
?>

    <main role="main">
    <!-- -------------------- Hero area -------------------- -->
      <div class="hero-wrapper">
        <div class="hero-area content">
          <div class="hero-img-shadow img-shadow"></div>
          <div class="hero-bg-img"></div>
          <div id="hero-img" class="hero-img-container">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/capybara.png" alt="capybara" class="hero-img">
          </div>
          <div id="hero-content" class="hero-content">
            <h1 class="hero-title"><span>Hello, I'm</span>SACHIE <br>HAYASHI</h1>
            <p class="hero-sub-title">Front End Web Developer</p>
            <a href="#portfolio" id="portfolio-link" class="btn btn-outline-dark-cyan">SEE PORTFOLIO</a>
          </div>
          <div class="hero-sideline"></div>
        </div>
      </div>
    <!-- -------------------- About -------------------- -->
      <section>
        <div id="about" class="about section-wrap">
          <h2 class="section-title mb-0">ABOUT ME</h2>
          <p class="section-description about-description">I'm a front end web developer from Japan and now living in Vancouver, Canada. I started learning web development in the beginning of 2019, and now I have the following skills.</p>
          <div class="section-img about-img-container">
            <div class="content">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/working_in_a_cafe_5447.jpg" alt="working in a cafe" class="img-wh100">
            </div>
          </div>
          <div class="personal-skills">
            <div class="skill-wrap">
              <span class="skill-title">HTML & CSS</span>
              <span class="skill-value" style="left: 75%">75%</span>
              <div class="progress">
                <div class="progress-bar" style="max-width: 75%;">
                </div>
              </div>
            </div>
            <div class="skill-wrap">
              <span class="skill-title">Sass</span>
              <span class="skill-value" style="left: 70%">70%</span>
              <div class="progress">
                <div class="progress-bar" style="max-width: 70%;">
                </div>
              </div>
            </div>
            <div class="skill-wrap">
              <span class="skill-title">JavaScript</span>
              <span class="skill-value" style="left: 60%">60%</span>
              <div class="progress">
                <div class="progress-bar" style="max-width: 60%;">
                </div>
              </div>
            </div>
            <div class="skill-wrap">
              <span class="skill-title">PHP</span>
              <span class="skill-value" style="left: 50%">50%</span>
              <div class="progress">
                <div class="progress-bar" style="max-width: 50%;">
                </div>
              </div>
            </div>
            <div class="skill-wrap">
              <span class="skill-title">Web Design</span>
              <span class="skill-value" style="left: 40%">40%</span>
              <div class="progress">
                <div class="progress-bar" style="max-width: 40%;">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- -------------------- Services -------------------- -->
      <section>
        <div id="services" class="services">
          <div class="bg-gradient"></div>
          <div class="dot-pattern dot-pattern-lg"></div>
          <div class="dot-pattern dot-pattern-sm"></div>
          <div class="services-container">
            <h2 class="section-title">WHAT I CAN DO</h2>
            <div class="service-items-wrap">
            <!-- --------------- Web design --------------- -->
              <div class="service-item">
                <i class="fas fa-desktop service-icon"></i>
                <h3 class="service-title">WEB DESIGN</h3>
                <p class="service-description">I just started learning web design and keep working to get new skills. I designed this website by myself!</p>
              </div>
            <!-- --------------- Web development --------------- -->
              <div class="service-item">
                <i class="fas fa-cogs service-icon"></i>
                <h3 class="service-title">WEB DEVELOPMENT</h3>
                <p class="service-description">I can create responsive websites with some animation using HTML, CSS and JavaScript (jQuery).</p>
              </div>
            <!-- --------------- WordPress --------------- -->
              <div class="service-item">
                <i class="fab fa-wordpress service-icon"></i>
                <h3 class="service-title">WORDPRESS</h3>
                <p class="service-description">I can customize existing WordPress themes and also build custom themes from scratch.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- -------------------- Portfolio -------------------- -->
      <section>
        <div id="portfolio" class="portfolio section-wrap">
          <h2 class="section-title text-center">PORTFOLIO</h2>
          <div class="portfolio-container">
            <!-- --------------- Custom WordPress theme --------------- -->
            <div class="portfolio-item custom-wp-theme">
              <div class="img-shadow"></div>
              <h3 class="portfolio-title"><a href="#">MY FIRST CUSTOM WORDPRESS THEME</a></h3>
              <p class="portfolio-description">This is the first custom WordPress theme I built from scratch. It's fully responsive, so it looks and works great on all devices.</p>
              <a href="#" class="link demo-link"><span></span>DEMO</a>
              <div class="portfolio-img-container">
                <div class="content">
                  <a href="#">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/custom_wordpress_theme_on_macbook.png" alt="custom wordpress theme">
                  </a>
                </div>
              </div>
            </div>
            <!-- --------------- Calculator --------------- -->
            <div class="portfolio-item calculator">
              <div class="img-shadow"></div>
              <h3 class="portfolio-title"><a href="#">CALCULATOR CREATED WITH JAVASCRIPT</a></h3>
              <p class="portfolio-description">This is a simple calculator created with HTML, CSS and JavaScript. I tried this project to have more JavaScript skills.</p>
              <a href="#" class="link demo-link"><span></span>DEMO</a>
              <div class="portfolio-img-container">
                <div class="content">
                  <a href="#">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/calculator.png" alt="calculator">
                  </a>
                </div>
              </div>
            </div>
            <!-- --------------- Simple website --------------- -->
            <div class="portfolio-item simple-website">
              <div class="img-shadow"></div>
                <h3 class="portfolio-title"><a href="#">SIMPLE WEBSITE FOR CODE TRAINING</a></h3>
                <p class="portfolio-description">I built this website to improve my coding skills and start learning web design. Note that this design is not what I created. It's from Adobe XD tutorials.</p>
                <a href="#" class="link demo-link"><span></span>DEMO</a>
              <div class="portfolio-img-container">
                <div class="content">
                  <a href="#">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/kotohajime_home.png" alt="simple website">
                  </a>
                </div>
              </div>
            </div>
            <!-- --------------- WordPress theme customization --------------- -->
            <div class="portfolio-item wp-theme-customize">
              <div class="img-shadow"></div>
                <h3 class="portfolio-title"><a href="#">WORDPRESS THEME CUSTOMIZATION</a></h3>
                <p class="portfolio-description">This is a website I created for an association by customizing an existing WordPress theme. I also made it a multilingual site with plugins.</p>
                <a href="#" class="link demo-link"><span></span>DEMO</a>
              <div class="portfolio-img-container">
                <div class="content">
                  <a href="#">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/theme_customization.png" alt="wordpress theme customization">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- -------------------- Contact -------------------- -->
      <section>
        <div id="contact" class="contact section-wrap">
          <div class="container">
            <h2 class="section-title text-center">CONTACT ME</h2>
            <div class="contact-form-wrap">
              <form action="" method="post" class="contact-form">
                <div class="form-name">
                  <input type="text" name="first-name" id="" placeholder="First Name">
                  <input type="text" name="last-name" id="" placeholder="Last Name">
                </div>
                <input type="email" name="email" id="" placeholder="Email">
                <input type="text" name="subject" id="" placeholder="Subject">
                <textarea name="message" id="" cols="30" rows="10" placeholder="Message"></textarea>
                <button type="submit" class="btn btn-dark-cyan">SEND</button>
              </form>
            </div>

          </div>

        </div>
      </section>
    </main>
    <!-- -------------------- Footer -------------------- -->
    
<?php get_footer(); ?>
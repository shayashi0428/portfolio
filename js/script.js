'use strict';

$(function() {

  /* ---------------- Navigation ---------------- */

  // Toggle navigation
  $('#nav-toggle, #screen-overlay, #nav-menu-links li').click(function() {
    $('#header-nav').toggleClass('nav-active');
  });

  // Smooth scrolling
  $('#nav-menu-links li a').click(function() {
    if (this.hash !== '') {
      const hash = this.hash;  //Store anchor (id)
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800);
    }
  });
  
  /* ---------------- Hero area ---------------- */
  
  $('#hero-content').children().each(function(index) {
    $(this).addClass('fadeinX').css('animation-delay', `${index / 8}s`);
  });
  
  $('#hero-img').addClass('fadeinX');  

  /* ---------------- Progress bars ---------------- */

  // Execute on load
  animateInViewport('.skill-wrap', 'progress-animation');
  // Bind event listener
  $(window).scroll(function() {
    animateInViewport('.skill-wrap', 'progress-animation');
  });  
  
  /* ---------------- Portfolio ---------------- */
  
  // Execute on load
  animateInViewport('.portfolio-item', 'fadeinY', 0.15);
  // Bind event listener
  $(window).scroll(function() {
    animateInViewport('.portfolio-item', 'fadeinY', 0.15);
  });
  
  /* ---------------- Animation functions ---------------- */
  
  function animateInViewport(selector, addClass, startPoint) {  // startPoint: animation starting point, vh from viewport top/bottom, set 0 - 0.5 as needed
    $(selector).each(function() {
      const $viewportTop = $(window).scrollTop() + $('#header-nav').outerHeight();
      const $viewportBottom = $(window).scrollTop() + $(window).height();
      const $elementTop = $(this).offset().top;
      const $elementBottom = $elementTop + $(this).height();
      
      if (startPoint) {
        const $startPoint = $(window).height() * startPoint;  // e.g. startPoint = 0.15 (15vh from viewport top/bottom)
        if ($elementTop + $startPoint < $viewportBottom && $elementBottom - $startPoint > $viewportTop) {
          $(this).addClass(addClass);
        }
      } else {
        if ($elementTop > $viewportTop && $elementBottom < $viewportBottom) {
          $(this).addClass(addClass);
        }
      }
    });
  }

  
});
(function ($) {
  'use strict';

  /* ..............................................
	Loader 
    ................................................. */

  $(window).on('load', function () {
    $('.preloader').fadeOut();
    $('#preloader').delay(350).fadeOut('slow'); /* 550 */
    $('body').delay(350).css({ overflow: 'visible' }); /*450*/
  });

  /* ..............................................
    Navbar Bar
    ................................................. */

  $('.navbar-nav .nav-link').on('click', function () {
    var toggle = $('.navbar-toggler').is(':visible');
    if (toggle) {
      $('.navbar-collapse').collapse('hide');
    }
  });

  /* ..............................................
    Fixed Menu
    ................................................. */

  $(window).on('scroll', function () {
    if ($(window).scrollTop() > 50) {
      $('.top-header').addClass('fixed-menu');
    } else {
      $('.top-header').removeClass('fixed-menu');
    }
  });

  /* ..............................................
    Properties Filter
    ................................................. */
  var Container = $('.container');
  Container.imagesLoaded(function () {
    var portfolio = $('.properties-menu');
    portfolio.on('click', 'button', function () {
      $(this).addClass('active').siblings().removeClass('active');
      var filterValue = $(this).attr('data-filter');
      $grid.isotope({
        filter: filterValue,
      });
    });
    var $grid = $('.properties-list').isotope({
      itemSelector: '.properties-grid',
    });
  });

  /* ..............................................
    Gallery
    ................................................. */

  $(document).ready(function () {
    $('.popup-gallery').magnificPopup({
      delegate: 'a',
      type: 'image',
      tLoading: 'Loading image #%curr%...',
      mainClass: 'mfp-img-mobile',
      gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0, 1], // Will preload 0 - before current, and 1 after the current image
      },
      image: {
        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
        titleSrc: function (item) {
          return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
        },
      },
    });
  });

  /* ..............................................
    Scroll To Top
    ................................................. */

  $(document).ready(function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
        $('#scroll-to-top').fadeIn();
      } else {
        $('#scroll-to-top').fadeOut();
      }
    });

    $('#scroll-to-top').click(function () {
      $('html, body').animate(
        {
          scrollTop: 0,
        },
        600
      );
      return false;
    });
  });

  //dropdown
  const $dropdown = $('.dropdown');
  const $dropdownToggle = $('.dropdown-toggle');
  const $dropdownMenu = $('.dropdown-menu');
  const showClass = 'show';

  $(window).on('load resize', function () {
    if (this.matchMedia('(min-width: 768px)').matches) {
      $dropdown.hover(
        function () {
          const $this = $(this);
          $this.addClass(showClass);
          $this.find($dropdownToggle).attr('aria-expanded', 'true');
          $this.find($dropdownMenu).addClass(showClass);
        },
        function () {
          const $this = $(this);
          $this.removeClass(showClass);
          $this.find($dropdownToggle).attr('aria-expanded', 'false');
          $this.find($dropdownMenu).removeClass(showClass);
        }
      );
    } else {
      $dropdown.off('mouseenter mouseleave');
    }
  });
})(jQuery);

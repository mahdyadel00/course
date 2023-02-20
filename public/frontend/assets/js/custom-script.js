"use strict";
(function () {
  // Global variables
  var
    userAgent = navigator.userAgent.toLowerCase(),
    initialDate = new Date(),

    $document = $(document),
    $window = $(window),
    $html = $("html"),
    $body = $("body"),

    isDesktop = $html.hasClass("desktop"),
    isIE = userAgent.indexOf("msie") !== -1 ? parseInt(userAgent.split("msie")[1], 10) : userAgent.indexOf("trident") !== -1 ? 11 : userAgent.indexOf("edge") !== -1 ? 12 : false,
    isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent),
    windowReady = false,

    plugins = {
      bootstrapTooltip: $('[data-toggle="tooltip"]'),
      bootstrapModal: $('.modal'),
      bootstrapTabs: $('.tabs-custom'),
      captcha: $('.recaptcha'),
      campaignMonitor: $('.campaign-mailform'),
      copyrightYear: $('.copyright-year'),
      checkbox: $('input[type="checkbox"]'),
      lightGallery: $('[data-lightgallery="group"]'),
      lightGalleryItem: $('[data-lightgallery="item"]'),
      lightDynamicGalleryItem: $('[data-lightgallery="dynamic"]'),
      materialParallax: $('.parallax-container'),
      mailchimp: $('.mailchimp-mailform'),
      popover: $('[data-toggle="popover"]'),
      preloader: $('.preloader'),
      rdNavbar: $('.rd-navbar'),
      rdMailForm: $('.rd-mailform'),
      rdInputLabel: $('.form-label'),
      regula: $('[data-constraints]'),
      radio: $('input[type="radio"]'),
      search: $('.rd-search'),
      searchResults: $('.rd-search-results'),
      statefulButton: $('.btn-stateful'),
      viewAnimate: $('.view-animate'),
      wow: $('.wow'),
      maps: $('.google-map-container'),
      dataSplitting: $('[data-splitting]'),
      selectFilter: $("select"),
      slick: $('.slick-slider'),
      swiper: document.querySelectorAll('.swiper-container'),
      counter: document.querySelectorAll('.counter'),
      progressLinear: document.querySelectorAll('.progress-linear'),
      progressCircle: document.querySelectorAll('.progress-circle'),
      countdown: document.querySelectorAll('.countdown'),
      waves: document.querySelectorAll('.waves')
    };

  /**
   * @desc Check the element was been scrolled into the view
   * @param {object} elem - jQuery object
   * @return {boolean}
   */
  function isScrolledIntoView(elem) {
    return elem.offset().top + elem.outerHeight() >= $window.scrollTop() && elem.offset().top <= $window.scrollTop() + $window.height();
  }

  /**
   * @desc Calls a function when element has been scrolled into the view
   * @param {object} element - jQuery object
   * @param {function} func - init function
   */
  function lazyInit(element, func) {
    var scrollHandler = function () {
      if ((!element.hasClass('lazy-loaded') && (isScrolledIntoView(element)))) {
        func.call(element);
        element.addClass('lazy-loaded');
      }
    };

    scrollHandler();
    $window.on('scroll', scrollHandler);
  }

  // Initialize scripts that require a loaded window
  $window.on('load', function () {


    // // Page loader & Page transition
    // if (plugins.preloader.length) {
    //   pageTransition({
    //     target: document.querySelector( '.page' ),
    //     delay: 0,
    //     duration: 500,
    //     classIn: 'fadeIn',
    //     classOut: 'fadeOut',
    //     classActive: 'completed',
    //     conditions: function (event, link) {
    //       return link && !/(\#|javascript:void\(0\)|callto:|tel:|mailto:|:\/\/)/.test(link) && !event.currentTarget.hasAttribute('data-lightgallery');
    //     },
    //     onTransitionStart: function ( options ) {
    //       setTimeout( function () {
    //         plugins.preloader.removeClass('loaded');
    //       }, options.duration * .75 );
    //     },
    //     onReady: function () {
    //       plugins.preloader.addClass('loaded');
    //       windowReady = true;
    //     }
    //   });
    // }

    // WOW
    if (plugins.wow.length && isDesktop) {
      new WOW({
        offset: -100,
      }).init();
    }

    if (plugins.waves.length) {
      for (var i = 0; i < plugins.waves.length; i++) {
        var wave = plugins.waves[i];
        var waves = new SineWaves({
          el: wave,
          speed: wave.getAttribute('data-speed') || 5,
          width: function () {
            return $(window).width();
          },

          height: function () {
            return $(window).height();
          },

          ease: wave.getAttribute('data-animation') || 'SineInOut',
          wavesWidth: wave.getAttribute('data-wave-width') || '150%',
          waves: [
            {
              timeModifier: 0.6,
              lineWidth: 5,
              amplitude: -200,
              wavelength: 200
            },
            {
              timeModifier: 0.13,
              lineWidth: 5,
              amplitude: -300,
              wavelength: 300
            }
          ],

          // Called on window resize
          resizeEvent: function () {
            var gradient1 = this.ctx.createLinearGradient(0, 0, this.width, 0);
            gradient1.addColorStop(0, "rgba(0, 172, 238, 1)");
            gradient1.addColorStop(0.54, "rgba(239, 165, 6, 1)");
            gradient1.addColorStop(1, "rgba(236, 57, 139, 1)");

            var gradient2 = this.ctx.createLinearGradient(0, 0, this.width, 0);
            gradient2.addColorStop(0, "rgba(32, 171, 208, 1)");
            gradient2.addColorStop(0.50, "rgba(83, 72, 182, 1)");
            gradient2.addColorStop(1, "rgba(234, 8, 140, 1)");

            var index = -1;
            var length = this.waves.length;
            while (++index < length) {
              if (index === 0) {
                this.waves[index].strokeStyle = gradient1;
              }
              else {
                this.waves[index].strokeStyle = gradient2;
              }
            }

            // Clean Up
            index = void 0;
            length = void 0;
            gradient1 = void 0;
            gradient2 = void 0;
          }
        });

        $window.scroll(function () {
          if (!isScrolledIntoView($(wave))) {
            waves.running = false;
            waves.update();
          } else {
            waves.running = true;
            waves.update();
          }
        });
      }


    }
  });

  // Initialize scripts that require a finished document
  $(function () {

    /**
     * @desc Sets the actual previous index based on the position of the slide in the markup. Should be the most recent action.
     * @param {object} swiper - swiper instance
     */
    function setRealPrevious(swiper) {
      var element = swiper.$wrapperEl[0].children[swiper.activeIndex];
      swiper.realPrevious = Array.prototype.indexOf.call(element.parentNode.children, element);
    }

    /**
     * @desc Sets slides background images from attribute 'data-slide-bg'
     * @param {object} swiper - swiper instance
     */
    function setBackgrounds(swiper) {
      var swiperSlides = swiper.el.querySelectorAll('[data-slide-bg]');
      for (var i = 0; i < swiperSlides.length; i++) {
        var swiperSlide = swiperSlides[i];
        swiperSlide.style.backgroundImage = 'url(' + swiperSlide.getAttribute('data-slide-bg') + ')';
      }
    }

    /**
     * @desc Animate captions on active slides
     * @param {object} swiper - swiper instance
     */
    function initCaptionAnimate(swiper) {
      var
        animate = function (caption) {
          return function () {
            var duration;
            if (duration = caption.getAttribute('data-caption-duration')) caption.style.animationDuration = duration + 'ms';
            caption.classList.remove('not-animated');
            caption.classList.add(caption.getAttribute('data-caption-animate'));
            caption.classList.add('animated');
          };
        },
        initializeAnimation = function (captions) {
          for (var i = 0; i < captions.length; i++) {
            var caption = captions[i];
            caption.classList.remove('animated');
            caption.classList.remove(caption.getAttribute('data-caption-animate'));
            caption.classList.add('not-animated');
          }
        },
        finalizeAnimation = function (captions) {
          for (var i = 0; i < captions.length; i++) {
            var caption = captions[i];
            if (caption.getAttribute('data-caption-delay')) {
              setTimeout(animate(caption), Number(caption.getAttribute('data-caption-delay')));
            } else {
              animate(caption)();
            }
          }
        };

      // Caption parameters
      swiper.params.caption = {
        animationEvent: 'slideChangeTransitionEnd'
      };

      initializeAnimation(swiper.$wrapperEl[0].querySelectorAll('[data-caption-animate]'));
      finalizeAnimation(swiper.$wrapperEl[0].children[swiper.activeIndex].querySelectorAll('[data-caption-animate]'));

      if (swiper.params.caption.animationEvent === 'slideChangeTransitionEnd') {
        swiper.on(swiper.params.caption.animationEvent, function () {
          initializeAnimation(swiper.$wrapperEl[0].children[swiper.previousIndex].querySelectorAll('[data-caption-animate]'));
          finalizeAnimation(swiper.$wrapperEl[0].children[swiper.activeIndex].querySelectorAll('[data-caption-animate]'));
        });
      } else {
        swiper.on('slideChangeTransitionEnd', function () {
          initializeAnimation(swiper.$wrapperEl[0].children[swiper.previousIndex].querySelectorAll('[data-caption-animate]'));
        });

        swiper.on(swiper.params.caption.animationEvent, function () {
          finalizeAnimation(swiper.$wrapperEl[0].children[swiper.activeIndex].querySelectorAll('[data-caption-animate]'));
        });
      }
    }

    /**
     * @desc Create live search results
     * @param {object} options
     */
    function liveSearch(options) {
      $('#' + options.live).removeClass('cleared').html();
      options.current++;
      options.spin.addClass('loading');
      $.get(handler, {
        s: decodeURI(options.term),
        liveSearch: options.live,
        dataType: "html",
        liveCount: options.liveCount,
        filter: options.filter,
        template: options.template
      }, function (data) {
        options.processed++;
        var live = $('#' + options.live);
        if ((options.processed === options.current) && !live.hasClass('cleared')) {
          live.find('> #search-results').removeClass('active');
          live.html(data);
          setTimeout(function () {
            live.find('> #search-results').addClass('active');
          }, 50);
        }
        options.spin.parents('.rd-search').find('.input-group-addon').removeClass('loading');
      })
    }

    // Google ReCaptcha
    if (plugins.captcha.length) {
      $.getScript("//www.google.com/recaptcha/api.js?onload=onloadCaptchaCallback&render=explicit&hl=en");
    }

    // Additional class on html if mac os.
    if (navigator.platform.match(/(Mac)/i)) {
      $html.addClass("mac-os");
    }

    // Adds some loosing functionality to IE browsers (IE Polyfills)
    if (isIE) {
      if (isIE === 12) $html.addClass("ie-edge");
      if (isIE === 11) $html.addClass("ie-11");
      if (isIE < 10) $html.addClass("lt-ie-10");
      if (isIE < 11) $html.addClass("ie-10");
    }

    // Bootstrap Tooltips
    if (plugins.bootstrapTooltip.length) {
      var tooltipPlacement = plugins.bootstrapTooltip.attr('data-placement');
      initBootstrapTooltip(tooltipPlacement);

      $window.on('resize orientationchange', function () {
        initBootstrapTooltip(tooltipPlacement);
      })
    }

    // Bootstrap Modal
    if (plugins.bootstrapModal.length) {
      for (var i = 0; i < plugins.bootstrapModal.length; i++) {
        var modalItem = $(plugins.bootstrapModal[i]);

        modalItem.on('hidden.bs.modal', $.proxy(function () {
          var activeModal = $(this),
            rdVideoInside = activeModal.find('video'),
            youTubeVideoInside = activeModal.find('iframe');

          if (rdVideoInside.length) {
            rdVideoInside[0].pause();
          }

          if (youTubeVideoInside.length) {
            var videoUrl = youTubeVideoInside.attr('src');

            youTubeVideoInside
              .attr('src', '')
              .attr('src', videoUrl);
          }
        }, modalItem))
      }
    }

    // Popovers
    if (plugins.popover.length) {
      if (window.innerWidth < 767) {
        plugins.popover.attr('data-placement', 'bottom');
        plugins.popover.popover();
      }
      else {
        plugins.popover.popover();
      }
    }

    // Bootstrap tabs
    if (plugins.bootstrapTabs.length) {
      for (var i = 0; i < plugins.bootstrapTabs.length; i++) {
        var bootstrapTab = $(plugins.bootstrapTabs[i]);

        //If have slick carousel inside tab - resize slick carousel on click
        if (bootstrapTab.find('.slick-slider').length) {
          bootstrapTab.find('.tabs-custom-list > li > a').on('click', $.proxy(function () {
            var $this = $(this);
            var setTimeOutTime = 300;

            setTimeout(function () {
              $this.find('.tab-content .tab-pane.active .slick-slider').slick('setPosition');
            }, setTimeOutTime);
          }, bootstrapTab));
        }

        var tabs = plugins.bootstrapTabs[i].querySelectorAll('.nav li a');

        for (var t = 0; t < tabs.length; t++) {
          var tab = tabs[t];

          if (t === 0) {
            tab.parentElement.classList.remove('active');
            $(tab).tab('show');
          }

          tab.addEventListener('click', function (event) {
            event.preventDefault();
            $(this).tab('show');
          });
        }
      }
    }

    // Bootstrap Buttons
    if (plugins.statefulButton.length) {
      $(plugins.statefulButton).on('click', function () {
        var statefulButtonLoading = $(this).button('loading');

        setTimeout(function () {
          statefulButtonLoading.button('reset')
        }, 2000);
      })
    }


    // Copyright Year (Evaluates correct copyright year)
    if (plugins.copyrightYear.length) {
      plugins.copyrightYear.text(initialDate.getFullYear());
    }

    // Google maps
    if (plugins.maps.length) {
      lazyInit(plugins.maps, initMaps);
    }

    // UI To Top
    if (isDesktop) {
      $().UItoTop({
        easingType: 'easeOutQuad',
        containerClass: 'ui-to-top fa fa-angle-up'
      });
    }

    // RD Navbar
    if (plugins.rdNavbar.length) {
      var
        navbar = plugins.rdNavbar,
        aliases = { '-': 0, '-sm-': 576, '-md-': 768, '-lg-': 992, '-xl-': 1200, '-xxl-': 1600 },
        responsive = {};

      for (var alias in aliases) {
        var link = responsive[aliases[alias]] = {};
        if (navbar.attr('data' + alias + 'layout')) link.layout = navbar.attr('data' + alias + 'layout');
        if (navbar.attr('data' + alias + 'device-layout')) link.deviceLayout = navbar.attr('data' + alias + 'device-layout');
        if (navbar.attr('data' + alias + 'hover-on')) link.focusOnHover = navbar.attr('data' + alias + 'hover-on') === 'true';
        if (navbar.attr('data' + alias + 'auto-height')) link.autoHeight = navbar.attr('data' + alias + 'auto-height') === 'true';
        if (navbar.attr('data' + alias + 'stick-up-offset')) link.stickUpOffset = navbar.attr('data' + alias + 'stick-up-offset');
        if (navbar.attr('data' + alias + 'stick-up')) link.stickUp = navbar.attr('data' + alias + 'stick-up') === 'true';
        else if (navbar.attr('data' + alias + 'stick-up')) link.stickUp = navbar.attr('data' + alias + 'stick-up') === 'true';
      }

      plugins.rdNavbar.RDNavbar({
        anchorNav: true,
        stickUpClone: (plugins.rdNavbar.attr("data-stick-up-clone")) ? plugins.rdNavbar.attr("data-stick-up-clone") === 'true' : false,
        responsive: responsive,
        autoHeight: false,
        callbacks: {
          onStuck: function () {
            var navbarSearch = this.$element.find('.rd-search input');

            if (navbarSearch) {
              navbarSearch.val('').trigger('propertychange');
            }
          },
          onDropdownOver: function () {
            return true;
          },
          onUnstuck: function () {
            if (this.$clone === null)
              return;

            var navbarSearch = this.$clone.find('.rd-search input');

            if (navbarSearch) {
              navbarSearch.val('').trigger('propertychange');
              navbarSearch.trigger('blur');
            }
          }
        }
      });

      var currentScroll = 0;
      $window.scroll(function (event) {
        var nextScroll = $(this).scrollTop();

        if (nextScroll > currentScroll) {
          plugins.rdNavbar.addClass('scroll-bottom');
        } else {
          plugins.rdNavbar.removeClass('scroll-bottom');
        }

        currentScroll = nextScroll;
      })

    }

    // Swiper
    if (plugins.swiper.length) {
      for (var i = 0; i < plugins.swiper.length; i++) {

        var
          sliderMarkup = plugins.swiper[i],
          swiper,
          options = {
            loop: sliderMarkup.getAttribute('data-loop') === 'true' || false,
            effect: isIE ? 'slide' : sliderMarkup.getAttribute('data-effect') || 'slide',
            direction: sliderMarkup.getAttribute('data-direction') || 'horizontal',
            speed: sliderMarkup.getAttribute('data-speed') ? Number(sliderMarkup.getAttribute('data-speed')) : 1000,
            allowTouchMove: false,
            preventIntercationOnTransition: true,
            runCallbacksOnInit: false,
            separateCaptions: sliderMarkup.getAttribute('data-separate-captions') === 'true' || false
          };

        if (sliderMarkup.getAttribute('data-autoplay')) {
          options.autoplay = {
            delay: Number(sliderMarkup.getAttribute('data-autoplay')) || 3000,
            stopOnLastSlide: false,
            disableOnInteraction: true,
            reverseDirection: false,
          };
        }

        if (sliderMarkup.getAttribute('data-keyboard') === 'true') {
          options.keyboard = {
            enabled: sliderMarkup.getAttribute('data-keyboard') === 'true',
            onlyInViewport: true
          };
        }

        if (sliderMarkup.getAttribute('data-mousewheel') === 'true') {
          options.mousewheel = {
            releaseOnEdges: true,
            sensitivity: .1
          };
        }

        if (sliderMarkup.querySelector('.swiper-button-next, .swiper-button-prev')) {
          options.navigation = {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
          };
        }

        if (sliderMarkup.querySelector('.swiper-pagination')) {
          options.pagination = {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true
          };
        }

        if (sliderMarkup.querySelector('.swiper-scrollbar')) {
          options.scrollbar = {
            el: '.swiper-scrollbar',
            hide: true,
            draggable: true
          };
        }

        options.on = {
          init: function () {
            setBackgrounds(this);
            setRealPrevious(this);
            initCaptionAnimate(this);

            // Real Previous Index must be set recent
            this.on('slideChangeTransitionEnd', function () {
              setRealPrevious(this);
            });
          }
        };

        swiper = new Swiper(plugins.swiper[i], options);
      }
    }

  });
}());

//Speaker item-2 hover js
$('.addClass').hover(function () {
  var element = $(this).parent('.speaker-inner');
  if (element.hasClass('show')) {
    element.removeClass('show');
    element.find('.speaker-inner').removeClass('show');
  } else {
    element.addClass('show');
  }
})

const btn = document.getElementById("btn")
const info = document.getElementById("info")
const form = document.getElementById("user-form")
const close = document.getElementById("close-btn")

btn.addEventListener('click', ()=>{
  btn.style.display = "none"
  info.style.display = "none"
  form.style.display = "block"
});

close.addEventListener('click', (event)=>{
  event.preventDefault()
  btn.style.display = "block"
  info.style.display = "block"
  form.style.display = "none"
});


const btn_pass = document.getElementById("btn-pass")
const change_password_form = document.getElementById("change-password-form")

btn_pass.addEventListener('click', ()=>{
  btn_pass.style.display = "none"
  change_password_form.style.display = "block"
});


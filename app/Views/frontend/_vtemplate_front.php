<!DOCTYPE html>
<html lang="en">
<!-- last update : 2021 ..... Sabtu, 27 Juni 2020  -->
<!-- Updated by :  Web Dev IMC 2021 ....Ridwan Satrio Haikusuma -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Tampilan Mobile -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>Indonesia Millenial Connect</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <!-- Favicon Image -->
    <link rel="shortcut icon" href="/assets/images/company-profile/IMC - background full colour.jpg" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" />

    <!-- Fontawesome 5.15.3 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="/assets/css/pogo-slider.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="/assets/css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="/assets/css/responsive.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/assets/css/custom.css" />
    <!--swiperjs-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- PAGES ABOUT RESPONSIVE -->
    <link rel="stylesheet" href="/assets/css/responsive-eka.css">

    <!-- BUTTON PADA DETAIL EVENT  -->
    <link rel="stylesheet" href="/assets/css/style_ek.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">


    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
            <img src="/assets/images/loader.gif" alt="#" />
        </div>
    </div>
    <!-- end loader -->
    <!-- END LOADER -->


    <!-- Start header -->
    <header class="top-header">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="<?= base_url('Chome') ?>"><img src="/assets/images/company-profile/IMC - background full colour.jpg"
                        alt="Logo IMC"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd"
                    aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="<?= base_url('Chome') ?>">Home</a></li>
                        <li><a class="nav-link" href="<?= base_url('Chome/about') ?>">About</a></li>
                        <div class="dropdown">
                            <a class="btn dropdown-toggle" data-toggle="dropdown">Program
                                <span class="caret"></span></a>
                            <div class="container">
                                <ul class="dropdown-menu">
                                    <?php foreach($jp as $i):
                                    $slug_js=$i['slug_js'];
                                    $jenis_program=$i['jenis_program'];?>
                                    <li><a href="<?= base_url('Chome/menuProgram/') ?>/<?php echo $slug_js; ?>"><?php echo $jenis_program ?></a></li>
                                    <?php endforeach ?>
                                </ul>
                            </div>



                        </div>
                        <li><a class="nav-link" href="<?= base_url('Chome/team') ?>">Team</a></li>
                        <li><a class="nav-link" href="<?= base_url('Chome/menuEvents') ?>">Events</a></li>
                        <div class="dropdown">
                            <a class="btn dropdown-toggle" data-toggle="dropdown">Community
                                <span class="caret"></span></a>
                            <div class="container">
                                <ul class="dropdown-menu">
                                    <?php foreach($jr as $i):
                                    $slug_r=$i['slug_r'];
                                    $region=$i['region'];?>
                                    <li><a href="<?= base_url('Chome/detailCommunity/') ?>/<?php echo $slug_r; ?>">IMC <?php echo $region ?></a></li>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                        </div>
                        <li><a class="nav-link" href="<?= base_url('Chome/contact') ?>">Contact</a></li>

                        <!-- Search form -->
                        <!-- Search form -->
                        <form method="post" action="/Chome/search" class="form-inline d-flex justify-content-center md-form form-sm active-cyan-2 mt-2 box-searchh" style="margin-left:1em;">
                            <i class="fa fa-search" aria-hidden="true"></i><input name="cari"
                                class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search"
                                aria-label="Search">
                        </form>



                        <li><a class="nav-link" href="<?= base_url('/Clogin'); ?>">Login</a></li>

                        <!-- Mode-Dark -->
                        <div class="slide-dark">
                          <input type="checkbox" class="mode-checkbox" id="chk" />
                          <label class="mode-label" for="chk">
                            <i class="fas fa-moon"></i>
                            <i class="fas fa-sun"></i>
                            <div class="ball"></div>
                          </label>
                        </div>
                    </ul>
                </div>
                <!--<div class="search-box">
					<input type="text" class="search-txt" placeholder="Search">
					<a class="search-btn">
						<img src="images/search_icon.png" alt="#" />
					</a>
				</div>-->
            </div>
        </nav>
    </header>
    <!-- End header -->






<?= $this->renderSection('content_front'); ?>









    <!-- Start Footer -->
    <footer class="footer-box">
        <div class="container footer-ek">

            <div class="row">

                <div class="col-md-3 resp-footer">
                    <div class="footer_blog resp-footer">
                        <div class="full margin-bottom_30 resp-footer">
                            <img src="/assets/images/company-profile/IMC - background full colour.jpg" alt="#" class="imc-foot-icon resp-footer"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer_blog footer_menu white_fonts">
                        <h3>Quick links</h3>
                        <ul>
                            <li><a href="/Chome">> Home</a></li>
                            <li><a href="/Chome/team">> Team</a></li>
                            <li><a href="/Chome/menuEvents">> Events</a></li>
                            <li><a href="/Chome/contact">> Contact</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="footer_blog full white_fonts">
                        <h3>Contact us</h3>
                        <ul class="full">
                            <li><img src="/assets/images/i5.png"><span>Jl. Amal Bakti No. 43 Rengas, Ciputat
                                    Timur<br>Tangerang
                                    Selatan, Banten 15412</span></li>
                            <li><img src="/assets/images/i6.png"><span>indonesiamillenialconnect@gmail.com</span>
                            </li>
                            <li><img src="/assets/images/i7.png"><span>0812-9815-1717</span></li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </footer>
    <!-- End Footer -->

    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="crp">&copy; 2021</p>
                </div>
            </div>
        </div>
    </div>

    <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>



    <!-- ALL JS FILES -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/assets/js/jquery.pogo-slider.min.js"></script>
    <script src="/assets/js/slider-index.js"></script>
    <script src="/assets/js/smoothscroll.js"></script>
    <script src="/assets/js/form-validator.min.js"></script>
    <script src="/assets/js/contact-form-script.js"></script>
    <script src="/assets/js/isotope.min.js"></script>
    <script src="/assets/js/images-loded.min.js"></script>
    <script src="/assets/js/custom.js"></script>
    <!--swiperjs-->
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


    <script>
      const chk = document.getElementById('chk');

      chk.addEventListener('change', () => {
        // document.body.classList.toggle('mode-dark');
        chk.checked?document.body.classList.add("mode-dark"):document.body.classList.remove("mode-dark");
        localStorage.setItem('darkModeStatus', chk.checked);
      });

      window.addEventListener('load', (event) => {
          if(localStorage.getItem('darkModeStatus')=="true"){
            document.body.classList.add("mode-dark");
            document.getElementById('chk').checked = true;
          }
        });

        // JS MENU TEMPLATE
        /* counter js */
        (function ($) {
            $.fn.countTo = function (options) {
                options = options || {};

                return $(this).each(function () {
                    // set options for current element
                    var settings = $.extend({}, $.fn.countTo.defaults, {
                        from: $(this).data('from'),
                        to: $(this).data('to'),
                        speed: $(this).data('speed'),
                        refreshInterval: $(this).data('refresh-interval'),
                        decimals: $(this).data('decimals')
                    }, options);

                    // how many times to update the value, and how much to increment the value on each update
                    var loops = Math.ceil(settings.speed / settings.refreshInterval),
                        increment = (settings.to - settings.from) / loops;

                    // references & variables that will change with each update
                    var self = this,
                        $self = $(this),
                        loopCount = 0,
                        value = settings.from,
                        data = $self.data('countTo') || {};

                    $self.data('countTo', data);

                    // if an existing interval can be found, clear it first
                    if (data.interval) {
                        clearInterval(data.interval);
                    }
                    data.interval = setInterval(updateTimer, settings.refreshInterval);

                    // initialize the element with the starting value
                    render(value);

                    function updateTimer() {
                        value += increment;
                        loopCount++;

                        render(value);

                        if (typeof (settings.onUpdate) == 'function') {
                            settings.onUpdate.call(self, value);
                        }

                        if (loopCount >= loops) {
                            // remove the interval
                            $self.removeData('countTo');
                            clearInterval(data.interval);
                            value = settings.to;

                            if (typeof (settings.onComplete) == 'function') {
                                settings.onComplete.call(self, value);
                            }
                        }
                    }

                    function render(value) {
                        var formattedValue = settings.formatter.call(self, value, settings);
                        $self.html(formattedValue);
                    }
                });
            };

            $.fn.countTo.defaults = {
                from: 0,               // the number the element should start at
                to: 0,                 // the number the element should end at
                speed: 1000,           // how long it should take to count between the target numbers
                refreshInterval: 100,  // how often the element should be updated
                decimals: 0,           // the number of decimal places to show
                formatter: formatter,  // handler for formatting the value before rendering
                onUpdate: null,        // callback method for every time the element is updated
                onComplete: null       // callback method for when the element finishes updating
            };

            function formatter(value, settings) {
                return value.toFixed(settings.decimals);
            }
        }(jQuery));

        jQuery(function ($) {
            // custom formatting example
            $('.count-number').data('countToOptions', {
                formatter: function (value, options) {
                    return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
                }
            });

            // start all the timers
            $('.timer').each(count);

            function count(options) {
                var $this = $(this);
                options = $.extend({}, options || {}, $this.data('countToOptions') || {});
                $this.countTo(options);
            }
        });

        //swiper js//
        var swiper = new Swiper('.swiper-container', {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });


         $('#modal').modal('show');
    </script>
</body>

</html>

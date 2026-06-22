<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Devix Systems</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/git.png') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header>
        <div class="header-area">
            <div class="header-top_area d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-md-5">
                            <div class="header_left">
                                <p>¡Bienvenido a Devix Systems!</p>
                            </div>
                        </div>
                        <div class="col-xl-7 col-md-7">
                            <div class="header_right d-flex">
                                <div class="short_contact_list">
                                    <ul>
                                        <li>
                                            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=devixsystems8@gmail.com&su=Consulta%20desde%20la%20Web" target="_blank"> 
                                                <i class="fa fa-envelope"></i> devixsystems8@gmail.com
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://api.whatsapp.com/send?phone=+59177068973&text=Hola" target="_blank">
                                                <i class="fa fa-phone"></i> +591 77068973
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="social_media_links">
                                    

                                
                                    <a href="https://www.facebook.com/share/1EfdpBeXgj/" target="_blank">
                                        <i class="fa-brands fa-facebook"></i>
                                    </a>

                                    <a href="https://www.tiktok.com/@devixsystems?_r=1&_t=ZS-97K4uTakVt9" target="_blank">
                                        <i class="fa-brands fa-tiktok"></i>
                                    </a>


<a href="https://www.instagram.com/systemsdevix/" target="_blank" rel="noopener noreferrer">
    <i class="fa-brands fa-instagram"></i>
</a>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="{{ url('/') }}">
                                        <img src="img/logologo.png" alt="" width="250">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="{{ 'home' == Request::is('home*') ? 'active' : '' }}" href="{{ url('/') }}">home</a></li>
                                            <li><a class="{{ 'services' == Request::is('services*') ? 'active' : '' }}" href="{{ url('services') }}">Services</a></li>
                                            <li><a href="{{ url('contact') }}">Contact</a></li>
                                            <li><a href="{{ url('about') }}">About</a></li>
                                            <li><a href="{{ url('suscripciones') }}">Subscriptions</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <div class="Information_area overlay">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-8">
                    <div class="info_text text-center">
                        <h3>Para cualquier información llámanos</h3>
                        <p>Forjando Software con la Firmeza de la Calidad</p>
                        <a class="boxed-btn3" href="https://api.whatsapp.com/send?phone=+59177068973&text=Hola" target="_blank">
                            <i class="fa fa-phone"></i> +591 77068973
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        </footer>

    <script src="{{ asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/ajax-form.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/scrollIt.js') }}"></script>
    <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/nice-select.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/gijgo.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/contact.js') }}"></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/jquery.form.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/mail-script.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script>
        var botmanWidget = {
            title: "Devix Systems",
            aboutText: "Devix Systems",
            placeholderText: "Escribe un mensaje",
        };
    </script>
    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="Mironcoder" />
    <meta name="email" content="mironcoder@gmail.com" />
    <meta name="profile" content="https://themeforest.net/user/mironcoder" />
    <meta name="name" content="Classicads" />
    <meta name="type" content="Classified Advertising" />
    <meta name="title" content="Classicads - Classified Ads HTML Template" />
    <meta name="keywords"
        content="classicads, classified, ads, classified ads, listing, business, directory, jobs, marketing, portal, advertising, local, posting, ad listing, ad posting," />
    <title>
        Saudi Executive Contact Database | Saudi Arabia Email Database
    </title>
    <link rel="icon" href="images/favicon.png" />
    <link rel="stylesheet" href="fonts/flaticon/flaticon.css" />
    <link rel="stylesheet" href="fonts/font-awesome/fontawesome.css" />
    <link rel="stylesheet" href="css/vendor/slick.min.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="css/custom/main.css" />
    <link rel="stylesheet" href="css/custom/index.css" />

    <link href="home-banner/css/style.css" rel="stylesheet">
    <!-- ANIMATION CSS -->
    <link rel="stylesheet" href="home-banner/css/animate.css">
    <!-- RESPONSIVE CSS -->
    <link href="home-banner/css/responsive.css" rel="stylesheet">
    <link href="home-banner/css/animate.css" rel="stylesheet">
    <!-- FONT AWESOME CSS -->
    <link href="home-banner/css/font-awesome.css" rel="stylesheet" type="text/css">
    @yield('styles')
    <style>
        .carousel-item {
            padding: 10px 10px;
            /* Add some padding to the text for better appearance */
            overflow: hidden;
            /* Hide the overflow of text */
            color: #fff;
            text-align: center;
        }

        .carousel-item p {
            font-size: 16px;
            /* Customize the font size */
            line-height: 1.6;
            /* Customize the line height */
        }
    </style>
</head>

<body>
    <header class="header-part">
        <div class="container">
            <div class="header-content">
                <div class="header-left">
                    <a href="{{ route('index') }}" class="header-logo"><img src="images/logo.png" alt="logo" /></a>

                    <button type="button" class="header-widget search-btn">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
                <form class="header-form" action="{{ route('search') }}" method="POST">
                    @csrf
                    <div class="header-search">
                        <button type="submit" title="Search Submit ">
                            <i class="fas fa-search"></i></button><input type="text" name="search_term"
                            placeholder="Search, Whatever you needs..." />
                        </button>
                    </div>
                    <div class="header-option">
                        <div class="option-grid">
                            <div class="option-group">
                                <input type="text" placeholder="City" />
                            </div>
                            <div class="option-group">
                                <input type="text" placeholder="State" />
                            </div>
                            <div class="option-group">
                                <input type="text" placeholder="Name" />
                            </div>
                            <div class="option-group">
                                <input type="text" placeholder="Company" />
                            </div>
                            <button type="submit">
                                <i class="fas fa-search"></i><span>Search</span>
                            </button>
                        </div>
                    </div>
                </form>
                <div class="header-right">
                    <ul class="header-list">

                        <li class="header-item">
                            <button type="button" class="header-widget">
                                <i class="fas fa-bell"></i><sup>0</sup>
                            </button>
                            <div class="dropdown-card">
                                <div class="dropdown-header">
                                    <h5>Notification (1)</h5>
                                    <a href="notification.html">view all</a>
                                </div>
                                <ul class="notify-list">
                                    <li class="notify-item active">
                                        <a href="#" class="notify-link">
                                            <div class="notify-img">
                                                <img src="images/avatar/01.jpg" alt="avatar" />
                                            </div>
                                            <div class="notify-content">
                                                <p class="notify-text">
                                                    <span>miron mahmud</span>has added the advertisement
                                                    post of your <span>booking</span>to his wishlist.
                                                </p>
                                                <span class="notify-time">just now</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notify-item">
                                        <a href="#" class="notify-link">
                                            <div class="notify-img">
                                                <img src="images/avatar/02.jpg" alt="avatar" />
                                            </div>
                                            <div class="notify-content">
                                                <p class="notify-text">
                                                    <span>tahmina bonny</span>gave you a
                                                    <span>comment</span>and 5 star <span>review.</span>
                                                </p>
                                                <span class="notify-time">2 hours ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notify-item">
                                        <a href="#" class="notify-link">
                                            <div class="notify-img">
                                                <img src="images/avatar/03.jpg" alt="avatar" />
                                            </div>
                                            <div class="notify-content">
                                                <p class="notify-text">
                                                    <span>shipu ahmed</span>and <span>4 other</span>have
                                                    seen your contact number
                                                </p>
                                                <span class="notify-time">3 minutes ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notify-item">
                                        <a href="#" class="notify-link">
                                            <div class="notify-img">
                                                <img src="images/avatar/02.jpg" alt="avatar" />
                                            </div>
                                            <div class="notify-content">
                                                <p class="notify-text">
                                                    <span>miron mahmud</span>has added the advertisement
                                                    post of your <span>booking</span>to his wishlist.
                                                </p>
                                                <span class="notify-time">5 days ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notify-item">
                                        <a href="#" class="notify-link">
                                            <div class="notify-img">
                                                <img src="images/avatar/04.jpg" alt="avatar" />
                                            </div>
                                            <div class="notify-content">
                                                <p class="notify-text">
                                                    <span>labonno khan</span>gave you a
                                                    <span>comment</span>and 5 star <span>review.</span>
                                                </p>
                                                <span class="notify-time">4 months ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notify-item">
                                        <a href="#" class="notify-link">
                                            <div class="notify-img">
                                                <img src="images/avatar/01.jpg" alt="avatar" />
                                            </div>
                                            <div class="notify-content">
                                                <p class="notify-text">
                                                    <span>azam khan</span>and <span>4 other</span>have
                                                    seen your contact number
                                                </p>
                                                <span class="notify-time">1 years ago</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    @auth
                        <a href="{{ route('register') }}" class="header-widget header-user">
                            <span>{{ Auth::user()->name }}</span>
                        </a>
                        {{-- <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                                {{ Auth::user()->name }}
                                <span class="caret">dsasdadasd</span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="">Profile</a></li>
                                <li><a href="">Logout</a></li>
                            </ul>
                        </div> --}}

                        <a href="{{ url('logout') }}" class="btn btn-danger header-widget header-user">Logout</a>

                    @endauth
                    @if (!Auth::user())
                        <a href="{{ route('register') }}" class="header-widget header-user"><span>Register</span></a>
                    @endif
                </div>
            </div>
        </div>
    </header>
    <div class="sidebar-body">
        <div class="sidebar-header">
            <a href="index.html" class="sidebar-logo"><img src="images/logo.png" alt="logo" /></a><button
                class="sidebar-cross"><i class="fas fa-times"></i></button>
        </div>
        <div class="sidebar-content">
            <div class="sidebar-profile">
                <a href="#" class="sidebar-avatar"><img src="images/avatar/01.jpg" alt="avatar" /></a>
                <h4><a href="#" class="sidebar-name">Jackon Honson</a></h4>
                <a href="ad-post.html" class="btn btn-inline sidebar-post"><i
                        class="fas fa-plus-circle"></i><span>Find Contact</span></a>
            </div>
            <div class="sidebar-menu">
                <ul class="nav nav-tabs">
                    <li>
                        <a href="#main-menu" class="nav-link active" data-toggle="tab">Main Menu</a>
                    </li>
                    <li>
                        <a href="#author-menu" class="nav-link" data-toggle="tab">My Menu</a>
                    </li>
                </ul>
                <div class="tab-pane active" id="main-menu">
                    <ul class="navbar-list">
                        <li class="navbar-item">
                            <a class="navbar-link" href="index.html">Home</a>
                        </li>
                        <li class="navbar-item">
                            <a class="navbar-link" href="index.html">Register</a>
                        </li>
                        <li class="navbar-item">
                            <a class="navbar-link" href="index.html">Pricing</a>
                        </li>
                        <li class="navbar-item">
                            <a class="navbar-link" href="index.html">Blogs</a>
                        </li>
                        <li class="navbar-item">
                            <a class="navbar-link" href="index.html">About Us</a>
                        </li>
                        <li class="navbar-item">
                            <a class="navbar-link" href="index.html">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane" id="author-menu">
                    <ul class="navbar-list">
                        <li class="navbar-item">
                            <a class="navbar-link" href="dashboard.html">Dashboard</a>
                        </li>
                        <li class="navbar-item">
                            <a class="navbar-link" href="profile.html">Profile</a>
                        </li>
                        <li class="navbar-item">
                            <a class="navbar-link" href="profile.html">Search Database</a>
                        </li>
                        <li class="navbar-item">
                            <a class="navbar-link" href="profile.html">List Company</a>
                        </li>
                        <li class="navbar-item">
                            <a class="navbar-link" href="profile.html">Settings</a>
                        </li>
                        <li class="navbar-item">
                            <a class="navbar-link" href="profile.html">Message</a>
                        </li>
                        <li class="navbar-item">
                            <a class="navbar-link" href="profile.html">Notification</a>
                        </li>
                        <li class="navbar-item">
                            <a class="navbar-link" href="profile.html">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sidebar-footer">
                All Copyrights Reserved © 2021 Taajer - Developed by
                <a href="https://dslab.in/">Dot Solutions Lab</a>
            </div>
        </div>
    </div>
    </aside>
    <nav class="mobile-nav">
        <div class="container">
            <div class="mobile-group">
                <a href="index.html" class="mobile-widget"><i class="fas fa-home"></i><span>home</span></a>
                <a href="user-form.html" class="mobile-widget"><i class="fas fa-user"></i><span>join me</span></a>
                <a href="ad-post.html" class="mobile-widget plus-btn"><i class="fas fa-plus"></i><span>Ad
                        Post</span></a>
                <a href="notification.html" class="mobile-widget"><i
                        class="fas fa-bell"></i><span>notify</span><sup>0</sup></a>
                <a href="message.html" class="mobile-widget"><i
                        class="fas fa-envelope"></i><span>message</span><sup>0</sup></a>
            </div>
        </div>
    </nav>


    @yield('content')



    <footer class="footer-part">
        <div class="container">
            <div class="row newsletter">
                <div class="col-lg-6">
                    <div class="news-content">
                        <h2>Subscribe for Latest Offers</h2>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Laboriosam, aliquid reiciendis! Exercitationem soluta provident
                            non.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form class="news-form">
                        <input type="text" placeholder="Enter Your Email Address" /><button
                            class="btn btn-inline">
                            <i class="fas fa-envelope"></i><span>Subscribe</span>
                        </button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="footer-content">
                        <h3>Contact Us</h3>
                        <ul class="footer-address">
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <p>
                                    1420 West Jalkuri Fatullah, <span>Narayanganj, BD</span>
                                </p>
                            </li>
                            <li>
                                <i class="fas fa-envelope"></i>
                                <p>support@classicads.com <span>info@classicads.com</span></p>
                            </li>
                            <li>
                                <i class="fas fa-phone-alt"></i>
                                <p>+8801838288389 <span>+8801941101915</span></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="footer-content">
                        <h3>Quick Links</h3>
                        <ul class="footer-widget">
                            <li><a href="#">Store Location</a></li>
                            <li><a href="#">Orders Tracking</a></li>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Size Guide</a></li>
                            <li><a href="#">Faq</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="footer-content">
                        <h3>Information</h3>
                        <ul class="footer-widget">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Delivery System</a></li>
                            <li><a href="#">Secure Payment</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Sitemap</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="footer-info">
                        <a href="#"><img src="images/logo.png" alt="logo" /></a>
                        <ul class="footer-count">
                            <li>
                                <h5>929,238</h5>
                                <p>Registered Users</p>
                            </li>
                            <li>
                                <h5>242,789</h5>
                                <p>Community Ads</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-card-content">
                        <div class="footer-payment">
                            <a href="#"><img src="images/pay-card/01.jpg" alt="01" /></a><a
                                href="#"><img src="images/pay-card/02.jpg" alt="02" /></a><a
                                href="#"><img src="images/pay-card/03.jpg" alt="03" /></a><a
                                href="#"><img src="images/pay-card/04.jpg" alt="04" /></a>
                        </div>
                        <div class="footer-option">
                            <button type="button" data-toggle="modal" data-target="#language">
                                <i class="fas fa-globe"></i>English</button><button type="button"
                                data-toggle="modal" data-target="#currency">
                                <i class="fas fa-dollar-sign"></i>USD
                            </button>
                        </div>
                        <div class="footer-app">
                            <a href="#"><img src="images/play-store.png" alt="play-store" /></a><a
                                href="#"><img src="images/app-store.png" alt="app-store" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-end">
            <div class="container">
                <div class="footer-end-content">
                    <p>
                        All Copyrights Reserved © 2023 Taajer - Developed by
                        <a href="https://dslab.in/">Dot Solutions Lab</a>
                    </p>
                    <ul class="footer-social">
                        <li>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-dribbble"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div class="modal fade" id="currency">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Choose a Currency</h4>
                    <button class="fas fa-times" data-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <button class="modal-link active">
                        United States Doller (USD) - $</button><button class="modal-link">Euro (EUR) -
                        €</button><button class="modal-link">British Pound (GBP) - £</button><button
                        class="modal-link">Australian Dollar (AUD) - A$</button><button class="modal-link">Canadian
                        Dollar (CAD) - C$</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="language">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Choose a Language</h4>
                    <button class="fas fa-times" data-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <button class="modal-link active">English</button><button
                        class="modal-link">bangali</button><button class="modal-link">arabic</button><button
                        class="modal-link">germany</button><button class="modal-link">spanish</button>
                </div>
            </div>
        </div>
    </div> <!-- jQuery -->
    <script src="home-banner/js/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="home-banner/js/bootstrap.js"></script>
    <script src="home-banner/js/custom.js"></script>
    <!-- Plugin JavaScript -->
    <script src="home-banner/js/jquery.easing.min.js"></script>
    <!-- Theme JavaScript -->
    <script src="home-banner/js/jquery.mixitup.min.js"></script>
    <script src="home-banner/js/wow.js"></script>

    <link rel="stylesheet" href="https://www.paytabs.com/express/express.css">
    <script src="https://www.paytabs.com/theme/express_checkout/js/jquery-1.11.1.min.js"></script>
    <script src="https://www.paytabs.com/express/express_checkout_v3.js"></script>
    <script type="text/javascript">
        Paytabs("#express_checkout").expresscheckout({
            settings: {
                secret_key: "vCXTEqDWoGM13rx5uA77SQbq5RClqcfVPcOtDsp19c3cDAi8aqg3grtmj6HJjWF89uBMW1O5eSiSsA0D0hGhIaD2glLzirIrVkeR",
                merchant_id: "10014720",
                amount: "10.00",
                currency: "USD",
                title: "Test Express Checkout Transaction",
                product_names: "Product1,Product2,Product3",
                order_id: 25,
                url_redirect: "https://www.dslab.in/return_url/",
                display_billing_fields: 1,
                display_shipping_fields: 1,
                display_customer_info: 1,
                language: "en",
                redirect_on_reject: 1,
                style: {
                    css: "custom",
                    linktocss: "https://www.dslab.in/style.css",
                },
                is_iframe: {
                    load: "onbodyload",
                    show: 1,
                },

            },
            customer_info: {
                first_name: "John",
                last_name: "Smith",
                phone_number: "5486253",
                country_code: "973",
                email_address: "john@test.com"
            },
            billing_address: {
                full_address: "Manama, Bahrain",
                city: "Manama",
                state: "Manama",
                country: "BHR",
                postal_code: "00973"
            },
            shipping_address: {
                shipping_first_name: "John",
                shipping_last_name: "Smith",
                full_address_shipping: "Manama, Bahrain",
                city_shipping: "Manama",
                state_shipping: "Manama",
                country_shipping: "BHR",
                postal_code_shipping: "00973"
            },
            checkout_button: {
                width: 150,
                height: 30,
                img_url: "https://www.YOURWEBSITE.com/image/yourimage.jpg"
            },
            pay_button: {
                width: 150,
                height: 30,
                img_url: "https://www.YOURWEBSITE.com/image/yourimage.jpg"
            }
        });
    </script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/vendor/slick.min.js"></script>
    <script src="js/custom/slick.js"></script>
    <script src="js/custom/main.js"></script>
    @yield('scripts')
    <script>
        $(document).ready(function() {
            // Start the carousel and set the interval for auto-changing
            $("#myCarousel2").carousel({
                interval: 1500, // Change slide every 3 seconds (adjust as needed)
                pause: false,
            });
        });
    </script>
</body>

</html>

<?php include_once("include/functions.php"); ?>
<?php noUser();?>
<?php $settings = getSettings(); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="SimpleCloud, Hosting, Cloud, Storage, Free">
    <meta name="description" content="SimpleCloud is the #1 Cloud Storage Solution for users of all kinds.">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115491056-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-115491056-2');
</script>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png?v=eE5208peMR">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png?v=eE5208peMR">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png?v=eE5208peMR">
    <link rel="manifest" href="/site.webmanifest?v=eE5208peMR">
    <link rel="mask-icon" href="/safari-pinned-tab.svg?v=eE5208peMR" color="#5bbad5">
    <link rel="shortcut icon" href="/favicon.ico?v=eE5208peMR">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#1D77FF">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
    <title>SimpleCloud</title>
</head>

<body>
    <header class="header--huge section" style="padding-top:86px;" id="home">
        <nav class="navbar navbar-dark navbar-expand-md bg-faded justify-content-center fixed-top" data-toggle="affix">
            <div class="container">
                <a href="/" class="navbar-brand d-flex mr-auto">SimpleCloud</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="collapsingNavbar">
                    <ul class="nav navbar-nav ml-auto justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link active" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#features">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#pricing">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Sign In</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <h1>Cloud Storage Simplified</h1>
            <h2>The secure file sharing and storage solutions that people trust</h2>
            <a href="register.php" class="btn sc-btn-white">Try SimpleCloud Standard Free</a>
            <div class="browser-container">
                <img src="img/browser_mockup.png">
                <div class="browser-content">
                    <img src="img/screen_cap.jpg">
                </div>
            </div>
        </div>
    </header>
    <div class="header-shadow-block"></div>
    <div class="features section" id="features">
        <div class="container">
            <h1>FEATURES</h1>
            <div class="row">
                <div class="feature col-md-3 col-sm-6">
                    <i class="fas fa-shipping-fast"></i>
                    <h2>10GB space</h2>
                    <p>You can store files, save email attachments and back up photos directly to SimpleCloud. You can also purchase a larger cloud storage plan as you need it.</p>
                </div>
                <div class="feature col-md-3 col-sm-6">
                    <i class="fas fa-lock"></i>
                    <h2>Safe and secure</h2>
                    <p>Your file security is crucial. SimpleCloud is encrypted using SSL, and all files are securely stored using our end to end encryption.</p>
                </div>
                <div class="feature col-md-3 col-sm-6">
                    <i class="fas fa-globe"></i>
                    <h2>Get Organized</h2>
                    <p>SimpleCloud allows you to store any file securely and easily access it from your computer, mobile phone, tablet, or any other device.</p>
                </div>
                <div class="feature col-md-3 col-sm-6">
                    <i class="fas fa-desktop"></i>
                    <h2>Collaboration</h2>
                    <p>Our platform gives you the option to share your files with others. Each file is give na unique encryption and share key that ensures that your files will only be downloaded by those you trust.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="pricing section" id="pricing">
        <div class="container">
            <h1>PRICING</h1>
            <div class="row align-items-center">
                <div class="price-listing price-listing--main col-md-4 order-md-1">
                    <div class="price-listing-container">
                        <div class="price-display">
                            <h1>Standard</h1>
                            <h2>$5 <span>/mo</span></h2>
                        </div>
                        <div class="price-details">
                            <ul>
                                <li>10GB of space</li>
                                <li>500 MB file upload</li>
                                <li>Basic security</li>
                                <li>Basic backup</li>
                                <li>Basic support</li>
                            </ul>
                            <div class="price-buy">
                              <form action="register.php">
                                <button class="btn btn-outline-light" href="register.php">GET STARTED</button>
                              </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="price-listing price-listing--side col-md-4 order-md-0">
                    <div class="price-listing-container">
                        <div class="price-display">
                            <h1>Advanced</h1>
                            <h2>$10 <span>/mo</span></h2>
                        </div>
                        <div class="price-details">
                            <ul>
                                <li>1TB (1,000GB) of space</li>
                                <li>2 GB file upload</li>
                                <li>Enhanced security</li>
                                <li>Hybrid backup</li>
                                <li>Basic support</li>
                            </ul>
                            <div class="price-buy">
                              <form action="register.php">
                              <button class="btn btn-outline-primary" href="register.php">GET STARTED</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="price-listing price-listing--side col-md-4 order-md-2">
                    <div class="price-listing-container">
                        <div class="price-display">
                            <h1>Business</h1>
                            <h2>$20 <span>/mo</span></h2>
                        </div>
                        <div class="price-details">
                          <ul>
                              <li>5TB (5,000GB) of space</li>
                              <li>5 GB file upload</li>
                              <li>Enhanced security</li>
                              <li>Hybrid backup</li>
                              <li>Priority support</li>
                          </ul>
                            <div class="price-buy">
                                <form action="register.php">
                                <button class="btn btn-outline-primary" href="register.php">GET STARTED</button>
                              </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="call-to-action">
        <div class="container">
            <h1>Sign up today!</h1>
            <p>Get started with SimpleCloud for free.</p>
            <a class="btn" href="register.php">SIGN UP</a>
        </div>
    </div>
    <footer>
        <div class="footer-top section" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <p><i class="fas fa-map-marker-alt"></i><?php echo $settings['address']; ?></p>
                        <p><i class="far fa-envelope"></i><a href="mailto:<?php echo $settings['email']; ?>"><?php echo $settings['email']; ?></a></p>
                        <p><i class="fas fa-phone"></i><a href="tel:+<?php echo $settings['phone']; ?>"><?php echo $settings['phone']; ?></a></p>
                    </div>
                    <div class="col-md-4">
                        <a href="<?php echo $settings['facebooklink']; ?>"><i class="fab fa-facebook"></i></a>
                        <a href="<?php echo $settings['instagramlink']; ?>"><i class="fab fa-instagram"></i></a>
                        <a href="<?php echo $settings['twitterlink']; ?>"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <?php echo $settings['copyright']; ?> <span style="display: none;">Designed by <a href="https://github.com/Gabrielchihonglee">Gabriel Lee</a>.</span>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script>
        function navbarUpdate() {
            if ($(window).scrollTop() >= 60) {
                $(".navbar").addClass("scrolling");
            } else {
                $(".navbar").removeClass("scrolling");
            }
        }

        $(document).ready(function() {
            navbarUpdate();
            $(window).on("scroll", function() {
                navbarUpdate();
            });
        });

        $('a[href*="#"]').on('click', function(e) {
            e.preventDefault();

            $('html, body').animate({
                scrollTop: $($(this).attr('href')).offset().top - 55
            }, 500, 'swing');
        });

        var sections = $('.section'),
            nav = $('nav'),
            nav_height = nav.outerHeight();

        $(window).on('scroll', function() {
            var cur_pos = $(this).scrollTop();

            sections.each(function() {
                var top = $(this).offset().top - nav_height,
                    bottom = top + $(this).outerHeight();

                if (cur_pos >= top && cur_pos <= bottom) {
                    nav.find('a').removeClass('active');
                    sections.removeClass('active');

                    $(this).addClass('active');
                    nav.find('a[href="#' + $(this).attr('id') + '"]').addClass('active');
                }
            });
        });

    </script>
</body>

</html>

<?php include_once("include/functions.php"); ?>
<?php noPublic('pricing.php'); ?>
<?php $settings = getSettings(); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#1D77FF">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css" integrity="sha256-e47xOkXs1JXFbjjpoRr1/LhVcqSzRmGmPqsrUQeVs+g=" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
    <title>Pricing - SimpleCloud</title>
</head>

<body>
    <header class="header--page" id="home">
        <nav class="navbar navbar-dark navbar-expand-md bg-faded justify-content-center fixed-top" data-toggle="affix">
            <div class="container">
                <a href="dashboard.php" class="navbar-brand d-flex mr-auto">SimpleCloud</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="collapsingNavbar">
                    <ul class="nav navbar-nav ml-auto justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="pricing.php">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="news.php">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="help.php">Help</a>
                        </li>
                        <a class="btn btn-white header-nav-btn" href="logout.php">LOGOUT</a>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="body--page">
        <div class="container">
            <div class="row pricing-boxes">
                <div class="col-md-4">
                    <div class="pricing-box sc-shadow-light">
                        <div class="pricing-box-top">
                            <h1>Standard</h1>
                        </div>
                        <div class="pricing-box-body">
                            <h2>Best for home users</h2>
                            <p>Standard storage and access to files across multiple devices.</p>
                            <ul>
                                <li>10GB of space</li>
                                <li>500 MB file upload</li>
                            </ul>
                        </div>
                        <div class="pricing-box-bottom">
                            <p>FREE</p>
                            <a href="register" class="btn btn-outline-light">Sign up</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pricing-box sc-shadow-light">
                        <div class="pricing-box-top">
                            <h1>Advanced</h1>
                        </div>
                        <div class="pricing-box-body">
                            <h2>Best for advanced users</h2>
                            <p>Additional storage space and enhanced security.</p>
                            <ul>
                                <li>1TB (1,000GB) of space</li>
                                <li>2 GB file upload</li>
                                <li>Hybrid backup</li>
                            </ul>
                        </div>
                        <div class="pricing-box-bottom">
                            <p>$5 <span>/mo</span></p>
                            <a href="register" class="btn btn-outline-light">Sign up</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pricing-box sc-shadow-light">
                        <div class="pricing-box-top">
                            <h1>Business</h1>
                        </div>
                        <div class="pricing-box-body">
                            <h2>Best for business users</h2>
                            <p>Additional space and priority support for business professionals.</p>
                            <ul>
                                <li>5TB (5,000GB) of space</li>
                                <li>5 GB file upload</li>
                                <li>Hybrid backup</li>
                                <li>Priority support</li>

                            </ul>
                        </div>
                        <div class="pricing-box-bottom">
                            <p>$20 <span>/mo</span></p>
                            <a href="register" class="btn btn-outline-light">Sign up</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pricing-custom">
                <h1>Need a custom plan?</h1>
                <a class="btn sc-btn-gradient sc-shadow sc-shadow-hover" href="#">Contact Us</a>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-top">
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
                <?php echo $settings['copyright']; ?>
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


        if ($(window).width() < 768) {} else {
            var maxHeight = 0;

            $(".pricing-box-body").each(function() {
                if ($(this).height() > maxHeight) {
                    maxHeight = $(this).height();
                }
            });

            $(".pricing-box-body").height(maxHeight);
        }

    </script>
</body>

</html>

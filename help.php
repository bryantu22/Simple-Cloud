<?php include_once("include/functions.php"); ?>
<?php noPublic('help.php'); ?>
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
    <title>Help - SimpleCloud</title>
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
                            <a class="nav-link" href="pricing.php">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="news.php">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="help.php">Help</a>
                        </li>
                        <a class="btn btn-white header-nav-btn" href="logout.php">LOGOUT</a>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="body--page">
        <div class="container">
            <div class="row">
                <div class="col-md-8 faq">
                    <div id="wrap">
                        <div class="card--help">
                            <div class="card-top">
                                <h1>Qeustion 1</h1>
                                <i class="fas fa-plus"></i>
                            </div>
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget ullamcorper erat. Quisque mollis pellentesque arcu convallis auctor. Donec in ligula sed risus semper ultrices non vitae magna. Curabitur ac nisl fringilla, ullamcorper mi ac, maximus mauris. Proin bibendum erat lectus, non sagittis tortor porttitor eget. Phasellus vestibulum nisl sed maximus eleifend. Donec dui enim, vehicula vitae justo et, mollis ornare lectus. Donec vulputate lorem a maximus tempor. Quisque fringilla quis dui eu luctus. Vivamus condimentum nisi id placerat feugiat.</p>
                            </div>
                        </div>
                        <div class="card--help">
                            <div class="card-top">
                                <h1>Qeustion 2</h1>
                                <i class="fas fa-plus"></i>
                            </div>
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget ullamcorper erat. Quisque mollis pellentesque arcu convallis auctor. Donec in ligula sed risus semper ultrices non vitae magna. Curabitur ac nisl fringilla, ullamcorper mi ac, maximus mauris. Proin bibendum erat lectus, non sagittis tortor porttitor eget. Phasellus vestibulum nisl sed maximus eleifend. Donec dui enim, vehicula vitae justo et, mollis ornare lectus. Donec vulputate lorem a maximus tempor. Quisque fringilla quis dui eu luctus. Vivamus condimentum nisi id placerat feugiat.</p>
                            </div>
                        </div>
                        <div class="card--help">
                            <div class="card-top">
                                <h1>Qeustion 3</h1>
                                <i class="fas fa-plus"></i>
                            </div>
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget ullamcorper erat. Quisque mollis pellentesque arcu convallis auctor. Donec in ligula sed risus semper ultrices non vitae magna. Curabitur ac nisl fringilla, ullamcorper mi ac, maximus mauris. Proin bibendum erat lectus, non sagittis tortor porttitor eget. Phasellus vestibulum nisl sed maximus eleifend. Donec dui enim, vehicula vitae justo et, mollis ornare lectus. Donec vulputate lorem a maximus tempor. Quisque fringilla quis dui eu luctus. Vivamus condimentum nisi id placerat feugiat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="color: #1D77FF; font-size: 22px;">
                        <div class="col-6">
                            <div class="prev disabled" style="text-align: left;"></div>
                        </div>
                        <div class="col-6">
                            <div class="next" style="text-align: right;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-sidebar">
                        <a href="dashboard.php" class="btn sc-btn-gradient sc-shadow sc-shadow-hover">DASHBOARD</a>
                        <p>User: <?php echo $_SESSION['username']; ?></p>
<?php
$all_file_size = allFileSize($_SESSION['id'])[0]/1048576;
$plan = getUserPlan($_SESSION['id'])[0];
$user_limit = getUserPlan($_SESSION['id'])[1]/1048576;
?>
                        <p>Plan: <?php echo $plan; ?></p>
                        <p>Storage usage: <?php echo round($all_file_size) . ' / ' . round($user_limit); ?>MB</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: <?php echo $all_file_size / $user_limit * 100; ?>%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
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
    var count = $("#wrap > .card--help").length;
    var perPage = 4;
    var totalPages = Math.ceil(count / perPage);
    var page = 1;
    if (totalPages > 1) {
        $(".prev").html('<i class="fas fa-angle-left"></i>');
        $(".next").html('<i class="fas fa-angle-right"></i>');
        var i;
        for (i = 0; i < count; i += perPage) {
            if (i == 0) {
                $("#wrap > .card--help").slice(i,i+perPage).addClass('page' + (i + perPage) / perPage);
            } else {
                $("#wrap > .card--help").slice(i,i+perPage).addClass('page' + (i + perPage) / perPage).hide();
            }
        }
        $('.next').on('click',function(){
            if (page < totalPages) {
        	    $("#wrap > .card--help:visible").hide();
                $('.page' + ++page).show();
                $('.prev').removeClass('disabled');
            }

            if (page < totalPages + 1) {
                $(this).addClass('disabled');
            }
        })
        $('.prev').on('click',function(){
            if (page == 2) {
                $(this).addClass('disabled');
            }

            if(page > 1) {
        	    $("#wrap > .card--help:visible").hide();
                $('.page' + --page).show();
                $('.next').removeClass('disabled');
            }
        })
    }
    </script>

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

        var acc = document.getElementsByClassName("card-top");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                this.nextElementSibling.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + 50 + "px";
                }
            });
        }

    </script>
</body>

</html>

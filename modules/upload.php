<?php include_once("include/functions.php"); ?>
<?php noPublic('upload.php');?>
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
    <title>Upload - SimpleCloud</title>
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
                            <a class="nav-link" href="help.php">Help</a>
                        </li>
                        <a class="btn btn-white header-nav-btn" href="logout.php">LOGOUT</a>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="body--page">
        <div class="container upload-page">
            <div class="row">
                <div class="col-md-8">
                    <div class="card-top">
                        <h1>UPLOAD FILES</h1>
                    </div>
                    <div class="card-body">
                        <form action="processupload.php" id="fileForm" enctype="multipart/form-data" class="dropzone">
                            <div class="fallback">
                                <input name="file" type="file" multiple />
                            </div>
                            <div class="dz-message needsclick">
                                <p class="main-msg">DROP FILES HERE OR CLICK TO UPLOAD</p>
                                <p class="note needsclick">Do not upload files over 5MB</p>
                                <p class="note needsclick">Max number of files per upload: 10</p>
                                <p class="note needsclick">Please keep file's name simple</p>
                            </div>
                        </form>
                        <a id="uploadBtn" class="btn sc-btn-gradient sc-shadow sc-shadow-hover">UPLOAD</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-sidebar">
                        <a href="dashboard.php" class="btn sc-btn-gradient sc-shadow sc-shadow-hover">DASHBOARD</a>
                        <p>User: <?php echo $_SESSION['username']; ?></p>
<?php
$all_file_size = allFileSize($_SESSION['id'])[0]/1048576;
$plan = getUserPlan($_SESSION['id']);
$plan_name = $plan[0];
$user_limit = $plan[1]/1048576;
?>
                        <p>Plan: <?php echo $plan_name; ?></p>
                        <p>Storage usage: <span id="round-file-size"><?php echo round($all_file_size); ?></span> / <?php echo round($user_limit); ?>MB</p>
                        <div class="progress" id="file-size">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.js" integrity="sha256-Rnxk6lia2GZLfke2EKwKWPjy0q2wCW66SN1gKCXquK4=" crossorigin="anonymous"></script>

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

    </script>

    <script>
        setInterval(function(){
            $('#round-file-size').load('allfilesizeajaxround.php');
        }, 1000)
    </script>

    <script>
        setInterval(function(){
            $('#file-size').load('allfilesizeajax.php');
        }, 1000)
    </script>

    <script>
        Dropzone.options.fileForm = {
            paramName: 'file',
            maxFilesize: <?php echo $plan[2]/1048576; ?>,
            accept: function(file, done) {
                if (file.name.length > 128) {
                    done('File name is too long.');
                } else {
                    done();
                }
            },
            autoProcessQueue: false,
            ignoreHiddenFiles: true,
            parallelUploads: 10,
            maxFiles: 10,
            addRemoveLinks: true,
            dictRemoveFile: '',
            dictCancelUpload: '',
            dictCancelUploadConfirmation: '',
            init: function() {
                myDropzone = this;
                var submitButton = document.querySelector("#uploadBtn");
                submitButton.addEventListener("click", function() {
                    myDropzone.processQueue();
                });
                myDropzone.on("uploadprogress", function(file) {
                    console.log(myDropzone['files'].length);
                    document.getElementsByClassName("dz-remove").innerHTML = "";
                });
                myDropzone.on("error", function(file) {
                    $(".dz-error .dz-error-mark g").css("fill", "#be2626");
                    $(".dz-error .dz-success-mark").css("display", "none");
                });
                myDropzone.on("success", function(file) {
                    $(".dz-success .dz-success-mark").css({"display": "block", "opacity": "0.9"});
                    $(".dz-success .dz-success-mark g path").css({"fill-opacity": "1", "fill": "#4dd012", "stroke-opacity": "0"});
                });
            },
        };
    </script>
    <style>
    .dropzone .dz-preview .dz-remove {
        font-family: Font Awesome\ 5 Free;
        color: #e62b2b;
        font-size: 16px;
        position: relative;
        z-index: 100;
        bottom: 135px;
        left: 120px;
        display: inline-block;
        font-weight: 900
    }

    .dropzone .dz-preview .dz-remove::before {
        content: "\f00d";
    }

    .dz-error-mark,
    .dz-success-mark {
        margin-top: -38px;
    }
    </style>
</body>

</html>

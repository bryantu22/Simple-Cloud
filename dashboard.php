<?php include_once("include/functions.php"); ?>
<?php noPublic('dashboard.php');?>
<?php $settings = getSettings(); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#1D77FF">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
    <title>Dashboard - SimpleCloud</title>
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
                            <a class="nav-link active" href="dashboard.php">Dashboard</a>
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
        <div class="container">
            <div class="row">
                <div class="col-md-8">
<?php
if (isset($_GET['deleted'])): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  File deleted.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?>
                    <div class="card-top">
                        <h1>DASHBOARD</h1>
                    </div>
                    <div class="card-body file-boxes">
                        <div class="container">
<?php
$file_total = fileTotal($_SESSION['id'])[0];
$pages = ceil($file_total / 10);
if ($file_total == 0) :
?>
<div class="no-file-text" style="padding: 80px 0 90px 0; text-align: center;">
    Upload some files!
</div>
<? endif; ?>
                            <div class="row">
<?php
if (isset($_GET['page'])) {
    $page_number = $_GET['page'];
} else {
    $page_number = 1;
}
$offset = $page_number * 10 - 10;
$file_list = getFiles($_SESSION['id'], $offset);
?>
<?php foreach($file_list as $file): ?>
<div class="col-md-6">
    <div class="file-box">
        <p class="file-name sc-color"><span class="file-name-text"><?php echo $file[0]; ?></span> <span class="file-size sc-text-color"><?php echo humanFilesize($file[2]); ?></span></p>

        <div class="file-link sc-text-color">
            <a href="http://simplecloud.us/d.php?<?php echo $file[1]; ?>" id="file-link">http://simplecloud.us/d.php?<?php echo $file[1]; ?></a><i class="far fa-copy" onclick="copyToClipboard('#file-link')" data-toggle="tooltip"></i>
        </div>
        <form class="deleteForm" method="post">
            <button class="btn file-delete-link" type="submit" id="fileShortlink" name="file" value="<?php echo $file[1]; ?>">Delete file</button>
        </form>
    </div>
</div>
<?php endforeach; ?>
                            </div>

                        </div>

<?php
if ($pages > 1): ?>
<nav aria-label="Page navigation">
    <ul class="pagination justify-content-center">
        <li class="page-item<?php if ($page_number == 1) { echo ' disabled'; } ?>">
            <a class="page-link" href="?page=<?php echo $page_number - 1; ?>" aria-label="Previous">
                <span aria-hidden="true"><i class="fas fa-angle-left"></i></span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        <?php for( $i = 0; $i < $pages; $i++ ) { ?>
            <li class="page-item<?php if ($page_number == $i + 1) { echo ' active'; } ?>">
                <a class="page-link" href="?page=<?php echo $i + 1; ?>"><?php echo $i + 1; ?></a>
            </li>
         <?php } ?>
        <li class="page-item<?php if ($page_number == $pages) { echo ' disabled'; } ?>">
            <a class="page-link" href="?page=<?php echo $page_number + 1; ?>" aria-label="Next">
                <span aria-hidden="true"><i class="fas fa-angle-right"></i></span>
                <span class="sr-only">Next</span>
            </a>
        </li>
    </ul>
</nav>
<?php endif; ?>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-sidebar">
                        <a href="upload.php" class="btn sc-btn-gradient sc-shadow sc-shadow-hover">UPLOAD</a>
                        <a href="bin.php" class="btn btn-outline-primary">TRASH</a>
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

        function copyToClipboard(element) {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val($(element).text()).select();
            document.execCommand("copy");
            $temp.remove();
        }

        $('i[data-toggle="tooltip"]').tooltip({
            trigger: 'click',
            placement: 'top',
            title: 'copied to clipboard'
        });

        $(function() {
            $(document).on('shown.bs.tooltip', function(e) {
                setTimeout(function() {
                    $(e.target).tooltip('hide');
                }, 800);
            });
        });

    </script>

    <script>
        var request;
        $(".deleteForm").submit(function(event){
            event.preventDefault();
            if (request) {
                request.abort();
            }
            var $form = $(this);
            request = $.ajax({
                url: "/trash.php",
                type: "post",
                data: "file=" + $(this).children("#fileShortlink").val()
            });
            request.done(function (response, textStatus, jqXHR){
                $form.parent().parent().remove();
            });
        });
    </script>
</body>

</html>

<!doctype html>
<html class="no-js" lang="en">

<head>

    <title>404 | Page Not Found</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="description" content="">

    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin="">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">

    <link rel="stylesheet" href="css/vendors.min.css">
    <link rel="stylesheet" href="css/icon.min.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/responsive.min.css">
    <link rel="stylesheet" href="css/custom.css">
</head>

<body data-mobile-nav-style="classic">

<header>

<?php
include("inc/navbar.php")
?>

</header>

    <section class="cover-background full-screen ipad-top-space-margin md-h-550px"
        style="background-image: url(images/404-bg.jpg);">
        <div class="container h-100">
            <div class="row align-items-center justify-content-center h-100">
                <div class="col-12 col-xl-6 col-lg-7 col-md-9 text-center"
                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <h6 class="text-dark-gray fw-600 mb-5px text-uppercase">Ooops!</h6>
                    <h1 class="fs-200 sm-fs-170 text-dark-gray fw-700 ls-minus-8px">404</h1>
                    <h4 class="text-dark-gray fw-600 sm-fs-22 mb-10px ls-minus-1px">Page not found!</h4>
                    <p class="mb-30px lh-28 sm-mb-30px w-55 md-w-80 sm-w-95 mx-auto">The resource you are looking for
                        doesn't exist or might have been removed.</p>
                    <a href="./"
                        class="btn btn-large left-icon btn-rounded btn-dark-gray btn-box-shadow text-transform-none"><i
                            class="fa-solid fa-arrow-left"></i>Back to homepage</a>
                </div>
            </div>
        </div>
    </section>


    <?php
    include("inc/footer.php")?>


    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/vendors.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>
<?

if (!empty($_SERVER['HTTP_REFERER'])) {
    $_SESSION['referer'] = $_SERVER['HTTP_REFERER'];
}

require_once 'cpc.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Metacrete - сухие смеси для торкретирования</title>
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/app.css">
    @@include('partial/common/head.html')
</head>
<body>

<div id="preloader">
    <div id="loader"></div>
</div>

<div class="l-page">
    <div class="l-page__inner">
        <div class="l-page__header">
            @@include('./partial/common/header.html')
        </div>

        <div class="l-page__inner">
            @@include('./partial/main-screen.html')
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="http://www.seanmccambridge.com/tubular/js/jquery.tubular.1.0.js"></script>
<script src="js/vendor.min.js"></script>
<script src="js/app.js"></script>


<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TKKGPR8');</script>
<!-- EndGoogleTagManager -->

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TKKGPR8"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</body>
</html>

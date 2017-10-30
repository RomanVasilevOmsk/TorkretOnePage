<?
//session_start();

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
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TKKGPR8"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
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

@@include('./partial/common/modal.html')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/vendor.min.js"></script>
<script src="js/app.js"></script>

</body>
</html>

<?php $title="Design + Web Development";
$pageClass="info";
$socialPic="img/jq-fbpreview.gif";
$pageLink= (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>

<?php include ("header.php"); ?>

<main class="content">
    <section class="content-top">
        <h1>Oops!</h1>
        <hr>
    </section>
    <section class="project-intro">
        <h2>This page doesn't exist.</h2>
        <div class="btn"><a href="./" class="hvr-icon-forward">But there's plenty more to see! <i class="fas fa-angle-double-right fa-lg" data-fa-transform="down-1" aria-hidden="true"></i></a></div>
    </section>

</main>
<?php include ("footer.php"); ?>
<!--    body closes in footer.php-->

<!-- IE needs 512+ bytes: http://blogs.msdn.com/b/ieinternals/archive/2010/08/19/http-error-pages-in-internet-explorer.aspx -->

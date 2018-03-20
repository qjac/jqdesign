<?php $title="Design + Web Development";
$pageClass="info";
$socialPic="img/jq-fbpreview.gif";
$pageLink= (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>

<?php include ("header.php"); ?>

<main id="content" class="content">
    <section class="content-top">
        <h1>Oops!</h1>
    </section>
    <section class="project-intro">
        <h3>This page doesn't exist. But there's plenty more to see!</h3>
        <div class="btn"><a href="./" class="hvr-icon-forward">Head back to the home page <i class="fas fa-angle-double-right fa-lg" data-fa-transform="down-1" aria-hidden="true"></i></a></div>
    </section>
<hr>
</main>
<?php include ("footer.php"); ?>
<!--    body closes in footer.php-->

<!-- IE needs 512+ bytes: http://blogs.msdn.com/b/ieinternals/archive/2010/08/19/http-error-pages-in-internet-explorer.aspx -->

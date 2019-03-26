<?php $title="Twin Spirits Website Redevelopment";
		$pageClass="portfolio-item twinspirits";
		$pageDesc="Fresh site for finding fresh drinks.";
$fbPic="http://qjac.net/img/tsd/tsd-booze-1920.png";
$twitterPic="http://qjac.net/img/tsd/tsd-booze-1920.png";
		$pageLink= (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>

<?php include ("header.php"); ?>

        <main id="content" class="content">
	       <section class="content-top">
<!--		       h1 is for project title-->
		       <h1>Twin Spirits Distillery</h1>
		       <div class="category-box">
	        <div>
		        <p class="category">Front End Development</p> 
		        <hr>
	        </div>
	        <div>
		        <p class="category">WordPress Development</p>
		        <hr>
	        </div>
	    </div>
	       </section>

	        <section class="project-intro">
		        <h2>WordPress quenches thirst</h2>
		        <p>A local distillery was looking for a few new features and a refresh on the look of their website. Custom fields, post types, and page templates extend the original WordPress design to get Twin Spirits Distillery customers the info they need and provide the client with better admin tools for managing content. Modern CSS techniques ensure the layout stays functional and looks professional regardless of how it's being viewed. Now, that's something to raise a glass to&mdash;Cheers!</p>

		        <div class="btn"><a href="https://www.twinspirits.us/" class="hvr-icon-forward">Visit Site <i class="fas fa-angle-double-right fa-lg" data-fa-transform="down-1" aria-hidden="true"></i></a></div>
	        </section>

	        <section class="project-img">
	        	
		        <div class="row">
			        <img sizes="100vw" srcset="img/tsd/tsd-booze-480.png 480w, img/tsd/tsd-booze-960.png 960w, img/tsd/tsd-booze-1920.png 1920w" src="img/tsd/tsd-booze-960.png" alt="product page (rum)" class="full-width">
		        </div>
		        
		        <div class="row">
		        	<img sizes="50vw" srcset="img/tsd/tsd-desk-480.png 480w, img/tsd/tsd-desk-960.png 960w, img/tsd/tsd-desk-1920.png 1920w" src="img/tsd/tsd-desk-960.png" alt="desktop homepage" class="half-width">
			        <img sizes="50vw" srcset="img/tsd/tsd-spread-480.png 480w, img/tsd/tsd-spread-960.png 960w, img/tsd/tsd-spread-1920.png 1920w" src="img/jq/tsd/tsd-spread-960.png" alt="multiple webpages" class="half-width">
		        </div>

						<div class="row">
			        <img sizes="100vw" srcset="img/tsd/tsd-mobile-480.png 480w, img/tsd/tsd-mobile-960.png 960w, img/tsd/tsd-mobile-1920.png 1920w" src="img/tsd/tsd-mobile-960.png" alt="homepage on mobile device" class="full-width">
		        </div>
		        
		      </section>
					<section class="project-intro">
		        <p>Updated web design by <a href="http://janinahartleydesigns.com/">Janina Hartley</a>. <br>
		        	Identity and original web design by <a href="https://evologycreative.com/work/twin-spirits-distillery/">Evology</a>.</p>
	        </section>

	        <section class="project-intro">
		        <hr>
	        </section>
        </main>

        <?php include ("footer.php"); ?>

<!--    body closes in footer.php-->

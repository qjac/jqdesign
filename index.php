<?php $title="Design + Web Development";
$pageClass="index";
$pageDesc="A straightforward, strategic designer and web developer who loves working with the movers, shakers, and do-gooders.";
$fbPic="http://jqdesign.co/img/social/jq-preview-fb.png";
$twitterPic="http://jqdesign.co/img/social/jq-preview-630.png";
$pageLink= (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>

<?php include ("header.php"); ?>

        <main class="content">
	       <section class="content-top">
		       <h1>&nbsp;Design&nbsp;<span class="plus">+</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br> Web&nbsp;Development</h1>
		       <hr>
	       </section>

        <section class="portfolio">

	        <figure class="portfolio-item">
		        <a href="/coolcatidentity" class="hvr-trim">
			        <img sizes="100vw" srcset="img/ccc-meow-square-250.jpg 250w, img/ccc-meow-square-500.jpg 500w, img/ccc-meow-square-750.jpg 7500w img/ccc-meow-square-1000.jpg 1000w" src="img/ccc-meow-square-750.jpg" alt="meow" class="featureimg">
		        </a>
		        <figcaption>

			        <h3>High-energy identity with an offbeat sensibility.</h3>
			        <div class="btn "><a href="/coolcatidentity" class="hvr-icon-forward">Take a closer look!
				        </a></div>
<!--		        </figcaption>-->
<!--		        <p class="category">identity&nbsp;development // brand&nbsp;strategy // business&nbsp;collateral&nbsp;design</p>-->
	        </figure>

	        <figure class="portfolio-item">
		        <a href="/coolcatdigital" class="hvr-trim">
			        <img sizes="100vw" srcset="img/ccc-web-square-250.jpg 250w, img/ccc-web-square-500.jpg 500w, img/ccc-web-square-750.jpg 7500w img/ccc-web-square-1000.jpg 1000w" src="img/ccc-web-square-750.jpg" alt="website" class="featureimg">
		        </a>
		        <figcaption>
			        <h3>Online tools for selling + connecting.</h3>
			        <div class="btn "><a href="/coolcatdigital" class="hvr-icon-forward">Take a closer look! </a></div>
			        <!--		        </figcaption>-->
			        <!--		        <p class="category">identity&nbsp;development // brand&nbsp;strategy // business&nbsp;collateral&nbsp;design</p>-->
	        </figure>

	        <figure class="portfolio-item">
		        <a href="/coolcatpackage" class="hvr-trim">
			        <img sizes="100vw" srcset="img/ccc-package-square-250.jpg 250w, img/ccc-package-square-500.jpg 500w, img/ccc-package-square-750.jpg 7500w img/ccc-package-square-1000.jpg 1000w" src="img/ccc-package-square-750.jpg" alt="package with coasters" class="featureimg">
		        </a>
		        <figcaption>
			        <h3>A box that's great in the store and better at home.</h3>
			        <div class="btn "><a href="/coolcatpackage" class="hvr-icon-forward">Take a closer look! </a></div>
			        <!--		        </figcaption>-->
			        <!--		        <p class="category">identity&nbsp;development // brand&nbsp;strategy // business&nbsp;collateral&nbsp;design</p>-->
	        </figure>

	        <figure class="portfolio-item">
		        <a href="/emeraldcity" class="hvr-trim">
			        <img sizes="100vw" srcset="img/ec-e-square-250.png 250w, img/ec-e-square-500.png 500w, img/ec-e-square-750.png 7500w img/ec-e-square-1000.png 1000w" src="img/ec-e-square-750.png" alt="Emerald City icon" class="featureimg">
		        </a>
		        <figcaption>
			        <h3>The neighborhood cafe with a kick gets a welcoming identity.</h3>
			        <div class="btn "><a href="/emeraldcity" class="hvr-icon-forward">Take a closer look! </a></div>
			        <!--		        </figcaption>-->
			        <!--		        <p class="category">identity&nbsp;development // brand&nbsp;strategy // business&nbsp;collateral&nbsp;design</p>-->
	        </figure>


	        </section>

        </main>

        <?php include ("footer.php"); ?>

<!--    body closes in footer.php-->

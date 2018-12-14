<?php $title="Portfolio";
$pageClass="index";
$pageDesc="A straightforward, strategic front end engineer based in Minneapolis, MN.";
$fbPic="http://jqdesign.co/img/social/jq-preview-fb.png";
$twitterPic="http://jqdesign.co/img/social/jq-preview-630.png";
$pageLink= (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>

<?php include ("header.php"); ?>

        <main id="content" class="content">
	       <section class="content-top">
	       </section>
			<section class="home-intro">

			    <p> As a straightforward and strategic software engineer, I love to work with the movers, the shakers, and the do-gooders to help them make their mark. With a can-do attitude, deft googling chops, and a drive to dig deep, I work to create powerful tools and elegant solutions. </p>
				<h4>~ Jacqueline Quintanilla ~</h4>
				<hr>
			</section>

        <section class="portfolio">
        	<figure class="portfolio-item">
		        <a href="/twinspirits.php" class="hvr-trim">
			        <img sizes="100vw" srcset="img/tsd-square-250.png 250w, img/tsd-square-500.png 500w, img/tsd-square-750.png 750w, img/tsd-square-1000.png 1000w" src="img/tsd-square-750.png" alt="Twin Spirits Distillery website" class="featureimg">
			        <p class="category">WordPress&nbsp;development<br>
			                            front&nbsp;end&nbsp;development </p>
		        </a>
		        	<figcaption>

			        <h3>WordPress quenches thirst.</h3>
			        <div class="btn "><a href="/twinspirits.php" class="hvr-icon-forward">Take a closer look! <i class="fas fa-angle-double-right fa-lg" data-fa-transform="down-1" aria-hidden="true"></i></a></div>
		        </figcaption>
	        </figure>

	        <figure class="portfolio-item">
		        <a href="/zetuslapetus.php" class="hvr-trim">
			        <img sizes="100vw" srcset="img/zl-icon-square-250.jpg 250w, img/zl-icon-square-500.jpg 500w, img/zl-icon-square-750.jpg 750w, img/zl-icon-square-1000.jpg 1000w" src="img/zl-icon-square-750.jpg" alt="zetus lapetus" class="featureimg">
			        <p class="category">market&nbsp;research <br>
			                            identity <br>
			                            web&nbsp;design <br>
			                            front&nbsp;end&nbsp;development</p>
		        </a>
		        <figcaption>
			        <h3>Virtual reality for everyone.</h3>
			        <div class="btn "><a href="/zetuslapetus.php" class="hvr-icon-forward">Take a closer look!
				        <i class="fas fa-angle-double-right fa-lg" data-fa-transform="down-1" aria-hidden="true"></i></a></div>
			        </figcaption>
	        </figure>

	        <figure class="portfolio-item">
		        <a href="/emeraldcity.php" class="hvr-trim">
			        <img sizes="100vw" srcset="img/ec-e-square-250.png 250w, img/ec-e-square-500.png 500w, img/ec-e-square-750.png 750w, img/ec-e-square-1000.png 1000w" src="img/ec-e-square-750.png" alt="Emerald City icon" class="featureimg">
			        <p class="category">identity&nbsp; <br>
			                            digital&nbsp;advertising <br>
			                            wordpress&nbsp;development
			        </p>
		        </a>
		        <figcaption>
			        <h3>The neighborhood cafe with a kick gets a welcoming identity.</h3>
			        <div class="btn "><a href="/emeraldcity.php" class="hvr-icon-forward">Take a closer look! <i class="fas fa-angle-double-right fa-lg" data-fa-transform="down-1" aria-hidden="true"></i></a></div>			                        
			    </figcaption>
	        </figure>

	        <figure class="portfolio-item">
		        <a href="/tart.php" class="hvr-trim">
			        <img sizes="100vw" srcset="img/tart-square-250.jpg 250w, img/tart-square-500.jpg 500w, img/tart-square-750.jpg 750w, img/tart-square-1000.jpg 1000w" src="img/tart-square-750.jpg" alt="tart" class="featureimg">
			        <p class="category">identity <br>
			                            digital&nbsp;advertising <br>
			                            web&nbsp;development</p>
		        </a>
		        <figcaption>
			        <h3>An in-your-face identity and website for eyewear with attitude.</h3>
			        <div class="btn"><a href="/tart.php" class="hvr-icon-forward">Take a closer look!
				        <i class="fas fa-angle-double-right fa-lg" data-fa-transform="down-1" aria-hidden="true"></i></a></div>
			        </figcaption>
	        </figure>
        </section>
<section>
		<hr>
</section>
        </main>


        <?php include ("footer.php"); ?>

<!--    body closes in footer.php-->

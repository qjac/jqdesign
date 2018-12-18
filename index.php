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

			    <p> As a straightforward and strategic software engineer, I love to work with the movers, the shakers, and the do-gooders to help them make their mark. With a can-do attitude, deft googling chops, and a drive to dig deep, I work to create powerful tools and elegant solutions.</p>
				<h4>~ Jacqueline Quintanilla ~</h4>
				<hr>
			</section>

        <section class="portfolio">
			<div class="portfolio-item">
				<span class="date">In Progress</span>
				<h3>Movie Jar</h3>
				<a href="https://github.com/qjac/moviejar">github.com/qjac/moviejar</a>
				<ul class="category">
					<li>Javascript (React)</li>
					<li>CSS (SCSS)</li>
					<li>HTML</li>
				</ul>
				<div class="project-intro">
					<p>You're thinking about watching a movie tonight. But here's comes a question that has stumped scholars for millennia. What movie should we watch? Oh...the horror, the tense silence, the frozen fear...</p>
					<p>Fear no more! Movie Jar will take your carefully curated list of movies and randomly select a gem for you to enjoy without the maddening indecisiveness that might otherwise throw your evening off kilter. Enjoy!</p>
					<p>Built using a React frontend, this simple single page app is a <a href="https://github.com/qjac/moviejar">work in progress</a> and a playground for learning. Check back soon to see what’s new!</p>
				</div>
			</div>

			<hr>

			<div class="portfolio-item">
				<span class="date">November 2018</span>
				<h3>Restaurant Reviews</h3>
				<a href="https://github.com/qjac/mws-restaurant">github.com/qjac/mws-restaurant</a>
				<ul class="category">
					<li>Javascript</li>
					<li>CSS</li>
					<li>HTML</li>
					<li>Gulp</li>
					<li>NPM</li>
				</ul>
				<div class="project-intro">
					<p>Service workers, IndexedDB, and caching, oh my! As part of <a href="https://www.udacity.com/course/mobile-web-specialist-nanodegree--nd024">Udacity’s Mobile Web Specialist course</a>, this static, desktop-only site turned into an accessible, responsive, offline-first, dynamic web app where users can read up on the hottest restaurants in town, leave a review, and mark their favorites for later.</p>
				</div>
			</div>

			<hr>

			<div class="portfolio-item">
				<span class="date">October 2018</span>
				<h3>ilumen</h3>
				<a href="https://my.ilumen.app/">my.ilumen.app</a>
				<a href="https://ilumen.app/">ilumen.app</a>
				<ul class="category">
					<li>Javascript</li>
					<li>CSS (SCSS)</li>
					<li>HTML</li>
					<li>Webpack</li>
					<li>Docker</li>
				</ul>
				<div class="project-intro">
					<p>ilumen is the first biometric, data-driven mental wellness monitoring and management program offering employees personalized recommendations for health and performance. The public web application offers an assessment and customized tips on how to improve mental wellness and the admin portal features a no-nonsense layout to get right down to business. Both are built using an interactive React front end for modularity and scalability and modern (yet still IE-friendly!) CSS for a seamless branded experience across platforms and browsers.</p>
				</div>
			</div>

			<hr>

			<div class="portfolio-item">
				<span class="date">February 2018</span>
				<h3>Twin Spirits Distillery</h3>
				<a href="https://www.twinspirits.us/">twinspirits.us</a>
				<a href="https://github.com/qjac/twinspirits">github.com/qjac/twinspirits</a>
				<ul class="category">
					<li>PHP</li>
					<li>CSS (SCSS)</li>
					<li>HTML</li>
					<li>Lando</li>
				</ul>
				<div class="project-intro">
					<p>A local distillery was looking for a few new features and a refresh on the look of their website. Custom fields, post types, and page templates extend the original WordPress design to get Twin Spirits Distillery customers the info they need and provide the client with better admin tools for managing content. Modern CSS techniques ensure the layout stays functional and looks professional regardless of how it's being viewed. Now, that's something to raise a glass to—Cheers!</p>
					<div class="btn "><a href="/twinspirits.php" class="hvr-icon-forward">Take a closer look! <i class="fas fa-angle-double-right fa-lg" data-fa-transform="down-1" aria-hidden="true"></i></a></div>
				</div>
			</div>

			<hr>

			<div class="portfolio-item">
				<span class="date">April 2017</span>
				<h3>Zetus Lapetus</h3>
				<a href="https://qjac.net/zetus-lapetus/">qjac.net/zetus-lapetus</a>
				<a href="https://github.com/qjac/zetus_lapetus">github.com/qjac/zetus_lapetus</a>
				<ul class="category">
					<li>PHP</li>
					<li>CSS (SCSS)</li>
					<li>Javascript (jQuery)</li>
					<li>HTML</li>
				</ul>
				<div class="project-intro">
					<p>Virtual Reality technology is moving fast and Zetus Lapetus wants to get everyone in the game. This marketing demo site aims to spread the word about this new affordable technology. It was built with no frameworks or backend using primarily HTML and CSS with PHP and JavaScript playing supporting roles in the architecture.
					</p>
					<div class="btn "><a href="/zetuslapetus.php" class="hvr-icon-forward">Take a closer look!
				        <i class="fas fa-angle-double-right fa-lg" data-fa-transform="down-1" aria-hidden="true"></i></a></div>
				</div>
			</div>

			<hr>

			<div class="portfolio-item">
				<span class="date">May 2016</span>
				<h3>Tart</h3>
				<a href="https://qjac.net/zetus-lapetus/">qjac.net/zetus-lapetus</a>
				<a href="https://github.com/qjac/zetus_lapetus">github.com/qjac/zetus_lapetus</a>
				<ul class="category">
					<li>PHP</li>
					<li>SQL</li>
					<li>CSS (Bootstrap)</li>
					<li>HTML</li>
				</ul>
				<div class="project-intro">
					<p>An in-your-face website for eyewear with attitude. Built as a custom front end for a legacy content management system, the site was built using PHP and MySQL to display all of the funky eyewear styles the shop offers.
					</p>
					<div class="btn"><a href="/tart.php" class="hvr-icon-forward">Take a closer look!
				        <i class="fas fa-angle-double-right fa-lg" data-fa-transform="down-1" aria-hidden="true"></i></a></div>
				</div>
			</div>

			<hr>

			<div class="portfolio-item">
				<span class="date">March 2016</span>
				<h3>Emerald City</h3>
				<a href="http://jacquelinequintanilla.com/webi2000/emeraldcity/">jacquelinequintanilla.com/webi2000/emeraldcity</a>
				<ul class="category">
					<li>WordPress</li>
					<li>PHP</li>
					<li>CSS</li>
					<li>HTML</li>
				</ul>
				<div class="project-intro">
					<p>The neighborhood cafe with a kick gets a welcoming website. This WordPress child theme takes a basic theme and spices it up with a custom layout and brand-specific styling. Functionality is expanded through the use of plugins that are custom styled for a consistent experience.
					</p>
					<div class="btn "><a href="/emeraldcity.php" class="hvr-icon-forward">Take a closer look! <i class="fas fa-angle-double-right fa-lg" data-fa-transform="down-1" aria-hidden="true"></i></a></div>
				</div>
			</div>

			<hr>




			<!-- OLD STUFF -->


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
			        
			        </figcaption>
	        </figure>
        </section>
<section>
		<hr>
</section>
        </main>


        <?php include ("footer.php"); ?>

<!--    body closes in footer.php-->

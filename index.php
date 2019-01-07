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
			    <p>As a straightforward and strategic software engineer, I love to work with the movers, the shakers, and the do-gooders to make a mark. With a can-do attitude, deft googling chops, and a drive to dig deep, I work to create powerful tools and elegant solutions.</p>
				<h4>~ Jacqueline Quintanilla</h4>
				<hr>
			</section>

        <section class="portfolio">
			<div class="portfolio-item">
				<span class="date">In Progress</span>
				<div class="project-header">
					<h3>Movie Jar</h3>
					<ul class="category-box">
						<li class="category">Javascript (React)</li>
						<li class="category">CSS (SCSS)</li>
						<li class="category">HTML</li>
					</ul>
				</div>
				<div class="project-intro">
					<p>You're thinking about watching a movie tonight. But here comes the question that has stumped scholars for millennia&#8212What movie should we watch? Oh...the horror, the tense silence, the frozen fear...</p>
					<p>Fear no more! Movie Jar will take your carefully curated list of movies and randomly select a gem for you to enjoy without the maddening indecisiveness that might otherwise throw your evening off kilter. Enjoy!</p>
					<p>Built using a React frontend, this simple single page app is a 
						<a href="https://github.com/qjac/moviejar">work in progress</a> and a playground for learning. Check back soon to see what’s new!</p>
					<a href="https://github.com/qjac/moviejar">github.com/qjac/moviejar</a>
				</div>
				<hr>
			</div>

			<div class="portfolio-item">
				<span class="date">November 2018</span>
				<div class="project-header">
					<h3>Restaurant Reviews</h3>
					<ul class="category-box">
						<li class="category">Javascript</li>
						<li class="category">CSS</li>
						<li class="category">HTML</li>
						<li class="category">Gulp</li>
						<li class="category">NPM</li>
					</ul>
				</div>
				
				<div class="project-intro">
					<p>Service workers, IndexedDB, and caching, oh my! As part of <a href="https://www.udacity.com/course/mobile-web-specialist-nanodegree--nd024">Udacity’s Mobile Web Specialist course</a>, this static, desktop-only site turned into an accessible, responsive, offline-first, dynamic web app where users can read up on the hottest restaurants in town, leave a review, and mark their favorites for later.</p>
					<a href="https://mws-restaurant-site.netlify.com/">mws-restaurant-site.netlify.com</a> 
					<a href="https://github.com/qjac/mws-restaurant">github.com/qjac/mws-restaurant</a>
				</div>
				
				<hr>
			</div>

			<div class="portfolio-item">
				<span class="date">October 2018</span>
				<div class="project-header">
					<h3>ilumen</h3>
					<ul class="category-box">
						<li class="category">Javascript (React, Redux)</li>
						<li class="category">CSS (SCSS)</li>
						<li class="category">HTML</li>
						<li class="category">Webpack</li>
					</ul>
				</div>
				
				<div class="project-intro">
					<p>ilumen is the first biometric, data-driven mental wellness monitoring and management program offering employees personalized recommendations for health and performance. The public web application offers an assessment and customized tips on how to improve mental wellness and the admin portal features a no-nonsense layout to get right down to business. Both are built using an interactive React front end for modularity and scalability and modern (yet still IE-friendly!) CSS for a seamless branded experience across platforms and browsers.</p>
					<a href="https://my.ilumen.app/">my.ilumen.app</a>
				<span>Marketing site: </span><a href="https://ilumen.app/">ilumen.app</a>
				</div>
				
				<hr>
			</div>

			<div class="portfolio-item">
				<span class="date">February 2018</span>
				<div class="project-header">
					<h3>Twin Spirits Distillery</h3>
					<ul class="category-box">
						<li class="category">WordPress</li>
						<li class="category">PHP</li>
						<li class="category">CSS (SCSS)</li>
						<li class="category">HTML</li>
					</ul>
				</div>
				<div class="project-intro">
					<p>A local distillery was looking for a few new features and a refresh on the look of their website. Custom fields, post types, and page templates extend the original WordPress design to get Twin Spirits Distillery customers the info they need and provide the client with better admin tools for managing content. Modern CSS techniques ensure the layout stays functional and looks professional regardless of how it's being viewed. Now, that's something to raise a glass to—Cheers!</p>
					<a href="https://www.twinspirits.us/">twinspirits.us</a>
					<a href="https://github.com/qjac/twinspirits">github.com/qjac/twinspirits</a>
					<!-- <div class="btn "><a href="/twinspirits.php" class="hvr-icon-forward">Read more about Twin Spirits <i class="fas fa-angle-double-right fa-lg" data-fa-transform="down-1" aria-hidden="true"></i></a>
					</div> -->
				</div>
				
				<hr>
			</div>

			<div class="portfolio-item">
				<span class="date">April 2017</span>
				<div class="project-header">
					<h3>Zetus Lapetus</h3>
					<ul class="category-box">
						<li class="category">PHP</li>
						<li class="category">CSS (SCSS)</li>
						<li class="category">Javascript (jQuery)</li>
						<li class="category">HTML</li>
					</ul>
				</div>

			<div class="portfolio-item">
				<span class="date">May 2016</span>
				<div class="project-header">
					<h3>Tart</h3>
					<ul class="category-box">
						<li class="category">PHP</li>
						<li class="category">SQL</li>
						<li class="category">CSS</li>
						<li class="category">HTML</li>
					</ul>
				</div>
				<div class="project-intro">
					<p>An in-your-face website for eyewear with attitude. Built as a custom front end for a legacy content management system, the site was built using PHP and MySQL to display all of the funky eyewear styles the shop offers.
					</p>
					<a href="http://jacquelinequintanilla.com/webi2012/final/">jacquelinequintanilla.com/webi2012/final</a>
					<a href="https://github.com/qjac/tart">github.com/qjac/tart</a>
					<!-- <div class="btn"><a href="/tart.php" class="hvr-icon-forward">Read more about Tart
				        <i class="fas fa-angle-double-right fa-lg" data-fa-transform="down-1" aria-hidden="true"></i></a>
				    </div> -->
				</div>
				<hr>
			</div>

			<div class="portfolio-item">
				<span class="date">March 2016</span>
				<div class="project-header">
					<h3>Emerald City</h3>
					<ul class="category-box">
						<li class="category">WordPress</li>
						<li class="category">PHP</li>
						<li class="category">CSS</li>
						<li class="category">HTML</li>
					</ul>
				</div>
				<div class="project-intro">
					<p>The neighborhood cafe with a kick gets a welcoming website. This WordPress child theme takes a basic theme and spices it up with a custom layout and brand-specific styling. Functionality is expanded through the use of plugins that are custom styled for a consistent experience.
					</p>
					<a href="http://jacquelinequintanilla.com/webi2000/emeraldcity/">jacquelinequintanilla.com/webi2000/emeraldcity</a>
					<a href="https://github.com/qjac/emeraldcity">github.com/qjac/emeraldcity</a>

			
				</div>
				<hr>
			</div>
			
        </section>
	<section>
		<hr>
	</section>
        </main>


        <?php include ("footer.php"); ?>

<!--    body closes in footer.php-->

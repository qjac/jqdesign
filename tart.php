<?php $title="Tart";
		$pageClass="portfolio-item tart";
		$pageDesc="An in-your-face site for eyewear with attitude.";
$fbPic="http://jqdesign.co/img/tart/tart-web-1920.png";
$twitterPic="http://jqdesign.co/img/tart/tart-web-1920.png";
		$socialPic="img/tart/tart-web-960.png";
		$pageLink= (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>

<?php include ("header.php"); ?>

        <main class="content">
	       <section class="content-top">
<!--		       h1 is for project title-->
		       <h1>Eyewear with Attitude</h1>
		       <hr>
		       <div class="category-box">
		       <div class="highlight">
		        <p class="category">identity</p>
	        </div>
	      <div class="highlight">
		        <p class="category">digital&nbsp;advertising</p>
	        </div>
	      <div class="highlight">
		        <p class="category">web development</p>
	        </div>
	   </div>
	        <hr>
	       </section>

	        <section class="project-intro">
		        <h2>Pucker up!</h2>
		        <p>Tart is an online shop that specializes in eyewear for the unique, the stylish, and the rebellious. It needed a website that packed a punch while getting customers quickly to their perfect frame. Using a previously built custom content management system, the website was built using PHP and MySQL to organize Tart’s extensive collection of fierce frames.</p>

		        <div class="btn"><a href="http://jacquelinequintanilla.com/webi2012/final/" class="hvr-icon-forward">Visit Site </a></div>
	        </section>

	        <section class="project-img">
		        <div class="row">
			        <img sizes="100vw" srcset="img/tart/tart-web-192.png 192w, img/tart/tart-web-480.png 480w, img/ec/ec-logo-960.png 960w, img/tart/tart-web-1920.png 1920w" src="img/tart/tart-web-960.png" alt="Emerald City logo" class="full-width">
		        </div> <!--		        end row-->
	        </section>

	        <section class="project-intro">
		        <h3>Digital Ads</h3>
		        <p>Sized just right for Google.</p>
	        </section>

	        <section class="project-img">
<!--		        <div class="row">-->
<!--			        <img src="img/tart/animate-leaderboard.gif" alt="digital campaign" class="no-stretch">-->
<!--		        </div>-->
		        <div class="row">
			        <div class="masonry">
				        <img src="img/tart/tart-banner.png" alt="digital campaign" class="no-stretch">
				        <img src="img/tart/tart-large.png" alt="digital campaign" class="no-stretch">
				        <img src="img/tart/tart-halfpage.png" alt="digital campaign" class="no-stretch">
			        </div>
		        </div>  <!--		        end row-->
	        </section>

	        <section class="project-img">
		        <div class="row">
			        <img sizes="100vw" srcset="img/tart/tart-logo-480.png 480w, img/tart/tart-logo-960.png 960w, img/tart/tart-logo-1920.png 1920w" src="img/tart/tart-logo-960.png" alt="Tart logo" class="full-width">
		        </div> <!--		        end row-->
	        </section>
	        <section class="project-intro">
		        <h3>Bold + Beautiful</h3>
		        <p>The frames are bold, stylish, and definitely untraditional, so the identity needed to live up to the audacity. The wordmark is thick and gritty and off-kilter to evoke a punk don’t-give-a-damn vibe. The color palette is abrasive—stark white, deep black, bright yellow, and screaming red. The stock images selected are blazing with color and feature wild hair and rebellious attitude. That’s the in-your-face identity for this rowdy brand.</p>
		        <hr>
	        </section>
	        <section class="project-img">
		        <div class="row">
			        <img sizes="100vw" srcset="img/tart/tart-moodboard-480.png 480w, img/tart/tart-moodboard-960.png 960w, img/tart/tart-moodboard-1920.png 1920w" src="img/tart/tart-moodboard-960.png" alt="moodboard" class="full-width">
		        </div> <!--		        end row-->
	        </section>
	        <section class="project-intro">
		        <hr>
	        </section>
        </main>

        <?php include ("footer.php"); ?>

<!--    body closes in footer.php-->

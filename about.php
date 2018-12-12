<?php $title="About JQ";
$pageClass="about";
$pageDesc="A straightforward, strategic front end engineer based in Minneapolis, MN.";
$fbPic="http://jqdesign.co/img/social/jq-preview-fb.png";
$twitterPic="http://jqdesign.co/img/social/jq-preview-630.png";
$pageLink= (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>

<?php include ("header.php"); ?>

<main id="content" class="content">
 <section class="content-top">
   <h1>About</h1>
 </section>

  <section class="project-intro">	
  	<h2>10. Fun. Facts.</h2>
  	<div class="topten odd">
  		<span class="number">one</span>
  		<h3>🍋 Pucker up! 🍋</h3>
  		<p>Lemons are my favorite fruit. As a kid, I would bring them to school as a snack with a little salt. Limes are a close second, but they mostly make their appearance as a garnish.🍹 Yum!</p>
  	</div>
  	<div class="topten even">
  		<span class="number">two</span>
  		<h3>The Great Minnesota Get-Together</h3>
  		<p>There's nothing as ridiculous, as earnest, as chaotic, nor as fun as the Minnesota State Fair. And I eat. it. up. Every year, I go more than once—it’s just not possible to sample all of the foods-on-a-stick, try all of the wacky beers, see all of the art and tractors and animals in only one go. It’s a twelve-day feast of the senses coming<span id="fair-countdown"></span>! Get your walking shoes ready.</p>
  	</div>
  	<div class="topten odd">
  		<span class="number">three</span>
  		<h3>🇩🇰</h3>
  		<p><a href="https://www.youtube.com/watch?v=9Dhm48Ypj-A">Jeg snakker dansk!</a> Ikke det bedste, men godt nok. Da jeg var i gymnasiet var jeg en udvekslingsstudent i et år. Det var dejligt.</p>
  	</div>
  	<div class="topten even">
  		<span class="number">four</span>
  		<h3>Meow!</h3>
  		<p>I'm pretty into cats. I have two furry jerks—Kirby + Comet. They bring me endless joy, constant vexation, and plenty of snuggles. 10/10 would do again.</p>
  		<p>😻 😻 😻 😻 😻</p>
  	</div>
  	<div class="topten odd">
  		<span class="number">five</span>
  		<h3>Splish Splash 💦</h3>
  		<p>Lakes, rivers, oceans, pools, large puddles&mdash;I'm into all of it. There’s nothing better than sitting on a dock and listening to the waves hit the shore.</p>
  	</div>
  	<div class="topten even">
  		<span class="number">six</span>
  		<h3>Responsibility. Relator. Adaptability. Learner. Arranger.</h3>
  		<p>💪 I used to be a Strengths Coach. Those are my top five.☝ I ran workshops and one-on-one sessions for college students to better understand and apply their strengths. I can nerd out about StrengthsFinder for days. Seriously. Just get me started.</p>
  	</div>
  	<div class="topten odd">
  		<span class="number">seven</span>
  		<h3>I’m really into ideograms.</h3>
  		<p>As you can probably already tell, I’m into emoji. They’re silly and fun! Like a dash of spice in your text block. Here are some of my faves: 😻 🌮 🎉 💃 🍻</p>
  		<p>And my Bitmoji has been wearing her rabbit suit since last Easter. Now that’s some hot fashion.</p>
  		<img src="/img/bitmoji.png" alt="bitmoji wearing rabbit suit">
  	</div>
  	<div class="topten even">
  		<span class="number">eight</span>
  		<h3>Podsessed.</h3>
  		<p>I’m absolutely obsessed with podcasts. It’s verging on problematic. There just aren’t enough hours in the day to get all of these amazing sounds into my ears. Here are my current top picks:</p>
  			<ul>
  				<li><a href="https://99percentinvisible.org/">99% Invisible</a><hr></li>
  				<li><a href="https://www.wnycstudios.org/shows/dopequeens">2 Dope Queens</a><hr></li>
  				<li><a href="https://www.wnycstudios.org/shows/whiteguys">Sooo Many White Guys</a><hr></li>
  				<li><a href="https://www.earhustlesq.com/">Ear Hustle</a><hr></li>
  				<li><a href="https://www.gimletmedia.com/homecoming/">Homecoming</a><hr></li>
  				<li><a href="http://www.latimes.com/projects/la-me-dirty-john/">Dirty John</a><hr></li>
  				<li><a href="https://www.wnycstudios.org/shows/radiolabmoreperfect">More Perfect</a><hr></li>
  				<li><a href="https://crooked.com/podcast-series/pod-save-america/">Pod Save America</a><hr></li>
  				<li><a href="https://crooked.com/podcast-series/pod-save-the-people/">Pod Save the People</a><hr></li>
  				<li><a href="https://www.npr.org/podcasts/510312/codeswitch">Code Switch</a><hr></li>
  				<li><a href="https://www.wnycstudios.org/shows/otm/">On the Media</a><hr></li>
  				<li><a href="http://uncivil.show/">Uncivil</a><hr></li>
  				<li><a href="https://www.npr.org/podcasts/510311/embedded">Embedded</a><hr></li>
  				<li><a href="https://www.wnycstudios.org/shows/trumpinc">Trump Inc.</a><hr></li>
  				<li><a href="http://freakonomics.com/">Freakonomics</a><hr></li>
  			</ul>
  	</div>
  	<div class="topten odd">
  		<span class="number">nine</span>
  		<h3>Cheers! 🍻</h3>
  		<p>In addition to drinking beer, I make it. Under the name of Cat Party Brewing and in my dingy basement, every couple of months I morph into a mad scientist and brew up something witchy. Currently on tap: Ginger Beer, Garden Party Fresh Hop Saison (with hops from my yard!), and How Now Brown Cow Chocolate Stout.</p>
  	</div>
  	<div class="topten even">
  		<span class="number">ten</span>
  		<h3>Favorite color? Ha.</h3>
  		<p>Rainbow. And sparkle. #forever</p>
  	</div>
  </section>

	<section class="project-intro">
			<hr>
	</section>
</main>	

<?php include ("footer.php"); ?>
<!--    body closes in footer.php-->

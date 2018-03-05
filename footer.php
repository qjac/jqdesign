
<footer>
	<h4>Let's chat!</h4>

	<div>
		<a href="mailto:hello@jqdesign.co" target="_blank">
			<i class="far fa-envelope fa-2x" aria-hidden="true"></i></a>
		<a href="https://github.com/qjac" target="">
			<i class="fab fa-github fa-2x" aria-hidden="true"></i></a>
			<a href="https://codepen.io/qjac" target="">
			<i class="fab fa-codepen fa-2x" aria-hidden="true"></i></a>
		<a href="https://www.instagram.com/qjac" target="">
			<i class="fab fa-instagram fa-2x" aria-hidden="true"></i></a>
		<a href="https://www.twitter.com/_qjac" target="">
			<i class="fab fa-twitter fa-2x" aria-hidden="true"></i></a>
		<a href="https://www.linkedin.com/in/jacquintanilla/" target="">
			<i class="fab fa-linkedin-in fa-2x" aria-hidden="true"></i></a>
	</div>

	<p>Website designed and coded by Jacqueline Quintanilla. &copy; <?php echo date("Y"); ?>
	</p>
</footer>


   <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. UA-93102704-1 -->
<script>
	(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
		function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
		e=o.createElement(i);r=o.getElementsByTagName(i)[0];
		e.src='https://www.google-analytics.com/analytics.js';
		r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
	ga('create','UA-93102704-1','auto');ga('send','pageview');
</script>

<script> // modified from https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_countdown
// Set the date we're counting down to
// 8/23/2018 at 6am is when the fair kicks off
var countDownDate = new Date("Aug 23, 2018 06:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {
  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Output the result in an element with id="demo"
  document.getElementById("fair-countdown").innerHTML = " in " + days + " days " + hours + " hours " + minutes + " minutes and " + seconds + " seconds";

  // If the count down is over, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("fair-countdown").innerHTML = "";
  }
}, 1000);
</script>
</body>
</html>
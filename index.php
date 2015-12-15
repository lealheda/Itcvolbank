<!DOCTYPE html>
<html lang="en">
<?php
	if (session_id() == "")
		session_start();  ?>
<?php include("head.php") ?>

<body class="home">
<?php include("header.php") ?>

	<!-- Header -->
	<header id="head">
		<div class="container">
		</div>
	</header>
	<!-- /Header -->

	<!-- Intro -->
	<div class="container text-center">
		<br> <br>
		<h2 class="thin">El mejor lugar para ayudar a los demas</h2>
		<p class="text-muted">
			Ayudar a las personas, brindar apoyo, cooperar con las organizaciones, etc., son actos buenos que mejoran la calidad de vida en general..
		</p>
	</div>
	<!-- /Intro-->
	<!-- Highlights - jumbotron -->
	<!-- Social links. @TODO: replace by link/instructions in template -->
	<section id="social">
		<div class="container">
			<div class="wrapper clearfix">
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_button_linkedin_counter"></a>
				<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
				</div>
				<!-- AddThis Button END -->
			</div>
		</div>
	</section>
	<!-- /social links -->

<?php
	include("footer.php")
?>

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>

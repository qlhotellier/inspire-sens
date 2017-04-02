<!--?php
$mail = 'nyokokoro@gmail.com'; // Déclaration de l'adresse de destination.
if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui présentent des bogues.
{
	$passage_ligne = "\r\n";
}
else
{
	$passage_ligne = "\n";
}
//=====Déclaration des messages au format texte et au format HTML.
$message_txt = "Salut à tous, voici un e-mail envoyé par un script PHP.";
$message_html = "<html><head></head><body><b>Salut à tous</b>, voici un e-mail envoyé par un <i>script PHP</i>.</body></html>";
//==========

/*=====Lecture et mise en forme de la pièce jointe.
$fichier   = fopen("image.jpg", "r");
$attachement = fread($fichier, filesize("image.jpg"));
$attachement = chunk_split(base64_encode($attachement));
fclose($fichier);*/
//==========

//=====Création de la boundary.
$boundary = "-----=".md5(rand());
$boundary_alt = "-----=".md5(rand());
//==========

//=====Définition du sujet.
$sujet = "Hey mon ami !";
//=========

//=====Création du header de l'e-mail.
$header = "From: \"WeaponsB\"<weaponsb@mail.fr>".$passage_ligne;
$header.= "Reply-to: \"WeaponsB\" <weaponsb@mail.fr>".$passage_ligne;
$header.= "MIME-Version: 1.0".$passage_ligne;
$header.= "Content-Type: multipart/mixed;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
//==========

//=====Création du message.
$message = $passage_ligne."--".$boundary.$passage_ligne;
$message.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary_alt\"".$passage_ligne;
$message.= $passage_ligne."--".$boundary_alt.$passage_ligne;
//=====Ajout du message au format texte.
$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_txt.$passage_ligne;
//==========

$message.= $passage_ligne."--".$boundary_alt.$passage_ligne;

//=====Ajout du message au format HTML.
$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_html.$passage_ligne;
//==========

//=====On ferme la boundary alternative.
$message.= $passage_ligne."--".$boundary_alt."--".$passage_ligne;
//==========



$message.= $passage_ligne."--".$boundary.$passage_ligne;

/*/=====Ajout de la pièce jointe.
$message.= "Content-Type: image/jpeg; name=\"image.jpg\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: base64".$passage_ligne;
$message.= "Content-Disposition: attachment; filename=\"image.jpg\"".$passage_ligne;
$message.= $passage_ligne.$attachement.$passage_ligne.$passage_ligne;
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;*/
//==========
//=====Envoi de l'e-mail.
mail($mail,$sujet,$message,$header);

//==========
?-->
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Inspire et Sens</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
  <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
  <meta name="author" content="FREEHTML5.CO" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" type="image/png" href="images/favicon.ico" />

	<!-- Google Webfont -->
	<link href='http://fonts.googleapis.com/css?family=Lato:400,300,700|Unica+One' rel='stylesheet' type='text/css'>
	<!-- Themify Icons -->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Icomoon Icons -->
	<link rel="stylesheet" href="css/icomoon-icons.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Easy Responsive Tabs -->
	<link rel="stylesheet" href="css/easy-responsive-tabs.css">
	<!-- Theme Style -->
	<link rel="stylesheet" href="css/style.css">

	
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
		<!-- Header -->
		<header id="fh5co-header" role="banner">
			
			<!-- Logo -->
			<div id="fh5co-logo" class="text-center">
				<a href="index.php">
					<img src="images/logo.png" alt="Image">
				</a>

			</div>
			<!-- Logo -->
			
			<!-- Mobile Toggle Menu Button -->
			<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
			
			<!-- Main Nav -->
			<div id="fh5co-main-nav">
			<nav id="fh5co-nav" role="navigation">
				<ul>
					<li>
						<a href="index.php">Accueil</a>
					</li>
					<li>
						<a href="qui-suis-je.php">Qui suis-je ?</a>
					</li>
					<li>
						<a href="particuliers.php">Particuliers</a>
					</li>
					<li>
						<a href="entreprises.php">Entreprises</a>
					</li>
					<li class="active">
						<a href="contact.php">Contact</a>
					</li>
				</ul>
			</nav>
			</div>
			<!-- Main Nav -->
		</header>
		<!-- Header -->
		
		<!-- Main -->
		<main role="main">

				


				<!-- Form -->
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h2 class="fh5co-uppercase-heading-sm text-center">Contactez-moi !</h2>
							<div class="fh5co-spacer fh5co-spacer-xs"></div>
						</div>
						<div class="col-md-8 col-md-offset-2">
							<form action="#" method="post">
								<div class="col-md-6">
									<div class="form-group">
										<label for="name" class="sr-only">Email</label>
										<input placeholder="Name" id="name" type="text" class="form-control input-lg">
									</div>	
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="email" class="sr-only">Email</label>
										<input placeholder="Email" id="email" type="text" class="form-control input-lg">
									</div>	
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="gender" class="sr-only">Type de contact</label>
										<select class="form-control input-lg" id="gender">
										  <option>--Type de contact--</option>
										  <option>Particuliers</option>
										  <option>Entreprises</option>
										  <option>Autre</option>
										</select>
									</div>	
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="message" class="sr-only">Message</label>
										<textarea placeholder="Message" id="message" class="form-control input-lg" rows="3"></textarea>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="submit" class="btn btn-primary btn-md" value="Send">

										<input type="reset" class="btn btn-outline btn-md" value="Reset">
									</div>	
								</div>
								
								
							</form>	
							<div class="fh5co-spacer fh5co-spacer-sm"></div>
						</div>
						
					</div>

				</div>
				<!-- Form -->

				<div class="fh5co-spacer fh5co-spacer-md"></div>					


				<!-- Map -->
				<div class="container">
					<div class="col-md-12">
						<h2 class="fh5co-uppercase-heading-sm text-center">Google Map</h2>
						<div class="fh5co-spacer fh5co-spacer-xs"></div>
					</div>
				</div>	
				<div id="map"></div>
				<!-- Map -->


				



		</main>
		<!-- Main -->
		
		<!-- Footer -->
		<footer id="fh5co-footer" role="contentinfo">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-xs-12 fh5co-footer-widget ">
						<img src="images/logo.png" alt="Image" class="img-responsive">
					</div>
					<div class="col-md-2 col-xs-6 fh5co-footer-widget">
						<ul>
							<li><a href="#">Our Team</a></li>
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">Support</a></li>
							<li><a href="#">Blog</a></li>
						</ul>
					</div>
					<div class="col-md-2 col-xs-6 fh5co-footer-widget">
						<ul>
							<li><a href="#">Our Clients</a></li>
							<li><a href="#">Our Culture</a></li>
							<li><a href="#">Capabilities</a></li>
							<li><a href="#">Features</a></li>
						</ul>
					</div>
				
					<div class="col-md-5 col-xs-12 fh5co-footer-widget">
						<div class="fh5co-section-title">
							<h5 class="fh5co-title">Subscribe</h5>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure sint, inventore excepturi aliquid ipsam officiis!</p>
						<form class="form-inline" id="fh5co-form-subscribe">
						  <div class="form-group pull-left">
						    <input type="email" class="form-control input-lg input-block" id="subscribe-email" placeholder="info@freehtml5.co">
						  </div>
						  <button type="submit" class="btn btn-primary btn-subscribe-send">Send</button>
						  
						</form>
					</div>
				</div>
				<div class="fh5co-spacer fh5co-spacer-md"></div>
				<div class="row">
					<div class="col-md-6">
                        <p class="fh5co-copyright">&copy; Inspire et Sens 2017. All Rights Reserved. <br>Designed by <a href="#" target="_blank">Yannick Bert</a></p>
					</div>
					<div class="col-md-6">
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="#"><i class="icon-pinterest"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<!-- Footer -->
		
		<!-- Go To Top -->
		<a href="#" class="fh5co-gotop"><i class="ti-shift-left"></i></a>
		
			
		<!-- jQuery -->
		<script src="js/jquery-1.10.2.min.js"></script>
		<!-- jQuery Easing -->
		<script src="js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap.js"></script>
		<!-- Owl carousel -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- Google Map -->
		
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>

		<script src="js/google_map.js"></script>

		<!-- Magnific Popup -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Easy Responsive Tabs -->
		<script src="js/easyResponsiveTabs.js"></script>
		<!-- FastClick for Mobile/Tablets -->
		<script src="js/fastclick.js"></script>
		<!-- Velocity -->
		<script src="js/velocity.min.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>

	</body>
</html>

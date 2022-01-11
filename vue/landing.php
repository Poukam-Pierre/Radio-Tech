<!DOCTYPE html>
  <html lang="en">
    <head>
		<title>DEMO PAGE</title>
		<meta charset="UTF-8"> <!--Permettre l'ecriture des lettres accentues--> 
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!--Intégration des fichiers styles-->
		<link rel='stylesheet' href='../model/landing.css'>

	<!--Configuration Boostrap par lien. Ceci pour permettre l'utulisation des class propre a boostrap sans probleme.-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		
		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

		<!-- Intégration du fichier JS-->
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>

		<!-- icone library-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
		
		<!-- link icon library-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<style>
		/* Rendre l'image adaptative */
		.carousel-inner img{
			width: 100%;
			height: 100%;
		}
		</style>
	</head>
	<body>
	<!--barre de tête-->
		<nav class="navbar navbar-expand-sm navbar-dark bg-dark justify-content-between">
			<a onclick="loadComponent(event) class="icon"><i class="fa fa-facebook"></i></a>
			<a onclick="loadComponent(event) class="icon"><i class="fa fa-twitter"></i></a>
			<a onclick="loadComponent(event) class="icon"><i class="fa fa-instagram"></i></a>
			<a onclick="loadComponent(event) class="icon"><i class="fa fa-youtube"></i></a>
			<form class="form ml-auto" action="#">
				<input type="text" class="form-control mr-sm-2" placeholder="Recherche..." id="search" required>
					<button class="search-btn" type="submit">
						<i class="fa fa-search"></i>
					</button>  
			</form>
		</nav>
		
	<!--barre de menu-->
		<nav class="styled-nav navbar navbar-expand-sm bg-light navbar-light sticky-top">
			<div class="menu-icon"> <span class="fa fa-bars"></span> </div>
			<div class="logo">DEMO FM</div>
			<a class="navbar-brand" onclick="loadComponent(event)>
				<img src="demo_logo.jpg" alt="logo" class="rounded-circle" width="90" height="50">
			</a>
	<!--différents liens du menu-->
			<ul class="navbar-nav">
				<div class="nav-holder">
					<i class="fa fa-times"></i>
					<li class="nav-item">
						<a class="nav-link" onclick="loadComponent(event)>ACCUEIL</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" onclick="loadComponent(event)>PROGRAMMES</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" onclick="loadComponent(event)>SERVICES</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" onclick="loadComponent(event)>GALLERIE</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" onclick="loadComponent(event)>IMAGES</a>
							<a class="dropdown-item" onclick="loadComponent(event)>VIDEOS</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" onclick="loadComponent(event)>PARTICIPER</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" onclick="loadComponent(event)>DEDICASES</a>
							<a class="dropdown-item" onclick="loadComponent(event)>JEUX CONCOURS</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" onclick="loadComponent(event)>PODCAST</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" onclick="loadComponent(event)>CONTACT</a>
					</li>
				</div>
			</ul>
			<span class='burger-nav-icons'>
				<i class="fa fa-search"></i>
			</span>
		</nav>
	<!--barre de lecture-->
		<div class="container">
			<a class="control-play">
				<i class="fa fa-play play-button" style="display: inline-block;"></i>
				<i class="fa fa-pause pause-button" style="display:none;"></i>
				<i class="fa fa-spinner fa-spin player-loader" style="display:none;"></i>
			</a>

	<!--barre d'informations de lecture-->
			<div id="titrage" class="control-infos">
				<span class="control-cover cover-titrage">
					<img src="#" class="media-cover">
				</span>
			</div>
			<div class="control-track">
				<span class="title"></span>
			</div>
			<div class="control-actions">
				<a id="vote-player">
					<i class="fa fa-heart-o fa-lg fa-fw"></i>
				</a>
				<div id="partage">
					<i class="fa fa-share fa-lg fa-fw"></i>
				</div>
				<div class="control-volume">
					<a id="mute-volume" class="toggle-volume" style="display: block;">
						<i class="fa fa-fw fa-volume-up fa-lg"></i>
					</a>
					<a id="unmute-volume" class="toggle-volume" style="display: none;">
						<i class="fa fa-fw fa-volume-off fa-lg"></i>
					</a>
					<div class="control-slider-volume"></div>
				</div>
			</div>
		</div>
	<!--image defilante-->
		<div id="demo" class="carousel slide" data-ride="carousel">
			<ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
				<li data-target="#demo" data-slide-to="2"></li>
			</ul>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="#" alt="#" width="1100" height="500">
					<div class="carousel-caption">
						<h3>Element 1</h3>
					</div>
				</div>
				<div class="carousel-item">
					<img src="#" alt="#" width="1100" height="500">
					<div class="carousel-caption">
						<h3>Element 2<h3>
					</div>
				</div>
				<div class="carousel-item">
					<img src="#" alt="#" width="1100" height="500">
					<div class="carousel-caption">
						<h3>Element 3</h3>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#demo" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#demo" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>
		</div>
	<!--Informations défilantes-->
		<div id="demo" class="carousel slide" data-ride="carousel">
			<ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
			</ul>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<section>
						<article>
							<h3> A PROPOS</h3>
							<P> DEMO RADIO est une radio en ligne créé dans le but de promouvoir l'expension de webRadio africaine, particulièrement camerounaise. Elle permet de présenter les différentes possibilité d'expansion d'une radio conventionnel en radio mixte.<br> Nous offrons:</P>
							<ul class="list margin-top-26">
								<li class="template-bullet">
									<span>Nous offrons la possibilité d'extention des radio tradition grâce à la webRadio ou la création des radio web responsive.</span>
								</li>
								<li class="template-bullet">
									<span>Nous faisons dans les intallations des radio FM </span>
								</li>
							</ul>
						</article>
						<article>
							<h3>NOS PROGRAMMES</h3>
						</article>
						<article>
							<h3>NOTRE EQUIPE</h3>
						</article>
					</section>
				</div>
				<div class="carousel-item">
					<img src="#" alt="#" width="1100" height="500">
					<div class="carousel-caption">
						<h3>Element 2<h3>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#demo" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#demo" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>
		</div>
	<!--Pied de page-->
		<div class="container">
			<div class=" form-group has-error has-feedback">
				<span id="nameErrorPlaceholder" class="hidden"> Le nom est obligatoire.</span>
				<input id="nameContact" class="form-control" type="text" placeholder="Nom" name="contactName" aria-describedby="inputErrorNameContact">
				<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
				<span id="inputErrorNameContact" class="sr-only"> (Le nom est obligatoire)</span>
			</div>
			<div class=" form-group has-error has-feedback">
				<span id="emailErrorPlaceholder" class="hidden"> L'email est obligatoire.</span>
				<input id="emailContact" class="form-control" type="text" placeholder="Email" name="mailContact" aria-describedby="inputErrorMailContact">
				<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
				<span id="inputErrorMailContact" class="sr-only"> (L'email est obligatoire)</span>
			</div>
			<div class=" form-group">
				<input id="phone_number" class="form-control" type="text" placeholder="Numéro de téléphone (optionnel)" name="phone_number">
				<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>				
			</div>
			<div class=" form-group">
				<span id="messageErrorPlaceholder" class="hidden"> Le message est obligatoire.</span>
				<textarea id="messageContact" class="form-control" type="text" placeholder="message" name="messageContact" aria-describedby="inputErrorMessageContact"></textarea>
				<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
				<span id="inputErrorMessageContact" class="sr-only"> (Le message est obligatoire)</span>
			</div>			
			<button id="sendContact" class="btn btn-success">
				<span><i class="fa fa-send"></i>Envoyer</span>
			</button>
		</div>
	
	</body>
  </html>
	
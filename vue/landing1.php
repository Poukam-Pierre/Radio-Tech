<!DOCTYPE html>
<html lang="en" id='html'>
    <head>
		<title>DEMO PAGE</title>
		<meta charset="UTF-8"> <!--Permettre l'ecriture des lettres accentues--> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Configuration Boostrap par lien. Ceci pour permettre l'utulisation des class propre a boostrap sans probleme.-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!--Intégration des fichiers styles-->
		<link rel='stylesheet' href='../model/social_icons.css'>
        <link rel='stylesheet' href='../model/nav_menu.css'>
        <link rel='stylesheet' href='../model/reader_navbar.css'>
        <link rel='stylesheet' href='../model/root.css'>
        <link rel='stylesheet' href='../model/carousel_slide.css'>
        <link rel='stylesheet' href='../model/contactStyle.css'>
        <link rel='stylesheet' href='../model/footer.css'>
        <link rel='stylesheet' href='../model/accueilStyle.css'>
        <link rel='stylesheet' href='../model/dedicace.css'>
        <link rel='stylesheet' href='../model/landing.css'>
        <link rel='stylesheet' href='../model/programStyle.css'>
        <link rel='stylesheet' href='../model/programStyleButton.css'>
        <link rel='stylesheet' href='../model/imageGrid.css'>
        <link rel='stylesheet' href='../model/availablePage.css'>
        <link rel='stylesheet' href='../model/modalImage.css'>
        <link rel='stylesheet' href='../model/videoGrid.css'>
        <link rel='stylesheet' href='../model/podcastPage.css'>
        <link rel='stylesheet' href='../model/services.css'>
        <link rel='stylesheet' href='../model/aPropos.css'>
        <link rel='stylesheet' href='../model/whatsappFile.css'>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

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

    </head>
	<body>
	 <!--barre de tête-->
		<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
			<a href="https://www.facebook.com/Irenee.Nppi/" target="_blank" class="icon"><i class="fa fa-facebook"></i></a>
			<a href="#" class="icon"><i class="fa fa-twitter"></i></a>
			<a href="#" class="icon"><i class="fa fa-instagram"></i></a>
			<a href="#" class="icon"><i class="fa fa-youtube"></i></a>
			<form class="form ml-auto" action="#">
				<input type="text" class="form-control" placeholder="Recherche..." id="search" required>
					<button class="search-btn" type="submit">
						<i class="fa fa-search"></i>
					</button>  
			</form>
		</nav>
      <!--barre de menu-->
        <nav class="navbar navbar-expand-sm navbar-light bg-light sticky-top sticky-nav">
            <nav class="navbar navbar-expand-sm navbar-light bg-light sticky-nav-element">
                <span class="menu-icon"> <i class="fa fa-bars"></i> </span>
                <div class="logo"><h3>DEMO FM</h3></div>
                <span class="navbar-brand" onclick="loadComponent('accueil')">
                    <img src="s.jpg" alt="logo" class="rounded-circle" width="90" height="50">
                </span>

                <!--différents liens du menu-->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <span class="nav-link" onclick="loadComponent('accueil')">ACCUEIL</span>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link" onclick="loadComponent('programmes')">PROGRAMMES</span>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link" onclick="loadComponent('services')">SERVICES</span>
                    </li>
                    <li class="nav-item dropdown">
                        <span class="nav-link dropdown-toggle" data-toggle="dropdown" >GALLERIE</span>
                        <div class="dropdown-menu">
                            <span class="dropdown-item" onclick="loadComponent('images')">IMAGES</span>
                            <span class="dropdown-item" onclick="loadComponent('videos')">VIDEOS</span>
                        </div>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <span class="nav-link dropdown-toggle" data-toggle="dropdown" >PARTICIPER</span>
                        <div class="dropdown-menu">
                            <span class="dropdown-item" onclick="loadComponent('dedicace')">DEDICASES</span>
                            <span class="dropdown-item" onclick="loadComponent('jeux')">JEUX CONCOURS</span>
                        </div>
                    </li> -->
                    <li class="nav-item">
                        <span class="nav-link" onclick="loadComponent('podcast')">PODCAST</span>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link" onclick="loadComponent('contact')">CONTACT</span>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link" onclick="loadComponent('propos')">A PROPOS</span>
                    </li>
                </ul>
                <span class='burger-nav-icons_search'>
                    <i class="fa fa-search"></i>
                </span>
                <span class='burger-nav-icons_cancel'>
                    <i class="fa fa-times"></i>
                </span>
            </nav>
          <!--Barre de lecture du flux audio et les différents informations de lecture-->
                <nav class="navbar navbar-expand-sm navbar-dark bg-dark" id="navbar-media" >
                    <span class="control-flux">
                        <button onclick="justplay()" id="play">
                            <i class="fa fa-play" aria-hidden="true"></i>
                        </button>
        
                        <div class="control-info">
                            <span class="cover">
                                <img src="s.jpg" alt="" class="media-cover">
                            </span>
                            <span class="control-track">
                                <span id="title">title comes here...</span>
                            </span>
                            <span class="control-action">
                                <a id="vote-player">
                                <i class="fa fa-heart-o fa-lg fa-fw"></i>
                                </a>
                                <span id="partage">
                                    <i class="fa fa-share fa-lg fa-fw"></i>
                                </span>
                            </span>
                        </div>
        
                        <span class="volume">
                            <span id="volume-show"></span>
                            <i class="fa fa-volume-up" aria-hidden="true" id="volume-icon" onclick="mute_sound()"></i>
                            <input type="range" min="0" max="100" onchange="volume_change(event)" id="volume">
                        </span>
                    </span>
                </nav>
		</nav>

        <!--images défilantes-->
            <div id="root">
                <div id='accueil'>
                    <div class="container image-slide">
                        <div class="carousel slide" data-ride="carousel" id="myCarousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="flyers1.png" alt="L'entreprenariat et les metiers d'aujourd'hui">
                                </div>
                                <div class="carousel-item ">
                                    <img src="flyers2.png" alt="Afrique jeunesse (Politique, économique et société)">
                                </div>
                                <div class="carousel-item ">
                                    <img src="flyers3.png" alt="Commerce en CEMAC">
                                </div>
                                <div class="carousel-item ">
                                    <img src="flyers4.png" alt="Agriculture mécanisé à l'OUEST au 21em siècle">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div> 
                    </div>
                    <div class="about-container">
                        <div class="colunm1 scrollElement">
                            <div class="faceRadio">
                                <div class="title">
                                    <h3>FACEBOOK RADIO TECH</h3>
                                </div>
                                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FAuto-Ecole-La-Colombe-Bgte-100455115593626&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                            </div>
                            <div class="equipeTeam">
                                <div class="title">
                                    <h3>NOTRE EQUIPE</h3>
                                </div>
                                <div class="teamImages">
                                    <div class="columnImage1">
                                        <div class="personalImage">
                                            <img src="ghost.jpg" alt="personnel" class="image">
                                            <div class="middle">
                                                <div class="textName"> Pierre Ngamaleu </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="columnImage2">
                                        <div class="personalImage">
                                            <img src="tchakoumi.JPG" alt="personne2" class="image">
                                            <div class="middle">
                                                <div class="textName"> Lorrain Tchakoumi</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="colunm2">
                            <div class="actuality">
                                <div class="title">
                                    <h3>ACTUALITE</h3>
                                </div>
                                <div class="content">
                                    <img class="img-fluid" src="paul.jpg" alt="" id='imgActu'> <!--Ici l'id est un lien d'attache au javascript lors du changement depuis la partie Admin-->
                                    <span id="textActu"><a href="https://www.jeuneafrique.com/1204952/politique/cameroun-manifestation-contre-paul-biya-a-geneve/" target="_blank">Cameroun : manifestation contre Paul Biya à Genève</a> </span>
                                    <!-- pensez a faire aussi un iframe dans la mesure ou nous voulons ouvrir une autre page sur la notre  -->
                                </div>
                            </div>
                            <div class="emissions">
                                <div class="title">
                                    <h3>EMISSIONS</h3>
                                </div>
                                <div class="contentEms">
                                    <img class="img-fluid" src="flyers4.png" alt="Agriculture mécanisé à l'OUEST au 21em siècle" id="imgEmis">
                                </div>
                            </div>
                        </div>
                        <div class="colunm3 scrollElement">
                            <div class="ads">
                                <div class="title">
                                    <h3>PUBLICITES</h3>
                                </div>
                                <img class="img-fluid" src="ads.png" alt="" id="imgAds">
                                <span id="textAds"><a href="https://www.facebook.com/Auto-Ecole-La-Colombe-Bgte-100455115593626" target="_blank">INSCRIPTION DE LA SESSION D'OCTOBRE OUVERT. DELAIS LE 30 AOUT 2021. Devenez des professionnels de la conduite, ceci en toute catégorie. A,B,C,D,G</a></span>
                            </div>
                            <div class="podcastView">
                                <div class="title">
                                    <h3>PODCAST</h3>
                                </div>
                                <div class="contentPod">
                                    <span> Rejoigner tout nos emissions diffusées sur notre rubrique Podcast.</span> 
                                    <button type="button" class="btn btn-dark" onclick="loadComponent('podcast')"> Contactez nous!!! </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id='programmes'>
                    <div class="container container-program">
                        <div class="program-day">
                            <div class="btngroup">
                                <div class="btn1">
                                    <button data-toggle="modal" data-target="#exampleModalCenter" onclick="styleButton(event)" class="btn success" id="lundi"> LUNDI </button>
                                    <button data-toggle="modal" data-target="#exampleModalCenter" onclick="styleButton(event)" class="btn info" id="mardi"> MARDI </button>
                                </div>
                                <div class="btn2">
                                    <button data-toggle="modal" data-target="#exampleModalCenter" onclick="styleButton(event)" class="btn warning" id="mercredi"> MERCREDI </button>
                                    <button data-toggle="modal" data-target="#exampleModalCenter" onclick="styleButton(event)" class="btn danger" id="jeudi"> JEUDI </button>
                                </div>
                                <div class="btn3">
                                    <button data-toggle="modal" data-target="#exampleModalCenter" onclick="styleButton(event)" class="btn default" id="vendredi"> VENDREDI </button>
                                    <button data-toggle="modal" data-target="#exampleModalCenter" onclick="styleButton(event)" class="btn success" id="samedi"> SAMEDI </button>
                                </div>
                                <div class="btn4">
                                    <button data-toggle="modal" data-target="#exampleModalCenter" onclick="styleButton(event)" class="btn warning" id="dimanche"> DIMANCHE </button>
                                </div>
                            </div>
                            <div class="modal face" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="emission-info">
                                                <div class="titre">titre: <span id="titre"></span></div>
                                                <div class="presentator">Présentateur: <span id="presentator"></span></div>
                                                <div class="guest">Invité: <span id="guest"></span></div>
                                            </div>
                                            <div class="hour-info" id="hour-info">heure</div>                                                
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id='services'>
                    <div class="container container-program">
                        <div class="servives-bloc1">
                            <div class="conceptionWeb">
                                <div class="conceptionWebTitle">
                                    <h3>Etude Web Radio</h3>
                                </div>
                                <p>Nous vous proposons des services Web Radio tant dans la conception, la réalisation et le déploiement. Demo FM est un prototype palpable de fonctionnement web radio à grande échelle.</p>
                                <button type="button" class="btn btn-dark" onclick="loadComponent('contact')"> Contactez nous!!! </button>
                            </div>
                            <div class="conceptionWeb">
                                <div class="conceptionWebTitle">
                                    <h3>Etude Station Radio</h3>
                                </div>
                                <p>Nous vous proposons des service de Dimentionnement et d'installation des stations radio traditionnels. Avec des experts à notre porté, vos projets de diffusion radio en bande FM devient possible facilement grace à nous.</p>
                                <button type="button" class="btn btn-dark" onclick="loadComponent('contact')"> Contactez nous!!! </button>
                            </div>
                        </div>
                        <div class="servives-bloc2">
                            <div class="conceptionWeb">
                                <div class="conceptionWebTitle">
                                    <h3>Cabinet conseil</h3>
                                </div>
                                <p>Des conseils précis et de qualité sur tous vos préoccupations en se qui concerne le choix des équipements radiophoniques (amateurs, débutant, professionnel). Formation sur les outils de diffusion en streaming (StreamYard) mais aussi sur les concepts Web Radio. </p>
                                <button type="button" class="btn btn-dark" onclick="loadComponent('contact')"> Contactez nous!!! </button>
                            </div>
                            <div class="conceptionWeb">
                                <div class="conceptionWebTitle">
                                    <h3>Developpement logiciels</h3>
                                </div>
                                <p> De l'analyse au developpement en passant par la conception des projets logiciels et des systèmes. Nous mettons à votre services des génies logiciels qualifiés pour mieux resoudre vos problèmes.</p>
                                <button type="button" class="btn btn-dark" onclick="loadComponent('contact')"> Contactez nous!!! </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id='images'>
                    <div class="gridimages">
                        <div class="column">
                            <img onclick="modalImages(event)" src="359.jpg">
                            <img onclick="modalImages(event)" src="https://ws.shoutcast.com/images/contacts/c/c58e/c58eb1e0-0fc8-41d3-b31f-cf2eef65ba54/radios/c2ae53e3-9395-4a8c-9924-718cd403c456/c2ae53e3-9395-4a8c-9924-718cd403c456.png">
                            <img onclick="modalImages(event)" src="data:image/jpeg;base64,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">
                            <img onclick="modalImages(event)" src="https://us0-cdn.onlineradiobox.com/img/fblogo/8/99508.v2.png">
                            <img onclick="modalImages(event)" src="https://image.winudf.com/v2/image1/cGcucmFkaW9kZW1vMl9zY3JlZW5fMV8xNTQ5MTgwMjI1XzA4NA/screen-1.jpg?fakeurl=1&type=.jpg">
                            <img onclick="modalImages(event)" src="https://media2.ledevoir.com/images_galerie/nwd_663301_508943/image.jpg">                            
                        </div>
                        <div class="column">
                            <img  onclick="modalImages(event)" src="https://media2.ledevoir.com/images_galerie/nwd_663301_508943/image.jpg">
                            <img  onclick="modalImages(event)" src="https://radiopromo.ca/images/article/1/webradio2.jpg">
                            <img  onclick="modalImages(event)" src="logo.jpg">
                            <img  onclick="modalImages(event)" src="s.jpg">
                            <img  onclick="modalImages(event)" src="">
                            <img  onclick="modalImages(event)" src="http://www.limko.cm/wp-content/uploads/2017/08/WebRadio.jpg">
                        </div>
                        <div class="column">
                            <img  onclick="modalImages(event)" src="">
                            <img  onclick="modalImages(event)" src="">
                            <img  onclick="modalImages(event)" src="https://www.csa.fr/var/ezflow_site/storage/images/arbitrer/creation-et-regulation-d-une-radio/663765-3-fre-FR/Creation-et-regulation-d-une-radio_news_large.jpg">
                            <img  onclick="modalImages(event)" src="https://philippestierlin.com/wp-content/uploads/2018/05/radio-mic-620x400.jpg">
                            <img  onclick="modalImages(event)" src="https://www.ebu.ch/files/live/sites/ebu/files/News/2013/02/World_radio_day_PR.png">
                            <img  onclick="modalImages(event)" src="data:image/jpeg;base64,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">
                        </div>
                        <div class="column">
                            <img  onclick="modalImages(event)" src="https://larevuedesmedias.ina.fr/sites/default/files/styles/landscape_768x/public/micro_bd.jpg?itok=9bpl7Mha">
                            <img  onclick="modalImages(event)" src="https://images.radio-canada.ca/q_auto,w_null/v1/ici-premiere/baladodiffusion/perso/projet-audio-tuile-explorer-emissions.jpg">
                            <img  onclick="modalImages(event)" src="https://image.freepik.com/photos-gratuite/disposition-radio-microphones_23-2148802321.jpg">
                            <img  onclick="modalImages(event)" src="">
                            <img  onclick="modalImages(event)" src="data:image/jpeg;base64,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">
                        </div>
                    </div>
                    <div id="myModal" class="modal">
                        <span class="closes">&times;</span>
                        <img class="modal-content" id="img01">
                    </div>
                </div>
                <div id='videos'>
                    <div class="gridvideos container-program">
                        <div class="column">
                            <iframe src="https://www.youtube.com/embed/RAIK_K3ZtWU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <iframe src="https://www.youtube.com/embed/vhBWxo9LN7Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <iframe src="https://www.youtube.com/embed/BNWM-cZhqLU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <iframe src="https://www.youtube.com/embed/h_D3VFfhvs4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="column">
                            <iframe src="https://www.youtube.com/embed/U-Z_bZS8t3M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/oiKj0Z_Xnjc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <iframe src="https://www.youtube.com/embed/cAR0NUIXRe0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="column">
                            <iframe src="https://www.youtube.com/embed/S_xH7noaqTA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <iframe src="https://www.youtube.com/embed/bKu9zX9XBws" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <iframe src="https://www.youtube.com/embed/W1CSWdLi0-A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <iframe src="https://www.youtube.com/embed/oRdxUFDoQe0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="column">
                            <iframe src="https://www.youtube.com/embed/lN2ozTZNJC0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <iframe src="https://www.youtube.com/embed/_0sklzHtlns" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/ETTQ3BV0ENk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <!-- <div id='jeux'>
                    <div class="container">
                        <div class="available-page">

                        </div>
                    </div>
                </div> -->
                <!-- <div id='dedicace'>
                    <div class="container-programs">
                        <div class="available-page">La page n'est pas encore disponible</div>
                    </div>
                </div> -->
                <div id='podcast'>
                    <div class="container">
                        <div class="podcast-page">
                            <div class="podcast-title">
                                <h3> Podcasts </h3>
                            </div>
                            <div class="contentPodcastPage"><!--The main idea of this section is to increment how as possible the podcast in the view-->
                                <div class="colunm1">
                                    <div class="podcast-content">                                   
                                        <div class="article">
                                            <div class="imgBx">
                                                <img src="Testament.jpeg" alt="Testament" id="postCastImg">
                                            </div>
                                            <audio controls>
                                                <source src="../Le_Testament_master_podcast.mp3" type="audio/mp3" id="postCastSong">
                                            </audio>
                                        </div>
                                        <div class="article-infos">
                                            <span class="article-title"> <h3> LE TESTAMENT </h3></span>
                                            <span class="article-overview"> Une récit bien récis des dernière volontées d'un fort fortuné qui se veux bien laisser un empire après lui.</span>
                                        </div>                                    
                                    </div>
                                    <div class="podcast-content">                                   
                                        <div class="article">
                                            <div class="imgBx">
                                                <img src="Rentre.jpg" alt="Rentrée pas comme les autres" id="postCastImg">
                                            </div>
                                            <audio controls>
                                                <source src="../Bonjour_l_Europe_130320.mp3" type="audio/mp3" id="postCastSong">
                                            </audio>
                                        </div>
                                        <div class="article-infos">
                                            <span class="article-title"> <h3> UNE RENTREE INCROYABLE </h3></span>
                                            <span class="article-overview"> Faire une signe de bonjour ou bonsoir est un signe de politesse. Faisons preuve de politesse en saluant tout les occupant européen</span>
                                        </div>                                    
                                    </div>
                                    <div class="podcast-content">                                   
                                        <div class="article">
                                            <div class="imgBx">
                                                <img src="annonce.jpg" alt="Bande d'annonce" id="postCastImg">
                                            </div>
                                            <audio controls>
                                                <source src="../La_curieuse_rentree_de_Degnan_Master_podcast_jgl_j_m_lire.mp3" type="audio/mp3" id="postCastSong">
                                            </audio>
                                        </div>
                                        <div class="article-infos">
                                            <span class="article-title"> <h3> BANDE D'ANNONCE </h3></span>
                                            <span class="article-overview"> la curieuse rentrée de Degnan nous fait plonger dans une savoureuse rentrée plein de surprise</span>
                                        </div>                                    
                                    </div>
                                </div>
                                <div class="Bande-annonces">
                                    <div class="bande1">
                                        <div class="annonce-title"> EN UNE </div>
                                        <div class="carousel slide" data-ride="carousel" id="myCarousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img width="360" height="215" src="flyers1.png" alt="">
                                                </div>
                                                <div class="carousel-item ">
                                                    <img width="360" height="215" src="flyers2.png" alt="">
                                                </div>
                                                <div class="carousel-item ">
                                                    <img width="360" height="215" src="flyers3.png" alt="">
                                                </div>
                                                <div class="carousel-item ">
                                                    <img width="360" height="215" src="flyers4.png" alt="">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                                <span class="carousel-control-prev-icon"></span>
                                            </a>
                                            <a class="carousel-control-next" href="#demo" data-slide="next">
                                                <span class="carousel-control-next-icon"></span>
                                            </a>
                                        </div> 
                                    </div>
                                    <div class="bande2">
                                        <div class="ads">
                                            <div class="annonce-title">
                                                PUBLICITES
                                            </div>
                                            <img src="ads.png" alt="" id="imgAds">
                                            <span id="textAds"><a href="https://www.facebook.com/Auto-Ecole-La-Colombe-Bgte-100455115593626" target="_blank">INSCRIPTION DE LA SESSION DE JANVIER OUVERT. DELAIS LE 30 NOVEMBRE 2021. Devenez des professionnels de la conduite, ceci en toute catégorie. A,B,C,D,G</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id='contact'>
                    <div class="iframe">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.8240152185035!2d10.588127339694967!3d5.132027181301449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x105ff82433e35fd7%3A0x531890ab2057945b!2sClinical%20Universitaire%20Des%20Montagnes!5e0!3m2!1sen!2scm!4v1602509582256!5m2!1sen!2scm" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" ></iframe>
                    </div>
                    <div class="icon-info">
                        <div class="face-icon">
                            <img src="facebook-icon.png" alt="">
                            <div> Facebook link</div>
                        </div>
                        <div class="whats-icon">
                            <img src="whatsapp-icon.png" alt="">
                            <div> Tel: 680.090.489 </div>
                        </div>
                        <div class="phone-icon">
                            <img src="phone-icon.jpg" alt="">
                            <div> 
                                Tel: +237 680.090.489 </br> 
                                    +237 696.841.451 
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="label-content">
                            <div class="bloc-label">
                                <h3>CONTACTS</h3>
                            </div>
                        </div>
                        <div class="container contact-infos">
                            <div class="left-colunm">
                                <div class="form-group">
                                    <input id="nameContact" class="form-controls" type="text" placeholder="Nom" name="contactName" aria-describedby="inputErrorNameContact">
                                    <small id="inputErrorNameContact" class="hidden"></small>
                                </div>
                                <div class="form-group">
                                    <input id="emailContact" class="form-controls" type="text" placeholder="Email" name="mailContact" aria-describedby="inputErrorMailContact">                        
                                    <small id="inputErrorMailContact" class="hidden"></small>
                                </div>
                                <div class="form-group">
                                    <input id="phone_number" class="form-controls" type="tel " placeholder="Numéro de téléphone (optionnel)" name="phone_number">
                                </div>
                            </div>
                            <div class="right-colunm">
                                <div class="form-group">
                                    <textarea id="messageContact" class="form-controls" type="text" placeholder="message" name="messageContact" aria-describedby="inputErrorMessageContact"></textarea>
                                    <small id="inputErrorMessageContact" class="hidden"></small>
                                </div>
                                <button id="sendContact" class="btn btn-success">
                                    <span><i class="fa fa-send"></i> Envoyer</span>
                                </button>
                            </div>
                        </div>
                    </div>                    
                </div>
                <div id='propos'>
                    <div class="container">
                        <div class="about">
                            <div class="aboutTitle">
                                <h3> A propos </h3>
                            </div>
                            <p> 
                                Demo FM Radio est une webradio conçu et developé par l'équipe <strong>GLOM</strong> dont l'ingénieur
                                <strong>NGAMALEU POUKAM PIERRE IRENEE</strong> & <strong>KOUATCHOUA TCHAKOUMI LORRAIN</strong>. 
                                Elle intervient dans le but de completer l'air de couverture d'une radio conventionnelle mais aussi
                                d'offrir encore plus de services. Dans le but de montrer l'aubaine quant à cette solution de diffusion
                                à grande échelle nous proposons Demo Radio prêt à l'utilisation.
                            </p>
                            <ul>
                                <li>Conception, réalisation et déployement d'une webradio</li>
                                <li>Dimentionnement et installations des stations radio traditionnelles</li>
                                <li>Developpement logiciel</li>
                                <li>Gestion du marketing digital</li>
                            </ul>
                            <button type="button" class="btn btn-dark" onclick="loadComponent('services')"> Nos services</button>
                        </div>
                        <div class="teams">
                            <div class="teamsTitle">
                                <h3>Notre Equipes</h3>
                            </div>
                            <div class="teamImages">
                                <div class="columnImage1">
                                    <div class="personalImage">
                                        <img src="ghost.jpg" alt="personnel" class="image">
                                        <div class="middle">
                                            <div class="textName"> Pierre Ngamaleu</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="columnImage2">
                                    <div class="personalImage">
                                        <img src="tchakoumi.JPG" alt="personne2" class="image">
                                        <div class="middle">
                                            <div class="textName"> Lorrain Tchakoumi</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="performance">
                            <div class="performanceTitle">
                                <h3> NOS PERFORMANCES</h3>
                            </div>
                            <p>
                                Demo FM Radio montre dans un context de diffusion à grande échelle la grande possibité d'accès 
                                à un plus grand audima avec d'avantage de contenus, de produits et aussi une meilleur confidentialité. 
                                Une amélioration progressive du contenu jusqu'à la maturation complet et final de la webRadio. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Pied de page -->
            <div class="footer">
                <div class="copyright">Copyright Ⓒ Poukam Radio - All rights reserved</div>
                <div class="devTeam">By RADIO TECH</div>
            </div>
        <!-- Icône whatsapp -->
            <div class="whatsapp">
                <a href="" class="fa fa-whatsapp"></a>
            </div>

        <!-- Toast boostrap -->
            <div aria-live="polite" aria-atomic="true" style="position: fixed; min-height: 200px;">
                <div class="toast" style="position: fixed; bottom: 5%; left: 2%; ; background: black; color: white;" >
                    <div class="toast-body">
                        URL copied.....
                    </div>
                </div>
            </div>

      <!-- importation des fichier JS -->
        <script src="../controller/reader_navbar.js"></script>
        <script src="../controller/loadRootContent.js"></script>
        <script src="../controller/carouselTimer.js"></script>
        <script src="../controller/programStyleButton.js"></script>
        <script src="../controller/modalImage.js"></script>
        <script src="../controller/whatsappFile.js"></script>
        <!-- <script src="../controller/scrollFunction.js"></script>         -->
        <script>
            const menuBtn = document.querySelector(".menu-icon i")
            const searchBtn = document.querySelector(".burger-nav-icons_search")
            const cancelBtn = document.querySelector(".burger-nav-icons_cancel")
            const items = document.querySelector(".navbar-nav")
            const form = document.querySelector(".ml-auto")        
            menuBtn.onclick = ()=>{
                items.classList.add("active");
                menuBtn.classList.add("hide");
                searchBtn.classList.add("hide");
                cancelBtn.classList.add("show");
                form.classList.remove("active");
            }

            cancelBtn.onclick = ()=>{
                items.classList.remove("active");
                menuBtn.classList.remove("hide");
                searchBtn.classList.remove("hide");
                cancelBtn.classList.remove("show");
                form.classList.remove("active");
                cancelBtn.style.color = "blue";
            }

            searchBtn.onclick = ()=>{
                form.classList.add("active");
                searchBtn.classList.add("hide");
                cancelBtn.classList.add("show");
                items.classList.remove("active");
            }

        </script>
    </body>
</html>

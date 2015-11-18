<!DOCTYPE html>
<html lang="en">
  <head>
    <title>La Girouette</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="La Girouette">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700" rel="stylesheet" type="text/css">
    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="57x57" href="/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicons/favicon-194x194.png" sizes="194x194">
    <link rel="icon" type="image/png" href="/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/favicons/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/favicons/manifest.json">
    <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="/favicons/mstile-144x144.png">
    <meta name="msapplication-config" content="/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="/css/vendor.css">
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/modernizr.js"></script>
    @yield('header_extras')
  </head>
  <body id="top">
    <!--[if lt IE 7]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Including header-->
    <header>
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display--><a href="#top" class="navbar-brand">    </a>
          <div class="navbar-header">
            <button type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar">     </span></button>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling-->
          <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li><a href="#about">About   </a></li>
              <li><a href="#servizi">Servizi   </a></li>
              <li><a href="#gallery">Gallery</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#rendez-popup" class="open-popup">Les Rendezvous  </a></li>
              <li><a href="#partners">Partners </a></li>
              <li><a href="#contatti">Contatti        </a></li>
            </ul>
          </div>
          <!-- /.navbar-collapse-->
        </div>
        <!-- /.container-fluid-->
      </nav>
    </header>
    <!-- Page content-->
    <div class="wrap">
      <ul id="scene">
        <li data-depth="0.30" class="layer">
          <div class="cloud"></div>
        </li>
        <li data-depth="0.20" class="layer">
          <div class="cloud-1"></div>
        </li>
        <li data-depth="0.20" class="layer">
          <div class="cloud-2"></div>
        </li>
        <li data-depth="0.10" class="layer">
          <div class="cloud-3">     </div>
        </li>
      </ul>
      <div class="welcome-container">        
        <h1 class="logo">La Girouette</h1>
        <h2 class="slogan">
          Rendi unica ogni occasione <br>
          Idee e soluzioni per rendere perfetto il tuo evento.
        </h2><a href="#about">
          <div class="arrow">               <img src="/img/arrow.png"></div></a>
      </div>
    </div>
    <section class="main">
      <div class="container-fluid">
        <div id="about" class="row about">
          <div class="col-md-8 no-pad">
            <div class="opening-carousel">
              <div class="slide slide1"></div>
              <div class="slide slide2"></div>
              <div class="slide slide3"></div>
              <div class="slide slide4"></div>
            </div>
          </div>
          <div class="col-md-4 no-pad">
            <div class="about-us">
              <h3>About us</h3>
              <p>
                Nella realizzazione dei nostri eventi non lasciamo mai nulla al caso, dalla scelta della location all’ideazione degli allestimenti, tutto è finalizzato a valorizzarne il protagonista. 
                    <br><br>
                    Ecco perchè gli eventi de La Girouette sono perfetti in ogni dettaglio! 
                    <br><br>
                    Il nostro obiettivo è dare un’anima all'evento, renderlo unico e indimenticabile per chiunque l’abbia vissuto.
              </p>
            </div>
          </div>
        </div>
      </div>
      <section class="who">
        <img class="img-responsive separator" src="img/separator.png" alt="">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 no-pad">
              <div class="who-box"><img src="img/martina.jpg">
                <h4>Martina Miozzi</h4>
                <p>"Se puoi sognarlo, puoi farlo"</p>
                <p style="font-style: italic;">W.D.</p>               
              </div>
            </div>
            <div class="col-sm-6 no-pad">
              <div class="who-box"><img src="img/rosangela.jpg">
                <h4>Rosangela Lobato</h4>
                <p>"Tutti i sogni possono diventare realtà se solo abbiamo il coraggio di inseguirli"</p>
                <p style="font-style: italic;">W.D.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="servizi" class="events">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4 no-pad">
              <div class="eventi">
                <h3 class="beige">Eventi</h3>
                <div class="row">
                  <div class="col-sm-6">
                    <ul>
                      <li>Feste a tema</li>
                      <li>Baby shower</li>
                      <li>Compleanni</li>
                      <li>10 Compleanno</li>
                      <li>Battesimi</li>
                      <li>Comunioni</li>
                      <li>Cresime</li>
                    </ul>
                  </div>
                  <div class="col-sm-6">
                    <ul>
                      <li>Addii al celibato</li>
                      <li>Addii al nubilato</li>
                      <li>Matrimoni</li>
                      <li>Picnic party</li>
                      <li>Spa party</li>
                      <li>Eventi a tema</li>
                      <li>Eventi privati</li>
                      <li>Eventi aziendali</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8 no-pad">
              <div class="servizi">
                <h3>Servizi                                     </h3>
                <div class="col-lg-2 col-md-3 col-sm-6 no-pad">
                  <div class="service-box">
                    <div class="icon"><img src="/img/icons/allestimenti.png"></div>
                    <p>Allestimenti</p>
                  </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 no-pad">
                  <div class="service-box">
                    <div class="icon"><img src="/img/icons/catering.png"></div>
                    <p>Catering &amp; Banqueting</p>
                  </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 no-pad">
                  <div class="service-box">
                    <div class="icon"><img src="/img/icons/baloon.png"></div>
                    <p>Balloon art</p>
                  </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 no-pad">
                  <div class="service-box">
                    <div class="icon"><img src="/img/icons/sweet.png"></div>
                    <p>Sweet table</p>
                  </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 no-pad">
                  <div class="service-box">
                    <div class="icon"><img src="/img/icons/cake.png"></div>
                    <p>Cake design</p>
                  </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 no-pad">
                  <div class="service-box">
                    <div class="icon"><img src="/img/icons/gadget.png"></div>
                    <p>Bomboniere &amp; Gadget</p>
                  </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 no-pad">
                  <div class="service-box">
                    <div class="icon"><img src="/img/icons/flower.png"></div>
                    <p>Flower design</p>
                  </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 no-pad">
                  <div class="service-box">
                    <div class="icon"><img src="/img/icons/performance.png"></div>
                    <p>Performance art</p>
                  </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 no-pad">
                  <div class="service-box">
                    <div class="icon"><img src="/img/icons/photo.png"></div>
                    <p>Photo shooting</p>
                  </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 no-pad">
                  <div class="service-box">
                    <div class="icon"><img src="/img/icons/animazione.png"></div>
                    <p>Animazione</p>
                  </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 no-pad">
                  <div class="service-box">
                    <div class="icon"><img src="/img/icons/location.png"></div>
                    <p>Location</p>
                  </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 no-pad">
                  <div class="service-box">
                    <div class="icon"><img src="/img/icons/djset.png"></div>
                    <p>DjSet &amp; Live music</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      @yield('content')
    </section>
    <!-- Including footer-->
    <footer>
      <div class="container">
        <div id="contatti" class="row footer">
          <div class="col-xs-12">
            <h3>Contatti</h3>
          </div>
        </div>
        <div class="row footer">
          <div class="col-md-3 col-sm-6">
            <div class="info footer-box">
              <h4>La Girouette</h4>
              <ul>
                <li><i class="fa fa-map-marker"></i>Roma</li>
                <li><i class="fa fa-envelope"></i><a href="mailto:info@lagirouette.it">info@lagirouette.it</a></li>
                <li><i class="fa fa-mobile"></i>+39 393 3378035</li>
                <li><i class="fa fa-mobile"></i>+39 335 6477877</li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="write footer-box">
              <h4>Scrivici</h4>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="social footer-box">
              <h4>Social</h4>
              <p>Resta in contatto con noi!</p>
              <div class="social"><a href="https://www.facebook.com/La-Girouette-1430927090500419/?ref=ts" target="_blank">
                  <div class="facebook"></div></a><a href="">
                  <div class="instagram"></div></a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div id="partners" class="row partners">
          <div><a target="_blank" href="http://www.adoroparty.it/"><img src="img/partners/adoro-party.jpg"></div></a>
          <div><a target="_blank" href="http://www.ristoranteangelina.com/"><img src="img/partners/angelina.jpg"></div></a>
          <div><img src="img/partners/banco39.jpg"></div>
          <div><a target="_blank" href="http://dolcealice.it/"><img src="img/partners/dolcealice.jpg"></div></a>
          <div><a target="_blank" href="http://www.ille-roif.it/ita/index.html"><img src="img/partners/ille-roif.jpg"></div></a>
          <div><a target="_blank" href="http://www.italianfashionista.com/"><img src="img/partners/italianfashionista.jpg"></div></a>
          <div><img src="img/partners/ladyg.jpg"></div>
          <div><img src="img/partners/living-orange.jpg"></div>
          <div><a target="_blank" href="http://www.magiclollo.it/"><img src="img/partners/magolollo.jpg"></div></a>
          <div><img src="img/partners/marcocecilia.jpg"></div>
          <div><img src="img/partners/nail-factory.jpg"></div>
          <div><a target="_blank" href="http://www.ristorantedaltoscano.it/it/"><img src="img/partners/ristorante-toscano.jpg"></div></a>
          <div><img src="img/partners/v-cafe.jpg"></div>
        </div>
        <div class="row copyright">
          <div class="col-sm-6">
            <p>
               
              La Girouette © 2015 - Tutti i diritti riservati
            </p>
          </div>
          <div class="col-sm-6">
            <p class="pull-right">Design by <a href="http://officine06.com" target="_blank">Officine06</a></p>
          </div>
        </div>
      </div>
    </footer>
    <div id="rendez-popup" class="white-popup mfp-hide"><img src="/img/rendez-logo.jpg">
      <p>
        Les Rendez-Vous nasce dall’idea di aggregazione delle persone verso un’interazione reale seguendo Sogni, desideri, e Necessità individuali.<br><br>
        L’inserimento in questo circolo è proiettato sulle persone che vogliono ritrovare l’entusiasmo, il divertimento e soprattutto conoscere il proprio principe azzurro o principessa.<br><br>
        Il c’era una volta e vissero felici e contenti oggi si ritrova qui:
        Un ritorno alla dolce vita reale!
      </p>
      <a href="mailto:info@lagirouette.it"><div class="btn btn-primary">Contattaci</div></a>
    </div>
  </body>
  <script src="/js/vendor.js"></script>
  <script src="/js/main.js"></script>
  @yield('footer_extras')
</html>
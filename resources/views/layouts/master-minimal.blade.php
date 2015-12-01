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
    <meta name="_token" content="{{ csrf_token() }}" />
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

          @yield('content')

    </div>


    @yield('content_privacy')
  

    <div id="rendez-popup" class="white-popup mfp-hide"><img src="/img/rendez-logo.jpg">
      <p>       
        Inseguire i propri sogni nel cassetto, realizzare i desideri di una vita senza mai dimenticare le necessità dei singoli individui.<br><br>
        Les Rendez-Vous nasce con questo obiettivo.<br><br>
        L’inserimento in questo circolo è pensato per persone che vogliono ritrovare l’entusiasmo, il divertimento e soprattutto la voglia di conoscere il proprio principe azzurro o principessa.<br><br>
        Il "c’era una volta e vissero felici e contenti" oggi si ritrova qui:
        Un ritorno alla dolce vita reale!
      </p>
      <a href="mailto:info@lagirouette.it"><div class="btn btn-primary">Contattaci</div></a>
    </div>
  </body>
  <script src="/js/vendor.js"></script>
  <script src="/js/main.js"></script>
  @yield('footer_extras')
</html>
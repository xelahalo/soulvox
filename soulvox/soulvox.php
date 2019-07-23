<?php include_once('functions/functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Oláh Alex">
  <meta name="robots" content="index,follow">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Soulvox,band,esküvői,zenekar,fesztivál,esküvő,céges,rendezvény,wedding,festival,occasion">
  <meta name="description" content="Soulvox band hivatalos weboldala">
  <!--<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />-->
  <!--<meta http-equiv="X-UA-Compatible" content="IE=edge" />-->
  <title><?php echo TITLE; ?></title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="css/soulvox.ico">
  <script src="scripts/jquery.js"></script>
  <script src="scripts/popper.js"></script>
  <script src="scripts/bootstrap.js"></script>
	<script src="scripts/fontawesome.js"></script>
</head>
<body>

  <!--Navigation-->
  <nav class="navbar navbar-expand-md navbar-dark sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img id="logo" src="css/watermark_mini.png" alt="Soulvox band logo"></a>
      <button class="navbar-toggler" type="button" name="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a class="nav-link" href="#welcome"><?php echo NAVIGATION_1; ?></a></li>
          <li class="nav-item"><a class="nav-link" href="#band"><?php echo NAVIGATION_2; ?></a></li>
          <li class="nav-item"><a class="nav-link" href="#prices"><?php echo NAVIGATION_4; ?></a></li>
          <li class="nav-item"><a class="nav-link" href="#connect"><?php echo NAVIGATION_5; ?></a></li>
        </ul>
        <!--<a href="?lan=default" class="lan"><img src="css/hun.jpg"></a>
        <a href="?lan=en" class="lan"><img src="css/en.jpg"></a>-->
      </div>
    </div>
  </nav>

  <!--Image Slider-->
  <div class="carousel slide" data-ride="" id="slides" > <!--carousel-->
    <ul class="carousel-indicators">
      <li data-target="#slides" data-slide-to="0" class="active"></li>
      <li data-target="#slides" data-slide-to="1"></li>
      <li data-target="#slides" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="css/cool.jpg" alt="">
        <div class="carousel-caption">
          <h1 class="display-2"><span style="color: #DBAB0D;">Soul</span>Vox</h1>
          <h3><?php echo CAROUSEL_H3; ?></h3>
          <!--<a href="#video"><button type="button" class="btn btn-outline-dark btn-lg btn-secondary">Áraink</button></a>-->
          <a href="#connect"><button type="button" class="btn btn-default btn-lg"><?php echo NAVIGATION_5; ?></button></a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="css/elegant.jpg" alt="">
      </div>
      <div class="carousel-item">
        <img src="css/goofy.jpg" alt="">
      </div>
    </div>
  </div>

<!--Jumbotron-->
  <div class="container-fluid">
    <div class="row jumbotron">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <h3><?php echo JUMBOTRON; ?></h3>
      </div>
      <div class="jumbotron_buttons col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <a href="#band"><button type="button" class="btn btn-outline-secondary btn-lg"><?php echo MEMBERS; ?></button></a>
        <a href="#prices"><button type="button" class="btn btn-outline-info btn-lg "><?php echo PRICE; ?></button></a>
      </div>
    </div>
  </div>

<!--Welcome Section-->
  <div class="container-fluid padding" id="welcome">
  <div class="row welcome text-center">
    <div class="col-12">
      <h1 class="display-4"><?php echo ABOUT_TITLE; ?></h1>
    </div>
    <hr>
    <div class="col-12">
      <p class="lead strong"><?php echo ABOUT_Q1; ?></p>
      <p class="lead"><?php echo ABOUT_A1; ?></p>
      <p class="lead strong"><?php echo ABOUT_Q2; ?></p>
      <p class="lead"><?php echo ABOUT_A2; ?></p>
    </div>
    <hr>
    <!--Youtube embed-->
    <div class="col-12 embed-responsive embed-responsive-16by9" id="video">
      <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/yCJcAtJzMYY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <!--End of youtube embed-->
  </div>
  <hr class="my-4">
</div>

<!--Fixed Background-->
<figure>
  <div class="fixed-wrap">
    <div id="fixed">
    </div>
  </div>
</figure>

<!--Meet the team-->
<div class="container-fluid padding" id="band">
  <div class="row welcome text-center">
    <div class="col-12">
      <h1 class="display-4"><?php echo NAVIGATION_2; ?></h1>
    </div>
  </div>
</div>

<!--Team-->
<div class="container-fluid padding members">
  <div class="row padding">

    <!--Member01-->
    <div class="col-md-3">
      <div class="card">
        <img src="css/team1.jpg" class="card-img-top">
        <div class="card-body">
          <h4 class="card-title">Ifj. <span id="lastname">Czakó</span> Gyula</h4>
          <p class="card-text"><?php echo INSTRUMENT_1; ?></p>
        </div>
      </div>
    </div>

    <!--Member02-->
    <div class="col-md-3">
      <div class="card">
        <img src="css/team2.jpg" class="card-img-top">
        <div class="card-body">
          <h4 class="card-title"><span id="lastname">Lauer</span> Zsolt</h4>
          <p class="card-text"><?php echo INSTRUMENT_2; ?></p>
        </div>
      </div>
    </div>

    <!--Member03-->
    <div class="col-md-3">
      <div class="card">
        <img src="css/team3.jpg" class="card-img-top">
        <div class="card-body">
          <h4 class="card-title"><span id="lastname">Juhász</span> Mihály</h4>
          <p class="card-text"><?php echo INSTRUMENT_3; ?></p>
        </div>
      </div>
    </div>

    <!--Member04-->
    <div class="col-md-3">
      <div class="card">
        <img src="css/team4.jpg" class="card-img-top">
        <div class="card-body">
          <h4 class="card-title"><span id="lastname">Lauer</span> Ágnes</h4>
          <p class="card-text"><?php echo INSTRUMENT_4; ?></p>
        </div>
      </div>
    </div>

    <!--Member05-->
    <div class="col-md-3">
      <div class="card">
        <img src="css/team5.jpg" class="card-img-top">
        <div class="card-body">
          <h4 class="card-title"><span id="lastname">Magyar</span> Gábor</h4>
          <p class="card-text"><?php echo INSTRUMENT_5; ?></p>
        </div>
      </div>
    </div>

    <!--Member06-->
    <div class="col-md-3">
      <div class="card">
        <img src="css/team6.jpg" class="card-img-top">
        <div class="card-body">
          <h4 class="card-title"><span id="lastname">Molnár</span> Dóra</h4>
          <p class="card-text"><?php echo INSTRUMENT_6; ?></p>
        </div>
      </div>
    </div>

    <!--Member07-->
    <div class="col-md-3">
      <div class="card">
        <img src="css/team7.jpg" class="card-img-top">
        <div class="card-body">
          <h4 class="card-title"><span id="lastname">Lauer</span> Viktória</h4>
          <p class="card-text"><?php echo INSTRUMENT_7; ?></p>
        </div>
      </div>
    </div>

    <!--Member08-->
    <div class="col-md-3">
      <div class="card">
        <img src="css/team8.jpg" class="card-img-top">
        <div class="card-body">
          <h4 class="card-title"><span id="lastname">Oláh</span> Alex</h4>
          <p class="card-text"><?php echo INSTRUMENT_8; ?></p>
        </div>
      </div>
    </div>

  </div>
  <hr class="my-4">
</div>

<!-- Songs -->
<div class="container-fluid padding" id="songs">
  <div class="row text-center padding">
    <div class="col-12">
      <h1><?php echo PEEK_IN_REPERTOIRE; ?></h1>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
      <i class="fas fa-music"></i>
      <p>Mendelssohn - Nászinduló</p>
      <p>Ella Fitzgerald - It Don't Mean A Thing</p>
      <p>Louis Armstrong - What A Wonderful World</p>
      <p>Rick Stitzel - Brazil</p>
      <p>Russell & Barroso - Brazil</p>
      <p>Glenn Miller - In The Mood</p>
      <p>The Blues Brothers Revue</p>
      <p>Benny Goodman - Sing, Sing, Sing</p>
      <p>Lalo Schifrin - Mission Impossible</p>
      <p>Earth, Wind & Fire - September</p>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
      <i class="fas fa-volume-up"></i>
      <p>Herbie Hancock - Chameleon</p>
      <p>Eighties Flashback arr.</p>
      <p>Ben Tucker - Comin' Home Baby</p>
      <p>Louis Prima - Jump, Jive An' Wail</p>
      <p>Scotty Morris - Go Daddy-O</p>
      <p>George Gershwin - I Got Rythm</p>
      <p>A-ha - Take On Me</p>
      <p>Duke Ellington - C Jam Blues</p>
      <p>Ella Fitzgerald - Summertime</p>
      <p>Pharrell Williams - Happy</p>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
      <i class="fas fa-play"></i>
      <p>Adele - Skyfall</p>
      <p>Katy Perry - Firework</p>
      <p>Henry Mancini - Charade</p>
      <p>Henry Mancini - Moon River</p>
      <p>Henry Mancini - Pink Panther</p>
      <p>Bill Haley - Rock Around The Clock</p>
      <p>The Original Dixieland Jazz Band - Tiger Rag</p>
      <p>Nina Simone - Feelin' Good</p>
      <p>Sammy Nestico - Blues Machine</p>
      <p>The Champs - Tequila</p>
    </div>
  </div>
  <hr class="my-4">
</div>

<!--Prices-->
<div class="container-fluid padding prices" id="prices">
  <!--<div class="row">
      <div class="col-xs-12 col-sm-8 col-md-4">
        <img src="css/connect.jpg" class="img-thumbnail">
      </div>
      <div class="col-xs-12 col-sm-8 col-md-4">
        <h2>Ünnepi műsor, esküvői szertartásra</h2>
        <p>Igény szerint: 5-6 műsorszám<br/>(Nászinduló és egyéb romantikus számok)</p>
        <p>Irányár: 60.000 Ft plusz útiköltség</p>
      </div>
  </div>
  <div class="row">
      <div class="col-xs-12 col-sm-8 col-md-4">
        <img src="css/nyugi.jpg" class="img-thumbnail">
      </div>
      <div class="col-xs-12 col-sm-8 col-md-4">
        <h2>Kiskoncert (kb. 60 perc)</h2>
        <p>Jazz, pop klasszikusok és feldolgozások<br/>(Az alkalomhoz és a helyszínhez igazított műsorok)</p>
        <p>Irányár: 120.000 Ft plusz útiköltség</p>
      </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-8 col-md-4">
        <img src="css/hagi.jpg" class="img-thumbnail">
      </div>
      <div class="col-xs-12 col-sm-8 col-md-4">
        <h2>Nagykoncert (kb. 60 perc)</h2>
        <p>Jazz, pop klasszikusok és feldolgozások<br/>(Egész estés fúvós showműsor)</p>
        <p>Irányár: 180.000 Ft plusz útiköltség</p>
      </div>
    </div>-->
    <div class="row padding">
    <div class="col-md-3">
      <div class="card text-center">
        <img src="css/goldred.jpg" class="card-img-top">
        <div class="card-body">
          <h4 class="card-title"><span id="lastname">Ünnepi</span><span id="dis"> műsor, esküvői szertartásra</span></h4>
          <p class="card-text"><span id="dis">Igény szerint: 5-6 műsorszám<br/>(Nászinduló és egyéb romantikus számok)</span></p>
          <p class="card-text"><span id="dis">Irányár: </span><span id="price">60.000 Ft</span><span id="dis"> plusz útiköltség</span></p>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card text-center">
        <img src="css/nyugi.jpg" class="card-img-top">
        <div class="card-body">
        <h4 class="card-title"><span id="lastname">Kiskoncert</span><span id="dis"> (kb. 60 perc)</span></h4>
          <p class="card-text"><span id="dis">Jazz, pop klasszikusok és feldolgozások<br/>(Az alkalomhoz és a helyszínhez igazított műsorok)</span></p>
          <p class="card-text"><span id="dis">Irányár: </span><span id="price">120.000 Ft</span><span id="dis"> plusz útiköltség</span></p>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card text-center">
        <img src="css/hagi.jpg" class="card-img-top">
        <div class="card-body">
          <h4 class="card-title"><span id="lastname">Nagykoncert</span><span id="dis"> (kb. 60 perc)</span></h4>
          <p class="card-text"><span id="dis">Jazz, pop klasszikusok és feldolgozások<br/>(Egész estés fúvós showműsor)</span></p>
          <p class="card-text"><span id="dis">Irányár: </span><span id="price">180.000 Ft</span><span id="dis"> plusz útiköltség</span></p>
        </div>
      </div>
    </div>
    </div>
  <hr class="my-4">
</div>

<!--Connect-->
<div class="container-fluid padding" id="connect">
  <div class="row text-center padding">
    <div class="col-12">
      <h1><?php echo CONNECT_TITLE; ?></h1>
    </div>
    <div class="col-12 social padding">
      <a href="https://www.facebook.com/SoulVox-288534565111143/"><i class="fab fa-facebook"></i></a>
      <a href="https://www.instagram.com/soulvoxband/"><i class="fab fa-instagram"></i></a>
      <a href="https://www.youtube.com/channel/UCIBoDnJN6zJxqNf9GeSF16Q"><i class="fab fa-youtube"></i></a>
    </div>
  </div>
  <div class="row padding">
    <div class="col-md-12 col-lg-6 connect">
      <h3><?php echo NAVIGATION_5; ?></h3>
      <p><?php echo CONTACTS_NAME; ?></p>
      <p><?php echo CONTACTS_PHONE_NUMBER; ?></p>
      <p><?php echo CONTACTS_EMAIL; ?></p>
    </div>
    <div class="col-lg-6">
      <!--<div class="connect-picture" data-adapt-container-width="true">
        <img src="css/connect.jpg" alt="connect picture">
      </div>-->
      <!--Facebook plugin-->
      <div id="fb-root"></div>
      <script>
          (function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = 'https://connect.facebook.net/hu_HU/sdk.js#xfbml=1&version=v3.2';
              fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));
      </script>
      <div class="fb-page" data-href="https://www.facebook.com/SoulVox-288534565111143/" data-height=250 data-widht=250 data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/SoulVox-288534565111143/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/SoulVox-288534565111143/">SoulVox</a></blockquote></div>
      <!--End of facebook plugin-->
    </div>
  </div>
</div>

<!--Footer-->
<footer class="page-footer font-small">
  <div class="container-fluid padding">
    <div class="row text-center">
      <div class="col-md-6 quote">
        <blockquote class="blockquote">
          <p class="mb-0">“A band ought to have a sound all of its own. It ought to have a personality.”</p>
          <footer class="blockquote-footer">Glenn Miller</footer>
        </blockquote>
      </div>
      <div class="col-md-6">
        <hr class="light">
        <p><?php echo NAVIGATION; ?></p>
        <hr class="light">
        <ul class="navbar-nav ml-auto">
          <li class="footer-item"><a class="nav-link" href="#welcome"><?php echo NAVIGATION_1; ?></a></li>
          <li class="footer-item"><a class="nav-link" href="#band"><?php echo NAVIGATION_2; ?></a></li>
          <li class="footer-item"><a class="nav-link" href="#prices"><?php echo NAVIGATION_4; ?></a></li>
          <li class="footer-item"><a class="nav-link" href="#connect"><?php echo NAVIGATION_5; ?></a></li>
        </ul>
      </div>
      <div class="col-12">
        <hr class="light-100">
        <h5>Soulvox band &copy; 2019</h5>
      </div>
    </div>
  </div>
</footer>

</body>
</html>

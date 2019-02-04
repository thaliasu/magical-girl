<!DOCTYPE html>
<html>
<head>
  <html lang="en">
  <meta charset="UTF-8">
  <title>Magical Girl Homepage</title>
  <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
  <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <!--Link personal CSS-->
    <link href="styles.css" rel="stylesheet">
  <!--Favicon-->
    <link rel="icon" href="imgs/favicon-2.png" type="image/png">
</head>

<body>
  <!--responsive navigation shows active page-->
  <nav>
    <div class="nav-wrapper pink lighten-2">
	  <div class="row container">
      <a href="home.html" class="brand-logo"><img class="valign-wrapper" src="imgs/ribbon-icon-3.png" alt="ribbon icon"/></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="analysis.html">Analysis</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    <!--unable to float side-nav right or get nav to pop out-->
      <ul class="side-nav" id="mobile-demo">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="analysis.html">Analysis</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
	  </div>
    </div>
  </nav>

  <div id="definition_container" class="parallax-container">
  	<div class="container">
        <br><br>
  	  <span id="definition">
  	    <h1 class="center white-text text-darken-3 lighten-3">Magical Girl:</h1>
          <h3 class="center white-text text-darken-3 lighten-3"><em>n.</em> an archetype originating from the “magical girl” subgenre of anime.</p>
        </span>
  	</div>
  	<div class="parallax">
  	  <img id="parallax" src="imgs/bpcposter2-3.png" alt = "Bee and Puppycat poster">
  	</div>
   </div>

  <div class="section white">
    <div class="row container">
      <h2 class="header">Introduction</h2>
      <p class="grey-text text-darken-3 lighten-3">It’s thought that Japanese anime is heavily influenced by Western fairy tales. Western fairy tale characters and tropes, as well as the witch figure from the 1960s TV show <em>Bewitched</em>,
	  have been reinterpreted to create the fantasy-based “magical girl” subgenre. Dystopian worlds complemented by fairy tale aesthetics and optimism are prevalent in the genre.
	  <!--Tooltip intended to show citations-->
	  <a class="tooltipped" data-position="right" data-delay="50" data-tooltip="Cleto and Kathleen, Saito">
	  <sup>1,2</sup></a>
	  </p>

	  <p class="grey-text text-darken-3 lighten-3">After <em>Sailor Moon</em> became a major hit in the U.S. in the 90s, it inspired a series of Western cartoons with fantastical, fighting heroines that continues to this day.
      </p>
    </div>
  </div>

  <div class="section pink lighten-2">
    <div class="row container">
	<h2 class="header center-align white-text">Modern Examples</h2>
	  <div class="carousel s12 l10 offset-l1">
        <a class="carousel-item" href="#one!"><img src="imgs/carousel/ppg.png"></a>
        <a class="carousel-item" href="#two!"><img src="imgs/carousel/ts-2.png"></a>
        <a class="carousel-item" href="#three!"><img src="imgs/carousel/winx.jpg"></a>
        <a class="carousel-item" href="#four!"><img src="imgs/carousel/su.png"></a>
        <a class="carousel-item" href="#five!"><img src="imgs/carousel/svs.png"></a>
      </div>
	</div>
  </div>

  <div class="section white">
    <div class="row container">
	  <img class="col s10 offset-s1 l6 offset-l3" src = "imgs/bpclogo-1.png"/>
	  </div>
  </div>

  <div class="section pink lighten-2">
    <div class="row container">
    	<h2 class="header white-text">Thesis</h2>
    	<p class="white-text text-darken-3 lighten-3">A cartoon that’s been produced in recent years is <em>Bee and Puppycat</em>. Bee is an unemployed slacker whose luck changes when a creature with an ambiguous cat or dog appearance falls out of the sky.
    	By befriending Puppycat, as she calls him, she becomes employed by an intergalactic temp job agency. The show’s art style is influenced by 90s anime, and it bears many of the key markings of the genre.
    	</p>
    	<a class="waves-effect waves-light btn-large" href="analysis.html">Read More</a>
  	</div>
  </div>

  <!--Import jQuery before materialize.js-->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="materialize/js/materialize.min.js"></script>
	<script>
    $(document).ready(function(){
      /*$(".button-collapse").sideNav({
        edge: 'right'
      });*/
      $(".button-collapse").sideNav();
      $(".parallax").parallax();
      $(".carousel").carousel();
      setInterval(function() {
            $('.carousel').carousel('next');
          }, 2000);
    });
	</script>
</body>

</html>

<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <html lang="en">
  <meta charset="UTF-8">
  <title>Magical Girl Contact</title>
  <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
  <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <!--Personal Stylesheet-->
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
            <li><a href="home.html">Home</a></li>
            <li><a href="analysis.html">Analysis</a></li>
            <li class = "active"><a href="#">Contact</a></li>
          </ul>
	    <!--unable to float side-nav right or get nav to pop out-->
          <ul class="side-nav" id="mobile-demo">
            <li><a href="home.html">Home</a></li>
            <li><a href="analysis.html">Analysis</a></li>
            <li class="active"><a href="#">Contact</a></li>
          </ul>
        </div>
	    </div>
  </nav>

  <main>
   <div class="row container">
       <?php
         if(isset($_SESSION['success'])) {
           /*If email has been sent, display resubmit button that refreshes page*/
           echo '<div class="center-align" class="valign-wrapper">
             <div class="section">
             <img class="responsive-image" src="imgs/success.gif" alt="Multicolored cats dance in a circle" />
             <br><sub><span class="grey-text darken-1">imgur.com</span></sub>
             <p class="flow-text">' . $_SESSION['user_message'] . '</p>
             <a href="contact.php" class="waves-effect waves-light btn-large">
               <input type="submit" value="Submit Another Message">
             </a>
             </div>
           </div>';
           unset($_SESSION['user_message']);
           unset($_SESSION['success']);
         } elseif(isset($_SESSION['user_message'])) {
           echo '<h2 class="header center-align">Questions? Comments?</h2>
                <div class="center-align"><span class="red-text">' . $_SESSION['user_message'] . '</span></div>
                <!--Form begins-->
                <div class="col s12">
                 <form action="validate_form.php" method="POST">
                   <!--Name, email, message, submit-->
                   <div class="input-field col s6">
                      <input id="first_name" name="first_name" type="text" class="validate" maxlength="25">
                      <label for="first_name">First Name</label>
                    </div>
                   <div class="input-field col s6">
                      <input id="last_name" name="last_name" type="text" class="validate" maxlength="25">
                      <label for="last_name">Last Name</label>
                    </div>
                    <div class="input-field col s12">
                      <input id="email" name="email" type="email" class="validate" maxlength="45">
                      <label for="email" data-error="Please enter a valid email address.">Email</label>
                    </div>
                   <div class="input-field col s12">
                      <textarea id="textarea1" name="textarea1" class="materialize-textarea" maxlength="300" data-length="300"></textarea>
                      <label for="textarea1">Enter a message here!</label>
                    </div>
                  </div>
                 <div class="center-align">
                  <a class="waves-effect waves-light btn-large">
                    <input type="submit" value="Submit">
                  </a>
                 </div>
                </form>';
                unset($_SESSION['user_message']);
         }
         else {
           echo '<h2 class="header center-align">Questions? Comments?</h2>
               <!--Form begins-->
                <div class="col s12">
                 <form action="validate_form.php" method="POST">
                   <!--Name, email, message, submit-->
                   <div class="input-field col s6">
                      <input id="first_name" name="first_name" type="text" class="validate" maxlength="25">
                      <label for="first_name">First Name</label>
                    </div>
                   <div class="input-field col s6">
                      <input id="last_name" name="last_name" type="text" class="validate" maxlength="25">
                      <label for="last_name">Last Name</label>
                    </div>
                    <div class="input-field col s12">
                      <input id="email" name="email" type="email" class="validate" maxlength="45">
                      <label for="email" data-error="Please enter a valid email address.">Email</label>
                    </div>
                   <div class="input-field col s12">
                      <textarea id="textarea1" name="textarea1" class="materialize-textarea" maxlength="300" data-length="300"></textarea>
                      <label for="textarea1">Enter a message here!</label>
                    </div>
                  </div>
                 <div class="center-align">
                  <a class="waves-effect waves-light btn-large">
                    <input type="submit" value="Submit">
                  </a>
                 </div>
                </form>';
         }
       ?>
    </div>
  </main>

  <!--footer class="page-footer pink lighten-2"-->
  <div class="section pink lighten-2">
    <div class="row container">
      <h3 class="white-text">About the Website</h3>
      <p class="white-text">The author and designer of the website is Thalia S., a student pursuing an English and Digital Media double major
	  at the University of Central Florida. The content of this website is intended to be a brief analysis of how Japan's "magical girl" subgenre influenced
	  cartoons in the United States, through the examination of one TV series. This website was created using <a class="pink-text accent-1" href="http://materializecss.com">Materialize</a>.</p>
    </div>
  </div>
  <!--/footer-->

  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
	<script>
    $(document).ready(function(){
      $(".button-collapse").sideNav();
    });
	</script>
</body>
</html>

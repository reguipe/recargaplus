﻿<?php
if (isset($_GET['lang'])) {
	$lang = $_GET['lang'];
}else{
	$lang = 'pt';
}
if ($lang == 'pt') {
	include 'language/pt.php';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $text['titulo']; ?></title>
  <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no"/>
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/grid.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="js/jquery.js"></script>
  <script src="js/jquery-migrate-1.2.1.js"></script>

  <!--[if lt IE 9]>
  <html class="lt-ie9">
  <div style=' clear: both; text-align:center; position: relative;'>
    <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
      <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
           alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
    </a>
  </div>
  <script src="js/html5shiv.js"></script>
  <![endif]-->

  <script src='js/device.min.js'></script>
</head>

<body>
<div class="page">
  <!--========================================================
                            HEADER
  =========================================================-->
 
  <!--========================================================
                            CONTENT
  =========================================================-->
  
    <section id="testimonials">
    <section class="well6">
        <div class="text-center">
        <div class="col-md-4 col-lg-4 col-sm-10"></div>
            <div class="col-md-4 col-lg-4 col-sm-12">
              <h2><?php echo $text['vamos_comecar']; ?></h2>
              <h4><?php echo $text['informe_celular']; ?></h4>
              <input type="" name="" class="form-control cel ">
              <h4><?php echo $text['informe_operadora']; ?></h4>
              <select class="form-control">
              	<option>Vivo</option>
              </select>
              <button class="btn btn-lg btn-primary"><?php echo $text['start']; ?></button>
              
            </div>
        </div>
      </section>
      </section>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>

      <section class="parallax parallax1" data-parallax-speed="0.2">
        <div class="container">
          <div class="row">
            <div class="grid_6 wow fadeInLeft" data-wow-delay="0.2s">
              <p>
                <em>
                  <span>Special</span>
                  Price for you and your friends
                </em>
              </p>

              <p>
                Ceritaesa eciegast nveriti vert asety kertya aset aplicaboserde
                nerafae lorempsu dolore miutstrae sasers.
              </p>

              <a class="btn4" href='#'>read more</a>
            </div>
          </div>
        </div>
      </section>
      
    </section>
<!--
    <section>
      <section class="well5 bg-dark">
        <div class="container center">
          <h2 class="center">Download Now!</h2>

          <p class="center">Applications can be downloaded now. Try it now. Thank you.</p>

          <a class="fa fa-android" href='#'></a>
          <a class="fa fa-apple" href='#'></a>
          <a class="fa fa-windows" href='#'></a>
        </div>
      </section>
    </section>

    <div class="map">
      <div id="google-map" class="map_model" data-x="-73.9874068" data-y="40.650180"></div>
      <ul class="map_locations">
        <li data-x="-73.9874068" data-y="40.643180">
          <address>
            28 Jackson Blvd Ste 151 <br/>
            Chicago <br/>
            IL 60604-2340
          </address>
        </li>
      </ul>
    </div>
  </main>-->

  <!--========================================================
                            FOOTER
  =========================================================-->
  <footer id="contacts">
    <div class="container">
      <div class="row">
        <div class="grid_3 right">
          
        </div>
        <div class="grid_4">
          <ul class="social-list">
            <li>
              <a class="fa fa-facebook" href="#"></a>
            </li>
            <li>
              <a class="fa fa-google-plus" href="#"></a>
            </li>
            <li>
              <a class="fa fa-rss" href="#"></a>
            </li>
            <li>
              <a class="fa fa-pinterest" href="#"></a>
            </li>
            <li>
              <a class="fa fa-linkedin" href="#"></a>
            </li>
          </ul>
        </div>
        <div class="grid_5">
          <div class="copyright">
            <?php echo $text['titulo']; ?> © <span id="copyright-year"></span>
            <!-- {%FOOTER_LINK} -->
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>
<script type="text/javascript" src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
<script>
$('.cel').mask('(00) 00000-0000');
		console.log(localStorage.verify)
		console.log("test")
	if (localStorage.verify != 'true') {
		location.href = "index.php"
	}
</script>
<!--coded by Diversant-->
</body>
</html>
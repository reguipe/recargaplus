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
  <meta name="format-detection" content="telephone=no"/>
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/grid.css">
  <link rel="stylesheet" href="css/style.css">

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
  <main id="content" class="content">
    <section id="about">
      <section class="bg-primary">
        <div class="container center">
          <div class="row">
            <div class="grid_8 preffix_2">
              <p>
                <em>
                  <span><?php echo $text['ola']; ?>,</span>
                  <span><?php echo $text['recarga_gratis']; ?></span>
                  <?php echo $text['para_cellar']; ?><br>
                  <span><?php echo $text['qualquer_lugar']; ?></span>
                </em>
              </p>
              <a class="fa fa-android" href='#'></a>
              <a class="fa fa-apple" href='#'></a>
              <a class="fa fa-windows" href='#'></a>
            </div>
          </div>
        </div>
      </section>

      <section class="well">
        <div class="container">
          <h2 class="center"> <?php echo $text['simples_passos']; ?></h2>

          <p class="center"><?php echo $text['simples_passos_2']; ?></p>

          <div class="row wrap">
            <div class="grid_3">
              <h2 class="secondary3 wow fadeInLeft" data-wow-delay="0.2s"><?php echo $text['facil_pratico']; ?></h2>

              <p class="large secondary2 wow fadeInLeft" data-wow-delay="0.4s">
                <?php echo $text['facil_pratico_explicacao']; ?>
              </p>
            </div>
            <div class="grid_6">
              <img src=images/page-2_img02.jpg alt=""/>
            </div>
            <div class="grid_3">
              <h3 class="secondary4 wow fadeInRight" data-wow-delay="0.4s"><?php echo $text['passo_1']; ?></h3>

              <p class="wow fadeInRight" data-wow-delay="0.6s">
                <?php echo $text['passo_1_explicacao']; ?></p>

              <h3 class="secondary5 wow fadeInRight" data-wow-delay="0.8s"><?php echo $text['passo_2']; ?></h3>

              <p class="wow fadeInRight" data-wow-delay="1s">
              <?php echo $text['passo_2_explicacao']; ?></p>

              <h3 class="secondary3 wow fadeInRight" data-wow-delay="1.2s"><?php echo $text['passo_3']; ?></h3>

              <p class="wow fadeInRight" data-wow-delay="1.4s">
              <?php echo $text['passo_3_explicacao']; ?></p>
            </div>
          </div>
        </div>
      </section>

      <!--<section class="well2 bg-dark">
        <div class="container">
          <h2 class="center">our advantages</h2>

          <p class="center">Leriavaserat leasear niasese myas jertas vteas doloerase</p>

          <div class="row">
            <div class="grid_4 center"><img src="images/page-1_img03.png" alt=""/>
              <h4>kaystra eleifneanc</h4>

              <p class="ins1">Casey yoleacene anritma hasesera deyuas lemiwert betyudeocis natoqu.</p>
              <a class="btn" href='#'>read more</a>
            </div>
            <div class="grid_4 center"><img src="images/page-1_img04.png" alt=""/>
              <h4>doloertas mertase</h4>

              <p class="ins1">Faertas nritma hasesera deyuas yoleacenes udeocis natoqule miwert bety.</p>
              <a class="btn" href='#'>read more</a>
            </div>
            <div class="grid_4 center"><img src="images/page-1_img05.png" alt=""/>
              <h4>ferrode miyres</h4>

              <p class="ins1">Aritma hasesera deyuasasey yoleacenede yudeocis natoqu lemiwert beta.</p>
              <a class="btn" href='#'>read more</a>
            </div>
          </div>
          <div class="row">
            <div class="grid_4 center"><img src="images/page-1_img06.png" alt=""/>
              <h4>Sertas byras letyas</h4>

              <p class="ins1">Casey yoleacene anritma hasesera deyuas lemiwert betyudeocis natoqu.</p>
              <a class="btn" href='#'>read more</a>
            </div>
            <div class="grid_4 center"><img src="images/page-1_img07.png" alt=""/>
              <h4>
                bertseras miuas</h4>

              <p class="ins1">Faertas nritma hasesera deyuas yoleacenes udeocis natoqule miwert bety.</p>
              <a class="btn" href='#'>read more</a>
            </div>
            <div class="grid_4 center"><img src="images/page-1_img08.png" alt=""/>
              <h4>olertyas cytras</h4>

              <p class="ins1">Aritma hasesera deyuasasey yoleacenede yudeocis natoqu lemiwert beta.</p>
              <a class="btn" href='#'>read more</a>
            </div>
          </div>
        </div>
      </section>

      <section class="well3">
        <div class="container">
          <h2 class="center">useful info</h2>

          <p class="center">myas jertas vteas doloerase iavaserat leasear niasese </p>

          <div class="row">
            <div class="grid_3">
              <h3 class="label label_skin1" data-equal-group="1">
                Supported <br/>
                platform
              </h3>

              <p>Casaesaert viaseaya asciega nveritide
                 nerafae kertyerita aplicaboserde miuases
                 oditaut. onequ magni dolores eonemo
                 eniptai volupta equi nesciunt ades.
                 Nernatur aut qui ratione</p>
              <a class="btn3" href='#'>read more</a>
            </div>
            <div class="grid_3">
              <h3 class="label label_skin2" data-equal-group="1">
                online radio <br/>
                station
              </h3>

              <p>Beciegast nveriti vitaesad setertya aset
                 aplicaboserde efae kertyeritaesa ertyatya
                 nemo eades. Brnatur aut oditaut. Onequ
                 untures magni dolores eo qutione volu
                 pta equi nesciunt.</p>
              <a class="btn3" href='#'>read more</a>
            </div>
            <div class="grid_3">
              <h3 class="label label_skin3" data-equal-group="1">
                Flash Media <br/>
                Streaming
              </h3>

              <p>Maseas asitaesaert viasead setertyas
                 baesrta vaser aplicaboserde miuas neras
                 nerae kertyeritaesa certyadera nemo en
                 ptaiernatur aut oditaut. Snequtntures
                 magne dolores eo qui ratione.</p>
              <a class="btn3" href='#'>read more</a>
            </div>
            <div class="grid_3">
              <h3 class="label label_skin4" data-equal-group="1">
                free <br/>
                mobile app
              </h3>

              <p>
                Ceiaseaya asciega nverisaesaert vide
                nerafae kertyerita aplicaboserde miuases
                oditaut. Onequ magni dolores eonemo
                eniptai volupta equi nesciunt ades.
                uiratione ernatur autesa.
              </p>
              <a class="btn3" href='#'>read more</a>
            </div>
          </div>
        </div>
      </section>  

      <section class="well4 bg-secondary">
        <div class="container center">
          <h2>our team</h2>

          <p>doloerase iavaserat leasear niasese myas jertas vteas </p>

          <div class="row">
            <div class="grid_3 preffix_1">
              <img class="round" src="images/page-2_img10.jpg" alt=""/>
              <h4>mark morrow</h4>
              <ul class="social-list">
                <li>
                  <a class="fa fa-facebook" href="#"></a>
                </li>
                <li>
                  <a class="fa fa-twitter" href="#"></a>
                </li>
                <li>
                  <a class="fa fa-google-plus" href="#"></a>
                </li>
              </ul>
            </div>
            <div class="grid_4">
              <img class="round" src="images/page-2_img11.jpg" alt=""/>
              <h4>david smith</h4>
              <ul class="social-list">
                <li>
                  <a class="fa fa-facebook" href="#"></a>
                </li>
                <li>
                  <a class="fa fa-twitter" href="#"></a>
                </li>
                <li>
                  <a class="fa fa-google-plus" href="#"></a>
                </li>
              </ul>
            </div>
            <div class="grid_3">
              <img class="round" src="images/page-2_img12.jpg" alt=""/>
              <h4>amanda brown</h4>
              <ul class="social-list">
                <li>
                  <a class="fa fa-facebook" href="#"></a>
                </li>
                <li>
                  <a class="fa fa-twitter" href="#"></a>
                </li>
                <li>
                  <a class="fa fa-google-plus" href="#"></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    </section>

    <section id="news">
      <section class="well5 bg-dark">
        <div class="container">
          <h2 class="center">latest news</h2>

          <p class="center">vteas doloerase iavaserat leasear niasese myas jertas </p>

          <div class="row">
            <div class="grid_4">
              <div class="box">
                <time class="box_aside" datetime="2014-01-01">12 <span>march</span></time>
                <p class="box_cnt box_cnt__no-flow">
                  Bitsraellus doloibus egetemers
                  niloase magna onsan erahaseres
                  adelesas maltaliqueo.
                </p>
              </div>
            </div>
            <div class="grid_4">
              <div class="box">
                <time class="box_aside" datetime="2014-01-01">14 <span>march</span></time>
                <p class="box_cnt box_cnt__no-flow">
                  Fertasade beytrasas miaeras
                  erahaseres niloecasedes oncumsan
                  ntum ursus eleifender.
                </p>
              </div>
            </div>
            <div class="grid_4">
              <div class="box">
                <time class="box_aside" datetime="2014-01-01">16 <span>march</span></time>
                <p class="box_cnt box_cnt__no-flow">
                  Natsraellus doloibus vtreasers
                  oncumsan erahaseres niloecasedes
                  adelesas maltaliqueo.
                </p>
              </div>
            </div>
          </div>
          <div class="center off1">
            <a class="btn" href='#'>more news</a>
          </div>
        </div>
      </section>
    </section>
    -->

    <section id="testimonials">
    <section class="well6">
        <div class="container center">
          <div class="row">
            <div class="grid_10 preffix_1">
              <h2><?php echo $text['vamos_comecar']; ?></h2>
              <h4><?php echo $text['acesse_conta']; ?></h4>

              <p class="ins1"><?php echo $text['login_facebook']; ?></p>
              <a style="background-color:#3b5998; color:white" class="btn5" href='#'><i class="fa fa-facebook"></i> <?php echo $text['login_botao']; ?></a>
            </div>
          </div>
        </div>
      </section>
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
  </main>

  <!--========================================================
                            FOOTER
  =========================================================-->
  <footer id="contacts">
    <div class="container">
      <div class="row">
        <div class="grid_3 right">
          <a class="footer_email" href='#'>info@demolink.org</a>
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
            GetApp © <span id="copyright-year"></span>
            <!-- {%FOOTER_LINK} -->
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>

<script src="js/script.js"></script>

<!--coded by Diversant-->
</body>
</html>
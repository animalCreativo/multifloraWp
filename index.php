<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
<head>
        <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107004784-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments)};
      gtag('js', new Date());

      gtag('config', 'UA-107004784-1');
    </script>
 -->    
    <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('stylesheet_directory')?>/icons/icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('stylesheet_directory')?>/icons/icon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php bloginfo('stylesheet_directory')?>/icons/icon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiflora</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/css/foundation-flex.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/style.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/icons/foundation-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
</head>
<body>
     <div data-sticky-container class="headermenu show-for-small-only">
      <div class="top-bar headermenu" data-sticky data-options="marginTop: 0" >
        <div class="row" style="padding: 0px;" id="rowMobile">
          <div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium" style="background:transparent;">
            <div class="columns small-8 large-3 ">
                <ul class="menu">
                   <img src="<?php bloginfo('stylesheet_directory')?>/assets/multiLogo.svg">
                </ul>
            </div>
            <div>
                <button id="clickBtnMenu" class="menu-icon" type="button" data-toggle="example-menu"></button>
            </div>
          </div>

          <div class="top-bar show-for-small-only" id="example-menu" style="height: 100vh; width: 100vw; z-index: 1; /* Sit on top */">
            <div class="top-bar-left" style="height: 100%;">
              <ul class=" dropdown menu" data-magellan data-dropdown-menu id="menuListHeader">
                  <li><a class= "clickMenu" href="#first" >¿Qué es Multiflora?</a></li>
              </ul>
              <ul class=" dropdown menu" data-magellan data-dropdown-menu id="menuListHeader">
                  <li><a class= "clickMenu" href="#second">Beneficios</a></li>
              </ul>
              <ul class=" dropdown menu" data-magellan data-dropdown-menu id="menuListHeader">
                  <li><a class= "clickMenu" href="#third" >Puntos de Venta</a></li>
              </ul>
              <ul class=" dropdown menu" data-magellan data-dropdown-menu id="menuListHeader">
                 <li><a href="mailto:elizabeth.berrios@animalcreativo.cl">Contacto</a></li>
              </ul>              
            </div>
          </div>
        </div>
      </div> 
    </div>
     <div data-sticky-container class="show-for-medium" style="min-height:  120px;">
      <div class="top-bar headermenu" data-sticky data-options="marginTop: 0" id="example-menu">
        <div class="row">
          <div class="columns small-5  large-3 show-for-medium" style="width: 250px;">
            <ul class="menu">
               <img id="imgLogoLarge" src="<?php bloginfo('stylesheet_directory')?>/assets/multiLogo.svg" style="max-width: 200px">
            </ul>
          </div>
          <div id="menuLeftPadding"  class="columns small-12 medium-9 show-for-medium" >
            <ul class="menu" data-magellan id="menuListHeader">
                <li><a href="#first" >¿Qué es Multiflora?</a></li>
                <li><a href="#second">Beneficios</a></li>
                <li><a href="#third" >Puntos de Venta</a></li>
                <li><a href="mailto:elizabeth.berrios@animalcreativo.cl">Contacto</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div>
       <img class="imgOrbit" style="width: 100%; height:auto;" data-interchange="[<?php bloginfo('stylesheet_directory')?>/assets/Slider1Mobile@2x.jpg, small], [<?php bloginfo('stylesheet_directory')?>/assets/Slider1Tablet.jpg, medium], [<?php bloginfo('stylesheet_directory')?>/assets/Slider1Desktop.jpg, large], [<?php bloginfo('stylesheet_directory')?>/assets/Slider1DesktopHD.jpg, xlarge]">  
    </div> 


    <div class="sections">
      <section id="first" data-magellan-target="first">
         <article id="article1">     
            <div class = "row container" id="card2Div" style="min-height: 500px;" >
                <div class="small-12 medium-6 columns card2-section align-self-middle text-center ">
                  <h3 id= "texto1">Para ser una <span>Multi</span>Mujer</h3>
                  <h3 id= "texto2">necesitas <span>Multi</span>Flora</h3>
                  <p> Probiótico y suplemento alimenticio para tu día a día, que ayuda al equilibrio e inmunidad de la flora intestinal.</p>
                </div>       
                <div class="small-12 medium-6 columns card2 align-self-middle">
                   <picture>
                        <img width="auto" height="auto" src="<?php bloginfo('stylesheet_directory')?>/assets/producto.png"/>    
                    </picture>
                </div>
            </div>
        </article> 
      </section>
      <section id="second" data-magellan-target="second" style="padding-bottom:100px;" >
          <div class="row medium-up-3 " >
          <div class="small-12 medium-6 columns align-self-top niko">
            <div class="card columns">
              <article>  
                <picture>
                  <img id="imageCard1" width="auto" height="auto" src="<?php bloginfo('stylesheet_directory')?>/assets/item1.svg" />  
                </picture>
                  
                <div class="card-section">
                    <h5>Equilibra la flora intestinal</h5>
                    <p>Multiflora contiene múltiples probióticos que contribuyen a mantener el equilibrio en la microbiota.</p>
                </div>
              </article>  
            </div>
          </div>

          <div class="small-12 medium-6 columns align-self-top niko">
            <div class="card columns" style="max-width: 62.5rem">
              <article>  
                <picture>
                  <img id="imageCard1" width="auto" height="auto" src="<?php bloginfo('stylesheet_directory')?>/assets/item2.svg" />
                </picture>
                  
                <div class="card-section">
                    <h5>Refuerza el sistema inmune</h5>
                    <p>Multiflora contribuye a estimular el sistema inmune, evitando que se implanten bacterias dañinas en el tracto gastrointestinal.</p>
                </div>
              </article>  
            </div>
          </div>

          <div class="small-12 medium-6 columns align-self-top niko">
            <div class="card columns">
              <article>  
                <picture>
                  <img id="imageCard1" width="auto" height="auto" src="<?php bloginfo('stylesheet_directory')?>/assets/item3.svg"  />    
                </picture>
                  
                <div class="card-section">
                    <h5>Regula la digestión</h5>
                    <p>Multiflora mejora el sistema digestivo y regula el tracto intestinal ayudando a digerir los alimentos.</p>
                    
                </div>
              </article>  
            </div>
          </div>
        </div>
      </section>
      <hr size="1px" color="#EBEBEB" style="max-width: 100%; margin-left: 0px">
      <section id="third" data-magellan-target="third">
          <div class="row text-center"  style="min-height: 420px;"> 
            <div class="columns small-12 align-self-middle " >
            <br>
            <h5 class="textSpecial" style=" line-height: 1.2;">Encuéntranos <br> en las principales farmacias del país</h5>
              <div class="row medium-up-3 " >
                <div class="small-12 medium-4 columns align-self-middle" id="imagesBrand">
                   <img  width="auto" height="auto" src="<?php bloginfo('stylesheet_directory')?>/assets/cruzVerde.jpg"  />  
                </div>
                <div class="small-12 medium-4 columns align-self-middle" id="imagesBrand" >
                   <img  width="auto" height="auto" src="<?php bloginfo('stylesheet_directory')?>/assets/ahumada.jpg"  />  
                </div>
                <div class="small-12 medium-4 columns align-self-middle" id="imagesBrand">
                   <img  width="auto" height="auto" src="<?php bloginfo('stylesheet_directory')?>/assets/salco.png"  />  
                </div>
              </div> 
            </div>   
          </div>
      </section>
    </div>


    <div class="footer-container show-for-medium">
        <footer class="footer row align-justify">
            <div class="small-3 column hide-for-small-only">
                <div class="row">
                    <img src="<?php bloginfo('stylesheet_directory')?>/assets/multi2Logo.svg" class="attachment-full size-full wp-post-image" alt="">          
                </div>
                <div class="row footerSocial">
                    <div class="small-12 medium-4 columns align-self-middle"">
                        <a href="https://www.facebook.com/MultifloraCL/"> 
                            <img src="<?php bloginfo('stylesheet_directory')?>/assets/facebookLogo.svg" class="attachment-full size-full wp-post-image" alt="www.facebook.com" style="padding-bottom: 20px;"></a>
                    </div>
                    <div class="small-12 medium-8 columns align-self-middle text-align-center">
                        <p>Síguenos en Facebook</p>
                    </div>
                </div>
            </div>
            <div class="small-9 column show-for-medium">
                <div class="row">
                    <nav class="menu-footer-container">
                        <ul id="menu-footer" class="menu footermenu" data-magellan>
                            <li id="menu-item-175" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-175">
                                <a href="#first">¿Qué es Multiflora?</a>
                            </li>
                            <li id="menu-item-98" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-98">
                                <a href="#second">Beneficios</a>
                            </li>
                            <li id="menu-item-97" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-97">
                                <a href="#third">Puntos de Venta</a>
                            </li>
                            <li id="menu-item-97" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-97">
                            <a href="mailto:elizabeth.berrios@animalcreativo.cl">Contacto</a>
                            </li>
                        </ul>
                    </nav>
                    <hr size="8px" color="white">
                </div>  
                <div class="row">
                    <div class="columns small-9 footermenu" >
                        <p> Derechos reservados Pharma Investi Chile S.A. </p>
                        <p> Pharma Investi de Chile S.A. / Avenida Andres Bello 1495, Providencia, Santiago. </p>
                        <p> Teléfono:(2) 2340 5800 </p>
                    </div>
                    <div class="columns small-3">
                      <img src="<?php bloginfo('stylesheet_directory')?>/assets/pharmaLogo.svg" class="attachment-full size-full wp-post-image" alt="">
                      </div>
                  </div>
                </div>
            </div>
        </footer>
    </div>




    <div class="footer-container show-for-small-only">
        <footer class="footer row align-justify">
            <div class="columns small-12 show-for-small-only">
                <img src="<?php bloginfo('stylesheet_directory')?>/assets/multi2Logo.svg" class="attachment-full size-full wp-post-image" alt="">
            </div>
            <div class="columns small-12 show-for-small-only" id="menuFooterMobile">
                <ul id="menu-footer-1" class="menu footermenu vertical menu" data-magellan>
                     <li id="menu-item-175" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-175">
                          <a href="#first">¿Qué es Multiflora?</a>
                      </li>
                      <li id="menu-item-98" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-98">
                          <a href="#second">Beneficios</a>
                      </li>
                      <li id="menu-item-97" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-97">
                          <a href="#third">Puntos de Venta</a>
                      </li>
                      <li id="menu-item-97" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-97">
                          <a href="mailto:elizabeth.berrios@animalcreativo.cl">Contacto</a>
                      </li>
                </ul> 
            </div>
            <div class="columns small-12 footermenu show-for-small-only">
               <p> Derechos reservados Pharma Investi Chile S.A. </p>
               <p> Pharma Investi de Chile S.A. / Avenida Andres Bello 1495, Providencia, Santiago. </p>
               <p> Teléfono:(2) 2340 5800 </p>
               <br>
               <hr size="8px" color="white">
            </div>
            <div class="columns small-12 footermenu show-for-small-only">
                <div class="row footerSocial show-for-small-only">
                    <div class="small-6  columns">
                        <div class="row">
                            <div class="small-12  columns" id="imgFacebookMobile">
                            <a href="https://www.facebook.com/MultifloraCL/"> 
                                <img src="<?php bloginfo('stylesheet_directory')?>/assets/facebookLogo.svg" class="attachment-full size-full wp-post-image" alt="www.facebook.com">   
                             </a>
                        </div>
                    </div>
                </div>
                <div class="columns small-6 footermenu" id="imgLogoFooter2Mobile">
                      <img src="<?php bloginfo('stylesheet_directory')?>/assets/pharmaLogo.svg" class="attachment-full size-full wp-post-image" alt=""> 
                </div>     
            </div>
        </footer>
    </div>
 
    <script src="<?php bloginfo('stylesheet_directory')?>/js/vendor/jquery.js"></script>
    <script src="<?php bloginfo('stylesheet_directory')?>/js/vendor/what-input.js"></script>
    <script src="<?php bloginfo('stylesheet_directory')?>/js/vendor/foundation.js"></script>
    <script src="<?php bloginfo('stylesheet_directory')?>/js/vendor/foundation.interchange.js"></script>
    <script src="<?php bloginfo('stylesheet_directory')?>/js/app.js"></script>
  

</body>
</html>


</body>
</html>
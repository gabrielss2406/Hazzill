<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-12 15:23:24
  from '/storage/ssd5/792/11897792/public_html/views/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df25b6c5c0da6_45103166',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8cf4316aff3046081e8509a67c67aaa11c281a8' => 
    array (
      0 => '/storage/ssd5/792/11897792/public_html/views/index.html',
      1 => 1576164203,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df25b6c5c0da6_45103166 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
  <head>
    <title>Hazzill &mdash; Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="/">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/animate.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/logo.css">
    
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/aos.css">

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/style.css">
    
    <link rel="sortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/images/icon_flavicon.ico" type="image/x-icon" />

    <?php echo '<script'; ?>
>
    //------------------
      window.onload = function inicio(){
          alert('c');
      if ($(window).width() > 500) {
        document.getElementById("logo").src = 'http://1hazzill.000webhostapp.com/views/images/logo_main_2.png';
      } else {
        document.getElementById("logo").src = 'http://1hazzill.000webhostapp.com/views/images/logo_main_2.png';
      }
        mudarLogo();
      }
      function mudarLogo(){
      if ($(window).width() > 500) {
        document.getElementById("logo").src = 'http://1hazzill.000webhostapp.com/views/images/logo_main.png';
      } else {
        document.getElementById("logo").src = 'http://1hazzill.000webhostapp.com/views/images/logo_main_2.png';
      }
    setTimeout("mudarLogo()", 6000);
    }
    <?php echo '</script'; ?>
>
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    <?php echo $_smarty_tpl->tpl_vars['GET_CABE']->value;?>

    <div style="height: 113px;"></div>

    <div class="site-blocks-cover overlay" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/images/hero_1.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container"id="logo">
        <div class="row align-items-center">
          <div class="col-12" data-aos="fade">
            <h1 bold>HAZZILL</h1>
            <form action="#">
              <div class="row mb-3">
                <div class="col-md-9">
                  <div class="row">
                    <div class="col-md-6 mb-3 mb-md-0">
                      <input type="text" class="mr-3 form-control border-0 px-4" placeholder="A oportunidade dos seus sonhos" disabled>
                    </div>
                    <div class="col-md-4">
                      <div class="input-wrap">
                        <span class="icon icon-room"></span>
                      <input type="text" class="form-control form-control-block search-input  border-0 px-4" id="autocomplete" placeholder="Espera por você aqui" disabled>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
    <?php echo $_smarty_tpl->tpl_vars['GET_CHATBOT']->value;?>

     <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Categorias Populares</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="100">
            <a class="h-100 feature-item">
              <span class="d-block icon flaticon-calculator mb-3 text-primary"></span>
              <h2>Finanças</h2>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="200">
            <a class="h-100 feature-item">
              <span class="d-block icon flaticon-wrench mb-3 text-primary"></span>
              <h2>Engenharia Civil</h2>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="300">
            <a class="h-100 feature-item">
              <span class="d-block icon flaticon-worker mb-3 text-primary"></span>
              <h2>Pedreiro</h2>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="400">
            <a class="h-100 feature-item">
              <span class="d-block icon flaticon-telecommunications mb-3 text-primary"></span>
              <h2>Mestre de Obras</h2>
            </a>
          </div>
          <div class="col-sm-8 col-md-6 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="500">
          </div>
          <div class="col-sm-8 col-md-6 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="600">
            <a class="h-100 feature-item">
              <span class="d-block icon flaticon-computer-graphic mb-3 text-primary"></span>
              <h2>Design &amp; Arquitetura</h2>
            </a>
          </div>
          <div class="col-sm-8 col-md-6 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="700">
            <a class="h-100 feature-item">
              <span class="d-block icon flaticon-trolley mb-3 text-primary"></span>
              <h2>Logistica &amp; Transporte</h2>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="800">
          </div>
        </div>

      </div>
    </div>
    <div class="site-blocks-cover overlay inner-page" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/images/hero_1.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6 text-center" data-aos="fade">
            <h1 class="h3 mb-0">A oportunidade dos seus sonhos</h1>
            <p class="h3 text-white mb-5">espera por você aqui</p>     
          </div>
        </div>
      </div>
    </div>

    

    <div class="site-section site-block-feature bg-light">
      <div class="container">
        
        <div class="text-center mb-5 section-heading">
          <h2>Aqui você encontra</h2>
        </div>

        <div class="d-block d-md-flex border-bottom">
          <div class="text-center p-4 item border-right" data-aos="fade">
            <span class="flaticon-worker display-3 mb-3 d-block text-primary"></span>
            <h2 class="h4">Amplas oportunidades</h2>
            <p>Encontre diariamente novas oportunidades de contratação ou busca por serviços gerais</p>
            <!-- 
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit explicabo quos fugit vitae dolorum.</p>
           -->
          </div>
          <div class="text-center p-4 item" data-aos="fade">
            <span class="flaticon-wrench display-3 mb-3 d-block text-primary"></span>
            <h2 class="h4">Novidade no mercado</h2>
            <p>Mais prático e eficiente do que outros modos online de busca por funcionários, clientes e empresas!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php echo $_smarty_tpl->tpl_vars['GET_FOOTER']->value;?>

  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/jquery-migrate-3.0.1.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/jquery-ui.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/popper.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/owl.carousel.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/jquery.stellar.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/jquery.countdown.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/jquery.magnific-popup.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/bootstrap-datepicker.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/aos.js"><?php echo '</script'; ?>
>

  
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/mediaelement-and-player.min.js"><?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/main.js"><?php echo '</script'; ?>
>
    

  <?php echo '<script'; ?>
>
      document.addEventListener('DOMContentLoaded', function() {
                var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

                for (var i = 0; i < total; i++) {
                    new MediaElementPlayer(mediaElements[i], {
                        pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                        shimScriptAccess: 'always',
                        success: function () {
                            var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                            for (var j = 0; j < targetTotal; j++) {
                                target[j].style.visibility = 'visible';
                            }
                  }
                });
                }
            });
    <?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <?php echo '<script'; ?>
 src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&libraries=places&callback=initAutocomplete"
        async defer><?php echo '</script'; ?>
>

  </body>
</html><?php }
}

<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-06 21:25:02
  from 'C:\xampp\htdocs\hazzill\views\contato.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5deab91e250f48_43494646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abaf88c614ae8ba69ad3276d5c7a8f1e593e28a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hazzill\\views\\contato.html',
      1 => 1575663206,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5deab91e250f48_43494646 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
  <head>
    <title>Job Finder &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
    
    <link rel="sortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/images/icon_flavicon.ico" type="image/x-icon" />
    
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/aos.css">

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/style.css">
    
    <?php echo '<script'; ?>
>
    //------------------
      window.onload = function mudarLogo(){
        mudarLogo();
      }
      function mudarLogo(){
        console.log($(window).width());
      if ($(window).width() > 500) {
        document.getElementById("logo").src = 'http://localhost/hazzill/views/images/logo_main.png';
      } else {
        document.getElementById("logo").src = 'http://localhost/hazzill/views/images/logo_main_2.png';
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

    <div class="unit-5 overlay" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/images/hero_1.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">Contato</h2>
        <p class="mb-0 unit-6"><a href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
">Home</a> <span class="sep">></span> <span>Contato</span></p>
      </div>
    </div>

    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-12 mb-5">
          
            
          
              <form action="<?php echo $_smarty_tpl->tpl_vars['GET_CONTROL']->value;?>
/contatar.php" class="p-5 bg-white"method="POST">

                  <div class="row form-group">
                    <div class="col-md-10 mb-3 mb-md-0">
                      <label class="font-weight-bold" for="fullname">Nome Completo</label>
                      <input required name="nome"type="text" id="fullname" class="form-control" placeholder="Nome completo">
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col-md-10">
                      <label class="font-weight-bold" for="email">Email</label>
                      <input required name="email"type="email" id="email" class="form-control" placeholder="Email ">
                    </div>
                  </div>
    
    
                  <div class="row form-group">
                    <div class="col-md-10 mb-3 mb-md-0">
                      <label class="font-weight-bold" for="phone">Assunto</label>
                      <input required name="assunto"type="text" id="phone" class="form-control" placeholder="Assunto">
                    </div>
                  </div>
    
                  <div class="row form-group">
                    <div class="col-md-10">
                      <label class="font-weight-bold" for="message">Mensagem</label> 
                      <textarea required name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Digite aqui sua observação. Agradecemos desde já, equipe Hazzill."></textarea>
                    </div>
                  </div>
    
                  <div class="row form-group">
                    <div class="col-md-10">
                      <input type="submit" value="Enviar Mensagem" class="btn btn-primary pill px-4 py-2">
                    </div>
                  </div>
    
      
                </form>
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

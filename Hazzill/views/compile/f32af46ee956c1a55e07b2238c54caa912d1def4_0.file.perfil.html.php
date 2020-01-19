<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-11 18:41:06
  from '/storage/ssd5/792/11897792/public_html/views/perfil.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df13842255849_80537535',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f32af46ee956c1a55e07b2238c54caa912d1def4' => 
    array (
      0 => '/storage/ssd5/792/11897792/public_html/views/perfil.html',
      1 => 1576083122,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df13842255849_80537535 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
  <head>
    <title>Hazzill &mdash; Perfil Visitante</title>
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
      window.onload = function mudarLogo(){
        mudarLogo();
      }
      function mudarLogo(){
        console.log($(window).width());
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

    <div class="unit-5 overlay" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/images/hero_1.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">Perfil Visitante</h2>
        <p class="mb-0 unit-6"><a href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
">Home</a> <span class="sep">></span> <span>Perfil Visitante</span></p>
      </div>
    </div><?php echo $_smarty_tpl->tpl_vars['GET_CHATBOT']->value;?>

    <div class="site-section bg-light">
            <div class="container">
                    <div class="row">                 
                      <div class="col-md-12 col-lg-8 mb-5">
                        <form action="#" class="p-5 bg-white">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PER']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
                            <label class="font-weight-bold" for="fullname"><h1>Perfil</h1></label>
                          <div class="row form-group">
                              <div class="col-md-12 mb-3 mb-md-0">
                                  <img src="https://live.staticflickr.com/65535/4915<?php echo $_smarty_tpl->tpl_vars['p']->value['img_url'];?>
" class="img-fluid img-thumbnail" alt="">
                                   <br>
                            </div>
                          </div>
                            <br>
                            <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                              <label class="font-weight-bold" for="fullname">Nome :</label>
                              <label class="font-weight-bold" for="fullname"><?php echo $_smarty_tpl->tpl_vars['p']->value['usu_nome'];?>
</label>
                            </div>
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="font-weight-bold" for="fullname">Nascimento :</label>
                                <label class="font-weight-bold" for="fullname"><?php echo $_smarty_tpl->tpl_vars['p']->value['usu_data_nascimento'];?>
</label>
                              </div>
                          </div>
                          <div class="row form-group mb-5">
                              <div class="col-md-12">
                                <label class="font-weight-bold" for="fullname">Área de Atuação :</label>
                                <label class="font-weight-bold" for="fullname"><?php echo $_smarty_tpl->tpl_vars['p']->value['are_area'];?>
</label>
                              </div>
                                <div class="col-md-12">
                                  <label class="font-weight-bold" for="fullname">Email :</label>
                                  <label class="font-weight-bold" for="fullname"><?php echo $_smarty_tpl->tpl_vars['p']->value['usu_email'];?>
</label>
                                </div>
                                <div class="col-md-12">
                                    <label class="font-weight-bold" for="fullname">Função :</label>
                                    <label class="font-weight-bold" for="fullname"><?php echo $_smarty_tpl->tpl_vars['p']->value['tip_tipo'];?>
</label>
                                  </div>
                              </div>
                          <div class="row form-group">
                            <div class="col-md-12"><h3>Descrição</h3></div>
                            <div class="col-md-12 mb-3 mb-md-0">
                              <p class="text-justify"><?php echo $_smarty_tpl->tpl_vars['p']->value['usu_descricao'];?>
</p>                
                            </div>
                          </div>
                          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                          <div class="row form-group">
                            <div class="col-md-12">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['GET_NOTIFICACOES']->value;?>
"><input type="button" value="Voltar" class="btn btn-primary  py-2 px-5"></a>                
                              </div>
                          </div>
            
              
                        </form>
                      </div>
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

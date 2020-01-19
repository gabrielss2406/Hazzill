<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-12 15:22:35
  from '/storage/ssd5/792/11897792/public_html/views/notificacoes.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df25b3b33c634_31917987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '854fc1ec63487eee90dbeceb2a893b026c4c4117' => 
    array (
      0 => '/storage/ssd5/792/11897792/public_html/views/notificacoes.html',
      1 => 1576164114,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df25b3b33c634_31917987 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
  <head>
    <title>Hazzill &mdash; Notificações</title>
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
    
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/aos.css">

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/style.css">

    <link rel="sortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/images/icon_flavicon.ico" type="image/x-icon" />
    
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="text/javascript" src="https://ajax.cloudflare.com/cdn-cgi/scripts/04b3eb47/cloudflare-static/mirage2.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
      $(document).ready(function(e) {
      
      $("form[ajax=true]").submit(function(e) {
          
          e.preventDefault();
          
          var form_data = $(this).serialize();
          var form_url = $(this).attr("action");
          var form_method = $(this).attr("method").toUpperCase();
          
          $.ajax({
              url: form_url, 
              type: form_method,
              data: form_data,
              cache: false,
              success: function(data){
              },
              error: function(data){
                console.log('ERRO AO ACHAR A FUNÇÃO!!!');
              }
          });     
      });
      });
      //------------
      function clickLike(e){
        document.getElementById('alert_'+e).style.position="relative";
        document.getElementById('alert_'+e).style.opacity=1;
        clickDislike(e);
      }
      function clickDislike(e){
        document.getElementById('id_'+e).style.position="absolute";
        document.getElementById('id_'+e).style.opacity=0;
      }
    //------------------
      window.onload = function inicio(){
      if ($(window).width() > 500) {
        document.getElementById("logo").src = 'http://1hazzill.000webhostapp.com/views/images/logo_main.png';
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
  //------
      function closeAlert(e){
        document.getElementById('alert_'+e).style.position="absolute";
        document.getElementById('alert_'+e).style.opacity=0;
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
        <h2 class="mb-0">Notificações</h2>
        <p class="mb-0 unit-6"><a href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
">Home</a> <span class="sep">></span> <span>Notificações</span></p>
      </div>
    </div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ACE']->value, 'a');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
?>
    <?php if ((isset($_smarty_tpl->tpl_vars['a']->value['usu_nome']))) {?>
    <center>
    <form method="GET"action="notificaFinish/<?php echo $_smarty_tpl->tpl_vars['a']->value['usu_id'];?>
"ajax="true">
      <div style="z-index: 1;"class="alert alert-success" role="alert" id="alert_<?php echo $_smarty_tpl->tpl_vars['a']->value['usu_id'];?>
"style="opacity:0;position:absolute;">
        Joinder! O <?php echo $_smarty_tpl->tpl_vars['a']->value['tip_tipo'];?>
, <a href="<?php echo $_smarty_tpl->tpl_vars['GET_PERFIL_VISTANTE']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['a']->value['usu_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['a']->value['usu_nome'];?>
</a> aceitou sua proposta, entre em contato no email: <?php echo $_smarty_tpl->tpl_vars['a']->value['usu_email'];?>
.<br/>Ou descarte essa oferta.<br/>
        <input type="submit" class="btn btn-outline-danger" onclick="closeAlert('<?php echo $_smarty_tpl->tpl_vars['a']->value['usu_id'];?>
')"value="Descartar"></input>
      </div>
    </form>
    </center>
    <?php }?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo $_smarty_tpl->tpl_vars['GET_CHATBOT']->value;?>

    <div class="site-section bg-light">
      <div class="container">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NOT']->value, 'n');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['n']->value) {
?>
        <?php if ((isset($_smarty_tpl->tpl_vars['n']->value['usu_nome']))) {?><center>
        <div class="alert alert-success" role="alert" id="alert_<?php echo $_smarty_tpl->tpl_vars['n']->value['usu_id'];?>
"style="opacity:0;position:absolute;">
          Joinder! O <?php echo $_smarty_tpl->tpl_vars['n']->value['tip_tipo'];?>
, <a href="<?php echo $_smarty_tpl->tpl_vars['GET_PERFIL_VISTANTE']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['n']->value['usu_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['n']->value['usu_nome'];?>
</a> foi aceitado, entre em contato no email: <?php echo $_smarty_tpl->tpl_vars['n']->value['usu_email'];?>
.
          <br/>Lembrando que ele(a) é da área: <?php echo $_smarty_tpl->tpl_vars['n']->value['are_area'];?>
<br/>
          <button type="button" class="btn btn-outline-success" onclick="closeAlert('<?php echo $_smarty_tpl->tpl_vars['n']->value['usu_id'];?>
')">Fechar</button>  
        </div></center>
        <div class="row justify-content-center mb-5" id="id_<?php echo $_smarty_tpl->tpl_vars['n']->value['usu_id'];?>
">
              <div class="rounded border jobs-wrap">
                  <a class="job-item d-block d-md-flex align-items-center  border-bottom fulltime">
                    <div class="company-logo blank-logo text-center text-md-left pl-3">
                      <img src="https://live.staticflickr.com/65535/4915<?php echo $_smarty_tpl->tpl_vars['n']->value['img_url'];?>
" alt="Imagem não carregou" class="img-fluid mx-auto">
                    </div>
                    <div class="job-details h-100">
                      <div class="p-3 align-self-center">
                        <h3><?php echo $_smarty_tpl->tpl_vars['n']->value['usu_nome'];?>
</h3>
                        <div class="d-block d-lg-flex">

                          <div class="mr-3"><span class="icon-suitcase mr-1"></span> <?php echo $_smarty_tpl->tpl_vars['n']->value['are_area'];?>
 </div>
                          <div><span class="icon-money mr-1"><br></span><?php echo $_smarty_tpl->tpl_vars['n']->value['tip_tipo'];?>
</div>
                        </div>
                      </div>
                    </div>
                    <form method="GET"action="notificaAction/<?php echo $_smarty_tpl->tpl_vars['n']->value['usu_id'];?>
/2"ajax="true">
                    <div class="job-category align-self-center">
                      <div class="">
                       <input onclick="clickLike('<?php echo $_smarty_tpl->tpl_vars['n']->value['usu_id'];?>
')"value="Aceitar"type="submit"class="btn btn-outline-primary"> </input>
                      </div>
                    </div>
                  </form>
                  <form method="GET"action="notificaAction/<?php echo $_smarty_tpl->tpl_vars['n']->value['usu_id'];?>
/3"ajax="true">
                    <div class="job-category align-self-center">
                        <div class="p-2">
                          <input onclick="clickDislike('<?php echo $_smarty_tpl->tpl_vars['n']->value['usu_id'];?>
')"value="Rejeitar"type="submit"class="btn btn-outline-danger" ></input>
                        </hr>
                        </div>
                      </div>
                  </form>
                  </a>
                  <div class="row"><?php echo $_smarty_tpl->tpl_vars['n']->value['usu_descricao'];?>
</div>
                </div>
              </div>
              <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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

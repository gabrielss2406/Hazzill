<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-10 18:11:05
  from 'C:\xampp\htdocs\hazzill\views\procurar.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5defd1a9cdf540_45744932',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '142e11efaf92645048f79276d5701faf71d6d11f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hazzill\\views\\procurar.html',
      1 => 1575997864,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5defd1a9cdf540_45744932 (Smarty_Internal_Template $_smarty_tpl) {
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
            console.log('certo');
          },
          error: function(data){
            console.log('erro');
          }
      });     
  });
  });
  //--
  window.onload = function teste(){
    mudarLogo();
  }
  function mudarLogo(){
    console.log($(window).width());
    if ($(window).width() > 700) {
      document.getElementById("logo").src = 'http://localhost/hazzill/views/images/logo_main.png';
    } else {
      document.getElementById("logo").src = 'http://localhost/hazzill/views/images/logo_main_2.png';
    }
    setTimeout("mudarLogo()", 6000);
  }
  //--
  function clickLike(e){
    document.getElementById('id_'+e).style.position="absolute";
    document.getElementById('id_'+e).style.opacity=0;
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
        <h2 class="mb-0">Procurar</h2>
        <p class="mb-0 unit-6"><a href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
">Home</a> <span class="sep">></span> <span>Procurar</span></p>
      </div>
    </div>
  <br>
    <center>
      <?php echo $_smarty_tpl->tpl_vars['FILTROS']->value;?>

      <form method="POST"action="filtrar/0">
        <input type="submit"value="Todos"class="btn btn-outline-dark">
        </input>
      </form>
      </center>
      </div>
      </div>
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
          <?php if ((isset($_smarty_tpl->tpl_vars['p']->value['usu_nome']))) {?>
          <div class="col-md-6 mb-5 mb-lg-4 col-lg-3" data-aos="fade" id="id_<?php echo $_smarty_tpl->tpl_vars['p']->value['usu_id'];?>
">
            <div class="position-relative unit-8">
            <a class="mb-3 d-block img-a"><?php echo $_smarty_tpl->tpl_vars['p']->value['tip_tipo'];?>
</br><img src="https://live.staticflickr.com/65535/4915<?php echo $_smarty_tpl->tpl_vars['p']->value['img_url'];?>
" alt="Image" class="img-fluid rounded"></a>
            <form method="GET"action="like/<?php echo $_smarty_tpl->tpl_vars['p']->value['usu_id'];?>
"ajax="true">
              <div class="row">
                  <div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['p']->value['are_area'];?>
</div>
                  <div class="col-lg-4">
                      <input onclick="clickLike('<?php echo $_smarty_tpl->tpl_vars['p']->value['usu_id'];?>
')"type="submit" value="Like"class="btn btn-outline-success"></input>
                  </div>
                  <input type="text"value="<?php echo $_smarty_tpl->tpl_vars['p']->value['usu_id'];?>
"style="position:absolute;opacity:0;z-index: -3;">
              </div>
            </form>
            <h2 class="h5 font-weihgt-normal line-height-sm mb-3"><?php echo $_smarty_tpl->tpl_vars['p']->value['usu_nome'];?>
</h2>
            
            <p><?php echo $_smarty_tpl->tpl_vars['p']->value['usu_descricao'];?>
</p>
            </div>
          </div> 
          <?php }?>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
      </div>
    </div>   

    


    
  </div>
  <?php echo $_smarty_tpl->tpl_vars['GET_FOOTER']->value;?>

  <?php echo '<script'; ?>
 data-cfasync="false" src="../../cdn-cgi/scripts/f2bf09f8/cloudflare-static/email-decode.min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 type="text/javascript" src="scripts/jquery-2.2.0.min.js"><?php echo '</script'; ?>
>
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

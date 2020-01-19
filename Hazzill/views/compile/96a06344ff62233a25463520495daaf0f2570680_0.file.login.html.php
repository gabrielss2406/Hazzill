<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-09 21:27:01
  from 'C:\xampp\htdocs\hazzill\views\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5deeae15ebe309_89884200',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96a06344ff62233a25463520495daaf0f2570680' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hazzill\\views\\login.html',
      1 => 1575923220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5deeae15ebe309_89884200 (Smarty_Internal_Template $_smarty_tpl) {
?><html lang="en"><head>
  <title>Job Finder — Colorlib Website Template</title>
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
  <!-- Switch Case escolher icones  -->
  <?php echo '<script'; ?>
 type="text/javascript">
    var src1 = "https://live.staticflickr.com/65535/49174";
    function escolherIcon(e){
      switch (e) {
          case 1:
            src1+="616736_2fd0732ba5_t.jpg";
            document.getElementById("A").src = src1;
            src1 = "https://live.staticflickr.com/65535/49174";
            return src1;
             break;
          case 2:
            src1+="684891_066f2803c3_t.jpg";
            document.getElementById("A").src = src1;
            src1 = "https://live.staticflickr.com/65535/49174";
            return src1;
             break;
          case 3:
            src1+="684916_cfc8fac82a_t.jpg";
            document.getElementById("A").src = src1;
            src1 = "https://live.staticflickr.com/65535/49174";
            return src1;
             break;   
          case 4:
            src1+="901762_44cfae1658_t.jpg";
            document.getElementById("A").src = src1;
            src1 = "https://live.staticflickr.com/65535/49174";
            return src1;
             break; 
          case 5: 
            src1+="901767_0087cff73b_t.jpg";
            document.getElementById("A").src = src1;
            src1 = "https://live.staticflickr.com/65535/49174";
            return src1;
             break;
          case 6: 
            src1+="901792_e6bf88d599_t.jpg";
            document.getElementById("A").src = src1;
            
            return src1;
             break;   
             document.getElementById("B").value = "a";
             src1 = "https://live.staticflickr.com/65535/49174";
   default:
       element = "Nenhum icone foi selecionado!";
    }
        }
      <?php echo '</script'; ?>
>
  <!-- Fim Switch Case escolher icones  -->
<?php echo '<script'; ?>
 type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/39/1/intl/pt_br/common.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/39/1/intl/pt_br/util.js"><?php echo '</script'; ?>
></head>
<body data-aos-easing="slide" data-aos-duration="800" data-aos-delay="0">

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
      <h2 class="mb-0">Login/Cadastro</h2>
      <p class="mb-0 unit-6"><a href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
">Home</a> <span class="sep">&gt;</span> <span>Logar/Cadastrar</span></p>
    </div>
  </div>

  
  

  <div class="site-section bg-light">
    <div class="container">
      <div class="row">
     
        <div class="col-md-12 col-lg-8 mb-5">
        
          
          
          <form action="<?php echo $_smarty_tpl->tpl_vars['GET_CONTROL']->value;?>
/cadastrar.php"method="POST"class="p-5 bg-white">                         
          <label class="font-weight-bold" for="fullname"><h1>Cadastro</h1></label>
          <div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Imagem</label>
                  <div class="dropdown">
                      <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" onclick="escolherIcon();">
                       <img src="https://live.staticflickr.com/65535/49174616736_2fd0732ba5_t.jpg" id="A" >
                       <input id="B"type="text"required value="https://live.staticflickr.com/65535/49174616736_2fd0732ba5_t.jpg">
                         <span class="" src=""></span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li><img onclick="escolherIcon(1);" src="https://live.staticflickr.com/65535/49174616736_2fd0732ba5_t.jpg" style="padding: 2%; margin-left: 37%;"></li>
                        <li><img onclick="escolherIcon(2);" src="https://live.staticflickr.com/65535/49174684891_066f2803c3_t.jpg" style="padding: 2%; margin-left: 37%;"></li>
                        <li><img onclick="escolherIcon(3);" src="https://live.staticflickr.com/65535/49174684916_cfc8fac82a_t.jpg" style="padding: 2%; margin-left: 37%;"></li>
                        <li><img onclick="escolherIcon(4);" src="https://live.staticflickr.com/65535/49174901762_44cfae1658_t.jpg" style="padding: 2%; margin-left: 37%;"></li>
                        <li><img onclick="escolherIcon(5);" src="https://live.staticflickr.com/65535/49174901767_0087cff73b_t.jpg" style="padding: 2%; margin-left: 37%;"></li>
                        <li><img onclick="escolherIcon(6);" src="https://live.staticflickr.com/65535/49174901792_e6bf88d599_t.jpg" style="padding: 2%; margin-left: 37%;"></li>
                      </ul>
                    </div>
                </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="fullname">Nome</label>
                <input required type="text"name="nome"class="form-control" placeholder="Nome e Sobrenome">
              </div>
            </div>

            <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Email</label>
                  <input required type="text"name="email"class="form-control" placeholder="exemplo@dominio.com">
                </div>
              </div>
              
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Senha</label>
                  <input required type="password"name="pass"class="form-control" placeholder="***********">
                </div>
              </div>
            <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Data de Nascimento</label>
                  <input required name="data"type="date"  class="form-control">
                </div>
              </div>               
          <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="fullname">Função</label>
              <select required name="tipo"class="custom-select" >
                  <option selected>Selecione...</option>
                  <option value="1">Funcionário</option>
                  <option value="2">Cliente</option>
                  <option value="3">Empresa</option>
                </select>
            </div>
          </div>
          <div class="row form-group mb-5">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="fullname">Área</label>
                <select required name="area"class="custom-select" >
                    <option selected>Selecione...</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PERF']->value, 'pe');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pe']->value) {
?>
                      <option value="<?php echo $_smarty_tpl->tpl_vars['pe']->value['are_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['pe']->value['are_area'];?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </select>
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12">
                <input type="submit" value="Cadastrar" class="btn btn-primary  py-2 px-5">
              </div>
            </div>


          </form>
        </div>
        <!-- Login -->
        <div class="col-lg-4">
          <form method="POST"action="<?php echo $_smarty_tpl->tpl_vars['GET_CONTROL']->value;?>
/logar.php">
          <div class="p-4 mb-3 bg-white">
              <label class="font-weight-bold" for="fullname"><h1>Login</h1></label>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Email</label>
                  <input type="text" name="email"class="form-control" placeholder="exemplo@dominio.com">
                </div>
              </div>
              
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Senha</label>
                  <input type="password"name="pass" class="form-control" placeholder="***********">
                </div>
              </div> 
              <div class="row form-group">
                  <div class="col-md-12">
                    <input type="submit" value="Logar" class="btn btn-primary  py-2 px-5">
                  </div>
                </div>
          </div></form>
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
 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;libraries=places&amp;callback=initAutocomplete" async="" defer=""><?php echo '</script'; ?>
>


</body></html><?php }
}

<?php
/* Smarty version 3.1.34-dev-7, created on 2019-11-21 17:59:33
  from 'C:\xampp\htdocs\hazzill\views\cadastro.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dd6c275e39ff8_61745716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1149afe27707de34adbc9cf2bad44cbf7dbc4fa8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hazzill\\views\\cadastro.html',
      1 => 1574355571,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd6c275e39ff8_61745716 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastro</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/fileLogin/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/fileLogin/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/fileLogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/fileLogin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/fileLogin/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/fileLogin/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/fileLogin/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/fileLogin/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/fileLogin/css/main.css">
<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/cadastro.js"><?php echo '</script'; ?>
>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				<form class="login100-form validate-form"action="<?php echo $_smarty_tpl->tpl_vars['GET_CONTROL']->value;?>
/cadastrar.php"method="POST">
					<span class="login100-form-title p-b-55">
						Cadastro
					</span>
					<div class="wrap-input100 validate-input m-b-16" data-validate = "">
						<input required class="input100" type="text" name="nome" placeholder="Nome">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class=""></span>
						</span>
					</div>
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
						<input required class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-envelope"></span>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input required class="input100" type="password" name="pass" placeholder="Crie uma senha">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
					</div>
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input required class="input100" type="password" name="pass2" placeholder="Digite novamente a senha">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
					</div>

						<div class="contact100-form-checkbox m-l-4">
							<input required class="input-checkbox100" id="ckb1" type="radio" name="tipo"value="1">
							<label class="label-checkbox100" for="ckb1">
								Funcionário
							</label>
						</div>
						<div class="contact100-form-checkbox m-l-4">
							<input required class="input-checkbox100" id="ckb2" type="radio" name="tipo"value="2">
							<label class="label-checkbox100" for="ckb2">
								Cliente
							</label>
						</div>
						<div class="contact100-form-checkbox m-l-4">
							<input required class="input-checkbox100" id="ckb3" type="radio" name="tipo"value="3">
							<label class="label-checkbox100" for="ckb3">
								Empresa
							</label>
						</div>

					<br>	

					<div class="btn-group">
							<select required type="button" class="btn btn-success"name="area"id="selectarea"><span class="sr-only">Dropdown</span>
									<option value="1">Pedreiro</option>
									<option value="2">Sorveteiro</option>
									<option value="3">Caseiro</option>
								</select>
						  </div>
					
					
					<div class="container-login100-form-btn p-t-25">
						<input value="Cadastrar"type="submit"class="login100-form-btn">
						</input>
					</div>
					<div class="text-center w-full p-t-115">
						<span class="txt1">
							
						</span>

						<a class="txt1 bo1 hov1" href="#">
							
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/vendor/jquery/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/vendor/bootstrap/js/popper.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/vendor/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/vendor/select2/select2.min.js"><?php echo '</script'; ?>
>
<!--===============================================================================================-->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/main.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}

<?php
    class Cabecalho{ //escolhe o cabeçalho de acordo com o login
        function getCabecalho(){
          ini_set( 'display_errors', 0);
          if(!isset($_SESSION)){
            session_start();
        }
          if(isset($_SESSION['logado'])){
                if($_SESSION['logado']==0){ // $_SESSION atribuida no login
                    return '<div class="site-navbar-wrap js-site-navbar bg-white">
                    <div class="container">
                      <div class="site-navbar bg-light">
                        <div class="py-1"id="tipo">
                          <div class="row align-items-center">
                            <div class="col-2">
                              <img src="http://1hazzill.000webhostapp.com/views/images/logo_main.png"id="logo" class="img-fluid" alt="">
                            </div>
                            <div class="col-10">
                              <nav class="site-navigation text-right" role="navigation">
                                <div class="container">
                                  <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
                                  <ul class="site-menu js-clone-nav d-none d-lg-block">
                                    <li><a href="http://1hazzill.000webhostapp.com/">Home</a></li>
                                    <li><a href="http://1hazzill.000webhostapp.com/login">Logar/Cadastrar</a></li>                    
                                    <li><a href="http://1hazzill.000webhostapp.com/contato">Contato</a></li>
                                  </ul>
                                </div>
                              </nav>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>';
                }else if($_SESSION['logado']==1){
                    return '<div class="site-navbar-wrap js-site-navbar bg-white">
                    <div class="container">
                      <div class="site-navbar bg-light">
                        <div class="py-1">
                          <div class="row align-items-center">
                            <div class="col-2">
                              <img src="http://1hazzill.000webhostapp.com/views/images/logo_main.png"id="logo" class="img-fluid" alt="">
                            </div>
                            <div class="col-10">
                              <nav class="site-navigation text-right" role="navigation">
                                <div class="container">
                                  <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
                                  <ul class="site-menu js-clone-nav d-none d-lg-block">
                                    <li><a href="http://1hazzill.000webhostapp.com/">Home</a></li>
                                    <li><a href="http://1hazzill.000webhostapp.com/perfil">Editar Perfil</a></li>
                                    <li><a href="http://1hazzill.000webhostapp.com/notificacoes">Notificações</a></li>
                                    <li class="has-children">
                                    </li>
                                    <li><a href="http://1hazzill.000webhostapp.com/contato">Contato</a></li>
                                    <li><a href="http://1hazzill.000webhostapp.com/logoff">Sair</a></li>
                                    <li><a href="http://1hazzill.000webhostapp.com/procurar"><span class="bg-primary text-white py-3 px-4 rounded"><span class="icon-plus mr-3"></span>OFERTAR</span></a></li>
                                  </ul>
                                </div>
                              </nav>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>';
                }else if($_SESSION['logado']==2){
                    return '<div class="site-navbar-wrap js-site-navbar bg-white">
                    <div class="container">
                      <div class="site-navbar bg-light">
                        <div class="py-1">
                          <div class="row align-items-center">
                            <div class="col-2">
                            <img src="http://1hazzill.000webhostapp.com/views/images/logo_main.png"id="logo" class="img-fluid" alt="">
                            </div>
                            <div class="col-2">
                                <img src="http://1hazzill.000webhostapp.com/views/images/erro-login.png"id="logo" class="img-fluid">
                            </div>
                            <div class="col-8">
                              <nav class="site-navigation text-right" role="navigation">
                                <div class="container">
                                  <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
                                  <ul class="site-menu js-clone-nav d-none d-lg-block">
                                    <li><a href="http://1hazzill.000webhostapp.com/">Home</a></li>
                                    <li><a href="http://1hazzill.000webhostapp.com/login">Logar/Cadastrar</a></li>                    
                                    <li><a href="http://1hazzill.000webhostapp.com/contato">Contato</a></li>
                                  </ul>
                                </div>
                              </nav>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>';
                }else{
                    return 'ERRO';
                }
              }else{
                return '<div class="site-navbar-wrap js-site-navbar bg-white">
                    <div class="container">
                      <div class="site-navbar bg-light">
                        <div class="py-1">
                          <div class="row align-items-center">
                            <div class="col-2">
                            <img src="http://1hazzill.000webhostapp.com/views/images/logo_main.png"id="logo" class="img-fluid" alt="">
                            </div>
                            <div class="col-10">
                              <nav class="site-navigation text-right" role="navigation">
                                <div class="container">
                                  <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
                                  <ul class="site-menu js-clone-nav d-none d-lg-block">
                                    <li><a href="http://1hazzill.000webhostapp.com/">Home</a></li>
                                    <li><a href="http://1hazzill.000webhostapp.com/login">Logar/Cadastrar</a></li>                    
                                    <li><a href="http://1hazzill.000webhostapp.com/contato">Contato</a></li>
                                  </ul>
                                </div>
                              </nav>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>';
              }
      }
    }
?>
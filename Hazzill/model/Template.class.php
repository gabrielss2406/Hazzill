<?php

class Template extends Smarty{//classe deo template com herança do Smarty

    function __construct(){ //function executada quando a classe é estanciada
        parent::__construct();//inicializar o construtor
        //o this referencia que se trata dos valores dessa pagina
        $this->setTemplateDir("views/"); //indica os diretórios do arquivo
        $this->setCompileDir("views/compile");//define pasta do compilador(senão criar template_c toda hora)
        $this->setCacheDir("views/cache");//armazenar dados temporários durante a navegação
    }
}

?>
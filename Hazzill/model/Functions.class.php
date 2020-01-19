<?php
    class Functions{
        static function chatbot(){
            return '<script>
            function abrir(){
              document.getElementById("demo").style.opacity = 1;
              document.getElementById("demo").style.position = "fixed";
              document.getElementById("demo").style.zIndex = 10;
            }
            function fechar() {
              document.getElementById("demo").style.opacity = 0;
              document.getElementById("demo").style.position = "absolute";
              document.getElementById("demo").style.zIndex = -1;
            }
          </script>
          <input class="btn-success rounded"type="button"onclick="abrir()"value="Abrir Chatbot"style="z-index:999;position: fixed; float:right; bottom:0;">
            <input class="btn-success rounded-lg"type="button"onclick="fechar()"value="-------------s X"style=";position: fixed;z-index:2; bottom:0;">
            <iframe src="http://1hazzill.000webhostapp.com/chatbot"frameborder="0"id="demo"style="height:370px;opacity:0;position:absolute;bottom:30px;z-index:-1;"></iframe>'; 
        }
    }
?>
<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-10 18:06:59
  from 'C:\xampp\htdocs\hazzill\views\chatbot.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5defd0b3b39275_52916106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '906c6ee0045473341c7b785b2a3d17fcbde7769b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hazzill\\views\\chatbot.html',
      1 => 1575997617,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5defd0b3b39275_52916106 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/unibox/1.15.0/js/unibox.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/unibox/1.15.0/css/unibox.min.css" />
    <title>Javascript Chat Bot Demo</title>
    <style>
        body {
            color: #333;
            background-color: #efefef;
            font: 13px helvetica,arial,freesans,clean,sans-serif;
        }
        #demo {
            /*background-color: #ffffff;*/
            width: 80%;
            max-width: 1000px;
            margin-left: auto;
            margin-right: auto;
            padding: 20px;

            background-color: #F8F8F8;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px #999;
            line-height: 1.4em;
            font: 13px helvetica,arial,freesans,clean,sans-serif;
            color: black;
        }
        #demo input {
            padding: 8px;
            font-size: 14px;
            border: 1px solid #ddd;
            width: 400px;
        }
        .button {
            display: inline-block;
            background-color: darkcyan;
            color: #fff;
            padding: 8px;
            cursor: pointer;
            float: right;
        }
        #chatBotCommandDescription {
            display: none;
            margin-bottom: 20px;
        }
        input:focus {
            outline: none;
        }
        .chatBotChatEntry {
            display: none;
        }
    </style>
</head>
<body>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/chatbot.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/chatbot.css" />

<div id="demo">

    <div id="chatBotCommandDescription"></div>
    <input id="humanInput" style="width: 200px;"type="text" placeholder="Diga alguma coisa" id="aurio"/>
    <br>
    <br>
    <small>Em caso de travamento, atualize a página ou clique no 'X' ao lado de 'Aurio'!</small>
    <br>
    <br>
    <div class="button" onclick="$('#chatBotCommandDescription').slideToggle();" style="margin-right: 34%">O que eu posso dizer?</div>
    <br>
    <div style="clear: both;">&nbsp;</div>
    <div id="chatBot">
        <div id="chatBotThinkingIndicator"></div>
        <div id="chatBotHistory"></div>
    </div>
</div>


<?php echo '<script'; ?>
>

    // get you mashape api key here: https://market.mashape.com/webknox/question-answering
    var mashapeApiKey = 'YOUR_MASHAPE_API_KEY';
    var wx = ChatBot.Engines.webknox(mashapeApiKey);

    var sampleConversation = [
        "Oi",
        "Meu nome é Aurio, como posso te ajudar?",
        "Como ver os likes que recebi?",
        "Como procurar perfis?",
        "Como entrar em contato?",
        "Tchau"
    ];
    var config = {
        botName: 'Aurio',
        inputs: '#humanInput',
        inputCapabilityListing: false,
        engines: [wx],
        addChatEntryCallback: function(entryDiv, text, origin) {
            entryDiv.delay(200).slideDown();
        }
    };
    ChatBot.init(config);
    ChatBot.setBotName("Aurio");
    ChatBot.addPattern("^tchau$", "response", "Ainda bem, até um outro dia", undefined, "Diga 'Tchau' para encerrar a conversa.");
    ChatBot.addPattern("^mas você é o Aurio?", "response", "Não piranha, eu sou o Jô Soares", undefined, "");
    ChatBot.addPattern("(?:Meu nome é) (.*)", "response", "Olá $1, como posso te ajudar?", function (matches) {
        ChatBot.setHumanName(matches[1]);
    },"Diga 'Meu nome é [seu nome]' para ser chamado pelo nome.");
    ChatBot.addPattern("(Como )?ver os likes que recebi?", "response", "Para notificações, suba o navegador até a aba principal no topo da página estando logado. Depois clique em 'Notificações'.", undefined, "Diga 'Como ver os likes que recebi?' para receber um tutorial de como ver suas notificações.");
    ChatBot.addPattern("(Como )?entrar em contato?", "response", "Para entrar em contato, suba o navegador até a aba principal no topo da página estando logado. Depois clique em 'Contato'.", undefined, "Diga 'Como entrar em contato?' para receber um tutorial de como entrar em contato com nossa Equipe.");
    // optional but for better suggests we use unibox search suggests
    ChatBot.addPattern("(Como )?procurar por outras pessoas?", "response", "Para procurar, suba o navegador até a aba principal no topo da página estando logado. Depois clique em 'Ofertar'.", undefined, "Diga 'Como ver os likes que recebi?' para receber um tutorial de como ver suas notificações.");
    $('#humanInput').unibox({
        // we use the suggest URL from the webknox engine
        suggestUrl: wx.getSuggestUrl(),
        // minimum number of characters before the suggests shows
        minChars: 1,
        enterCallbackResult: function(){},
    });

<?php echo '</script'; ?>
>
</body>
</html><?php }
}

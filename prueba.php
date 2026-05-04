<?php
session_start();

require_once('acciones/bot_telegram.php');



//Datos del bot
$token = "8390867557:AAFoTxbkMrDmVnMD66tqbSZk_T5hvoGx0X4";
$chatId = "-5085714220";

enviarMensajeTelegram($chatId,"hola", $token);

?>
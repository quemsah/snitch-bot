<?php
require 'define.php';

$bot_token  = FloridaMan(0);
$channel  = FloridaMan(1);

$bot_answer = array();
$bot_answer[] = 'Beep Boop I am Robot.';
$bot_answer[] = 'Здарова кожаные ублюдки!';
$bot_answer[] = 'Beep boop, son. Beep boop.';

$bot_url = "https://api.telegram.org/bot$bot_token/";
$message = $bot_answer[rand(0, (count($bot_answer) - 1)) ];
//$url = $bot_url . "sendMessage?chat_id=" . $channel . "&text=" . urlencode($message);
//file_get_contents($url);
echo $message;




$output = implode(",", json_decode(file_get_contents('php://input'), TRUE));
$url = $bot_url . "sendMessage?chat_id=" . $channel . "&text=" . urlencode($output);
file_get_contents($url);
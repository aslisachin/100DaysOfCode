<?php
$input=file_get_contents('php://input');
$data=json_decode($input);
$chat_id=$data->message->chat->id;
$text=$data->message->text;
$name=$data->message->chat->first_name;
$token="YOUR BOT TOKEN";

if($text=="Hello"){
    $message = "Hello There! $name";
}
elseif($text=="What is your name"){
    $message = "My Name Is Test Bot";
}
else{
    $message = "Sorry I Can't Understand";
}

$url="https://api.telegram.org/bot$token/sendMessage?text=$message&chat_id=$chat_id";
file_get_contents($url);

?>

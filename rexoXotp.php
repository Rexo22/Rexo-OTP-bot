<?php


//  Tele bot 5718106632:AAEfZZ8EwwT-fgv1CEGM61anCAF2TIuc1NI
//  chat_id -1001746050017
//  api token H0cxzcz1Pp7ZZj77XGKlV6s3k9njFN1j


$token = "***************"; // Telegram bot token
$chat_id = "***************"; // Telegram chat ID
$proovl_token = "***************"; // Proovl.com Token

    $id = $_REQUEST['id'];
	$token = $_REQUEST['token'];
	$from = $_REQUEST['from'];
	$to = $_REQUEST['to'];
	$text = $_REQUEST['text'];
	
	
	if ($token == "H0cxzcz1Pp7ZZj77XGKlV6s3k9njFN1j") {
	
	
	$url = "https://api.telegram.org/bot5718106632:AAEfZZ8EwwT-fgv1CEGM61anCAF2TIuc1NI/sendMessage";

	$postfields = array(
   		'chat_id' => "-1001746050017",
   		'disable_notification' => "True",
   		'parse_mode' => "HTML",
        'text' => "<b>$from</b>/n<pre>$to</pre>$to</pre>/n<i>$text</i>"
	);


if (!$curld = curl_init()) {
		exit;
	}

	curl_setopt($curld, CURLOPT_POST, true);
	curl_setopt($curld, CURLOPT_POSTFIELDS, $postfields);
	curl_setopt($curld, CURLOPT_URL,$url);
	curl_setopt($curld, CURLOPT_RETURNTRANSFER, true);

$output = curl_exec($curld);

 curl_close ($curld);
	
	
		echo "Thank you $from for sending $message";
	} else {
		echo "Incorrect token";
		die;
	}



?>
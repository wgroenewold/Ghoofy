<?php

require_once('ghoofy.class.php');

$instance = ghoofy::instance();

if($_POST['gender'] == 'male'){
	$heshe = 'Hij';
	$heshe2 = '\'m';
}else{
	$heshe = 'Ze';
	$heshe2 = 'haar';
}


if($_POST['direction'] == 'Weggeven'){
	$text = "<@" . $_POST['name'] ."> heeft de " . strtolower($_POST['type']) . " van *" . $_POST['role'] . "* weggegeven. Solliciteer snel!";
	$balloon = 'Gawrsh! alweer een talent vrijgekomen!';
}else{
	$text = "<@" . $_POST['name'] ."> heeft een nieuwe " . strtolower($_POST['type']) . ". " . $heshe . " is nu *" . $_POST['role'] . "*. Feliciteer " . $heshe2 . " snel! :tada:";
	$balloon = 'Gawrsh! alweer een talent ontdekt!';
}

$blocks = file_get_contents('new_role.json');
$blocks = str_replace('{TEXT}', $text, $blocks);

$home = file_get_contents('home.json');

foreach($instance->slack->list_connected_users() as $value){
	$instance->slack->create_home($home, $value);
}

foreach($instance->slack->list_channels() as $item){
	$instance->slack->create_msg($balloon, $blocks, $item, 'https://slack.com/api/chat.postMessage');
}

echo 'Danku!';
<?php

require_once('ghoofy.class.php');

$instance = ghoofy::instance();

$home = file_get_contents('home.json');

foreach($instance->slack->list_connected_users() as $value){
	$instance->slack->create_home($home, $value);
}
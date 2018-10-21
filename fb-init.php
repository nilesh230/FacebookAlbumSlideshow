<?php
// start the session
session_start();

// include autoload file from vendor folder
require './lib/autoload.php';

$fb = new Facebook\Facebook([
	'app_id' => '2124084971243182',
	'app_secret' =>'70cf384c9f9e0bc092a1b8eae8ba27a0',
	'default_graph_version' => 'v3.1'
]);

$helper = $fb->getRedirectLoginHelper();
$loginUrl = $helper->getLoginUrl("http://fbalbum.com/");

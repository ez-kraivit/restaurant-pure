<?php
//config.php
//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';
//Make object of Google API Client for call Google API
$google_client = new Google_Client();
//Set the OAuth 2.0 Client ID
$google_client->setClientId('20729443967-fudtj6khrl7an066sc6ddkf2op0o90qo.apps.googleusercontent.com');
//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('0XT0NxkbZgpqDPUpitwhmkRp');
//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/google_login/index.php');
//
$google_client->addScope('email');
$google_client->addScope('profile');
//start session on web page
session_start();

?>
<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('473056597591-6b5sstr1lva6vg9mgisrp8mpb598mn9q.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/Nikhil/index.PHP');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?> 
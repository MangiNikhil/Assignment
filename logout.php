<?php 

include('config.php');
//Resets OAuth token
$google_client->revokeToken();
session_destroy();
//it redirects to index.php
header('location:index.php');

?>
<?php
session_start();

//Include Facebook SDK
require_once 'inc/facebook.php';

/*
 * Configuration and setup FB API
 */
$appId = '1417482348301843'; //Facebook App ID
$appSecret = 'dc30f8e2f1e5878f162425214bc4ca49'; // Facebook App Secret
$redirectURL = 'http://localhost/facebook_login_with_php/'; // Callback URL
$fbPermissions = 'email';  //Required facebook permissions

//Call Facebook API
$facebook = new Facebook(array(
  'appId'  => $appId,
  'secret' => $appSecret
));
$fbUser = $facebook->getUser();
?>
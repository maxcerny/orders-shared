<?php
require __DIR__ . '/vendor/autoload.php';
function getClient() {
    $configPaht = "client_secret.json";
    $client = new Google_Client();
    $client->setAuthConfig($configPaht);
    $client->setAccessType("offline");        // offline access
    $client->setIncludeGrantedScopes(true);   // incremental auth
    $client->addScope(Google_Service_Calendar::CALENDAR);
    $client->setRedirectUri('http://' . $_SERVER['HTTP_HOST'] . '/oauth2callback.php');
}

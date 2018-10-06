<?php
include "lib.php";

var_dump(file_exists("client_secret.json"));

require_once ("gAPI.php");
$client = getClient();
if (is_a($client, "Google_client")) {
    echo $client;
} else {
    echo "user doesn't exist";
    $auth_url = $client->createAuthUrl();
    header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));
}

var_dump($client);
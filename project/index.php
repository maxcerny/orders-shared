<?php
include "lib/lib.php";

var_dump(file_exists("lib/client_secret.json"));

require_once ("lib/gAPI.php");
$client = getClient();
if (is_a($client, "Google_client")) {
    echo $client;
} else {
    echo "exists";
}
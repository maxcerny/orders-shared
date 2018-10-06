<?php
include "lib/lib.php";

require_once ("lib/gAPI.php");
$client = getClient();
if (is_a($client, "Google_client")) {
    echo $client;
} else {
    echo "exists";
}
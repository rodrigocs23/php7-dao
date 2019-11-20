<?php

require_once("config.php");

$client = new Client();

$client->loadById(3);

echo $client;
?>
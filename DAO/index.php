<?php

require_once("config.php");
//-- Call one register
//$client = new Client();
//$client->loadById(3);
//echo $client;


// List all registers
//echo json_encode(Client::getList());

// List all registers that satisfied condition
// echo json_encode(Client::getSearchClient("Rodrigo"));



// Load user using user and password
//echo json_encode(Client::login("raposo.am", "12345"));
//$client = new Client();
//$client->login("raposo", "12345");
//
//echo $client;

//Insert new client using DAO

//$client = new Client();
//
//$client->setNameCLient('Rodrigo');
//$client->setUserCLient('rcs123');
//$client->setPasswordCLient('kamehameha');
//
//$client->insert();

// Update using DAO
//$client = new Client();
//$client->loadById(3);
//$client->update("Super Man", "superzinho", "manaus2000");
//
//echo $client;

//Delete using DAO
$client = new Client();

$client->loadById(3);

$client->delete();

echo $client;
?>
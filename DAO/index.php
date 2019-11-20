<?php

require_once("config.php");

$sql = new Sql();
$result = $sql->select("SELECT * FROM client");
echo json_encode($result);
?>
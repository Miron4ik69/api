<?php 

include("core/database.php");
include("Api/Data.php");

$api = new Data($pdo);

$api->api();


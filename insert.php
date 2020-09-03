<?php 
include("Api/Data.php");
include("core/database.php");


$data = new Data($pdo);
$data->add($_POST);
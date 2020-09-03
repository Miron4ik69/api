<?php 
include("Api/Data.php");
include("core/database.php");

if(empty($_REQUEST)){
    require('view/upd.php');
} else {
    $data = new Data($pdo);
    $data->update($_POST);
}
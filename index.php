<?php 
include("Api/Data.php");
include("core/database.php");


if(empty($_REQUEST)){
    require('view/add.php');
} else {
    $data = new Data($pdo);
    $data->add($_POST);
}


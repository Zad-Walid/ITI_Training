


<?php

if(!isset($_COOKIE['user_name'])){
    header("Location:login.php");
}

require("db.php");
$db = new db();

//$connection = new pdo("mysql:host=localhost;dbname=web","root","");

$data = $db->delete_data("data","id = '{$_GET['id']}'");

//$data = $connection->query("delete from data where id = {$_GET['id']}");

header("Location:list.php");


?>
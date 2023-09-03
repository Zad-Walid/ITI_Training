
<?php

if(isset($_POST['login'])){

//$connection = new pdo("mysql:host=localhost;dbname=web","root","");

$connection = new mysqli("localhost","root","","web");

$stm = $connection->query("select * from data where user_name ='{$_POST['user_name']}' and pass = '{$_POST['pass']}' ");

//$data = $stm->fetch(PDO::FETCH_ASSOC);
$data=$stm->fetch_assoc();

if($data){
    setcookie("first_name",$data['first_name']);
    setcookie("last_name",$data['last_name']);
    setcookie("user_name",$data['user_name']);
    setcookie("pass",$data['pass']);
    header("Location:list.php");
}else{
    header("Location:login.php?error");
}


}
?>

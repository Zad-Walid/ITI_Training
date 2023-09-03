<ul>

<?php 

if(!isset($_COOKIE['user_name'])){
    header("Location:login.php");
}

require("db.php");

//$connection = new pdo("mysql:host=localhost;dbname=web","root","");
$db = new db();


//$data = $connection->query("select * from data where select * from data where");

$data = $db->get_data("data","id = '{$_GET['id']}'");

$result_array = $data->fetchAll(PDO::FETCH_ASSOC);


foreach($result_array as $data){
    
    
    foreach ($data as $index){
       echo " <li> $index </li>";
    }

}
?>
</ul>
<table border="5">
<tr>
    <th>id</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Address</th>
    <th>Country</th>
    <th>Gender</th>
    <th>User Name</th>
    <th>Password</th>
    <th>Department</th>
    <th>img</th>
    <th>Other Options</th>
    
    
</tr>


<?php
if(!isset($_COOKIE['user_name'])){
    header("Location:login.php");
}

echo  "hi" ." ". $_COOKIE['first_name'] ." ".$_COOKIE['last_name'] ;

$connection = new pdo("mysql:host=localhost;dbname=web","root","");

$data = $connection->query("select * from data");

$result_array = $data->fetchAll(PDO::FETCH_ASSOC);

foreach($result_array as $data){
    echo "<tr>";
    
    foreach ($data as $index){
    echo " <td> $index </td>";
    }


    echo "<td>
    <a href ='view.php?id={$data['id']}'>view</a>
    <a href ='edit.php?id={$data['id']}'>edit</a>
    <a href ='delete.php?id={$data['id']}'>delete</a>
    </td>";
    
    "</tr>";
}



?>


<!-- 
echo "<pre>";
$arr = file("data.txt");
//var_dump( $arr);
echo "</pre>";


 foreach ($arr as $index){


    echo "<tr>";

    $element = explode("/",$index);
    
     foreach ($element as $e){
        echo "<td> $e </td>";
          }

     echo "</tr>";
 } -->



</table>
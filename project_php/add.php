<!DOCTYPE html>
<html>
<head>

</head>

<body>


<?php 



$first_name =validate($_POST['first_name']);
$last_name = validate($_POST['last_name']);
$user_name = validate($_POST['user_name']);
$pass = validate($_POST['pass']);

$errors = [];
if(strlen($first_name) < 2){
    $errors["first_name"] = "your input less than 2 chars";
}

if(strlen($last_name) < 2){
    $errors["last_name"] = "your input less than 2 chars";
}

 if(strlen($pass) < 3){
     $errors["pass"] = "your input less than 3 chars";
 }

if(count($errors)>0){
    $errors = json_encode($errors);
    header("Location:registration.php?error=$errors");
}

else{

move_uploaded_file($_FILES["img"]["tmp_name"],"imgs/" . $_FILES["img"]["name"]);


require("db.php");

$db = new db();


//$connection = new pdo("mysql:host=localhost;dbname=web","root","");

$data = $db->insert_data("data",
("first_name,last_name,address,country,gender,user_name,pass,department_name,img"),
("'{$_POST['first_name']}','{$_POST['last_name']}',
'{$_POST['address']}','{$_POST['country']}',
'{$_POST['gender']}','{$_POST['user_name']}',
'{$_POST['pass']}','{$_POST['department_name']}',
'{$_FILES["img"]["name"]}'")

);
header("Location:list.php");


 //var_dump($connection);


/* $connection->query("insert into data
(first_name,last_name,address,country,gender,user_name,pass,department_name,img)
 values
 ('{$_POST['first_name']}','{$_POST['last_name']}',
 '{$_POST['address']}','{$_POST['country']}',
 '{$_POST['gender']}','{$_POST['user_name']}',
 '{$_POST['pass']}','{$_POST['department_name']}',
 '{$_FILES["img"]["name"]}')

 ");
header("Location:list.php");*/
}

function validate($data){

    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

 //header("Location:list.php");

?>



<!-- 
$info =implode("/",$_POST) ;

file_put_contents("data.txt","\n".$info,FILE_APPEND);

header("Location:list.php"); -->



<!-- // if ($_POST['gender'] == "male"){
//     $g = "Mr";

// }
// else{
//     $g = "Miss";
// }

// echo "Thanks ".$g." ".$_POST['first_name']." ".$_POST['last_name']

// ?>

//  -->
<!-- 
// echo "<h3>please review your information</h3></br>";

// echo "Name : {$_POST['first_name']} {$_POST['last_name']} </br>";
// echo "Address : {$_POST['address']} </br>";

// // if ($_POST['php'] == true  || $_POST['mysql'] == true || $_POST['postgreesql'] == true  || $_POST['J2SE'] == true) {
// //     echo "Your Skills : {$_POST['php']} , {$_POST['mysql']} , {$_POST['postgreesql']}, {$_POST['J2SE']} </br>";
// // }

// echo "Department: OpenSource </br>"; -->





</body>
</html>




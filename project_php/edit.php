

<?php

if(!isset($_COOKIE['user_name'])){
  header("Location:login.php");
}

require("db.php");
$db = new db();


//connection = new pdo("mysql:host=localhost;dbname=web","root","");

$data = $db->get_data("data","id = '{$_GET['id']}'");

//$data = $connection->query("select * from data where id = {$_GET['id']}");


$result_array = $data->fetchAll(PDO::FETCH_ASSOC);

$data = $db->update_data ("data" ,
"first_name = '{$_POST['first_name']}',
last_name = '{$_POST['last_name']}',
address = '{$_POST['address']}',
country = '{$_POST['country']}',
user_name = '{$_POST['user_name']}',
pass = '{$_POST['password']}',
department_name = '{$_POST['department_name']}'"
,"id = '{$_GET['id']}'");

header("Location:list.php");

/*
if (isset($_POST['update'])){

    $connection->query("update data set 
    first_name = '{$_POST['first_name']}',
    last_name = '{$_POST['last_name']}',
    address = '{$_POST['address']}',
    country = '{$_POST['country']}',
    gender = '{$_POST['gender']}',
    user_name = '{$_POST['user_name']}',
    pass = '{$_POST['password']}',
    department_name = '{$_POST['department_name']}'
    where id = {$_GET['id']}
    

    ");
    header("Location:list.php");
}
*/

//

?>


<form method="post" action="">


<table  align="center" border ="2" >
<caption >Editing</caption>
<tr>
<td><table>

<tr align = "left">
<th>First Name</th>
<td> <input type="text" placeholder="Enter your First Name" name="first_name"  size="20" " /></td>
</tr>

<tr align = "left">
<th>Last Name</th>
<td> <input type="text" placeholder="Enter your Last Name" name="last_name"  size="20"/></td>
</tr>

<tr align = "left">
<th>Address</th>
<td> <input type="text" class="mytext" placeholder="Enter your address" name="address"  size="20"/></td>
</tr>

<tr align = "left">
<th>Country</th>
<td width = "150"><select name="country" >
  <option value="Egypt">Egypt</option>
  <option value="Ksa">Ksa</option>
  <option value="Usa">Usa</option>
  <option value="UAE">Uae</option>
</select></td>
</tr>

<tr align = "left">
<th>Gender</th>
<td ><input type="radio"  name="gender"  value="male"/> Male</td>
<td ><input type="radio"  name="gender"  value="Female"/> Female</td>
</tr>


<!-- <tr align = "left">
<th>skills</th>
<td><input type="checkbox"  name="php" value="php">
  <label for="php"> PHP</label></td>
  <td><input type="checkbox"  name="J2SE" value="J2SE">
  <label for="J2SE"> J2SE</label><br></td>
</tr> -->
<!-- <tr align = "left">
<th></th>
<td><input type="checkbox"  name="mysql" value="mysql">
  <label for="mysql"> Mysql</label></td>
  <td><input type="checkbox"  name="postgreesql" value="postgreesql">
  <label for="postgreesql"> Postgreesql</label><br></td>
</tr>  -->

<tr align = "left">
<th>User Name</th>
<td> <input type="text" placeholder="Enter your User Name" name="user_name"   size="20"/></td>
</tr>

<tr align = "left">
<th>Password</th>
<td> <input type="password" placeholder="Enter your password" name="password"   size="20"/></td>
</tr>

<tr align = "left">
<th>Department</th>
<td> <input type="text" placeholder="OpenSource" name="department_name" size="20" value="OpenSource" readonly /></td>
</tr>


</table>

</br>

<table align="center" border ="2">
<tr>
<td><input type="submit" value="update" name = "update"/></td>

</tr>

</table>

</form>



<?php
$errors = [];

if (isset($_GET['error'])){

  $errors = json_decode($_GET['error'],true);
  
}
?>


<html>
<head><title>Registartion</title>
<style>
    .mytext {
    height: 150px;
}
</style>
</head>
<body>


<form method="post" action="add.php" enctype="multipart/form-data">


<table  align="center" border ="2" >
<caption >Regestration</caption>
<tr>
<td><table>

<tr align = "left">
<th>First Name</th>
<td> <input type="text" placeholder="Enter your first name" name="first_name" size="20"/></td>
</tr>

<tr>
<td>
<?php
if(isset($errors['first_name'])){
  echo $errors['first_name'];
}
?>
</td>
</tr>



<tr align = "left">
<th>Last Name</th>
<td> <input type="text" placeholder="Enter your Last Name" name="last_name" size="20"/></td>
</tr>

<tr>
<td>
<?php
if(isset($errors['last_name'])){
  echo $errors['last_name'];
}
?>
</td>
</tr>


<tr align = "left">
<th>Address</th>
<td> <input type="text" class="mytext" placeholder="Enter your address" name="address" size="20"/></td>
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
<td> <input type="text" placeholder="Enter your User Name" name="user_name" size="20"/></td>
</tr>

<tr>
<td>
<?php
if(isset($errors['user_name'])){
  echo $errors['user_name'];
}
?>
</td>
</tr>


<tr align = "left">
<th>Password</th>
<td> <input type="password" placeholder="Enter your password" name="pass" size="20"/></td>
</tr>

<tr>
<td>
<?php
if(isset($errors['pass'])){
  echo $errors['pass'];
}
?>
</td>
</tr>


<tr align = "left">
<th>Department</th>
<td> <input type="text" placeholder="OpenSource" name="department_name" size="20" value="OpenSource" readonly /></td>
</tr>

<tr align = "left">
<th>Upload File </th>
<td> <input type="file"  name="img" size="20" /></td>
</tr>

</table>

</br>

<table align="center" border ="2">
<tr>
<td><input type="submit" value="Register"/></td>
<td><input type="reset" value="Reset"/></td>
</tr>

</table>

</form>

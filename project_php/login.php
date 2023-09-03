
<?php
if(isset($_GET['error'])){
    echo "invalid username or password ";
}

?>


<form method="post" action="empController.php" >
enter your user name <input type="text" placeholder="Enter your User Name" name="user_name" size="20"/></br>
enter your password: <input type="password" placeholder="Enter your password" name="pass" size="20"/></br>
<input type="submit" value="login" name="login"/></br>

</form>
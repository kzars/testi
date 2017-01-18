
<?php
	require('db.php');
   // ja forma tiek submitota, datus pievieno datubāzei. 
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); // izņēmam ārā iespējamos backslash
		$username = mysqli_real_escape_string($con,$username); 
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		$role="standart";
		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, role, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$role', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='index.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
</form>
</div>
<?php } ?>
</body>
</html>

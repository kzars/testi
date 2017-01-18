<?php
	require('db.php');
	session_start();
    // Ja forma pievienota, tad peivienojam db
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); 
		$username = mysqli_real_escape_string($con,$username); 
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: index.php"); 
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='index.php'>Login</a></div>";
				}
    }else{
?>
	<form action="" method="post" name="login">
			<div class="row">
			<div class="col-sm-5 ">
				<input  class="form-control" type="text" name="username" placeholder="Username" required />
			</div>
			<div class="col-sm-5 ">
				<input  class="form-control" type="password" name="password" placeholder="Password" required />
			</div>
			<div class="col-sm-2">
				<input  class="btn btn-success pull-right" name="submit" type="submit" value="Login" />
			</div>
			</div>
	</form>
<?php } ?>


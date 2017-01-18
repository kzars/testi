<?php
	require('db.php');
	session_start();
    // Ja forma iesniegta, tad pievienojam datus datubāzē
        if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); // noņemam iespējamos backslash
		$username = mysqli_real_escape_string($con,$username); 
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Pārbaude vai lietotājs ir reģistrēts datu bāzē
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
        $result = mysqli_query($con,$query);
        $row = mysqli_fetch_row($result);
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			$_SESSION['role'] = $row[4];
			$_SESSION['adminwork'] = 0;
			header("Location: index.php"); // Atgriežamies uz index.php
            }else{
				echo "<div class='form'><h3>Parole ir nepareiza.</h3><br/><a href='index.php'>Ielogoties no jauna</a></div>";
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


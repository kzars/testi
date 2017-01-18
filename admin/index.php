<?php 
session_start();
?>
<?php
$_SESSION['adminwork'] = $_POST['pp'];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>WOCH Admin panel</title>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css" />
<link rel="stylesheet" href="../css/stylesheet.css" />
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-4 pull-left">
				Admin panel
			</div>
			<div class="col-sm-4 center">
			</div>
			<div class="col-sm-4 pull-right">
				<?php 
					if ($_SESSION['username']==NULL){
					include 'login.php';}
				?>
			<a href="logout.php">Logout</a>
			</div>
		</div>
		<div class="row row-spaced "></div>
		<div class="row row-spaced row-gray"></div>
		<?php 
		if(!isset($_SESSION["username"]))
				{
					echo 'not logged in';
				} else 
					{
						if ($_SESSION["role"]=="admin") 
							{ ?>
								logged in with 
								<?php echo $_SESSION["username"]; 
								include 'admin.php';

							} else 
								{ ?>
			not administrator user, log in with other account
							<? }
					}?>
	</div>
</body>
</html>
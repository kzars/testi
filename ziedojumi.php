<?php 
require('../db.php');
session_start();
require 'Web/init.php';
?>
<!DOCTYPE html>
<html lang="en">


<!-- Galva--> 
  <head>
    <meta charset="utf-8">
    <title>WOCH Shop</title>
	

    <link id="callCss" rel="stylesheet" href="themes/WOCHShop/bootstrap.min.css" media="screen"/>

  </head>
<!-- Galvas beigas-->
  


<body>
<div id="header">
<div class="container">
<div>
	<div class="span6"><?php echo $lang['greetings'];?><strong> <?php echo $_SESSION['username']; ?> </strong></div> 
</div>


<!-- Navigācija-->
<div id="logoArea" class="navbar">

  <div>
    <a class="brand" href="index.php"><img src="/ttdarbs/images/WOCH3.jpg"></a>
		
		 
    <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="ziedojumi.php">Ziedojumi</a></li>
	 <li class=""><a href="grozs.php">Grozs</a></li>
	 <li class=""><a href="?lang=english">English</a></li>
	 <li class=""><a href="?lang=latvian">Latvian</a></li>
	 <li class=""><a href="?lang=spain">Spain</a></li>
	 <li class=""> <a href="/ttdarbs/logout.php">logout</a></li>
	
	 <li class="">
	 <a href="/ttdarbs/index.php" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
	 
	
	</div>
	</li>
    </ul>
  </div>
</div>
</div>
</div>

<div>

<?php
	  $query = "SELECT * FROM `charity`";
	  $result = mysqli_query($con,$query); 
?>
 <?php
	  $query = "SELECT * FROM `charity`";
	  $result = mysqli_query($con,$query); 
?>

<?php
	  while ($row = mysqli_fetch_row($result)) { ?>
				<div class="col-4">
	  				<h3><?php echo $row[1]; ?></h3>
	  				<img src="../images/noimagefound.jpg">
	  					<?php echo $row[2]; ?>
	  					
	  			</div>
	  		<
<?php } ?>


</div>
	

<!-- Apakša -->
	
	<div class="container">
		<div class="row">
			<div class="span3">
				<h5>Informācija</h5>
				<a href="/ttdarbs/register.php">Reģistrācija</a>   
			 </div>
			 
			<div id="socialMedia" class="span3 pull-right">
				<h5>SOCIĀLIE TĪKLI</h5>
				<a href="#"><img width="60" height="60" src="themes/images/facebook.png" title="facebook" alt="facebook"/></a>
			 </div> 
		 </div>
		<p class="pull-right">&copy; WOCHShop</p>
	</div>
	

	

</body>
</html>
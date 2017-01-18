<div> <!--pogas darbību veikšanai -->
<form method="POST" action="index.php">
<input class="btn btn-info" type="submit" name="pp" value="Apstrādāt lietotājus" />
<input class="btn btn-info" type="submit" name="pp" value="Apstrādāt preces" />
<input class="btn btn-info" type="submit" name="pp" value="Apstrādāt ziedojumus" />
</form>
</div>
<?php 
	if($_SESSION['adminwork']=="Apstrādāt lietotājus") {include "users.php";}
	if($_SESSION['adminwork']=="Apstrādāt preces") {include "products.php";}
	if($_SESSION['adminwork']=="Apstrādāt ziedojumus") {include "charity.php";}
	
?>
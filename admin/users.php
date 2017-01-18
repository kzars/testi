<?php
	require('db.php');
	session_start();
	 $query = "SELECT * FROM `users`";
	 $result = mysqli_query($con,$query); ?>
	 <h1>Lietotāju apstrāde</h1>
	 <table class="table-hover" style="width:100%">
  		<tr>
    		<th>ID</th>
    		<th>username</th>
    		<th>e-mail</th>
    		<th>role</th> 
    		<th>Date added</th>
  		</tr>
<?php
	  while ($row = mysqli_fetch_row($result)) { ?>
	  <tr>
	  		<td>
	  			<?php echo $row[0]; ?>
	  		</td>
	  		<td>
	  			<?php echo $row[1]; ?>
	  		</td>
	  		<td>
	  			<?php echo $row[2]; ?>
	  		</td>
       		<td>
	  			<?php echo $row[4]; ?>
	  		</td>	
	  		<td>
	  			<?php echo $row[5]; ?>
	  		</td>
	  	</tr>
<?php } $_SESSION['adminwork']="0";?>
<br><br>
<a class= "btn btn-info"href="register.php">Pievienot lietotāju</a>
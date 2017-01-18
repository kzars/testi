<?php
	require('db.php');
	session_start();
	 $query = "SELECT * FROM `products`";
	 $result = mysqli_query($con,$query); ?>
	 <h1>Produktu apstrāde</h1>
	 <table class="table-hover" style="width:100%">
  		<tr>
    		<th>ID</th>
    		<th>name</th>
    		<th>producer</th>
    		<th>description</th> 
    		<th>price</th>
    		<th>quantity</th>
    		<th>imagepath</th>
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
	  			<?php echo $row[3]; ?>
	  		</td>
       		<td>
	  			<?php echo $row[4]; ?>
	  		</td>	
	  		<td>
	  			<?php echo $row[5]; ?>
	  		</td>
	  		<td>
	  			<?php echo $row[6]; ?>
	  		</td>
	  	</tr>
<?php } $_SESSION['adminwork']="0";?>
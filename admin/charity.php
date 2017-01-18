<?php
	require('db.php');
	session_start();
	 $query = "SELECT * FROM `charity`";
	 $result = mysqli_query($con,$query); ?>
	 <h1>Ziedojumu apstrāde</h1>
	 <table class="table-hover" style="width:100%">
  		<tr>
    		<th>ID</th>
    		<th>name</th>
    		<th>description</th>
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
	  	</tr>
<?php } $_SESSION['adminwork']="0";?>

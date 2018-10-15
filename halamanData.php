<?php
require_once("database.php");
?>
<!DOCTYPE html>
<html>
<form>
		<tr> </a>
			<td><a href="input.html"><input type="submit" name="input" value="input"></a></td>
		</tr>
		<tr>
			<td><input type="submit" name="search" value="search"></td>
		</tr>
<table border="1">
<head>
		<th>Nama</th>
		<th>NIM</th>
		<th>Action</th>
</head>
<body>
	
	<?php
		$sql ="SELECT * FROM form";
		$result =mysqli_query($conn,$sql);

		if (mysqli_num_rows($result) > 0) {
			//output data of each row
			while ($row=mysqli_fetch_assoc($result)) {
				$nim =$row['NIM'];
				echo "<tr>";
				echo "<td>".$row['Nama']."</td>";
				echo "<td>".$row['NIM']."</td>";
				echo "<td>"."<a href='del.php?nim=$nim'>Delete</a></td>";
				echo "</tr>";				
			}
		}else{
			echo "0 results";
		}
		mysqli_close($conn);
		?>


	</form>
</body>
</table>
</html>

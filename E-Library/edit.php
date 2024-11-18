<?php
// Include the database connection file
require_once("dbcon.php");


// Fetch data in descending order (lastest entry first)
$result = mysqli_query($conn, "SELECT * FROM book ");
?>

<html>
<head>	
	<title>Homepage</title>
</head>
<?php include "adminHeder.php";?>
<body>

	<table width='80%' border=0>
		<tr bgcolor='#DDDDDD'>
      <td><strong>Title</strong></td>
			<td><strong>Image</strong></td>
			<td><strong>Author</strong></td>
			<td><strong>Publisher</strong></td>
			<td><strong>Description</strong></td>
      <td><strong>File</strong></td>
		</tr>
		<?php
		// Fetch the next row of a result set as an associative array
		while ($res = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$res['title']."</td>";
			echo "<td>".$res['cover_image']."</td>";
			echo "<td>".$res['author']."</td>";
      echo "<td>".$res['publisher']."</td>";
      echo "<td>".$res['description']."</td>";	
      echo "<td>".$res['book_file']."</td>";		
			echo "<td><a href=\"adminup.php?id=$res[id]\">Edit</a> | 
			<a href=\"admindel.php?id=$res[id]\">Delete</a></td>";
		}
		?>
	</table>
</body>
</html>
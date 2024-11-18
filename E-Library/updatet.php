
<?php
// Connect to the database
include 'dbcon.php';

// Get the form data
$id="";
$title="";
$author="";
$publisher="";
$description="";
$cover_image="";
$Book_pdf="";

$id=$_POST["id"];
$title = $_POST['title'];
$author = $_POST['author'];
$publisher=$_POST['publisher'];
$description = $_POST['description'];
$cover_image = $_FILES['cover_image']['name'];
$Book_pdf = $_FILES['book_file']['name'];



// Insert the book into the database
$sql = "UPDATE book SET title='$title', author='$author', publisher='$publisher', description='$description', cover_image='$cover_image', book_file='$Book_pdf' WHERE id='$id'";
if(mysqli_query($conn,$sql))
{
    move_uploaded_file($_FILES['cover_image']['tmp_name'],"$cover_image");
    move_uploaded_file($_FILES['book_file']['tmp_name'],"$Book_pdf");
    echo "New recode update sucessfuly";
}
else{
    echo "Error:" .$sql . "<br>" .mysqli_error($conn);
}
mysqli_close($conn);

?>
<?php
// Include the database connection file
require_once("dbcon.php");

if (isset($_POST['update'])) {
	// Escape special characters in a string for use in an SQL statement
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$title = mysqli_real_escape_string($mysqli, $_POST['title']);
	$author = mysqli_real_escape_string($mysqli, $_POST['author']);
	$publisher = mysqli_real_escape_string($mysqli, $_POST['publisher']);	
	$description = mysqli_real_escape_string($mysqli, $_POST['description']);
    $cover_image = mysqli_real_escape_string($mysqli, $_POST['cover_image']);
    $book_file = mysqli_real_escape_string($mysqli, $_POST['book_file']);
	// Check for empty fields
	if (empty($name) || empty($age) || empty($email)) {
		if (empty($title)) {
			echo "<font color='red'>title field is empty.</font><br/>";
		}
		
		if (empty($author)) {
			echo "<font color='red'>Author field is empty.</font><br/>";
		}
		
		if (empty($publisher)) {
			echo "<font color='red'>Publisher field is empty.</font><br/>";
		}
	} else {
		// Update the database table
		$result = mysqli_query($mysqli, "UPDATE book SET `title` = '$title', `author` = '$author', `publisher` = '$publisher',
         'description' = '$description', 'cover_image' = '$cover_image', 'book_file' = '$book_file'  WHERE `id` = $id");
		
		// Display success message
		echo "<p><font color='green'>Data updated successfully!</p>";
		echo "<a href='index.php'>View Result</a>";
	}
}
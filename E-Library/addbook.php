
<?php
// Connect to the database
include 'dbcon.php';

// Get the form data
$title="";
$author="";
$publisher="";
$description="";
$cover_image="";
$Book_pdf="";

$title = $_POST['title'];
$author = $_POST['author'];
$publisher=$_POST['publisher'];
$description = $_POST['description'];
$cover_image = $_FILES['cover_image']['name'];
$Book_pdf = $_FILES['book_file']['name'];



// Insert the book into the database
$sql = "INSERT INTO book (title, author,publisher,description, cover_image,book_file) VALUES ('$title','$author','$publisher','$description','$cover_image','$Book_pdf')";
if(mysqli_query($conn,$sql))
{
    move_uploaded_file($_FILES['cover_image']['tmp_name'],"$cover_image");
    move_uploaded_file($_FILES['book_file']['tmp_name'],"$Book_pdf");
    echo "New recode created sucessfuly";
}
else{
    echo "Error:" .$sql . "<br>" .mysqli_error($conn);
}
mysqli_close($conn);
// $stmt = $con->prepare($sql);
// $stmt->bindParam(':title', $title);
// $stmt->bindParam(':author', $author);
// $stmt->bindParam(':publisher', $publisher);
// $stmt->bindParam(':description', $description);
// $stmt->bindParam(':cover_image', $cover_image);
// $stmt->execute();

// Redirect back to the admin panel
// header('Location: admin.php');
// exit();
?>

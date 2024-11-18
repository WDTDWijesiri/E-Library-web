<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panal</title>
    <link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
<?php include "adminHeder.php";

$id = $_GET['id'];
?>
<form method="POST" action="updatet.php" enctype="multipart/form-data">
<label for="book-title">ID:</label>
  <input type="text" id="id" name="id" value=<?php echo $id; ?> required><br><br>
  <label for="book-title">Book Title:</label>
  <input type="text" id="book-title" name="title" required><br><br>
  <label for="author">Author:</label>
  <input type="text" id="author" name="author" required><br><br>
  <label for="publisher">Publisher:</label>
  <input type="text" id="publisher" name="publisher" required><br><br>
  <label for="description">Description:</label><br>
  <textarea id="description" name="description" rows="4" cols="50" required></textarea><br><br>
  <label for="cover-image">Cover Image:</label>
  <input type="file" id="cover_image" name="cover_image"><br><br> 
  <label for="cover-image">Book PDF:</label>
  <input type="file" id="book_file" name="book_file"><br><br>
  <input type="submit" value="Update">
</form>

</body>
</html>

 



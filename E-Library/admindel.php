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
$id = $_GET['id'];?>
<form method="POST" action="delet.php" enctype="multipart/form-data">
<label for="book-title">ID:</label>
  <input type="text" id="id" name="id" value=<?php echo $id; ?> required><br><br>
  <input type="submit" value="Delete">
</form>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Connect to the database
include "dbcon.php";
$db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// Get the list of books from the database
$sql="SELECT * FROM book";
$stmt = $db->query($sql);
$books = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h1>Books</h1>

<table>
  <thead>
    <tr>
      <th>Title</th>
      <th>Author</th>
      <th>Created At</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($books as $book): ?>
      <tr>
        <td><?php echo $book['title']; ?></td>
        <td><?php echo $book['author']; ?></td>
        <td><?php echo $book['author']; ?></td>
        <td><a href="edit_book.php?id=<?php echo $book['id']; ?>">Edit</a></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

</body>
</html>

<?php
// Connect to the database
include 'dbcon.php';

// Get the form data
$id="";

$id=$_POST["id"];



// Insert the book into the database
$sql =  "DELETE FROM book WHERE id='$id'";
if(mysqli_query($conn,$sql))
{
    
    echo "Delet sucessfuly";
}
else{
    echo "Error:" .$sql . "<br>" .mysqli_error($conn);
}
mysqli_close($conn);

?>

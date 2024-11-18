<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="elibrary";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";


//cart button click
if(isset($_GET["id"])){
    $product_id = $_GET["id"];
    $sql = "SELECT * FROM cart WHERE product_id = $product_id";
    $result = $conn->query($sql);
    $total_cart = "SELECT * FROM cart";
    $total_cart_result = $conn->query($total_cart);
    $cart_num = mysqli_num_rows($total_cart_result);

    if(mysqli_num_rows($result) > 0){
        $in_cart = "already In cart";

        echo json_encode(["num_cart"=>$cart_num,"in_cart"=>$in_cart]);
    }else{
        $insert = "INSERT INTO cart(product_id) VALUES($product_id)";
        if($conn->query($insert) === true){
            $in_cart = "added into cart";
            echo json_encode(["num_cart"=>$cart_num,"in_cart"=>$in_cart]);
        }else{
            echo "<script>alert(It doesn't insert)</script>";
        }
    }
}
//remove cart
if(isset($_GET["cart_id"])){
    $product_id = $_GET["cart_id"];
    $sql = "DELETE FROM cart WHERE product_id=".$product_id;

    if($conn->query($sql) === TRUE){
        echo "Removed from cart";
    }
}
//download
if (isset($_POST['view'])) {
    $book_id = mysqli_real_escape_string($conn, $_POST['view']);
    $sql = "SELECT book_file FROM book WHERE id = '$book_id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $file = $row['book_file'];

        header('Content-type: application/pdf');
        header('Content-Disposition: inline; filename="'. $file .'"');
        header('Content-Transfer-Encoding: binary');
        header('Accept-Ranges: bytes');
        @readfile($file);
        exit();
    } else {
        echo "No file found.";
        
    }
}
//end cart
?>
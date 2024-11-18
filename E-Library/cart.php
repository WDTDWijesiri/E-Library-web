<?php

require_once 'dbcon.php';

$sql_cart = "SELECT * FROM cart";
$all_cart = $conn->query($sql_cart);

?>
<?php
// if(isset($_POST['view'])){
//     header("content-type: application/pdf");
//     readfile("NumberSystems(LMS).pdf");
// }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="font/css/all.min.css">
    <link rel="stylesheet" href="css/cart1.css">
    <title>In cart products</title>
</head>
<body>
    <?php
       include_once 'head.php';

    ?>

    <main>
        <h1><?php echo mysqli_num_rows($all_cart); ?> Items</h1>
        <hr>
        <?php
          while($row_cart = mysqli_fetch_assoc($all_cart)){
              $sql = "SELECT * FROM book WHERE id=".$row_cart["product_id"];
              $all_product = $conn->query($sql);
              while($row = mysqli_fetch_assoc($all_product)){
        ?>
        <div class="card">
            <div class="images">
                <img src="<?php echo $row["cover_image"]; ?>" alt="">
            </div>

            <div class="caption">

                <p class="product_name"><?php echo $row["title"]; ?></p>
                <p class="author"><b>$<?php echo $row["author"]; ?></b></p>
                <p class="description"><b><del>$<?php echo $row["description"]; ?></del></b></p>
                <form action="" method="post"> 
                    <button class="download" name="view">Downlod</button>
                </form>

                <button class="remove" data-id="<?php echo $row["id"]; ?>">Remove from Cart</button>
            </div>
        </div>
        <?php

          }
        }
       ?>
    </main>

    <script>
        var remove = document.getElementsByClassName("remove");
        for(var i = 0; i<remove.length; i++){
            remove[i].addEventListener("click",function(event){
                var target = event.target;
                var cart_id = target.getAttribute("data-id");
                var xml = new XMLHttpRequest();
                xml.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                       target.innerHTML = this.responseText;
                       target.style.opacity = .3;
                    }
                }

                xml.open("GET","dbcon.php?cart_id="+cart_id,true);
                xml.send();
                location.reload();
            })
        }
        var download = document.getElementsByClassName("download");
        for(var i = 0; i<download.length; i++){
            download[i].addEventListener("click",function(event){
                var target = event.target;
                var cart_id = target.getAttribute("data-id");
                var xml = new XMLHttpRequest();
                xml.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                       target.innerHTML = this.responseText;
                       target.style.opacity = .3;
                    }
                }

                xml.open("GET","dbcon.php?id="+id,true);
                xml.send();
                location.reload();
            })
        }
    </script>
</body>
</html>
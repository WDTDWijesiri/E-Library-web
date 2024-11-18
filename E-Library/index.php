<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/in1.css">
</head>
<body>
<?php
// Connect to the database
include "dbcon.php";
$db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// Get the list of books from the database
$sql="SELECT * FROM book";
$book=$conn->query($sql);
?>
   <main>
       <?php
          while($row = mysqli_fetch_assoc($book)){
       ?>
       <div class="card">
           <div class="image">
               <img src="<?php echo $row["cover_image"]; ?>" alt="">
           </div>
           <div class="caption">
               <p class="product_name"><?php echo $row["title"];  ?></p>
               <p class="author"><b>$<?php echo $row["author"]; ?></b></p>
               <p class="description"><b><del>$<?php echo $row["description"]; ?></del></b></p>
           </div>
           <button class="add" data-id="<?php echo $row["id"];  ?>">Add to cart</button>
       </div>
       <?php

          }
     ?>
   </main>
   <script>
       var product_id = document.getElementsByClassName("add");
       for(var i = 0; i<product_id.length; i++){
           product_id[i].addEventListener("click",function(event){
               var target = event.target;
               var id = target.getAttribute("data-id");
               var xml = new XMLHttpRequest();
               xml.onreadystatechange = function(){
                   if(this.readyState == 4 && this.status == 200){
                       var data = JSON.parse(this.responseText);
                       target.innerHTML = data.in_cart;
                       document.getElementById("badge").innerHTML = data.num_cart + 1;
                   }
               }

               xml.open("GET","dbcon.php?id="+id,true);
               xml.send();
            
           })
       }

   </script>

</body>
</html>
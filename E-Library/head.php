<?php
session_start();
if(isset($_SESSION['username']))
{
   $userName = $_SESSION['username'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <title>Document</title>
</head>
<body>
    <div class="containerr">
        <div class="navbar">
            <h1><i>E-</i><span><b>LIBRARY</b></span></h1>
            <nav>
                <ul id="menulist">
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="contact.php">CONTACT US</a></li> 
                    <li><a href="cart.php">CART</a></li> 
                    <li><a href="log.php" id="log">Log in</a></li>
                </ul>
            </nav>
            <img src="images/Asset 1.png" class="menu-icon"
            onclick="togglemenu()">
        </div>
    </div>     
    <script>
        var menulist = document.getElementById("menulist");

        menulist.style.maxHeight ="0px";
        function togglemenu(){
                if(menulist.style.maxHeight == "0px")

                {
                    menulist.style.maxHeight ="130px";
                }
                else
                {
                    menulist.style.maxHeight ="0px";
                }
            }
    </script>
</body>
</html>
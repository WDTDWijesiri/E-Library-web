<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link href="css/log1.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
<div class="wrapper">
    <div class="formBox">
            <div class="buttonArea">
                <div id="btn"></div>
            <button type="button" class="toggleBtn" onclick="login()">Log In </button>
            <button type="button" class="toggleBtn" onclick="register()">Register </button>              
            </div>
            <div class="social">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-snapchat"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
        </div>
            <form id="login" action="./database/login_db.php"  method="POST"  class="inputGroup">
            <select id="usertype" name="usertype"  class="inputField">
                    <option value="null"> User Type </option>
                    <option value="user"> ADMIN </option>
                    <option value="user"> USER </option>
                </Select>
                <input type="text" class="inputField" name="username" placeholder="User Name" required>
                <input type="password" name="password" class="inputField" placeholder="Password" required>
                <button type="submit" name="logSubmit" class="submitBtn"> Log In</button>
            </form>
            <form id="register" action="./database/register_db.php"  method="POST" class="inputGroup">
                <input type="text" id="username" name="username" class="inputField" placeholder="User Name" required>
                <input type="email" id="email" name="email" class="inputField" placeholder="E mail" required>
                <!-- <select id="usertype" name="usertype"  class="inputField">
                    <option value="null"> User Type </option>
                    <option value="user"> USER </option>
                </Select> -->
                <input type="password" id="password" name="password" class="inputField" placeholder="Password" required>
                <button type="submit" id="regSubmit" name="regSubmit" class="submitBtn" > Register</button>
            </form>
        </div>
    </div>
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register(){
            x.style.display = "none";
            y.style.display = "block";
            z.style.left = "55%";
        }
        function login(){
            x.style.display = "block";
            y.style.display = "none";
            z.style.left = "0%";
        }</script>
</body>
</html>
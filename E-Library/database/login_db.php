<?php
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $username =$_POST['username'];
    $password = $_POST['password'];
    

        $db_host = "localhost";
        $db_username = "root";
        $db_password = "";
        $db_name = "elibrary";

        try{
            //create mysql connection
            $pdo = new PDO("mysql:host=$db_host;port=3306;dbname=$db_name", $db_username, $db_password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //Add SQL query

            if(empty($username) || empty($password)) {
                $message = 'All field are required';
                } else {
                $query = $pdo->prepare("SELECT username, password FROM register WHERE 
                username=? AND password=? ");
                $query->execute(array($username,$password));
                $row = $query->fetch(PDO::FETCH_BOTH);

                if($query->rowCount() > 0) {
                    session_start();    
                $_SESSION['username'] = $_POST['username'];
                header('location:../adminhome.php');
                } else {
                $message = "Username/Password is wrong";
                }}}
            catch(PDOExcoption $e) {
            echo"Connection failed:" .$e->getMessage();
        }
}
<?php
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $username =$_POST['username'];
    $email = $_POST['email'];
    // $usertype =$_POST['usertype'];
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
            $statement =$pdo->prepare("INSERT INTO register (username,email,password)
            VALUE(:username,:email,:password)");
            $statement->bindValue(':username',$username);
            $statement->bindValue(':email',$email);
            $statement->bindValue(':password',$password);
           
            $statement->execute();
            header('Location: ../log.php');
        }
        catch(PDOExcoption $e) {
            echo"Connection failed:" .$e->getMessage();
        }
}
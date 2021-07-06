<html>
    <head>
        <title>Login to your account</title>
        <link rel="stylesheet" type="text/css" href="style.css">        
    </head>
    <body>        
        <form class="box" action="home.php" method="POST">
            <img src="logo.jpg" style="width:160px;height:54px;">
            <h1>Login</h1>
            
            <input type="text" name="" placeholder="Enter username" id="username">
            <input type="password" name="" placeholder="Enter password" id="password">
            <input type="submit" value="Login" name="submit">
        </form>
    </body>
</html>

<?php
require('connect.php');
$username = @$_POST['username'];
$password = @$_POST['password'];

if(isset($_POST['submit'])){
    if($username && $password){
        $check = mysqli_query($connect, "SELECT * FROM users WHERE username=`".$username."`");
        $rows = mysqli_num_rows($check);

        if(mysqli_num_rows($check) != 0){
            while($row = mysqli_fetch_assoc($check)){
                $db_username = $row['username'];
                $db_password = $row['password'];
            }

            if($username == $db_username && sha1($password) == $db_password){
                @$_SESSION["username"] = $username;
                header("Location: index.php");
            }else{
                echo "Wrong password.";
            }
        }else{
            die("Couldn't find the account");
        }
    }else{
        echo "Please fill in all the fields.";
    }
}
?>
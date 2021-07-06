<?php
    session_start();
    require('connect.php');
?>

<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="navbar">
            <nav class="navigation">
                <ul class="nav-list">                   
                    <li class="nav-item">
                        <a href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="profile.html">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a href="login.php">Log Out</a>
                    </li>
                </ul>
            </nav>
            <div class="top-bar">
                <img src="logo.jpg" style="width:160px;height:54px;">
            </div>
        </div>
    </header>

    <div class="main">
    <form action="post.php" method="POST">
        <center>
            <br>
            Topic name: <br><input type="text" name="topic_name" style="width: 400px;"><br>
            <br>
            Content: <br>
            <textarea style="resize: none; width: 400px; height: 300px;" name="con"></textarea>
            <br>
            <input type="submit" name="submit" value="Post" style="width: 400px;">
        </center> 
    </form>          
    </div>
</body>

<?php
    $t_name = @$_POST['topic_name'];
    $content = @$_POST['con'];
    $date = date("y-m-d");
    $topicsquery = 
    "INSERT INTO `topics`(`topics_id`, `topics_name`, `topics_content`, `topics_creator`, `date`) VALUES (``, `".$t_name."`, `".$content."`, `".$_SESSION["username"]."`, `".$date."`)";

    if(isset($_POST['submit'])){
    //  echo $_POST['topic_name']."<br/>".$_POST['con'];
        if($t_name && $content){
            if(strlen($t_name) >= 5 && strlen($t_name) <= 50){
                if(mysqli_query($connect, $topicsquery)){
                    echo "Success";
                }else{
                    echo mysqli_error($connect);
                }
            }else{
                echo "Topic name must be between 10 and 50 characters long";
            }
        }else{
            echo "Please fill in all the fields";
        }
    }
?>
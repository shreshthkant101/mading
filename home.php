<?php
    session_start();
    require('connect.php');
?>

<head>
    <link rel="stylesheet" href="style.css">
    <title>Mading | Information Forum</title>
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
        <div class="table">
            <a href="post.php">
                <button>Create a New Post</button>                             
            </a>
        </div>
        <div class="search-box">
            <div>
                <select name="" id="">
                    <option value="all">All</option>
                    <option value="akademik">Akademik</option>
                    <option value="non-akademik">Non-Akademik</option>
                </select>
                <ol></ol>
            </div>
        </div>
        <?php echo '<table border="1px;">'; ?>
        <tr>
            <td>
                <span>ID</span>
            </td>
            <td width="400px;" style="text-align: center;">
                Name
            </td>
            <td width="80px;" style="text-align: center;">
                Views
            </td>
            <td width="80px;" style="text-align: center;">
                Creator
            </td>
            <td width="80px;" style="text-align: center;">
                Date
            </td>
        </tr>
    </div>
</body>

<?php    
    $check = mysqli_query($connect, "SELECT * FROM topics");

    if(mysqli_num_rows($check) != 0){
        echo "Topics found";
    }else{
        echo "No topics found";
        echo mysqli_error($connect);
    }
    echo "</table>";
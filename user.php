<?php 
require_once "config.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link rel="stylesheet" href="./user.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="user-container">
        <form action="" method="POST">
            <input type="text" name="user" placeholder="search...">
            <button type="submit" name="search"><i class="fa fa-search search-icon" aria-hidden="true"></i></button>
            <?php
                if(isset($_POST['search']))
                {
                    $name = $_POST['user'];
                    $query = "SELECT * FROM users WHERE username='$name'";
                    $result2 = mysqli_query($connection, $query);
                        while($output = mysqli_fetch_array($result2))
                        {
                        ?>
                        <h1 class="output"><a href="detail.php?id= <?php echo $output['id'] ?>"><?php echo $output['firstname'] . " " . $output['lastname'] ?></a></h1>
                <?php
                }
                ?>
            <?php
            }
            ?>
        </form>

        <?php
            $sqlquery = "SELECT * FROM users;";
            $result = mysqli_query($connection, $sqlquery);
            // if($result){
            //     echo "<script>";
            //     echo "window.alert('successful')";
            //     echo "</script>";
            // }else{
            //     echo "failed"; 
            // }
        ?>
            <div class="box">
                <?php
                    while($row = mysqli_fetch_array($result))
                    {
                    ?>
                        <h3 class="user-name"><a href="detail.php?id= <?php echo $row['id'] ?>"><i class="fa fa-user-circle con" aria-hidden="true"></i><?php echo $row['firstname'] . " " . $row['lastname'] ?></a><span class='hover'>click to get details</span></h3>
                    <?php
                    }
                    ?>
            </div>
    </div>
            <div class="moto">
                <h1>NO <span class='color'>THIRD</span> PARTY INVOLVED,YOU CAN DIRECTLY CONTACT EACH OTHER</h1>
                <h3>DO HELP, GET HELP</h3>
            </div>
            <img class="tracking" src="./images/tracking.png" alt="">
            <i style="cursor:pointer;" class="fa fa-bars bars" aria-hidden="true" style="font-size:25px;"></i>
            <div class="logout">
            <ul>
                <li class="lines"><a href="./WELCOME.php">HOME</a></li>
                <li class="lines"><a href="./location.php">EMERGENCY</a></li>
                <li class="lines"><a href="./logout.php">Log Out</a></li>
            </ul>
        </div>
        <!-- important note -->
    <div class="note">
            <i class="fa fa-times times" aria-hidden="true"></i>
            <p>note : </p>
            <p>1. <span>You can search the user by addressing the name of Username</span></p>
            <p>2. <span>You can get detail of user by clicking on the user icon</span></p>
            <p>Ex :  <span>a.Phone no. b.email id c.Address</span></p>
    </div>

        <script src="./user.js"></script>
</body>
</html>
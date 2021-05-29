<?php
include('configs.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital lists</title>
    <link rel="stylesheet" href="./hospital.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="hospital-container">

        <i class="fa fa-bars bar" aria-hidden="true" style="font-size:25px;"></i>
        <div class="logout">
            <ul>
                <li class="lines"><a href="./welcome.php">Home</a></li>
                <li class="lines"><a href="./user.php">user</a></li>
                <li class="lines"><a href="./location.php">Emergeny</a></li>
                <li class="lines"><a href="./logout.php">Log Out</a></li>
            </ul>
        </div>

        <h1 class="help">GET INSTANT HELP!!</h1>
        <h3 class="always">Always be here for you <i class="fa fa-heartbeat" aria-hidden="true"></i></h3>
        <p class="nagpur">Nagpur - orange city</p>
        <div class="glass">
            <div class="search">
                <form action="" method="post">
                    <input type="text" name="name" placeholder="search...">
                    <input type="submit" name="submit" value="search"> 
                </form>

            <?php
                if(isset($_POST['submit']))
                {
                    $name = $_POST['name'];
                    $sql = "SELECT * FROM hospital WHERE name='$name'";
                    $results = mysqli_query($conn,$sql);
                    while($out = mysqli_fetch_array($results))
                    {
                    ?>
                        <h1 class="hospital-list"><?php echo $out['name'] ?></h1>
                    <?php
                    }
                    ?>
                <?php
                }
                ?>

            </div>
            <div class="list">
            <?php
                $sqlquery = 'SELECT * FROM hospital';
                $result = mysqli_query($conn, $sqlquery);
                while($row = mysqli_fetch_array($result))
                {
                ?>
                <div class="flex">
                    <h3 class="user-name"><a href="hospitaldetails.php?id= <?php echo $row['id'] ?>"><?php echo $row['name']?></a></h3>
                    <i class="fa fa-paper-plane" aria-hidden="true"><span>Current Location</span></i>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
        <img src="./images/Doctor-rafiki.png" alt="">
    </div>
    <!-- important note -->
    <div class="note">
            <i class="fa fa-times times" aria-hidden="true"></i>
            <p>note : </p>
            <p>1. <span>You can search the hospital by addressing the name of hospital</span></p>
            <p>2. <span>You can get detail of hospital by clicking the hospital name</span></p>
            <p>Ex :  <span>a.Phone no. b.Address</span></p>
            <p>3. <span>You can send the current location of your's for getting aid help</span></p>
        </div>

    <script src="./hospital.js"></script>
</body>
</html>
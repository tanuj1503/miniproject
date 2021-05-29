<?php
include('configs.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospitals detail</title>
    <link rel="stylesheet" href="./hospitaldetail.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <?php
            $id = $_GET['id'];
            $sqlquery1 = "SELECT * FROM hospital where id=$id";
            $result1 = mysqli_query($conn, $sqlquery1);
            $row1 = mysqli_fetch_array($result1)
            ?>
                <h3 class="hospital">Hospital - <?php echo $row1['name'] ?></h3>
                <div class="box1">
                    <h3>Phone : <?php echo $row1['phone'] ?> </h3>
                    <h3>Address : <?php echo $row1['address'] ?> </h3>
                    <div class="flex">
                        <p>current location</p>
                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                    </div>
                    <i style='font-size: 20px' class="fa fa-times times" aria-hidden="true"></i>
                </div>
                <img src="./images/Doctor-rafiki.png" alt="">
                <div class="intro">
                    <h1 class="help">GET INSTANT <span>HELP!!</span></h1>
                    <h3 class="always">Always be here for you <i class="fa fa-heartbeat" aria-hidden="true"></i></h3>
                    <p class="nagpur">Nagpur - orange city</p>
                </div>
    </div>
    <script>
        const barbtn = document.querySelector(".times");

        barbtn.addEventListener('click', () => {
        window.location = "hospital.php";
        });
    </script>
</body>
</html>
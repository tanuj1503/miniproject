<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <link rel="stylesheet" href="detail.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body> 
    <div class="box2">
        <div class="detail">
        <?php
        include 'config.php';
        $sid=$_GET['id'];
        $sql = "SELECT * FROM  users where id=$sid";
        $result=mysqli_query($connection,$sql);
        if(!$result)
        {
            echo "Error : ".$sql."<br>".mysqli_error($conn);
        }
        $row=mysqli_fetch_assoc($result);
        ?>
             <h3>Detail: <?php echo $row['firstname']." ".$row['lastname'] ?></h3>
        </div>
        <div class="box3">
        <table class="extra-details">
        <?php
        include 'config.php';
        $sid=$_GET['id'];
        $sql = "SELECT * FROM  users where id=$sid";
        $result=mysqli_query($connection,$sql);
        if(!$result)
        {
            echo "Error : ".$sql."<br>".mysqli_error($conn);
        }
        $row1=mysqli_fetch_assoc($result);
        ?>
            <tr>
                <th>Phone : +91</th>
                <td><?php echo " ". " " .$row1['phone'] ?></td>
            </tr>
            <tr>
                <th>Email id : </th>
                <td><?php echo " ". " " .$row1['email'] ?></td>
            </tr>
            <tr>
                <th>Address : </th>
                <td><?php echo " ". " " .$row1['address'] ?></td>
            </tr>
        </table>
        </div>
        <i style='font-size: 20px' class="fa fa-times times" aria-hidden="true"></i>
    </div>
    <script>
        const barbtn = document.querySelector(".times");

        barbtn.addEventListener('click', () => {
        window.location = "user.php";
        });
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Location</title>
    <link rel='stylesheet' href="location.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <form action="" method="post" autocomplete="off">
    <div class="search-box">
        <input id="pincode" type="text" name="pincode" placeholder="Pin code..." autocomplete="new-password">
        <input class='submit' type="button" name="submit" value='search' onclick="getdetail()">
    </div>
        <a href="./hospital.php"><input id="city" type="text" placeholder="city" disabled></a>
        <input id="state" type="text" placeholder="state" disabled>
    </form>
    <img class="landscape" src="./images/landscape.png">
</body>
<script>
        function getdetail(){
            var pincode = jQuery('#pincode').val();
            if(pincode == ""){
                jQuery('#city').val('');
                jQuery('#state').val('');
            }else{
                jQuery.ajax({
                    url: 'getdetail.php',
                    type: 'post',
                    data:'pincode=' + pincode,
                    success:function(data){
                        if(data == 'no'){
                          alert('wrong pincode');
                            jQuery('#city').val('');
                            jQuery('#state').val('');
                        }else{
                            //convert json to array
                            var getData = jQuery.parseJSON(data);
                            jQuery('#city').val(getData.city);
                            jQuery('#state').val(getData.state);
                        }
                    }
                });
            }
        }
</script>
</html>












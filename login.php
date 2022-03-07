<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="shortcut icon" href="img/icon.png" />
    <title>Admin Login</title>
    <style>
        body,html {
    background-image: url('https://i.imgur.com/xhiRfL6.jpg');
    height: 100%;
}

#profile-img {
    height:180px;
}
.h-80 {
    height: 80% !important;
}
    </style>
       <?php
        include 'links.php'
    ?>
</head>
<body>
   
        <div class="container h-80">
         
        <div class="row align-items-center h-100">
            <div class="col-3 mx-auto">
                <div class="text-center">
                    <img id="profile-img" class="rounded-circle profile-img-card" src="https://i.imgur.com/6b6psnA.png" />
                    <p id="profile-name" class="profile-name-card"></p>
                        <form action="logincheck.php" method="POST">
                            <div class="form-group">
                                <label style="color:#FFFFFF;">Username</label>
                                <input type="text" name="username"value="" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label style="color:#FFFFFF;">Password</label>
                                <input type="password" name="password"value="" class="form-control" autocomplete="off">
                            </div>
                            <input type="submit" value="Login" class="btn btn-success" name="submit">
                        </form>
                    
                    </div>

            </div>
        
        </div>
   
</body>
</html>
<?php
session_start();
include("php/config.php");
if(!isset($_SESSION['valid'])){
    header("Location: signin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registered</title>
    <link rel="stylesheet" href="registere.css">
    <style>
        .box{
            border-radius: 10px;
  box-shadow: 0 0 50px 0 black,
  0 32px 64px -48px black;
}
    </style>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="home.php">
            <img src="image/mekedonia-logo.jfif" alt=""></a></p>
        </div>
        <div class="right-links">
<?php
$id= $_SESSION['id'];
$query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");
while($result = mysqli_fetch_assoc($query)){
    $res_Uname=$result['Username'];
    $res_Email=$result['Email'];
    $res_Name=$result['Name'];
    $res_id=$result['Id'];
}
echo "<a href= 'edit.php?Id=$res_id'>change profile</a>";
?>

            <a href="php/logout.php"><button class="btn">Log Out</button></a>
        </div>
    </div>
    <main>
        <div class="main-box top">
            <div class="top">
                <div class="box">
                    <p>Hello <b><?php echo $res_Uname?></b>, Welcome</p>
                </div>
                <div class="box">
                    <p>your email is<b><?php echo $res_Email?></b></p>
                </div>
            </div>
                <div class="box">
                    <p>your name is <b><?php echo $res_Name?></b></p>
                </div>
                <div class="bottom">
                <div class="box">
                    <p>Thank You for Being our club member </p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
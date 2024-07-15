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
    <title>change profile</title>
    <link rel="stylesheet" href="registere.css">
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="home.php">
            <img src="image/mekedonia-logo.jfif" alt=""></a></p>
        </div>
        <div class="right-links">
            <a href="#"> change profile</a>
            <a href="php/logout.php"><button class="btn">Log Out</button></a>
        </div>
    </div>
    <div class="containerss">
        <div class="box form-box">
        <?php
      if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $name = $_POST['name'];
        $id= $_SESSION['id'];
        $edit_query = mysqli_query($con, "UPDATE users SET Username='$', Email='$email', Name ='$name',WHERE Id=$id") or die("error occured");
        if($edit_query){
          
          echo"<div class='message'>
          <p>profile updated</p>
          </div><br>";
          echo "<a href='registered.php'><button class='btn'>GO HOME</button>";
        }
      }else{

      $id=$_SESSION['id'];
      $query = mysqli_query($con, "SELECT*FROM users WHERE Id=$id");
      while($result = mysqli_fetch_assoc($query)){
         $res_Uname = $result['Username'];
         $res_Email= $result['Email'];
         $res_Name= $result['Name'];
      }

        ?>
          <header>Update</header>
          <form action="" method="post">
            <div class="field input">
              <label for="username">Name</label>
              <input type="text" name="username" value="<?php echo $res_Name; ?>"autocomplete="off" required>
            </div>
             <div class="field input">
                <label for="username">Email</label>
                <input type="text" name="email" id="email"value="<?php echo $res_Email; ?>" autocomplete="off" required>
              </div>
              <div class="field input">
                <label for="username">username</label>
                <input type="text" name="username" id="username" value="<?php echo $res_Uname; ?>" autocomplete="off" required>
              </div>
            <div class="field">
              <input type="submit" class="btn" name="submit" value="update" required>
            </div>
          
          </form>
        </div>
        <?php }?>
      </div>
</body>
</html>
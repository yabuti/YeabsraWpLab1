<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mekidonia Voluntary Club</title>
  <link rel="stylesheet" href="registere.css">
  <style>
    .containerss{
  background: linear-gradient(to bottom, #fdfcfc, #9e9c97);
  height: 100vh;
}
  </style>
</head>
<body>

 
<!--partnership section starts-->
<section class="Donate" id="Donate">

  <div class="containerss">
    <h1>Be Family With Us</h1>
    <div class="box form-box">
      <?php
         include("php/config.php");
         if(isset($_POST['submit'])){
             $email =mysqli_real_escape_string($con, $_POST['email']);
             $password =mysqli_real_escape_string($con, $_POST['password']);
       
             $result =mysqli_query($con,"SELECT * FROM users WHERE Email='$email' AND password='$password'") or die("select Error");
             $row =mysqli_fetch_assoc($result);
             if(is_array($row)&& ! empty($row)){
              $_SESSION['valid']=$row['Email'];
              $_SESSION['username']=$row['Username'];
              $_SESSION['name']=$row['Name'];
              $_SESSION['id']=$row['Id'];
             }else{
              echo"<div class='message'>
              <p>Wrong Username or password</p>
              </div><br>";
              echo "<a href='signin.php'><button class='btn'>GO BACK</button>";
             
         }
         if(isset($_SESSION['valid'])){
          header("Location:registered.php");
         }
        }else{

       
      ?>
      <header>Login</header>
      <form action="" method="post">
      <div class="field input">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" autocomplete="off" required>
          </div>
        <div class="field input">
          <label for="password">password</label>
          <input type="password" name="password" id="password" autocomplete="off" required>
        </div>
        <div class="field">
          <input type="submit" class="btn" name="submit" value="login" required>
        </div>
        <div class="links">don't have account? <a href="signup.php">sign up</a>
        </div>
      </form>
    </div>
    <?php  } ?>
  </div>
</section>

<!--partnership section end-->

  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="mukera.js"></script>
</body>
</html>


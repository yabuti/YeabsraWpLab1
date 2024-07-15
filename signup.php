<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mekidonia Voluntary Club</title>
  <link rel="stylesheet" href="registere.css">
  <style>
    .containerss{
      height: 100vh;
  background: linear-gradient(to bottom, #fdfcfc, #9e9c97);
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
        $username =$_POST['username'];
        $email =$_POST['email'];
        $name =$_POST['name'];
        $password =$_POST['password'];

        //verifying the unique email
        $verify_query= mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");
        if(mysqli_num_rows($verify_query)!=0){
            echo"<div class='message'>
            <p>This email is used, try another one please!</p>
            </div><br>";
            echo "<a href='javascript:self.history.back()'><button class='btn'>GO BACK</button>";
        }
        else{
            mysqli_query($con,"INSERT INTO users(username,Email,Name,password)VALUES('$username','$email','$name','$password')")or die("error occured");
            echo"<div class='message'>
            <p>registeration successfully!</p>
            </div><br>";
            echo "<a href='signin.php'><button class='btn'>LOGIN NOW</button>";
        }

    }else{
    ?>
      <header>Sign Up</header>
      <form action="" method="post">
        <div class="field input">
          <label for="name">Name</label>
          <input type="text" name="name" autocomplete="off" required>
        </div>
         <div class="field input">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" autocomplete="off" required>
          </div>
          <div class="field input">
            <label for="username">username</label>
            <input type="text" name="username" id="username" autocomplete="off" required>
          </div>
        <div class="field input">
          <label for="password">password</label>
          <input type="password" name="password" id="password" autocomplete="off" required>
        </div>
        <div class="field">
          <input type="submit" class="btn" name="submit" value="register" required>
        </div>
        <div class="links">
          Already a member? <a href="signin.php">sign in</a>
        </div>
      </form>
    </div>
    <?php } ?>
  </div>
</section>

<!--partnership section end-->

  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="mukera.js"></script>
</body>
</html>

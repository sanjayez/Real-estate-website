<?php
  require('./include/db.php');

  $error="";
  if(isset($_POST['submit'])){
    if(empty($_POST['username'] || empty($_POST['password']))){
        $error="Username or password is invalid";
        
    }
    else{
      $username = $_POST['username'];
      $pass = $_POST['password'];

      $query =  mysqli_query($conn, "SELECT * FROM users WHERE password='$pass' AND username='$username'");

      $rows = mysqli_num_rows($query);
      if($rows == 1 && ($username == 'admin')){
        header("Location: welcomeAdmin.php");
      }
      else if($rows == 1)
      {
        header("Location: buy.php");
      }
      else{
        $error = "Username or password is invalid";
        
      }
      mysqli_close($conn);
    }
  }
  
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>whiteplot homes|Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/login.css" />
    
</head>
<body>
    
    <section>
      <div class="layer"></div>
        <div class="container">
          <div class="login-form">
            <h1>Sign In</h1>
              <form action="" method="post">
                <input type="text" name="username" 
                id="username" placeholder="username/e-mail">
                <input type="password" id="password" name="password" placeholder="password">
                <input type="submit" name="submit" value="Login">
                
              </form>
              <a href="signup.php">CREATE AN ACCOUNT<a><br><br>
              <a id="home" href="index.php">HOME<a>
            </div>
        </div>
      </section>

</body>
</html>


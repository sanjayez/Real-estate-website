<?php
  require('./include/db.php');
 

  $error="";
  if(isset($_POST['submit'])){
    $title = mysqli_real_escape_string($conn,$_POST['title']);
    $body = mysqli_real_escape_string($conn,$_POST['body']);
    $price = mysqli_real_escape_string($conn,$_POST['price']);

    $query = "INSERT INTO posts (title, body, price) VALUES ('$title','$body','$price')";

    if(mysqli_query($conn, $query))
    {
      header('Location:sell.php');
    }
    else{
      echo 'ERROR:'.mysqli_error($conn);
    }
  }
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Whiteplot Homes</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    
</head>
<body>
    
    <header>
      <div class="container">
        <div id="branding">
          <h1> WHITE PLOT HOMES</h1>
        </div>
        <nav>
          <ul>
            
            <li><a href="buy.php">BUY</a></li>
            <li><a href="sell.php">SELL</a></li>
            <li><a href="logout.php">LOGOUT</a></li>
          </ul>
        </nav>
      </div>
    </header>

        <div class="sell">
        <h1>SELL A PROPERTY</h1>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                <input type="text" name="title" 
                id="title" placeholder="Title"><br>
                <input type="text" id="body" name="body" placeholder="Description"><br>
                <input type="text" id="price" name="price" placeholder="Price"><br><br>
                <input type="submit" value="SELL" name="submit" class="sellbutton"><br>
                
            </form>



</body>
</html>
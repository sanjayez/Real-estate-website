<?php
  require('./include/db.php');
  //ceate query  
  $query = 'SELECT * FROM posts';
  //Get result
  $result = mysqli_query($conn, $query);
  //fetch data
  $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

  //free result
  mysqli_free_result($result);

  mysqli_close($conn);
  
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

    <div class="post">
    <h1 id="title">PROPERTIES</h1>
    <?php foreach($posts as $post): ?>
    <div class="well">
      <h2><?php echo $post['title'];?></h3>
      <h3><?php echo $post['body'];?></h3>
      <h3><?php echo $post['price'];?></h3>
      <small>Posted on <?php echo $post['time'];?></small><br>
      <a href="post.php?id=<?php echo $post['id']; ?>" class="buybutton">BUY</a>
    </div>
    <?php endforeach;?>
    </div>
</body>
</html>
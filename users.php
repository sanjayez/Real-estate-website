<?php
  require('./include/db.php');
  //ceate query  
  $query = 'SELECT * FROM users';
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
            
            <li><a href="welcomeAdmin.php">PROPERTIES</a></li>
            <li><a href="users.php">USERS</a></li>
            <li><a href="logout.php">LOGOUT</a></li>
          </ul>
        </nav>
      </div>
    </header>

    
    <div class="post">
    <h1 id="title">PROPERTIES</h1>
    <?php foreach($posts as $post): ?>
    <div class="users">
      
      <h3><?php echo $post['username'];?></h3>
      <a href="deluser.php?id=<?php echo $post['id']; ?>" class="delbutton">REMOVE</a>
    </div>
    <?php endforeach;?>
    </div>
    
</body>
</html>
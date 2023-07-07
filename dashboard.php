 <?php
      session_start();
      if (!isset($_SESSION['login'])) {
          header("Location: ./login.php");
      }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fortfolio</title>

    <!-- Link the CSS file -->
    <link rel="stylesheet" href="sidebar.css">

    <!-- Add the favicon -->
  <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_ibgDIcoDBvsPzS8ayvdlo81tldGQEWwFFG9Tj1qqhg&s" type="image/x-icon">
</head>
<body>
    <div class="sidebar">
        <nav>
            <ul>
                <li><a href="http://localhost/portfolio/">Home</a></li>
                <li><a href="http://localhost/portfolio/dashboard">Profile</a></li>
                <li><a href="http://localhost/portfolio/logout.php">Logout</a></li>
            </ul>
        </nav>
    </div>
    <div class="content">
        <!-- page content  -->
  
        <div class="profile">
            <div class="status">
                <p>
                    <?php
                        if(isset( $_SESSION['login'])){
                            echo $_SESSION['login'];
                        }
                    ?>
                </p>
            </div>
            <div class="details">
                <h1>
                    <?php
                            if(isset( $_SESSION['username'])){
                                echo "congratulations " .$_SESSION['username'];
                            }
                        ?>
                </h1>
            </div>
        </div>
    </div>
</body>
</html>
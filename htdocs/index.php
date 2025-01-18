<?php

include_once('functions/functions.php');
$dbConnect = dbLink();
if($dbConnect) {
    echo '<!--Connection Established-->';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marvel</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
        <!--Nav-Bar-->
    <header>
        <!--logo-->
        <a href="#" class="logo"><div class="marvellogo"></div></a>
    </header>
    <br><br>
    <div class="dotContainer">
        <div class="leftContainerImage"></div>
        <div class="rightContainer">
            <br><br>
            <!-- Form to create a new user -->
            <form action="/pages/action_create_user.php" method="post">
                <input type="text" name="Name" placeholder="Enter Full Name" class="typeBar">
                <input type="submit" value="Add User" class="submitButton">  
            </form>
            <br>
            <div class="tableContainer">
            <?php
                listUsers($dbConnect);
            ?>
            </div>
        </div>
    </div>
    <br><br>
    <footer>
            <!--social media-->
        <div class="copy-and-terms-container">
          <div class="social-media-container">
              <a href="https://github.com/felipe-mig" target="_blank"><i class="bi bi-github" id="giticon"></i></a>
              <a href="https://www.linkedin.com/in/felipeiglesiasgarcia/" target="_blank"><i class="bi bi-linkedin" id="linkedinicon"></i></a>
          </div>
          <p id="copyright">&copy; 2024 Felipe Iglesias Garcia</p>
        </div>
        <!-- <br> -->
    </footer>

</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIVE4GOOD</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
   <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>

<body>
    <header>
        <div class="nav">
            <div class="navbar1">
                <nav>
                    <ul class="nav_links">
                        <li><a href="<?php echo URLROOT ?>/stories/all">Stories</a></li>
                        <li><a href="org.php">Organisations</a></li>
                    </ul>
                </nav>
                <a href="<?php echo URLROOT ?>/donations/home">
                <img class="logo" src="<?php echo URLROOT ?>/public/Assets/icons/logo.svg" alt="logo" height="50px">
                <a>
                <nav>
                    <ul class="nav_links">
                        <li><a href="about.php">About us</a></li>
                        <li><a href="<?php echo URLROOT ?>/FundType">Start a Fundraiser</a></li>
                    </ul>
                </nav>


            </div>
            <div class="navbar2">
                <ul class="nav_links">
                <?php if (isset($_SESSION['userId'])) {?>
                    <li><a href="<?php echo URLROOT ?>/login/logout"><button class="white-button">Logout</button></a></li><?php } else {} ?>
                </ul>
                <form action="" class="search-bar">
                    <input type="text" placeholder="Search Give4Good" name="search">
                    <button type="submit"><img src="<?php echo URLROOT ?>/public/Assets/icons/search.svg"></button>
                </form>
                <ul class="nav_links"><div style="display: inline-block ;">
                
                    <?php if (isset($_SESSION['userId'])) {?>
                        <li><a href="<?php echo URLROOT ?>/profile"><i class="fa-solid fa-user"></i></li>
                        <li><?php
                        echo "Hi, " . explode(" ", $_SESSION["userName"])[0] . "!";?></a><?php
                    } else { ?>
                        <script>
                            var myVariable = <?php echo json_encode($_SESSION['userId']); ?>;
                            console.log(myVariable);
                        </script></li>
                        <li><a href="<?php echo URLROOT ?>/signup"><button class="white-button">Sign Up</button></a></li>
                        <li><a href="<?php echo URLROOT ?>/login"><button class="white-button">Login</button></a></li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
       
    </header>
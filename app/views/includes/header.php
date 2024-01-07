<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GIVE4GOOD</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>

<body>
  <header>
    <nav class="nav-container">
      <div class="nav-left">
        <div class="dashboard">
          <i class="fa-solid fa-bars fa-xl"></i>
        </div>
        <div class="nav-logo">
          <a href="<?php echo URLROOT ?>/index"><img src="<?php echo URLROOT ?>/public/Assets/images/LogoBlack.png" alt="logo" /></a>
        </div>
      </div>
      

      <div class="nav-right">
        <div class="search-box">
          <div class="search-bar">
            <form action="">
              <input type="text" name="" id="" placeholder="Search Give4Good">
              <label for=""></label>
              <i class="fas fa-search"></i>
            </form>
          </div>
        </div>
  
        <ul class="nav-links">
          <li>
            <a href="<?php echo URLROOT ?>/Stories">Stories</a>
          </li>
          <li>
            <a href="<?php echo URLROOT ?>/Fundraiser/start">Start a Fundraiser</a>
          </li>
          <li>
            <a href="<?php echo URLROOT ?>/Required">About</a>
          </li>
        </ul>
  
        <div class="user-row">
          <?php if (isset($_SESSION['userId'])) { ?>
            <i class="fa-solid fa-star star"></i>
          <i class="fa-solid fa-bell fa-xl"></i>
            <!-- <div class="user">
                <div class="user-name">Sandundi</div>
                <div class="user-image"> <img src="<?php echo URLROOT ?>/public/Assets/images/profile.jpeg" alt="yiq" />
                </div>
              </div> -->
            <li><a href="<?php echo URLROOT ?>/profile"><i class="fa-solid fa-user"></i></li>
            <li>
              <?php
              echo "Hi, " . explode(" ", $_SESSION["userName"])[0] . "!"; ?></a>
              <?php
          } else { ?>
  
              <div class="guest-user">
                <button class="secondary-button"> Signup</button>
                <button class="main-button"> Login</button>
              </div>
              <!-- <i class="fa-solid fa-star star"></i>
              <i class="fa-solid fa-bell fa-xl"></i>
                <div class="user">
                    <div class="user-name">Sandundi</div>
                    <div class="user-image"> <img src="<?php echo URLROOT ?>/public/Assets/images/profile.jpeg" alt="yiq" />
                    </div>
                  </div>  -->
              
              <?php
          }
          ?>
  
        </div>
      </div>
    
    </nav>
  </header>
<header>
  <nav class="nav-container">
    <div class="nav-left">
      <div class="dashboard">
        <i class="fa-solid fa-bars fa-xl" id="btn"></i>
      </div>
      <div class="nav-logo">
        <a href="<?php echo URLROOT ?>/index"><img src="<?php echo URLROOT ?>/public/Assets/images/LogoBlack.png"
            alt="logo" /></a>
      </div>
    </div>


    <div class="nav-right">
      <!-- <div class="search-box">
        <div class="search-bar">
          <form action="">
            <input type="text" name="" id="" placeholder="Search Give4Good">
            <label for=""></label>
            <i class="fas fa-search"></i>
          </form>
        </div>
      </div> -->

      <ul class="header-nav-links">
        <li>
          <a href="<?php echo URLROOT ?>/Stories">Stories</a>
        </li>
        <li>
          <a href="<?php echo URLROOT ?>/Fundraisersuper/">Start a Fundraiser</a>
        </li>
        <li>
          <a href="<?php echo URLROOT ?>/Required">About</a>
        </li>
      </ul>

      <div class="user-row">
        <?php if (isset($_SESSION['userId'])) { 
          if ($_SESSION['userLevel'] == 1){
          ?>
          <i class="fa-solid fa-star star" onclick="window.location.href = '<?php echo URLROOT ?>/Individual/super'"></i>
          <i class="fa-solid fa-bell fa-xl"></i>
          <div class="user" onclick="window.location.href = '<?php echo URLROOT ?>/Profile/index/<?php echo $_SESSION['userId'] ?>'">
            <div class="user-name">
              <?php echo explode(" ", $_SESSION["userName"])[0]; ?>
            </div>
            <div class="user-image">
              <img src="<?php echo $_SESSION['userImage']; ?>" alt="img" />
            </div>

          </div>
          <!-- <li><a href="<?php //echo URLROOT ?>/profile"><i class="fa-solid fa-user"></i></li>
            <li>-->
          <?php
          }
          if ($_SESSION['userLevel'] == 2){
            ?>
            <i class="fa-solid fa-bell fa-xl"></i>
            <div class="user" onclick="window.location.href = '<?php echo URLROOT ?>/Profile/index/<?php echo $_SESSION['userId'] ?>'">
              <div class="user-name">
                <?php echo explode(" ", $_SESSION["userName"])[0]; ?>
              </div>
              <div class="user-image">
                <img src="<?php echo $_SESSION['userImage']; ?>" alt="img" />
            <i class="fa-solid fa-star fa-xs star-mini"></i>

              </div>
  
            </div>
            <!-- <li><a href="<?php //echo URLROOT ?>/profile"><i class="fa-solid fa-user"></i></li>
              <li>-->
            <?php
            }

        } else { ?>

          <div class="guest-user">
            <button class="secondary-button" onclick="window.location.href = '<?php echo URLROOT ?>/Users/select'">
              Signup
            </button>
            <button class="main-button" onclick="window.location.href = '<?php echo URLROOT ?>/Users'">
              Login</button>

          </div>
          <?php
        }
        ?>

      </div>
    </div>

  </nav>
</header>
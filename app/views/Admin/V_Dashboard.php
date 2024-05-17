<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GIVE4GOOD</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/styles.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/components-3/Admin_style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/9e9a03ae37.js" crossorigin="anonymous"></script>
</head>

<body>
  <?php require APPROOT . '/views/includes/admin-header.php' ?>
  <?php require APPROOT . '/views/includes/admin-dashboard.php' ?>

  <div class="main--content">
    <div class="header--wrapper">
      <div class="header--title">
        <!-- <i class="fa-solid fa-bars"></i> -->
        <span>Dashboard</span>
      </div>
      <div class="user--info">
        <div class="search--box">
          <i class="fa-solid fa-magnifying-glass"></i>
          <input type="text" placeholder="Search Name" />
        </div>
      </div>
    </div>
    <div class="dashDetails" styles="width: 100%; height: 100%;>
      <div class="dash-main" styles="width: 100%; height: 100%; display: flex; flex: nowrap;">
        <div class="dashUnit" >
          <span>Individual Signups<strong></strong></span>
          <div class="dash_table">
            <table>
              <tbody>
              <?php 
                  foreach ($data['individual'] as $users) {
                      ?>
                  <tr>
                    
                      <td><?php echo $users->username; ?></td>

                  </tr>
                  <?php
                  }
                  ?>
              </tbody>
            </table>
            <div class="viewall">
              <button class="data_view">
                <a href="<?php echo URLROOT ?>/Admin_Individual/donor">View All</a>
              </button>
            </div>
          </div>
        </div>


        <div class="dashUnit">
          <span>Organisational Signups<strong></strong></span>
          <div class="dash_table">
            <table>
              <tbody>
              <?php 
                  foreach ($data['org'] as $users) {
                      ?>
                  <tr>
                    
                      <td><?php echo $users->username; ?></td>

                  </tr>
                  <?php
                  }
                  ?>
              
                </tbody>
            </table>
            <div class="viewall">
            <button class="data_view">
                <a href="<?php echo URLROOT ?>/Admin_Organisation/donor">View All</a>
              </button>
            </div>
          </div>
        </div>


        <div class="dashUnit">
          <span>Merchandise <strong></strong></span>
          <div class="dash_table">
            <table>
              <tbody>
              <?php 
                  foreach ($data['merchandise'] as $merchandise) {
                      ?>
                  <tr>
                    
                      <td><?php echo $merchandise->product_name; ?></td>

                  </tr>
                  <?php
                  }
                  ?>
              </tbody>
            </table>
            <div class="viewall">
            <button class="data_view">
                <a href="<?php echo URLROOT ?>/Admin_Merchandise/pending">View All</a>
              </button>
            </div>
          </div>
        </div>


        <div class="dashUnit">
          <span>Fundraisers <strong></strong></span>
          <div class="dash_table">
            <table>
              <tbody>
              <?php 
                  foreach ($data['fundraiser'] as $fundraiser) {
                      ?>
                  <tr>
                    
                      <td><?php echo $fundraiser->title; ?></td>

                  </tr>
                  <?php
                  }
                  ?>
              </tbody>
            </table>
            <div class="viewall">
            <button class="data_view">
                <a href="<?php echo URLROOT ?>/Admin_Fundraisers/pending">View All</a>
              </button>
            </div>
          </div>
        </div>


        <div class="dashUnit">
          <span>Stories <strong></strong></span>
          <div class="dash_table">
            <table>
              <tbody>
              <?php 
                  foreach ($data['story'] as $story) {
                      ?>
                  <tr>
                    
                      <td><?php echo $story->title; ?></td>

                  </tr>
                  <?php
                  }
                  ?>
              </tbody>
            </table>
            <div class="viewall">
            <button class="data_view">
                <a href="<?php echo URLROOT ?>/Admin_Stories/pending">View All</a>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
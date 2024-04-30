<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GIVE4GOOD</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/styles.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/components/profile_style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body>
  <?php require APPROOT . '/views/includes/header.php' ?>
  <?php require APPROOT . '/views/includes/orgProfileSideBar.php'?>

  <div class="main--content">
    <div class="header--wrapper">
      <div class="header--title">
      <i class="fa-solid fa-file-invoice-dollar"></i>
        <span>Your Subscription Payments</span>
      </div>
      <div class="search-box">
        <div class="search-bar">
          <input type="text" name="search" placeholder="Search Give4Good">
          <i class="fa-solid fa-magnifying-glass"></i>
          
        </div>
      </div>

    </form>
      <!-- <div class="user--info">
        <div class="search--box">
          <i class="fa-solid fa-magnifying-glass"></i>
          <input type="text" placeholder="Search Name"/>
        </div>
      </div> -->
    </div>
    <div class="dashDetails">
      <div class="container">
        <div class="table-wrapper">
          <table>
            <thead>
              <tr>
                <th>Date</th>
                <th>Amount</th>
                
              </tr>
            </thead>
            <tbody>
            <?php 
                  foreach ($data as $profileSubPay) {
                  ?>
              <tr>
                <td><?php echo $profileSubPay->Date; ?></td>
                <td><?php echo $profileSubPay->Amount; ?></td>
                
                 </tr>
              <?php
         }
        ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <?php require APPROOT . '/views/includes/footer.php' ?>
</body>

</html>
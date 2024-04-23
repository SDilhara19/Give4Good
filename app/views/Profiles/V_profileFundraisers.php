<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GIVE4GOOD</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/styles.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/components/profile_style.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/components/admin.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/9e9a03ae37.js" crossorigin="anonymous"></script>
</head>

<body>
  <?php require APPROOT . '/views/includes/header.php' ?>
  <?php if ($_SESSION['userType'] == 'individual') {
    require APPROOT . '/views/includes/indvProfileSideBar.php';
  } else if ($_SESSION['userType'] == 'organisation') {
    require APPROOT . '/views/includes/orgProfileSideBar.php';
  }
  ?>
  <div class="main--content">
    <div class="header--wrapper">
      <div class="header--title">
        <span>Your Fundraisers</span>
      </div>
      <div class="user--info">
        <div class="search--box">
          <i class="fa-solid fa-magnifying-glass"></i>
          <input type="text" placeholder="Search Name" />
        </div>
      </div>
    </div>
    <div class="dashDetails">
      <div class="container">
        <div class="table-wrapper">
          <table>
            <thead>
              <tr>
                <th>Title</th>
                <th>Story</th>
                <th>Category</th>
                <th>Amount</th>
                <th>Amount Collected</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($data as $profileFundraisers) {
                ?>
                <tr>
                  <td><?php echo $profileFundraisers->title; ?></td>
                  <td><?php echo $profileFundraisers->story; ?></td>
                  <td><?php echo $profileFundraisers->Category; ?></td>
                  <td><?php echo $profileFundraisers->amount; ?></td>
                  <td><?php echo $profileFundraisers->amount_collected; ?></td>
                  <td><?php echo $profileFundraisers->status; ?></td>
                  <td><div class="submit-button-div">
                        <!-- <button class="button-1-green" type="submit">View
                      
                        </button> -->
                        <button class="button-1-green">View</button>
                </div>
                        </div>
                        
                        <div class="submit-button-div">
                        <button class="button-3-red" type="submit">End</button>
                    </div>
                    </td>
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
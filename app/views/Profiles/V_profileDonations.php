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
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
        <i class="fa-solid fa-hand-holding-heart fa-xl"></i>
        <span>Your Donations</span>
      </div>
      <form>
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
                <th>Date & Time</th>
                <th>Fundraiser Title</th>
                <th>Donated Amount</th>
                <th>Contribution Amount</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($data as $profileDonations) {
                ?>
                <tr>
                  <td><?php echo $profileDonations->payment_time; ?></td>
                  <td><?php echo $profileDonations->title; ?></td>
                  <td><?php echo $profileDonations->donated_amount; ?></td>
                  <td><?php echo $profileDonations->contribution_amount; ?></td>
                  <td>
                    <div class="submit-button-div">
                      <button class="button-1-green">
                        <a href="http://localhost/give4good/Fundraiser/fundraiser/<?php echo $profileDonations->fundraiser_id; ?>">View</a>
                       </button>
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
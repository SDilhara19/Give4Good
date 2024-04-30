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
  <script src="<?php echo URLROOT ?>/public/js/popup.js"></script>
</head>

<body>
  <?php require APPROOT . '/views/includes/admin-header.php' ?>
  <?php require APPROOT . '/views/includes/admin-dashboard.php' ?>

  <div class="main--content">
    <div class="header--wrapper">
      <div class="header--title">
        <span>Complaints on fundraisers</span>
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
<<<<<<< HEAD
<<<<<<< HEAD
                <!-- <th>Date</th> -->
                <th>Complaint ID</th>
=======
                <th>Date</th>
                <th>Complaint ID</th>
                <th>Reporter ID</th>
>>>>>>> main
=======
                <!-- <th>Date</th> -->
                <th>Complaint ID</th>
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
                <th>Reporter Username</th>
                <th>Fundraiser ID</th>
                <th>Fundraiser Title</th>
                <th>Fundraiser User ID</th>
                <th>Fundraiser Username</th>
                <th>Report</th>
                <th>Other Details</th>
                <th>Reporter details</th>
                <th>Fundraiser details</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($data as $complaints) {
                ?>
                <tr>
<<<<<<< HEAD
<<<<<<< HEAD
                  <!-- <td>

                  </td> -->
=======
                  <td>
                  hhhg
                  </td>
>>>>>>> main
=======
                  <!-- <td>

                  </td> -->
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
                  <td>
                    <?php echo $complaints->complaint_id; ?>
                  </td>
                  <td>
                    <?php echo $complaints->user_id; ?>
                  </td>
                  <td>
                    <?php echo $complaints->username; ?>
                  </td>
                  <td>
                    <?php echo $complaints->fundraiser_id; ?>
                  </td>
                  <td>
                    <?php echo $complaints->title; ?>
                  </td>
                  <td>
                    <?php echo $complaints->user_id; ?>
                  </td>
                  <td>
                    <?php echo $complaints->reason; ?>
                  </td>
                  <td>
                    <?php echo $complaints->others; ?>
                  </td>
                  <td class="action-td">
<<<<<<< HEAD
<<<<<<< HEAD
                    <a href="<?php echo URLROOT ?>/Admin_Merchandise/info/<?php echo $complaints->user_id ?>"
=======
                    <a href="<?php echo URLROOT ?>/Admin_Merchandise/info/<?php echo $merchandise->id ?>"
>>>>>>> main
=======
                    <a href="<?php echo URLROOT ?>/Admin_Merchandise/info/<?php echo $complaints->user_id ?>"
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
                      class="action-icons">
                      <i class="fa-solid fa-info"></i>
                    </a>
                  </td>
                  <td>
<<<<<<< HEAD
<<<<<<< HEAD
                  <a href="<?php echo URLROOT ?>/Admin_Fundraisers/fundraiser_one/<?php echo $complaints->fundraiser_id ?>"
                      class="action-icons">
                      <i class="fa-solid fa-info"></i>
                    </a>
=======
                    <a href="<?php echo URLROOT ?>/Admin_Stories/setDeactive/<?php echo $story->id ?>"
                      class="action-icons">
                      <i class="fa-solid fa-info"></i>
                    </a>

>>>>>>> main
=======
                  <a href="<?php echo URLROOT ?>/Admin_Fundraisers/fundraiser_one/<?php echo $complaints->fundraiser_id ?>"
                      class="action-icons">
                      <i class="fa-solid fa-info"></i>
                    </a>
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
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
</body>

</html>
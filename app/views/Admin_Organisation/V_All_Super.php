<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GIVE4GOOD</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/styles.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/components-3/Admin_style.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/components/admin.css">
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


  <div class="main--content admin-organization ">
    <?php require APPROOT . '/views/Admin_Organisation/Organisation-header.php' ?>
    <div class="dashDetails">
      <div class="container">

        <div class="table-wrapper">
          <table class="tablemain">
            <thead>

              <tr>

                <th>User ID</th>
                <th>Username</th>
                <th>About</th>
                <th>Contact No</th>
                <th>Address</th>
                <th>Identity Verification</th>
                <th>Logo</th>
                <th>Bank Details</th>
                <th>Executive Details</th>
                <th>Treasurer Details</th>
                <th>Identity Status</th>
                <th>Status</th>
                <th class="action-th">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($data as $super_organisation) {
              ?>
              <tr>
                <td>

                  <span>
                    <?php echo $super_organisation->user_id; ?>
                  </span>
                </td>
                <td>Youth Society of Thimbirigasyaya</td>
                <td>Non-profit organization</td>
                <td>0112458654</td>
                <td>No 78, Galle Rd, Dehiwala</td>
                <td><a href=""><i class="fa-solid fa-arrow-up-right-from-square"></i></a></td>
                <!-- if a popup remember to remove <a> -->
                <td><i class="fa-solid fa-image open-logo-popup" data-popup-id="<?php echo $super_organisation->user_id; ?>"></i></td>
                <td><button onclick class="data_view open-bank-popup" data-popup-id="<?php echo $super_organisation->user_id; ?>">View</button></td>
                <td><button onclick class="data_view open-executive-popup" data-popup-id="<?php echo $super_organisation->user_id; ?>">View</button></td>
                <td><button onclick class="data_view open-treasurer-popup" data-popup-id="<?php echo $super_organisation->user_id; ?>">View</button></td>
                <td><a href=""><i class="fa-solid fa-check"></i></a></td>
                <td>Active</td>
                <td class="action-td">
                  <span class="action-icons open-info-popup"
                    data-popup-id="<?php echo $super_organisation->user_id; ?>">
                    <i class="fa-solid fa-info"></i>
                  </span>
                </td>

                <td>
                  <dialog class="popup" id='executive-popup-<?php echo $super_organisation->user_id; ?>'>
                    <span class="close-popup" id="close-executive-popup-<?php echo $super_organisation->user_id; ?>">&times;</span>
                    <p class="text-2">Executive: Youth Society of Thimbirigasyaya</p>
                    <div class="popup-container nic-container">
                      <table class="info-table">
                        <tr>
                          <th>Name</th>
                          <td class="text-3">John Doe</td>
                        </tr>
                        <tr>
                          <th>Position</th>
                          <td class="text-3">Vice-President</td>
                        </tr>

                        <tr>
                          <th>NIC No</th>
                          <td class="text-3">23-02-2024</td>
                        </tr>
                        <tr>
                          <th>Address</th>
                          <td class="text-3">Ratnapura</td>
                        </tr>
                        <tr>
                          <th>Contact</th>
                          <td class="text-3">+94 704332324</td>
                        </tr>
                        <tr>
                          <th>Email</th>
                          <td class="text-3">2johndoe@hmail.com</td>
                        </tr>

                      </table>
                      <div class="nic-front">

                        <img src="<?php echo URLROOT; ?>/Assets/Uploaded-images/NIC-front/1.jpg" alt="">
                      </div>
                      <div class="nic-back">
                        <img src="<?php echo URLROOT; ?>/Assets/Uploaded-images/NIC-back/1.jpg" alt="">
                      </div>
                    </div>

                  </dialog>
                  <dialog class="popup" id='treasurer-popup-<?php echo $super_organisation->user_id; ?>'>
                    <span class="close-popup" id="close-treasurer-popup-<?php echo $super_organisation->user_id; ?>">&times;</span>
                    <p class="text-2">Treasurer: Youth Society of Thimbirigasyaya</p>
                    <div class="popup-container nic-container">
                      <table class="info-table">
                        <tr>
                          <th>Name</th>
                          <td class="text-3">John Doe</td>
                        </tr>
                        <tr>
                          <th>Position</th>
                          <td class="text-3">Treasurer</td>
                        </tr>

                        <tr>
                          <th>NIC No</th>
                          <td class="text-3">23-02-2024</td>
                        </tr>
                        <tr>
                          <th>Address</th>
                          <td class="text-3">Ratnapura</td>
                        </tr>
                        <tr>
                          <th>Contact</th>
                          <td class="text-3">+94 704332324</td>
                        </tr>
                        <tr>
                          <th>Email</th>
                          <td class="text-3">2johndoe@hmail.com</td>
                        </tr>

                      </table>
                      <div class="nic-front">

                        <img src="<?php echo URLROOT; ?>/Assets/Uploaded-images/NIC-front/1.jpg" alt="">
                      </div>
                      <div class="nic-back">
                        <img src="<?php echo URLROOT; ?>/Assets/Uploaded-images/NIC-back/1.jpg" alt="">
                      </div>
                    </div>

                  </dialog>
                  <dialog class="popup" id='bank-popup-<?php echo $super_organisation->user_id; ?>'>
                    <span class="close-popup" id="close-bank-popup-<?php echo $super_organisation->user_id; ?>">&times;</span>
                    <p class="text-2">Bank Details: Youth Society of Thimbirigasyaya</p>
                    <div class="popup-container bank-container">
                      <table class="info-table">
                        <tr>
                          <th>Bank Name</th>
                          <td class="text-3">Bank of Ceylon</td>
                        </tr>
                        <tr>
                          <th>Bank Code</th>
                          <td class="text-3">367</td>
                        </tr>

                        <tr>
                          <th>Branch Name</th>
                          <td class="text-3">Thimbirigasyaya</td>
                        </tr>
                        <tr>
                          <th>Branch Code</th>
                          <td class="text-3">12</td>
                        </tr>
                        <tr>
                          <th>Account holder</th>
                          <td class="text-3">Youth Society of Thimbirigasyaya</td>
                        </tr>
                        <tr>
                          <th>Account No</th>
                          <td class="text-3">5526362</td>
                        </tr>

                      </table>
                      <div class="bank-passbook">

                        <img src="<?php echo URLROOT; ?>/Assets/Uploaded-images/Bank-passbook/1.webp" alt="">
                      </div>
                    </div>

                  </dialog>

                  <dialog class="popup-2" id='logo-popup-<?php echo $super_organisation->user_id; ?>'>
                    <span class="close-popup-2" id="close-logo-popup-<?php echo $super_organisation->user_id; ?>">&times;</span>
                    <p class="text-2">Logo: Youth Society of Thimbirigasyaya</p>
                    <div class="popup-2-container organisation-logo-container">
                      <div class="organisation-logo">
                        <img src="<?php echo URLROOT; ?>/Assets/Uploaded-images/Organisation-logo/1.avif" alt="">
                      </div>
                    </div>

                  </dialog>
                </td>
              </tr>
              <script>
    setupPopup('.open-executive-popup[data-popup-id="<?php echo $super_organisation->user_id; ?>"]', '#executive-popup-<?php echo $super_organisation->user_id; ?>', '#close-executive-popup-<?php echo $super_organisation->user_id; ?>');
    setupPopup('.open-treasurer-popup[data-popup-id="<?php echo $super_organisation->user_id; ?>"]', '#treasurer-popup-<?php echo $super_organisation->user_id; ?>', '#close-treasurer-popup-<?php echo $super_organisation->user_id; ?>');
    setupPopup('.open-bank-popup[data-popup-id="<?php echo $super_organisation->user_id; ?>"]', '#bank-popup-<?php echo $super_organisation->user_id; ?>', '#close-bank-popup-<?php echo $super_organisation->user_id; ?>');
    setupPopup('.open-logo-popup[data-popup-id="<?php echo $super_organisation->user_id; ?>"]', '#logo-popup-<?php echo $super_organisation->user_id; ?>', '#close-logo-popup-<?php echo $super_organisation->user_id; ?>');
  </script>
              <?php
               }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  
  
</body>

</html>
<html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GIVE4GOOD</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/styles.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/components-3/Admin_style.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/components/admin.css">
  <script src="https://kit.fontawesome.com/9e9a03ae37.js" crossorigin="anonymous"></script>
</head>

<body>
  <?php require APPROOT . '/views/includes/admin-header.php' ?>
  <?php require APPROOT . '/views/includes/admin-dashboard.php' ?>

  <div class="main--content">
    <?php require APPROOT . '/views/Admin_Individual/Individual-header.php' ?>


    <div class="dashDetails">

      <div class="container">
        <div class="table-wrapper">
          <div class="data_table">
            <table>
              <thead>
                <tr>
                  <th>User ID</th>
                  <th>Username</th>
                  <th>Contact</th>
                  <th>Address</th>
                  <th>Identity Verification</th>
                  <th>NIC Details</th>
                  <th>Bank Details</th>
                  <th>Identity Status</th>
                  <th>Status</th>
                  <th class="action-th">Actions</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                  foreach ($data as $act_super_individual) {
                  ?>
                <tr>
                  <td>
                    <span><?php echo $act_super_individual->user_id; ?></span>
                  </td>
                  <td><?php echo $act_super_individual->username; ?></td>
                  <td><?php echo $act_super_individual->phone; ?></td>
                  <td><?php echo $act_super_individual->address; ?></td>
                  <td><a href=""><i class="fa-solid fa-arrow-up-right-from-square"></i></a></td>
                  <td><button onclick class="data_view" id="open-nic-popup">View</button></td>
                  <td><button onclick class="data_view" id="open-bank-popup">View</button></td>
                  <td><a href=""><i class="fa-solid fa-check"></i></a></td>
                  <td><?php echo $act_super_individual->status; ?></td>
                  <td class="action-td">
                  <a href="" class="action-icons"><i class="fa-solid fa-info"></i></a>
                  <a href="" class="action-icons"><i class="fa-solid fa-hourglass-half"></i></a>
                  <a href="<?php echo URLROOT ?>/Admin_Individual/setDeactive/<?php echo $act_super_individual->user_id ?>" class="action-icons"> <i class="fa-solid fa-lock"></i></a>

                </td>

                  <td>
                    <dialog class="popup" id='nic-popup'>
                      <span class="close-popup" id="close-nic-popup">&times;</span>
                      <p class="text-2">NIC Verification: <?php echo $act_super_individual->username; ?></p>
                      <div class="popup-container nic-container">
                        <table class="info-table">
                        <tr>
                            <th>ID</th>
                            <td class="text-3"><?php echo $act_super_individual->id; ?></td>
                          </tr>
                          <tr>
                            <th>Name</th>
                            <td class="text-3"><?php echo $act_super_individual->username; ?></td>
                          </tr>
                          <tr>
                            <th>NIC No</th>
                            <td class="text-3"><?php echo $act_super_individual->nic_no; ?></td>
                          </tr>
                          <tr>
                            <th>Address</th>
                            <td class="text-3"><?php echo $act_super_individual->address; ?></td>
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
                    <dialog class="popup" id='bank-popup'>
                      <span class="close-popup" id="close-bank-popup">&times;</span>
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
                </tr>
                <?php
               }
               ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <script src="<?php echo URLROOT ?>/public/js/popup.js"></script>
    <script>
      setupPopup('#open-nic-popup', '#nic-popup', '#close-nic-popup');
      setupPopup('#open-bank-popup', '#bank-popup', '#close-bank-popup');
    </script>
</body>

</html>
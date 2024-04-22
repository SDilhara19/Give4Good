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
                  <th>Email</th>
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
                foreach ($data as $super_individual) {
                  ?>
                  <tr>
                    <td>
                      <span>
                        <?php echo $super_individual->user_id; ?>
                      </span>
                    </td>
                    <td>
                      <?php echo $super_individual->username; ?>
                    </td>
                    <td>
                      <?php echo $super_individual->phone; ?>
                    </td>
                    <td>
                      <?php echo $super_individual->email; ?>
                    </td>
                    <td><a href=""><i class="fa-solid fa-arrow-up-right-from-square"></i></a></td>
                    <td><button onclick class="data_view open-nic-popup" data-popup-id="<?php echo $super_individual->id; ?>">View</button></td>
                    <td><button onclick class="data_view open-bank-popup" data-popup-id="<?php echo $super_individual->id; ?>">View</button></td>
                    <td><a href=""><i class="fa-solid fa-check"></i></a></td>
                    <td>
                      <?php echo $super_individual->status; ?>
                    </td>
                    <td class="action-td">
                      <a href="<?php echo URLROOT ?>/Admin_Individual/individual_one/<?php echo $super_individual->id ?>" 
                      class="action-icons"><i class="fa-solid fa-info"></i></a>
                    </td>

                    <td>
                      <dialog class="popup" id='nic-popup-<?php echo $super_individual->id; ?>'>
                        <span class="close-popup" id="close-nic-popup-<?php echo $super_individual->id; ?>">&times;</span>
                        <p class="text-2">NIC Verification :
                          <?php echo $super_individual->username; ?>
                        </p>
                        <div class="popup-container nic-container">
                          <table class="info-table">
                            <tr>
                              <th>ID</th>
                              <td class="text-3">
                                <?php echo $super_individual->id; ?>
                              </td>
                            </tr>
                            <tr>
                              <th>Name</th>
                              <td class="text-3">
                                <?php echo $super_individual->username; ?>
                              </td>
                            </tr>
                            <tr>
                              <th>NIC No</th>
                              <td class="text-3">
                                <?php echo $super_individual->nic_no; ?>
                              </td>
                            </tr>
                            <tr>
                              <th>Address</th>
                              <td class="text-3">
                                <?php echo $super_individual->address; ?>
                              </td>
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
                      <dialog class="popup" id='bank-popup-<?php echo $super_individual->id; ?>'>
                        <span class="close-popup" id="close-bank-popup-<?php echo $super_individual->id; ?>">&times;</span>
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
                    </td>
                    <script src="<?php echo URLROOT ?>/public/js/popup.js"></script>
                    <script>
                      setupPopup('.open-nic-popup[data-popup-id="<?php echo $super_individual->id; ?>"]', '#nic-popup-<?php echo $super_individual->id; ?>', '#close-nic-popup-<?php echo $super_individual->id; ?>');
                      setupPopup('.open-bank-popup[data-popup-id="<?php echo $super_individual->id; ?>"]', '#bank-popup-<?php echo $super_individual->id; ?>', '#close-bank-popup-<?php echo $super_individual->id; ?>');
                    </script>
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
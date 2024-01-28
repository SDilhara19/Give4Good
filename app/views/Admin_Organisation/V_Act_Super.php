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
              <tr>
                <td>
                  <!-- <span>
                    <span class="fi fi-af"></span>
                  </span> -->
                  <span>001</span>
                </td>
                <td>Youth Society of Thimbirigasyaya</td>
                <td>Non-profit organization</td>
                <td>0112458654</td>
                <td>No 78, Galle Rd, Dehiwala</td>
                <td><a href=""><i class="fa-solid fa-arrow-up-right-from-square"></i></a></td>
                <!-- if a popup remember to remove <a> -->
                <td><i class="fa-solid fa-image" id="open-logo-popup"></i></td>
                <td><button onclick class="data_view" id="open-bank-popup">View</button></td>
                <td><button onclick class="data_view" id="open-executive-popup">View</button></td>
                <td><button onclick class="data_view" id="open-treasurer-popup">View</button></td>
                <td><a href=""><i class="fa-solid fa-check"></i></a></td>
                <td>Active</td>
                <td class="action-td">
                  <a href="" class="action-icons"><i class="fa-solid fa-eye"></i></a>
                  <a href="" class="action-icons"><i class="fa-solid fa-hourglass-half"></i></a>
                  <a href="" class="action-icons"> <i class="fa-solid fa-lock"></i></a>
                </td>

                <td>
                  <dialog class="popup" id='executive-popup'>
                    <span class="close-popup" id="close-executive-popup">&times;</span>
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
                  <dialog class="popup" id='treasurer-popup'>
                    <span class="close-popup" id="close-treasurer-popup">&times;</span>
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

                  <dialog class="popup-2" id='logo-popup'>
                    <span class="close-popup-2" id="close-logo-popup">&times;</span>
                    <p class="text-2">Logo: Youth Society of Thimbirigasyaya</p>
                    <div class="popup-2-container organisation-logo-container">
                      <div class="organisation-logo">
                        <img src="<?php echo URLROOT; ?>/Assets/Uploaded-images/Organisation-logo/1.avif" alt="">
                      </div>
                    </div>

                  </dialog>
              </tr>


            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script src="<?php echo URLROOT ?>/public/js/popup.js"></script>
  <script>
    setupPopup('#open-executive-popup', '#executive-popup', '#close-executive-popup');
    setupPopup('#open-treasurer-popup', '#treasurer-popup', '#close-treasurer-popup');
    setupPopup('#open-bank-popup', '#bank-popup', '#close-bank-popup');
    setupPopup('#open-logo-popup', '#logo-popup', '#close-logo-popup');
  </script>
</body>

</html>
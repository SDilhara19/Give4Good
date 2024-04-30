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
    <?php require APPROOT . '/views/Admin_Organisation/Organisation-header.php' ?>
    <div class="dashDetails">
      <div class="container">
        <div class="table-wrapper">
        <table class="tablemain">
            <thead>

              <tr>

                <th>User ID</th>
                <th>Username</th>
                <th>Bank Details</th>
                <th>Executive Details</th>
                <th>Treasurer Details</th>
                <th>Secretary Details</th>
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
                  <td><span>
                      <?php echo $super_organisation->username; ?>
                    </span></td>
                  <td><button onclick class="data_view open-bank-popup"
                      data-popup-id="<?php echo $super_organisation->user_id; ?>">View</button></td>
                  <td><button onclick class="data_view open-executive-popup"
                      data-popup-id="<?php echo $super_organisation->user_id; ?>">View</button></td>
                  <td><button onclick class="data_view open-treasurer-popup"
                      data-popup-id="<?php echo $super_organisation->user_id; ?>">View</button></td>
                  <td> <button class="data_view open-secretary-popup"
                      data-popup-id="<?php echo $super_organisation->user_id; ?>">View</button></td>
                  <td><?php echo $super_organisation->status; ?></td>
                  <td class="action-td">
<<<<<<< HEAD
<<<<<<< HEAD
                  <a href="<?php echo URLROOT ?>/Admin_Organisation/profile/<?php echo $super_organisation->user_id ?>" class="action-icons">
                  <i class="fa-solid fa-info"></i>
                </a>


                <a href="" class="action-icons">
                    <i class= "fa-solid fa-check" onclick = 'if(window.confirm("Are you sure you want to activate the <?php echo $super_organisation->user_id ?>")){
                      window.open("<?php echo URLROOT ?>/Admin_Organisation/setReactive/<?php echo $super_organisation->user_id ?>");
                    }'>
                    </i>
                    </a>
                    </td>

                    <td>
=======
                    <span class="action-icons open-info-popup"
                      data-popup-id="<?php echo $super_organisation->user_id; ?>">
                      <i class="fa-solid fa-info"></i>
                    </span>
                  </td>

                  <td>
>>>>>>> main
=======
                  <a href="<?php echo URLROOT ?>/Admin_Organisation/profile/<?php echo $super_organisation->user_id ?>" class="action-icons">
                  <i class="fa-solid fa-info"></i>
                </a>


                <a href="" class="action-icons">
                    <i class= "fa-solid fa-check" onclick = 'if(window.confirm("Are you sure you want to activate the <?php echo $super_organisation->user_id ?>")){
                      window.open("<?php echo URLROOT ?>/Admin_Organisation/setReactive/<?php echo $super_organisation->user_id ?>");
                    }'>
                    </i>
                    </a>
                    </td>

                    <td>
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
                    <dialog class="popup" id='executive-popup-<?php echo $super_organisation->user_id; ?>'>
                      <span class="close-popup"
                        id="close-executive-popup-<?php echo $super_organisation->user_id; ?>">&times;</span>
                      <p class="text-2">Executive: <?php echo $super_organisation->username; ?>
<<<<<<< HEAD
<<<<<<< HEAD
=======
                        << /p>
>>>>>>> main
=======
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
                          <div class="popup-container nic-container">
                            <table class="info-table">
                              <tr>
                                <th>Name</th>
<<<<<<< HEAD
<<<<<<< HEAD
                                

=======
>>>>>>> main
=======
                                

>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
                                <td class="text-3"><?php echo $super_organisation->executive_name; ?></td>
                              </tr>
                              <tr>
                                <th>Position</th>
                                <td class="text-3"><?php echo $super_organisation->executive_designation; ?></td>
                              </tr>

                              <tr>
                                <th>NIC No</th>
                                <td class="text-3"><?php echo $super_organisation->executive_nic; ?></td>
                              </tr>
                              <tr>
                                <th>Address</th>
                                <td class="text-3"><?php echo $super_organisation->executive_address; ?></td>
                              </tr>
                              <tr>
                                <th>Contact</th>
                                <td class="text-3"><?php echo $super_organisation->executive_contact; ?></td>
                              </tr>
                              <tr>
                                <th>Email</th>
                                <td class="text-3"><?php echo $super_organisation->executive_email; ?></td>
                              </tr>

                            </table>
                            <div class="nic-front">

<<<<<<< HEAD
<<<<<<< HEAD
                            <img src="<?php echo URLROOT . $super_organisation->executive_nic_front ?>" alt="image">
                            </div>
                            <div class="nic-back">
                            <img src="<?php echo URLROOT . $super_organisation->executive_nic_back ?>" alt="image">
=======
                              <img src="<?php echo URLROOT; ?>/Assets/Uploaded-images/NIC-front/1.jpg" alt="">
                            </div>
                            <div class="nic-back">
                              <img src="<?php echo URLROOT; ?>/Assets/Uploaded-images/NIC-back/1.jpg" alt="">
>>>>>>> main
=======
                            <img src="<?php echo URLROOT . $super_organisation->executive_nic_front ?>" alt="image">
                            </div>
                            <div class="nic-back">
                            <img src="<?php echo URLROOT . $super_organisation->executive_nic_back ?>" alt="image">
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
                            </div>
                          </div>

                    </dialog>
                    <dialog class="popup" id='treasurer-popup-<?php echo $super_organisation->user_id; ?>'>
                      <span class="close-popup"
                        id="close-treasurer-popup-<?php echo $super_organisation->user_id; ?>">&times;</span>
                      <p class="text-2">Treasurer: <?php echo $super_organisation->username; ?></p>
                      <div class="popup-container nic-container">
                        <table class="info-table">
                          <tr>
                            <th>Name</th>
                            <td class="text-3"><?php echo $super_organisation->treasurer_name; ?></td>
                          </tr>
                          <tr>
                            <th>Position</th>
                            <td class="text-3"><?php echo $super_organisation->treasurer_designation; ?></td>
                          </tr>

                          <tr>
                            <th>NIC No</th>
                            <td class="text-3"><?php echo $super_organisation->treasurer_nic; ?></td>
                          </tr>
                          <tr>
                            <th>Address</th>
                            <td class="text-3"><?php echo $super_organisation->treasurer_address; ?></td>
                          </tr>
                          <tr>
                            <th>Contact</th>
                            <td class="text-3"><?php echo $super_organisation->treasurer_contact; ?></td>
                          </tr>
                          <tr>
                            <th>Email</th>
                            <td class="text-3"><?php echo $super_organisation->treasurer_email; ?></td>
                          </tr>

                        </table>
                        <div class="nic-front">

<<<<<<< HEAD
<<<<<<< HEAD
                        <img src="<?php echo URLROOT . $super_organisation->treasurer_nic_front ?>" alt="image">
                        </div>
                        <div class="nic-back">
                        <img src="<?php echo URLROOT . $super_organisation->treasurer_nic_back ?>" alt="image">
=======
                          <img src="<?php echo URLROOT; ?>/Assets/Uploaded-images/NIC-front/1.jpg" alt="">
                        </div>
                        <div class="nic-back">
                          <img src="<?php echo URLROOT; ?>/Assets/Uploaded-images/NIC-back/1.jpg" alt="">
>>>>>>> main
=======
                        <img src="<?php echo URLROOT . $super_organisation->treasurer_nic_front ?>" alt="image">
                        </div>
                        <div class="nic-back">
                        <img src="<?php echo URLROOT . $super_organisation->treasurer_nic_back ?>" alt="image">
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
                        </div>
                      </div>

                    </dialog>

                    <dialog class="popup" id='secretary-popup-<?php echo $super_organisation->user_id; ?>'>
                      <span class="close-popup"
                        id="close-secretary-popup-<?php echo $super_organisation->user_id; ?>">&times;</span>
                      <p class="text-2">Secretary: <?php echo $super_organisation->username; ?></p>
                      <div class="popup-container nic-container">
                        <table class="info-table">
                          <tr>
                            <th>Name</th>
                            <td class="text-3"><?php echo $super_organisation->secretary_name; ?></td>
                          </tr>
                          <tr>
                            <th>Position</th>
                            <td class="text-3"><?php echo $super_organisation->secretary_designation; ?></td>
                          </tr>

                          <tr>
                            <th>NIC No</th>
                            <td class="text-3"><?php echo $super_organisation->secretary_nic; ?></td>
                          </tr>
                          <tr>
                            <th>Address</th>
                            <td class="text-3"><?php echo $super_organisation->secretary_address; ?></td>
                          </tr>
                          <tr>
                            <th>Contact</th>
                            <td class="text-3"><?php echo $super_organisation->secretary_contact; ?></td>
                          </tr>
                          <tr>
                            <th>Email</th>
                            <td class="text-3"><?php echo $super_organisation->secretary_email; ?></td>
                          </tr>

                        </table>
                        <div class="nic-front">

<<<<<<< HEAD
<<<<<<< HEAD
                        <img src="<?php echo URLROOT . $super_organisation->secretary_nic_front ?>" alt="image">
                        </div>
                        <div class="nic-back">
                        <img src="<?php echo URLROOT . $super_organisation->secretary_nic_back ?>" alt="image">
=======
                          <img src="<?php echo URLROOT; ?>/Assets/Uploaded-images/NIC-front/1.jpg" alt="">
                        </div>
                        <div class="nic-back">
                          <img src="<?php echo URLROOT; ?>/Assets/Uploaded-images/NIC-back/1.jpg" alt="">
>>>>>>> main
=======
                        <img src="<?php echo URLROOT . $super_organisation->secretary_nic_front ?>" alt="image">
                        </div>
                        <div class="nic-back">
                        <img src="<?php echo URLROOT . $super_organisation->secretary_nic_back ?>" alt="image">
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
                        </div>
                      </div>

                    </dialog>
                    <dialog class="popup" id='bank-popup-<?php echo $super_organisation->user_id; ?>'>
                      <span class="close-popup"
                        id="close-bank-popup-<?php echo $super_organisation->user_id; ?>">&times;</span>
                      <p class="text-2"><?php echo $super_organisation->bank_name; ?></p>
                      <div class="popup-container bank-container">
                        <table class="info-table">
                          <tr>
                            <th>Bank Name</th>
<<<<<<< HEAD
<<<<<<< HEAD
                            <!-- <?php echo URLROOT . $super_organisation->bank_pbook ?> -->
=======
>>>>>>> main
=======
                            <!-- <?php echo URLROOT . $super_organisation->bank_pbook ?> -->
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
                            <td class="text-3"><?php echo $super_organisation->bank_name; ?></td>
                          </tr>
                          <tr>
                            <th>Bank Code</th>
                            <td class="text-3"><?php echo $super_organisation->bank_code; ?></td>
                          </tr>

                          <tr>
                            <th>Branch Name</th>
                            <td class="text-3"><?php echo $super_organisation->branch_name; ?></td>
                          </tr>
                          <tr>
                            <th>Branch Code</th>
                            <td class="text-3"><?php echo $super_organisation->branch_code; ?></td>
                          </tr>
                          <tr>
                            <th>Account holder</th>
                            <td class="text-3"><?php echo $super_organisation->acc_holder; ?></td>
                          </tr>
                          <tr>
                            <th>Account No</th>
                            <td class="text-3"><?php echo $super_organisation->account_no; ?></td>
                          </tr>

                        </table>
                        <div class="bank-passbook">

<<<<<<< HEAD
<<<<<<< HEAD
                        <img src="<?php echo URLROOT . $super_organisation->bank_pbook ?>" alt="image">
=======
                          <img src="<?php echo URLROOT; ?>/Assets/Uploaded-images/Bank-passbook/1.webp" alt="">
>>>>>>> main
=======
                        <img src="<?php echo URLROOT . $super_organisation->bank_pbook ?>" alt="image">
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
                        </div>
                      </div>

                    </dialog>

<<<<<<< HEAD
<<<<<<< HEAD
=======
                    <dialog class="popup-2" id='logo-popup-<?php echo $super_organisation->user_id; ?>'>
                      <span class="close-popup-2"
                        id="close-logo-popup-<?php echo $super_organisation->user_id; ?>">&times;</span>
                      <p class="text-2">Logo: Youth Society of Thimbirigasyaya</p>
                      <div class="popup-2-container organisation-logo-container">
                        <div class="organisation-logo">
                          <img src="<?php echo URLROOT; ?>/Assets/Uploaded-images/Organisation-logo/1.avif" alt="">
                        </div>
                      </div>

                    </dialog>
>>>>>>> main
=======
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
                  </td>

                </tr>
                <script>
                  setupPopup('.open-executive-popup[data-popup-id="<?php echo $super_organisation->user_id; ?>"]', '#executive-popup-<?php echo $super_organisation->user_id; ?>', '#close-executive-popup-<?php echo $super_organisation->user_id; ?>');
                  setupPopup('.open-treasurer-popup[data-popup-id="<?php echo $super_organisation->user_id; ?>"]', '#treasurer-popup-<?php echo $super_organisation->user_id; ?>', '#close-treasurer-popup-<?php echo $super_organisation->user_id; ?>');
                  setupPopup('.open-bank-popup[data-popup-id="<?php echo $super_organisation->user_id; ?>"]', '#bank-popup-<?php echo $super_organisation->user_id; ?>', '#close-bank-popup-<?php echo $super_organisation->user_id; ?>');
                  setupPopup('.open-secretary-popup[data-popup-id="<?php echo $super_organisation->user_id; ?>"]', '#secretary-popup-<?php echo $super_organisation->user_id; ?>', '#close-secretary-popup-<?php echo $super_organisation->user_id; ?>');
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
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
</head>

<body>
  <?php require APPROOT . '/views/includes/header.php' ?>
  <?php require APPROOT . '/views/includes/indvProfileSideBar.php' ?>
  <div class="main--content">
    <div class="header--wrapper">
      <div class="header--title">
      <i class="fa-solid fa-user-pen"></i>
        <span>Edit Your Details</span>
      </div>

    </div>
    <div class="dashDetails">
   <form action="" method="post" enctype="multipart/form-data">

  <section class="section">
    <div class="card">
      <div class="left-container">
        <img class="profile_img" src="<?php echo URLROOT . $data[0]->profile_image ?>" id = "profile_image_preview">
         <input type="file" accept="image/png, image/jpeg" name="profile_image" id="profile_image">
      </div>
      <div class="right-container">
        <h3 class="gradienttext">Profile Details</h3>
        <div class="profile-data">
          <div class="form-group">
            <label for="username">User Name:</label>
            <input type="text" id="username" name="username" value="<?php echo $data[0]->username ?>">
            <span class="form-invalid">
              <?php if (!empty($data['username_err'])) echo $data['username_err']; ?>
            </span>
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $data[0]->email ?>">
            <span class="form-invalid">
              <?php if (!empty($data['email_err'])) echo $data['email_err']; ?>
            </span>
          </div>
          <div class="form-group">
            <label for="contact">Contact No:</label>
            <input type="text" id="contact" name="contact" value="<?php echo $data[0]->phone ?>">
            <span class="form-invalid">
              <?php if (!empty($data['contact_err'])) echo $data['contact_err']; ?>
            </span>
          </div>
          <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="<?php echo $data[0]->Address ?>">
            <span class="form-invalid">
              <?php if (!empty($data['address_err'])) echo $data['address_err']; ?>
            </span>
          </div>
        </div>
      </div>
    </div>
  </section>
   <?php if ($_SESSION['userLevel'] == 2) {?>
  


  <section class="section">
    <div class="card">
      <div class="left-container">
        <img class="pbook_img" src="<?php echo URLROOT . $data[0]->bank_pbook ?>" id = "pbook_img_preview">
         <input type="file" accept="image/png, image/jpeg" name= "pbook_img" id = "pbook_img">
      </div>
      <div class="right-container">
        <h3 class="gradienttext">Bank Details</h3>
        <div class="profile-data">
          <div class="form-group">
            <label for="username">Account Name:</label>
            <input type="text" id="accountname" name="accountname" value="<?php echo $data[0]->acc_holder ?>">
            <span class="form-invalid">
               <?php if (!empty($data['accountname_err'])) echo $data['accountname_err']; ?>'
            </span>
          </div>
          <div class="form-group">
            <label for="id">Account No:</label>
            <input type="text" id="acc_no" name="acc_no"value="<?php echo $data[0]->account_no ?>">
            <span class="form-invalid">
              <?php if (!empty($data['acc_no_err'])) echo $data['acc_no_err']; ?>
            </span>
          </div>
          <div class="form-group">
            <label for="bankname">Bank Name:</label>
            <input type="text" id="bankname" name="bankname"value="<?php echo $data[0]->bank_name ?>">
            <span class="form-invalid">
              <?php if (!empty($data['bankname_err'])) echo $data['bankname_err']; ?>
            </span>
          </div>
          <div class="form-group">
            <label for="bankcode">Bank code:</label>
            <input type="text" id="bankcode" name="bankcode"value="<?php echo $data[0]->bank_code ?>">
            <span class="form-invalid">
              <?php if (!empty($data['bankcode_err'])) echo $data['bankcode_err']; ?>
            </span>
          </div>
          <div class="form-group">
            <label for="branchname">Branch Name:</label>
            <input type="text" id="branchname" name="branchname"value="<?php echo $data[0]->branch_name ?>">
            <span class="form-invalid">
              <?php if (!empty($data['branchname_err'])) echo $data['branchname_err']; ?>
            </span>
          </div>
          <div class="form-group">
            <label for="branchcode">Branch Code:</label>
            <input type="text" id="branchcode" name="branchcode"value="<?php echo $data[0]->branch_code ?>">
            <span class="form-invalid">
              <?php if (!empty($data['branchcode_err'])) echo $data['branch_code_err']; ?>
            </span>
          </div>

        </div>
      </div>
  </section>

  <?php
  }
 ?> 


  <div class="form-group">
    <div class="button-set">
      <input type="submit" value="Save">
      <input type="submit" value="Reset">
      <input type="submit" value="Cancel">
    </div>
  </div>
</form>

    </div>
    <?php require APPROOT . '/views/includes/footer.php' ?>
    <script src="<?php echo URLROOT ?>/public/js/form-image.js"></script>
    <script>
        // setupImagePreview("#form_image", ".form-image-container img");
        setupImagePreview("#pbook_img", "#pbook_img_preview");
        setupImagePreview("#profile_image", "#profile_image_preview");

    </script>
</body>

</html>
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
  <?php require APPROOT . '/views/includes/indvProfileSideBar.php' ?>
  <div class="main--content">
    <div class="header--wrapper">
      <div class="header--title">
        <i class="fa-solid fa-bars"></i>
        <span>Edit Your Details</span>
      </div>

    </div>
    <?php if ($_SESSION['userLevel']==1) {
    echo '<div class="dashDetails">
      <section class="section">
        <div class="card">
          <div class="left-container">
            <img class="profile_img" src="' . URLROOT . $data[0]->profile_image . '">
            <div><button>Upload Photo</button></div>
          </div>
          <div class="right-container">
            <h3 class="gradienttext">Profile Details</h3>
            <div class="profile-data">
              <div class="form-group">
                <label for="username">Name:</label>
                <input type="text" id="username" name="username" placeholder="' . $data[0]->username . '">
              </div>
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="' . $data[0]->email . '">
              </div>
              <div class="form-group">
                <label for="contact">Contact No:</label>
                <input type="text" id="contact" name="contact" placeholder="' . $data[0]->phone . '">
              </div>
              <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" placeholder="' . $data[0]->Address . '">
              </div>
            </div>
          </div>
        </div>
      </section>
      </div>';
    }else if($_SESSION['userLevel']==2){ 
      echo '<div class="dashDetails">
      <section class="section">
        <div class="card">
          <div class="left-container">
            <img class="profile_img" src="' . URLROOT . $data[0]->profile_image . '">
            <div><button>Upload Photo</button></div>
          </div>
          <div class="right-container">
            <h3 class="gradienttext">Profile Details</h3>
            <div class="profile-data">
              <div class="form-group">
                <label for="username">Name:</label>
                <input type="text" id="username" name="username" placeholder="' . $data[0]->username . '">
              </div>
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="' . $data[0]->email . '">
              </div>
              <div class="form-group">
                <label for="contact">Contact No:</label>
                <input type="text" id="contact" name="contact" placeholder="' . $data[0]->phone . '">
              </div>
              <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" placeholder="' . $data[0]->Address . '">
              </div>
            </div>
          </div>
        </div>
      </section>
      </div>
      <section class="section">
        <div class="card">
          <div class="left-container">
            <img class="pbook_img" src=" ' .URLROOT . $data[0]->bank_pbook . '">
            <div><button>Upload Photo</button></div>
          </div>
          <div class="right-container">
            <h3 class="gradienttext">Bank Details</h3>
            <div class="profile-data">
              <div class="form-group">
                <label for="username">Account Name:</label>
                <input type="text" id="username" name="username" placeholder="'.$data[0]->acc_holder.'">
              </div>
              <div class="form-group">
                <label for="id">NIC No:</label>
                <input type="text" id="id" name="id" placeholder="' .$data[0]->nic_no . '">
              </div>
              <div class="form-group">
                <label for="bankname">Bank Name:</label>
                <input type="text" id="bankname" name="bankname" placeholder="' .$data[0]->bank_name . '">
              </div>
              <div class="form-group">
                <label for="bankcode">Bank code:</label>
                <input type="text" id="bankname" name="bankcode" placeholder="' .$data[0]->bank_code . '">
              </div>
              <div class="form-group">
                <label for="branchname">Branch Name:</label>
                <input type="text" id="branchname" name="branchname" placeholder="' .$data[0]->branch_name . '">
              </div>
              <div class="form-group">
                <label for="branchcode">Branch Code:</label>
                <input type="text" id="branchcode" name="branchcode" placeholder="' . $data[0]->branch_code. '">
              </div>

            </div>
          </div>
      </section>
     
      </div>';
    }
    ?>
      <div class="form-group">
        <div class = "button-set">
         <input type="submit" value="Save">
         <input type="submit" value="Reset">
         <input type="submit" value="Cancel">
      </div>
    </div>
  </div>
    <script src="<?php echo URLROOT ?>/public/js/header.js"></script>
  <?php require APPROOT . '/views/includes/footer.php' ?>
</body>

</html>
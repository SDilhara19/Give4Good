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
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/components/profile_style.css">
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
    <div class="header--wrapper">
      <div class="header--title">
        <i class="fa-solid fa-bars"></i>
        <span>Your Profile</span>
      </div>
    </div>
    
<?php if( $data[0]->user_level ==1) { ?>
  <div class="dashDetails">
      <section class="section">
        <div class="card">
          <div class="left-container">
            <img class="profile_img" src=" <?php echo  URLROOT . $data[0]->profile_image ?> ">
            <h4 class="gradienttext-h4">User Name :<?php  echo $data[0]->username ?></h4>
            <h4 class="gradienttext-h4">User ID :<?php  echo $data[0]->id ?></h4>
          </div>
          <div class="right-container">
            <h3 class="gradienttext">Profile Details</h3>
            <table class="table-profile">
              <tr>
                <td>Full Name :</td>
                <td>
                  <?php echo $data[0]->fullname ?>
                </td>
              </tr>
              <td>
              Date Of Birth :</td>
                <td>
                  <?php echo $data[0]->dob ?>
                </td>
                </tr>
              <tr>
                <td>Mobile :</td>
                <td>
                 <?php echo $data[0]->phone ?>
                </td>
              </tr>
              <tr>
                <td>Email :</td>
                <td>
               <?php  echo $data[0]->email ?>
                </td>
              </tr>
              <tr>
                <td>Address :</td>
                <td>
               <?php  echo $data[0]->Address ?>
                </td>
              </tr>
            </table>

          </div>
        </div>
      </section>
      </div>
<?php }else if($data[0]->user_level==2){ ?>
    <div class="dashDetails">
      <section class="section">
        <div class="card">
          <div class="left-container">
            <img class="profile_img" src=" <?php echo URLROOT . $data[0]->profile_image ?>">
            <h4 class="gradienttext-h4">User Name : <?php echo $data[0]->username ?></h4>
            <h4 class="gradienttext-h4">User ID : <?php echo $data[0]->id ?></h4>
          </div>
          <div class="right-container">
            <h3 class="gradienttext">Profile Details</h3>
            <table class="table-profile">
              <tr>
                <td>Name :</td>
                <td>
                  <?php echo $data[0]->username ?>
                </td>
              </tr>
              <td>
              Date Of Birth :</td>
                <td>
                  <?php echo $data[0]->dob ?>
                </td>
                </tr>
              <tr>
                <td>Mobile :</td>
                <td>
                <?php echo $data[0]->phone ?>
                </td>
              </tr>
              <tr>
                <td>Email :</td>
                <td>
               <?php  echo $data[0]->email ?>
                </td>
              </tr>
              <tr>
                <td>Address :</td>
                <td>
                <?php  echo $data[0]->Address ?>
                </td>
              </tr>
            </table>

          </div>
        </div>
      </section>
      <section class="section">
        <div class="card">
          <div class="left-container">
          <h4 class="gradienttext-h4">Bank Passbook</h4>
            <img class="pbook_img" src="<?php echo URLROOT . $data[0]->bank_pbook ?>">
          </div>
          <div class="right-container">
            <h3 class="gradienttext">Bank Details</h3>
            <table class="table-profile">
              <tr>
                <td>Account Name :</td>
                <td><?php echo $data[0]->acc_holder ?></td>
              </tr>
              <tr>
                <td>Account No :</td>
                <td>
               <?php  echo $data[0]->account_no ?>
                </td>
              </tr>
              <tr>
                <td>NIC No :</td>
                <td>
               <?php  echo  $data[0]->nic_no ?>
                </td>
              </tr>
              <tr>
                <td>Bank Name :</td>
                <td>
                <?php echo $data[0]->bank_name ?>
                </td>
              </tr>
              <tr>
                <td>Bank Code :</td>
                <td>
               <?php  echo $data[0]->bank_code ?>
                </td>
              </tr>
              <tr>
                <td>Branch Name :</td>
                <td>
               <?php  echo $data[0]->branch_name ?>
                </td>
              </tr>
              <tr>
                <td>Branch Code :</td>
                <td>
               <?php  echo $data[0]->branch_code ?>
                </td>
              </tr>

            </table>

          </div>
        </div>
      </section>
      
    </div><?php
    } 
?> 
  </div>
  
</body>

</html>

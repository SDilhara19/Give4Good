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
      <i class="fa-solid fa-user"></i>
        <span>Your Profile</span>
      </div>
    </div>
    
<?php if ($_SESSION['userLevel']==1) { 
  echo '<div class="dashDetails">
      <section class="section">
        <div class="card">
          <div class="left-container">
            <img class="profile_img" src=" '. URLROOT . $data[0]->profile_image . '">
            <h4 class="gradienttext-h4">User Name : ' . $data[0]->username . '</h4>
            <h4 class="gradienttext-h4">User ID : ' . $data[0]->id . '</h4>
          </div>
          <div class="right-container">
            <h3 class="gradienttext">Profile Details</h3>
            <table class="table-profile">
              <tr>
                <td>User Name :</td>
                <td>
                  '. $data[0]->username . '
                </td>
              </tr>
              
              <tr>
                <td>Mobile :</td>
                <td>
                 '.$data[0]->phone . '
                </td>
              </tr>
              <tr>
                <td>Email :</td>
                <td>
        if (empty($data[0]->email)) {
    // profile_image is empty
    // Handle the case where profile_image is empty
}        ' . $data[0]->email . '
                </td>
              </tr>
              <tr>
                <td>Address :</td>
                <td>
                ' . $data[0]->Address . '
                </td>
              </tr>
            </table>

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
            <h4 class="gradienttext-h4">User Name : ' .$data[0]->username . '</h4>
            <h4 class="gradienttext-h4">User ID : ' .$data[0]->id . '</h4>
          </div>
          <div class="right-container">
            <h3 class="gradienttext">Profile Details</h3>
            <table class="table-profile">
              <tr>
                <td>Name :</td>
                <td>
                  ' .$data[0]->username . '
                </td>
              </tr>
              <td>
              Date Of Birth :</td>
                <td>
                  '. $data[0]->dob . '
                </td>
                </tr>
              <tr>
                <td>Mobile :</td>
                <td>
                '. $data[0]->phone . '
                </td>
              </tr>
              <tr>
                <td>Email :</td>
                <td>
                ' . $data[0]->email . '
                </td>
              </tr>
              <tr>
                <td>Address :</td>
                <td>
                 ' . $data[0]->Address . '
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
            <img class="pbook_img" src="' . URLROOT . $data[0]->bank_pbook. '">
          </div>
          <div class="right-container">
            <h3 class="gradienttext">Bank Details</h3>
            <table class="table-profile">
              <tr>
                <td>Account Name :</td>
                <td>' .$data[0]->acc_holder .' </td>
              </tr>
              <tr>
                <td>Account No :</td>
                <td>
                ' . $data[0]->account_no .'
                </td>
              </tr>
              <tr>
                <td>NIC No :</td>
                <td>
                ' .  $data[0]->nic_no . '
                </td>
              </tr>
              <tr>
                <td>Bank Name :</td>
                <td>
                ' .$data[0]->bank_name . '
                </td>
              </tr>
              <tr>
                <td>Bank Code :</td>
                <td>
                ' . $data[0]->bank_code . '
                </td>
              </tr>
              <tr>
                <td>Branch Name :</td>
                <td>
                ' . $data[0]->branch_name . '
                </td>
              </tr>
              <tr>
                <td>Branch Code :</td>
                <td>
                ' . $data[0]->branch_code . '
                </td>
              </tr>

            </table>

          </div>
        </div>
      </section>
      
    </div>';
    } 
?> 
  </div>
  <?php require APPROOT . '/views/includes/footer.php' ?>
</body>

</html>
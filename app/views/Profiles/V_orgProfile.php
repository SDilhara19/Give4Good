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
  <?php require APPROOT . '/views/includes/orgProfileSideBar.php' ?>
  <div class="main--content">
    <div class="header--wrapper">
      <div class="header--title">
        <i class="fa-solid fa-bars"></i>
        <span>Your Profile</span>
      </div>

    </div>
    <?php if ($_SESSION['userLevel']==2) { 
    echo '<div class="dashDetails">
      <section class="section">
        <div class="card">
          <div class="left-container">
            <img class="logo_img" src=" ' .URLROOT . $data['executive'][0]->profile_image . '">
            <h4 class="gradienttext-h4">User Name : ' . $data['executive'][0]->username . '</h4>
            <h4 class="gradienttext-h4">User ID : ' . $data['executive'][0]->id . '</h4>
          </div>
          <div class="right-container">
            <h3 class="gradienttext">Profile Details</h3>
            <table class="table-profile">
              <tr>
                <td>Name :</td>
                <td>
                  ' . $data['other'][0]->username . '
                </td>
              </tr>
              <tr>
                <td>Registration No :</td>
                <td>
                  ' . $data['other'][0]->regno . '
                </td>
              </tr>
              <tr>
                <td>Email :</td>
                <td>
                  ' . $data['other'][0]->email . '
                </td>
              </tr>
              <tr>
                <td>Contact No :</td>
                <td>
                  ' . $data['other'][0]->phone . '
                </td>
              </tr>
              <tr>
                <td>Address :</td>
                <td>
                  ' . $data['other'][0]->Address . '
                </td>
              </tr>

            </table>

          </div>
        </div>
      </section>
      </div>';
    }else if($_SESSION['userLevel']==1) {
      echo '<div class="dashDetails">
      <section class="section">
        <div class="card">
          <div class="left-container">
            <img class="logo_img" src=" ' .URLROOT . $data['executive'][0]->profile_image . ' ">
            <h4 class="gradienttext-h4">User Name : ' . $data['executive'][0]->username . '</h4>
            <h4 class="gradienttext-h4">User ID : ' . $data['executive'][0]->id . '</h4>
          </div>
          <div class="right-container">
            <h3 class="gradienttext">Profile Details</h3>
            <table class="table-profile">
              <tr>
                <td>Name :</td>
                <td>
                  ' . $data['other'][0]->username . '
                </td>
              </tr>
              <tr>
                <td>Registration No :</td>
                <td>
                  ' . $data['other'][0]->regno . '
                </td>
              </tr>
              <tr>
                <td>Email :</td>
                <td>
                  ' . $data['other'][0]->email . '
                </td>
              </tr>
              <tr>
                <td>Contact No :</td>
                <td>
                  ' . $data['other'][0]->phone . '
                </td>
              </tr>
              <tr>
                <td>Address :</td>
                <td>
                  ' . $data['other'][0]->Address . '
                </td>
              </tr>

            </table>

          </div>
        </div>
      </section>
      <section class="section">
        <div class="card">
          <div class="right-container">
            <h3 class="gradianttext">President-Details</h3>
            <table class="table-profile">
              <tr>
                <td>Full Name :</td>
                <td>
                  ' . $data['executive'][0]->executive_fullname . '
                </td>
              </tr>
              <tr>
                <td>Designation :</td>
                <td>
                  ' . $data['executive'][0]->executive_designation . '
                </td>
              </tr>
              <tr>
                <td>Mobile :</td>
                <td>
                  ' . $data['executive'][0]->executive_contact . '
                </td>
              </tr>
              <tr>
                <td>Email :</td>
                <td>
                  ' . $data['executive'][0]->executive_email . '
                </td>
              </tr>
              <tr>
                <td>NIC No :</td>
                <td>
                  ' . $data['executive'][0]->executive_nic_no . '
                </td>
              </tr>
              <tr>
                <td>Address :</td>
                <td>
                  ' . $data['executive'][0]->executive_address . '
                </td>
              </tr>

            </table>
             <h3 class="gradianttext">Secretary-Details</h3>
            <table class="table-profile">
              <tr>
            <td>Full Name:</td>
            <td>
            ' . $data['secretary'][0]->secretary_fullname . '
            </td>
        </tr>
        <tr>
                <td>Designation :</td>
                <td>
                  ' . $data['secretary'][0]->secretary_designation . '
                </td>
              </tr>
              <tr>
                <td>Mobile :</td>
                <td>
                  ' . $data['secretary'][0]->secretary_contact . '
                </td>
              </tr>
              <tr>
                <td>Email :</td>
                <td>
                  ' . $data['secretary'][0]->secretary_email . '
                </td>
              </tr>
              <tr>
                <td>NIC No :</td>
                <td>
                  ' . $data['secretary'][0]->secretary_nic_no . '
                </td>
              </tr>
              <tr>
                <td>Address :</td>
                <td>
                  ' . $data['secretary'][0]->secretary_address . '
                </td>
              </tr>
            </table>
            <h3 class="gradianttext">Treasurer-Details</h3>
            <table class="table-profile">
              <tr>
                <td>Full Name :</td>
                <td>
                  ' . $data['treasurer'][0]->treasurer_fullname . '
                </td>
              </tr>
              <tr>
                <td>Designation :</td>
                <td>
                  ' . $data['treasurer'][0]->treasurer_designation . '
                </td>
              </tr>
              <tr>
                <td>Mobile :</td>
                <td>
                  ' . $data['treasurer'][0]->treasurer_contact . '
                </td>
              </tr>
              <tr>
                <td>Email :</td>
                <td>
                  ' . $data['treasurer'][0]->treasurer_email . '
                </td>
              </tr>
              <tr>
                <td>NIC No :</td>
                <td>
                  ' . $data['treasurer'][0]->treasurer_nic_no . '
                </td>
              </tr>
              <tr>
                <td>Address :</td>
                <td>
                  ' . $data['treasurer'][0]->treasurer_address . '
                </td>
              </tr>
            </table>
          </div>
        </div>
      </section>
      <section class="section">
        <div class="card">
        <div class="left-container">
            <img class="logo_img" src=" ' .URLROOT . $data['other'][0]->bank_pbook . '">
            </div>
          <div class="right-container">
            <h3 class="gradianttext">Bank Details</h3>
            <table class="table-profile">
              <tr>
                <td>Account Name :</td>
                <td>
                  ' . $data['other'][0]->acc_holder . '
                </td>
              </tr>
              <tr>
                <td>Account No :</td>
                <td>
                  ' . $data['other'][0]->account_no . '
                </td>
              </tr>
              <tr>
                <td>Bank Name :</td>
                <td>
                  ' . $data['other'][0]->bank_name . '
                </td>
              </tr>
              <tr>
                <td>Bank Code :</td>
                <td>
                  ' . $data['other'][0]->bank_code . '
                </td>
              </tr>
              <tr>
                <td>Branch Name :</td>
                <td>
                  ' . $data['other'][0]->branch_name . '
                </td>
              </tr>
              <tr>
                <td>Branch Code :</td>
                <td>
                  ' . $data['other'][0]->branch_code . '
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
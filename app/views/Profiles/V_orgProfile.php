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
    <div class="dashDetails">
      <section class="section">
        <div class="card">
          <div class="left-container">
            <img class="logo_img" src="<?php echo URLROOT . $data[0]->profile_image; ?>">
            <h4 class="gradienttext-h4">User Name : <?php echo $data[0]->username; ?></h4>
            <h4 class="gradienttext-h4">User ID : <?php echo $data[0]->id; ?></h4>
          </div>
          <div class="right-container">
            <h3 class="gradienttext">Profile Details</h3>
            <table class="table-profile">
              <tr>
                <td>Name :</td>
                <td>
                  <?php echo $data[0]->username; ?>
                </td>
              </tr>
              <tr>
                <td>Mobile :</td>
                <td>
                  <?php echo $data[0]->phone; ?>
                </td>
              </tr>
              <tr>
                <td>Email :</td>
                <td>
                  <?php echo $data[0]->email; ?>
                </td>
              </tr>
              <tr>
                <td>Address :</td>
                <td>
                  <?php echo $data[0]->username; ?>
                </td>
              </tr>

            </table>

          </div>
        </div>
      </section>
      <section class="section">
        <div class="card">
          <div class="right-container">
            <h3 class="gradianttext">President's Details</h3>
            <table class="table-profile">
              <tr>
                <td>Name :</td>
                <td>SA Silva</td>
              </tr>
              <tr>
                <td>Email :</td>
                <td>silva1@gmail.com</td>
              </tr>
              <tr>
                <td>Contact :</td>
                <td>0784512365</td>
              </tr>
            </table>
             <h3 class="gradianttext">Secretary's Details</h3>
            <table class="table-profile">
              <tr>
                <td>Name :</td>
                <td>SA Silva</td>
              </tr>
              <tr>
                <td>Email :</td>
                <td>silva1@gmail.com</td>
              </tr>
              <tr>
                <td>Contact :</td>
                <td>0784512365</td>
              </tr>
            </table>
            <h3 class="gradianttext">Treasurer's Details</h3>
            <table class="table-profile">
              <tr>
                <td>Name :</td>
                <td>SA Silva</td>
              </tr>
              <tr>
                <td>Email :</td>
                <td>silva1@gmail.com</td>
              </tr>
              <tr>
                <td>Contact :</td>
                <td>0784512365</td>
              </tr>

            </table>
          </div>
        </div>
      </section>
      
    </div>
  </div>
  <?php require APPROOT . '/views/includes/footer.php' ?>
</body>

</html>
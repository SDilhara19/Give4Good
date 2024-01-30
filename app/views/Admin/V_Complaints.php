<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GIVE4GOOD</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/styles.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/components-3/Admin_style.css">
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
        <!-- <i class="fa-solid fa-bars"></i> -->
        <span>Complaints on fundraisers</span>
      </div>
      <div class="user--info">
        <div class="search--box">
          <i class="fa-solid fa-magnifying-glass"></i>
          <input type="text" placeholder="Search Name" />
        </div>
      </div>
    </div>
    <div class="dashDetails">
      <div class="container">
        <div class="table-wrapper">
          <table>
            <thead>
              <tr>
                <th>Date</th>
                <th>Reporter</th>
                <th>Fundraiser Title</th>
                <th>Fundraiser</th>
                <th>Report</th>
                <th>Reporter details</th>
                <th>Fundraiser details</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>23/02/2024</td>
                <td>SanduniDM</td>
                <td>Help John travel for work</td>
                <td>DiliniDM</td>
                <td>I personally know this fundraiser thus I beleive this is a scam</td>
                <td class="action-td">
                  <a href="<?php echo URLROOT ?>/Admin_Merchandise/info/<?php echo $merchandise->id ?>"
                    class="action-icons">
                    <i class="fa-solid fa-info"></i>
                  </a>
                </td>
                <td>
                  <a href="<?php echo URLROOT ?>/Admin_Stories/setDeactive/<?php echo $story->id ?>"
                    class="action-icons">
                    <i class="fa-solid fa-info"></i>
                  </a>

                </td>
              </tr>
          </table>
        </div>
      </div>
    </div>
</body>

</html>
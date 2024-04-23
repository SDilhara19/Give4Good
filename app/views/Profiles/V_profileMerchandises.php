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
        <span>Your Merchandises</span>
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
                <th><a href="Fundraiser/fundraiser">Fundraiser</a></th>
                <th>Price</th>
                <th>Initial Stock</th>
                <th>Current Stock</th>
                <th>Amount for fund</th>
                <th>Description</th>
                <th>Colors</th>
                <th>Actions</ </tr>
            </thead>
            <tbody>
              <?php
              foreach ($data as $profileMerchandises) {
                ?>
                <tr>
                  <td><?php echo $profileMerchandises->fundraiser; ?></td>
                  <td><?php echo $profileMerchandises->price; ?></td>
                  <td><?php echo $profileMerchandises->initial_stock; ?></td>
                  <td><?php echo $profileMerchandises->current_stock; ?></td>
                  <td><?php echo $profileMerchandises->amount_for_fund; ?></td>
                  <td><?php echo $profileMerchandises->description; ?></td>
                  <td>
                    <?php echo $profileMerchandises->colour1; ?>
                    <?php echo $profileMerchandises->colour2; ?>
                    <?php echo $profileMerchandises->colour3; ?>
                    <?php echo $profileMerchandises->colour4; ?>
                  </td>
                  <td>
                    <div class="submit-button-div">
                      <button class="button-1-green" type="submit">View</button>
                    </div>
                  </td>
                </tr>
                <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <?php require APPROOT . '/views/includes/footer.php' ?>
</body>

</html>
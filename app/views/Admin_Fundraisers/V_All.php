<html>
<html lang="en">

<head>
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
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
<<<<<<< HEAD
</head>

<body>
  <?php require APPROOT . '/views/includes/admin-header.php' ?>
  <?php require APPROOT . '/views/includes/admin-dashboard.php' ?>
  <div class="main--content">
    <?php require APPROOT . '/views/Admin_Fundraisers/fundraiser-header.php' ?>
    <div class="dashDetails">
      <div class="container">
        <div class="table-wrapper">
          <table>
=======
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
        <?php require APPROOT . '/views/Admin_Fundraisers/fundraiser-header.php' ?>
        <div class="dashDetails">
            <div class="container">
                <div class="table-wrapper">
                <table>
>>>>>>> main
=======
</head>

<body>
  <?php require APPROOT . '/views/includes/admin-header.php' ?>
  <?php require APPROOT . '/views/includes/admin-dashboard.php' ?>
  <div class="main--content">
    <?php require APPROOT . '/views/Admin_Fundraisers/fundraiser-header.php' ?>
    <div class="dashDetails">
      <div class="container">
        <div class="table-wrapper">
          <table>
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
            <thead>
              <tr>
                <th>Fundraiser ID</th>
                <th>Username</th>
                <th>Category</th>
                <th class="action-th">Title</th>
                <th>Required Amount</th>
                <th>Amount Collected</th>
                <th>Created Date</th>
                <th>Modified Date</th>
                <th>Requirement End Date</th>
<<<<<<< HEAD
<<<<<<< HEAD
=======
                <th>Features Used</th>
                <th>Merchs</th>
>>>>>>> main
=======
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
                <th>User Type</th>
                <th>Status</th>
                <th class="action-th">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($data as $fundraiser) {
<<<<<<< HEAD
<<<<<<< HEAD
                ?>

                <tr>
                  <td>
                    <span>
                      <span class="fi fi-af"></span>
                    </span>
                    <span>
                      <?php echo $fundraiser->fundraiser_id; ?>
                    </span>
                  </td>
                  <td>
                    <?php echo $fundraiser->username; ?>
                  </td>
                  <td>
                    <?php echo $fundraiser->Category; ?>
                  </td>
                  <td>
                    <?php echo $fundraiser->title; ?>
                  </td>
                  <td>
                    <?php echo $fundraiser->amount; ?>
                  </td>
                  <td><?php echo $fundraiser->amount_collected; ?></td>
                  <td><?php echo $fundraiser->created_date; ?></td>
                  <td><?php echo $fundraiser->modified_date; ?></td>
                  <td><?php echo $fundraiser->end_date; ?></td>
                  <td>
                    <?php echo $fundraiser->type; ?>
                  </td>
                  <td>
                    <?php echo $fundraiser->status; ?>
                  </td>
                  <td class="action-td">
                    <a href="<?php echo URLROOT ?>/Admin_Fundraisers/fundraiser_one/<?php echo $fundraiser->fundraiser_id ?>"
                      class="action-icons">
                      <i class="fa-solid fa-info"></i>
                    </a>

                    <?php if ($fundraiser->status == 'Active') { ?>
                      <a class="action-icons">
                        <i class="fa-solid fa-lock" onclick='if(window.confirm("Are you sure you want to deactivate the <?php echo $fundraiser->fundraiser_id ?>")){
     window.open("<?php echo URLROOT ?>/Admin_Fundraisers/setDeactive/<?php echo $fundraiser->fundraiser_id ?>");
   }'>
                        </i>
                      </a>
                    <?php } ?>

                    <?php if ($fundraiser->status == 'Deactive') { ?>
                      <a class="action-icons">
                        <i class="fa-solid fa-check" onclick='if(window.confirm("Are you sure you want to deactivate the <?php echo $fundraiser->fundraiser_id ?>")){
     window.open("<?php echo URLROOT ?>/Admin_Fundraisers/setActive/<?php echo $fundraiser->fundraiser_id ?>");
   }'>
                        </i>
                      </a>
                    <?php } ?>

                    <?php if ($fundraiser->status == 'Pending') { ?>
                      <a class="action-icons">
                        <i class="fa-solid fa-lock" onclick='if(window.confirm("Are you sure you want to deactivate the <?php echo $fundraiser->fundraiser_id ?>")){
        window.open("<?php echo URLROOT ?>/Admin_Fundraisers/setDeactive/<?php echo $fundraiser->fundraiser_id ?>");
    }'>
                        </i>
                      </a>


                      <a class="action-icons">
                        <i class="fa-solid fa-check" onclick='if(window.confirm("Are you sure you want to deactivate the <?php echo $fundraiser->fundraiser_id ?>")){
     window.open("<?php echo URLROOT ?>/Admin_Fundraisers/setActive/<?php echo $fundraiser->fundraiser_id ?>");
   }'>
                        </i>
                      </a>
                    <?php } ?>
                  </td>
                </tr>
                <?php
              }
              ?>
          </table>
        </div>
      </div>
    </div>
  </div>
=======
              ?>
=======
                ?>
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d

                <tr>
                  <td>
                    <span>
                      <span class="fi fi-af"></span>
                    </span>
                    <span>
                      <?php echo $fundraiser->fundraiser_id; ?>
                    </span>
                  </td>
                  <td>
                    <?php echo $fundraiser->username; ?>
                  </td>
                  <td>
                    <?php echo $fundraiser->Category; ?>
                  </td>
                  <td>
                    <?php echo $fundraiser->title; ?>
                  </td>
                  <td>
                    <?php echo $fundraiser->amount; ?>
                  </td>
                  <td><?php echo $fundraiser->amount_collected; ?></td>
                  <td><?php echo $fundraiser->created_date; ?></td>
                  <td><?php echo $fundraiser->modified_date; ?></td>
                  <td><?php echo $fundraiser->end_date; ?></td>
                  <td>
                    <?php echo $fundraiser->type; ?>
                  </td>
                  <td>
                    <?php echo $fundraiser->status; ?>
                  </td>
                  <td class="action-td">
                    <a href="<?php echo URLROOT ?>/Admin_Fundraisers/fundraiser_one/<?php echo $fundraiser->fundraiser_id ?>"
                      class="action-icons">
                      <i class="fa-solid fa-info"></i>
                    </a>

                    <?php if ($fundraiser->status == 'Active') { ?>
                      <a class="action-icons">
                        <i class="fa-solid fa-lock" onclick='if(window.confirm("Are you sure you want to deactivate the <?php echo $fundraiser->fundraiser_id ?>")){
     window.open("<?php echo URLROOT ?>/Admin_Fundraisers/setDeactive/<?php echo $fundraiser->fundraiser_id ?>");
   }'>
                        </i>
                      </a>
                    <?php } ?>

                    <?php if ($fundraiser->status == 'Deactive') { ?>
                      <a class="action-icons">
                        <i class="fa-solid fa-check" onclick='if(window.confirm("Are you sure you want to deactivate the <?php echo $fundraiser->fundraiser_id ?>")){
     window.open("<?php echo URLROOT ?>/Admin_Fundraisers/setActive/<?php echo $fundraiser->fundraiser_id ?>");
   }'>
                        </i>
                      </a>
                    <?php } ?>

                    <?php if ($fundraiser->status == 'Pending') { ?>
                      <a class="action-icons">
                        <i class="fa-solid fa-lock" onclick='if(window.confirm("Are you sure you want to deactivate the <?php echo $fundraiser->fundraiser_id ?>")){
        window.open("<?php echo URLROOT ?>/Admin_Fundraisers/setDeactive/<?php echo $fundraiser->fundraiser_id ?>");
    }'>
                        </i>
                      </a>


                      <a class="action-icons">
                        <i class="fa-solid fa-check" onclick='if(window.confirm("Are you sure you want to deactivate the <?php echo $fundraiser->fundraiser_id ?>")){
     window.open("<?php echo URLROOT ?>/Admin_Fundraisers/setActive/<?php echo $fundraiser->fundraiser_id ?>");
   }'>
                        </i>
                      </a>
                    <?php } ?>
                  </td>
                </tr>
                <?php
              }
              ?>
          </table>
        </div>
      </div>
    </div>
<<<<<<< HEAD
>>>>>>> main
=======
  </div>
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
</body>

</html>
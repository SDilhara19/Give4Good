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
        <span>Organizational Users</span>
      </div>
      <div class="user--info">
        <div class="search--box">
          <i class="fa-solid fa-magnifying-glass"></i>
          <input type="text" placeholder="Search Name"/>
        </div>  
      </div>   
    </div>
    <div class ="dashDetails">  
  <div class="container">
    <div class="table-wrapper">
      <table>
        <thead>
          <tr>
 
            <th>ID</th>
            <th>Username</th>
            <th>Registration No</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Account Status</th>
            <th class="action-th">Actions</th>
 
        </thead>
        <tbody>
              <?php
              foreach ($data as $users_organisation) {
                ?>
                <tr>
                  <td>
                    <span>
                      <span class="fi fi-al"></span>
                    </span>
                    <span>
                      <?php echo $users_organisation->id; ?>
                    </span>
                  </td>
                  <td>
                    <?php echo $users_organisation->username; ?>
                  </td>
                  <td>
                    <?php echo $users_organisation->regno; ?>
                  </td>
                  <td>
                    <?php echo $users_organisation->email; ?>
                  </td>
                  <td>
                    <?php echo $users_organisation->phone; ?>
                  </td>
                  <?php
                  if ($users_organisation->user_level == 2) {
                    echo '<td> Super</td>';
                  } else if ($users_organisation->user_level == 1) {
                    echo '<td> Initial</td>';
                  }
                  ?>

                  <td class="action-td">
                    <a href="" class="action-icons"><i class="fa-solid fa-info"></i></a>
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
</body>
</html>

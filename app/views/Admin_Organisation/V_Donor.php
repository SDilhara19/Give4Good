<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GIVE4GOOD</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/styles.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/components-3/Admin_style.css">
  <script src="https://kit.fontawesome.com/9e9a03ae37.js" crossorigin="anonymous"></script>
</head>

<body>
<?php require APPROOT . '/views/includes/admin-header.php' ?>
<?php require APPROOT . '/views/includes/admin-dashboard.php' ?>
    
  <div class="main--content">
    <div class="header--wrapper">
      <div class="header--title">
        <i class="fa-solid fa-bars"></i>
        <span>Donor Organizations</span>
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
            <th>User Name</th>
            <th>Type</th>
            <th>Registration No</th>
            <th>Email</th>
            <th>Password</th>
            <th>Status</th>
            <th>Actions</th>
 
        </thead>
        <tbody>
          <tr>
            <td>
              <span>
                <span class="fi fi-af"></span>
              </span>
              <span>001</span>
            </td>
            <td>rotract</td>
            <td></td>
            <td>122/rt/21</td>
            <td>rotract001@gmail.com</td>
            <td>A@3ghd</td>
 
            <td>Active</td>
            <td>
              <button onclick class="data_view">View</button>
               <button onclick class="data_deactivate">Deactivate</button>
            </td>
 
          </tr>
          <tr>
            <td>
              <span>
                <span class="fi fi-af"></span>
              </span>
              <span>002</span>
            </td>
            <td>abc</td>
            <td></td>
            <td>122/ad/21</td>
            <td>abc32@gmail.com</td>
            <td>A@3ghd</td>
 
            <td>Active</td>
            <td>
              <button onclick class="data_view">View</button>
               <button onclick class="data_deactivate">Deactivate</button>
            </td>
 
          </tr>
        </tbody>
      </table>
      </div>
    </div>
  </div>
</body>
</html>

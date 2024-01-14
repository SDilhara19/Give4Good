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
        <i class="fa-solid fa-bars"></i>
        <span>Individual Donors</span>
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
            <th>Email</th>
            <th>Password</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <span>
                <span class="fi fi-af"></span>
              </span>
              <span>001</span>
            </td>
            <td>janith</td>
            <td>janith001@gmail.com</td>
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
                <span class="fi fi-al"></span>
              </span>
              <span>002</span>
            </td>
            <td>shalini</td>
            <td>shalini@002gmail.com</td>
            <td>V@3ghd</td>
            <td>Deactive</td>
            <td>
               <button onclick class="data_view">View</button>
              <button onclick class="data_reactivate">Reactivate</button>
            </td>
          </tr>
          <tr>
            <td>
              <span>
                <span class="fi fi-dz"></span>
              </span>
              <span>003</span>
            </td>
            <td>sanduni</td>
            <td>sanduni@003gmail.com</td>
            <td>S@3ghd</td>
            <td>Active</td>
            <td>
               <button onclick class="data_view">View</button>
               <button onclick class="data_deactivate">Deactivate</button>
            </td>
          </tr>
          <tr>
            <td>
              <span>
                <span class="fi fi-al"></span>
              </span>
              <span>004</span>
            </td>
            <td>bhagya</td>
            <td>bhagya@004gmail.com</td>
            <td>B@3ghd</td>
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
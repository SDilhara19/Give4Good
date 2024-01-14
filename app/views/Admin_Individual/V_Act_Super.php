<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIVE4GOOD</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
<<<<<<< HEAD
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/styles.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/components-3/Admin_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
=======
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/styles.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/components-3/Admin_style.css">
>>>>>>> bf1947f6c6cc8ab1b1e2816599c2c71868feb83c
    <script src="https://kit.fontawesome.com/9e9a03ae37.js" crossorigin="anonymous"></script>
  </head>

  <body>
  <?php require APPROOT . '/views/includes/admin-header.php' ?>
  <?php require APPROOT . '/views/includes/admin-dashboard.php' ?>
    
  <div class="main--content">
    <div class="header--wrapper">
      <div class="header--title">
        <i class="fa-solid fa-bars"></i>
        <span>Donee Individuals (Active)</span>
      </div>
      <div class="header--buttons">
        <a href="AdmindoneeIndividuals.html"><button class="all-button">All</button></a>
        <a href="AdmindoneeIndividuals-active.html"><button class="active-button">Active</button></a>
        <a href="AdmindoneeIndividuals-deactivated.html"><button class="deactivated-button">Deactivated</button></a>
        <a href="AdmindoneeIndividuals-pending.html"><button class="pending-button">Pending</button></a>
      </div>
      <div class="user--info">
        <div class="search--box">
          <i class="fa-solid fa-magnifying-glass"></i>
          <input type="text" placeholder="Search Name"/>
        </div>  
      </div>
    </div>

    <div class="dashDetails">
    <div class="container">
    <div class="table-wrapper">
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>NIC No</th>
            <th>NIC Image</th>
            <th>Bank Code</th>
            <th>Bank Name</th>
            <th>Branch Code</th>
            <th>Branch Name</th>
            <th>Bank Account No</th>
            <th>Passbook Photo</th>
            <th>User ID</th>
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
            <td>janith thenuja</td>
            <td>1233</td>
            <td>janithnic.jpg</td>
            <td>1255</td>
            <td>sampath</td>
            <td>78</td>
            <td>colombo07</td>
            <td>7276464</td>
            <td>janithpb.png</td>
            <td>1</td>
            <td><button onclick class="data_view">View</button>
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
                <td>shalini imasha</td>
                <td>1233</td>
                <td>shalininic.jpg</td>
                <td>1255</td>
                <td>sampath</td>
                <td>78</td>
                <td>colombo07</td>
                <td>7276464</td>
                <td>shalinipb.png</td>
                <td>2</td>
                <td><button onclick class="data_view">View</button>
                  <button onclick class="data_deactivate">Deactivate</button>
                </td>
          </tr>
          <tr>
            <td>
                <span>
                    <span class="fi fi-af"></span>
                  </span>
                  <span>003</span>
                </td>
                <td>sanduni dilhara</td>
                <td>1233</td>
                <td>sanduninic.jpg</td>
                <td>125</td>
                <td>commercial</td>
                <td>28</td>
                <td>colombo07</td>
                <td>7276464</td>
                <td>sanduni.png</td>
                <td>3</td>
                <td><button onclick class="data_view">View</button>
                  <button onclick class="data_deactivate">Deactivate</button>
              </td>
          </tr>
          <tr>
            <td>
                <span>
                    <span class="fi fi-af"></span>
                  </span>
                  <span>004</span>
                </td>
                <td>hansini bhagya</td>
                <td>1233</td>
                <td>bhagyanic.jpg</td>
                <td>155</td>
                <td>boc</td>
                <td>78</td>
                <td>colombo07</td>
                <td>7276364</td>
                <td>bhagyapb.png</td>
                <td>4</td>
                <td><button onclick class="data_view">View</button>
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
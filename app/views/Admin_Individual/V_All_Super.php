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
        <span>Individual Donees</span>
      </div>
      <div class="header--buttons">
        <a href="?php echo URLROOT?>/Admin_Individuals/index"><button class="all-button">All</button></a>
        <a href="?php echo URLROOT?>/Admin_Individuals/active"><button class="active-button">Active</button></a>
        <a href="?php echo URLROOT?>/Admin_Individuals/deactive"><button class="deactivated-button">Deactivated</button></a>
        <a href="?php echo URLROOT?>/Admin_Individuals/pending"><button class="pending-button">Pending</button></a>
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
     <div class="data_table">
      <table>
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
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
        <?php 
        foreach ($data as $super_individual) {
            ?>
          <tr>
            <td>
              <span>
                <span class="fi fi-af"></span>
              </span>
              <span><?php echo $super_individual->user_id; ?></span>
            </td>
            <td><?php echo $super_individual->username; ?></td>
            <td>1233</td>
            <td>janithnic.jpg</td>
            <td>1255</td>
            <td>sampath</td>
            <td>78</td>
            <td>colombo07</td>
            <td>7276464</td>
            <td>janithpb.png</td>
            <td>1</td>
            <td>Active</td>
            <td>
               <button onclick class="data_view">View</button>
              <button onclick="window.location.href = '<?php echo URLROOT ?>/Admin_Individual/setReactive/<?php echo $story->id ?>'" class="data_view">Reactive</button>
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
</div>   
</body>
</html>
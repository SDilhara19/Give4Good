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
</head>

<body>
<?php require APPROOT . '/views/includes/admin-header.php' ?>
<?php require APPROOT . '/views/includes/admin-dashboard.php' ?>
        
      <div class="main--content">
<<<<<<< HEAD
        <div class="header--wrapper">
          <div class="header--title">
            <i class="fa-solid fa-bars"></i>
            <span>Stories (Deactivated)</span>
          </div>
          <div class="header--buttons">
            <a href="?php echo URLROOT?>/Admin_Stories/index"><button class="all-button">All</button></a>
            <a href="?php echo URLROOT?>/Admin_Stories/active"><button class="eactive-button">Active</button></a>
            <a href="?php echo URLROOT?>/Admin_Stories/pending"><button class="pending-button">Pending</button></a>
            <a href="?php echo URLROOT?>/Admin_Stories/reject"><button class="deactivated-button">Rejected</button></a>
          </div>
          <div class="user--info">
            <div class="search--box">
              <i class="fa-solid fa-magnifying-glass"></i>
              <input type="text" placeholder="Search Name"/>
            </div>  
          </div>
        </div>
=======
      <?php require APPROOT . '/views/Admin_Stories/stories-header.php' ?>
>>>>>>> aa6a886476bc786920e5a7a86d6e1542a9fc89f6
        <div class ="dashDetails">
        <div class="container">
        <div class="table-wrapper">
        <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>User Name</th>
            <th>Title</th>
            <th>Description</th>
            <th>Contact</th>
            <th>Image</th>
            <th>Indvidual Or Organization</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>rotract</td>
            <td>Blood Donation</td>
            <td>-</td>
            <td>0779887745</td>
            <td>blood.png</td>
            <td>Org</td>
            <td>
               <button onclick class="data_view">View</button>
               <button onclick class="data_reactivate">Reactivate</button>
            </td>
        </tr>
    </table>
    </div>
</div>
</div>
</body>
</html>

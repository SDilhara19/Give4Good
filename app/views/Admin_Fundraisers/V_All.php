<html>
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
            <span>Fundraisers</span>
          </div>
          <div class="header--buttons">
            <a href="AdminFundraisers.html"><button class="all-button">All</button></a>
            <a href="AdminFundraisers-active.html"><button class="active-button">Active</button></a>
            <a href="AdminFundraisers-deactivated.html"><button class="deactivated-button">Deactivated</button></a>
            <a href="AdminFundraisers-pending.html"><button class="pending-button">Pending</button></a>
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
            <th>View ID</th>
            <th>Donee ID</th>
            <th>Title</th>
            <th>Category</th>
            <th>Story</th>
            <th>Story Images</th>
            <th>Required Amount</th>
            <th>Created Date</th>
            <th>Modified Date</th>
            <th>Requirement End Date</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        foreach ($data as $fundraiser) {
            ?>

        <tr>
            <td><?php echo $fundraiser->id; ?></td>
            <td><?php echo $fundraiser->username; ?></td>
            <td><?php echo $fundraiser->title; ?></td>
            <td>-</td>
            <td><?php echo $fundraiser->contact; ?></td>
            <td>blood.png</td>
            <td><?php echo $fundraiser->type; ?></td>
            <td><?php echo $fundraiser->status; ?></td>
            <td>
            <td>
                <button onclick class="data_view">View</button>
                <button onclick class="data_reactivate">Reactivate</button>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
  </div>
</body>
</html>

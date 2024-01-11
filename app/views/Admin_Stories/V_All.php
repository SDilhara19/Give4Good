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
<?php require APPROOT . '/views/includes/header.php' ?>
    <div class="side-nav">
        <a href="#" class="logo">
          <img src="LogoBlack.png" alt="" class="LOGO-img">
        </a>
        <ul class="nav-links">
            <li><a href="Admindashboard.html"><i class="fa-brands fa-windows"></i><p>Dashboard</p></a></li>
            <li><a href="AdmindoneeIndividuals.html"><i class="fa-solid fa-people-group"></i><p>Individual Donees</p></a></li>
            <li><a href="AdmindonorIndividuals.html"><i class="fa-solid fa-people-group"></i><p>Individual Donors</p></a></li>
            <li><a href="AdmindonorOrganizations.html"><i class="fa-solid fa-people-roof"></i><p>Donor Organizations</p></a></li>
            <li><a href="AdmindoneeOrganizations.html"><i class="fa-solid fa-people-roof"></i><p>Donee Organizations</p></a></li>
            <li><a href="AdminFundraisers-active.html"><i class="fa-solid fa-table"></i><p>Fundraisers</p></a></li>
            <li><a href="AdminDonations.html"><i class="fa-solid fa-table"></i><p>Donations</p></a></li>
            <li><a href="AdminStories.html"><i class="fa-solid fa-table"></i><p>Stories</p></a></li>
            <li><a href="AdminComplaigns.html"><i class="fa-regular fa-comments"></i><p>Complaigns</p></a></li>
            <li><a href="AdminaddAdmin.html"><i class="fa-solid fa-user-plus"></i><p>Add an admin</p></a></li>
            <li><a href="#"><i class="fa-solid fa-right-from-bracket"></i><p>Log out</p></a></li>
            <div class="active"></div>
        </ul>
      </div>
      <div class="main--content">
        <div class="header--wrapper">
          <div class="header--title">
            <i class="fa-solid fa-bars"></i>
            <span>Stories</span>
          </div>
          <div class="header--buttons">
            <a href="AdminStories-active.html"><button class="active-button">Active</button></a>
            <a href="AdminStories-deactivated.html"><button class="deactivated-button">Deactivated</button></a>
            <a href="AdminStories-pending.html"><button class="pending-button">Pending</button></a>
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
            <th>Title</th>
            <th>Description</th>
            <th>Contact</th>
            <th>Image</th>
            <th>Indvidual Or Organization</th>
            <th>Status</th>
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
            <td>Deactive</td>
            <td>
                <button onclick class="data_view">View</button>
                <button onclick class="data_reactivate">Reactivate</button>
            </td>
            </td>
        </tr>
    </table>
    </div>
</div>
</div>

</body>
</html>

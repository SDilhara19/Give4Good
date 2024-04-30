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
  <script src="https://kit.fontawesome.com/9e9a03ae37.js" crossorigin="anonymous"></script>
</head>
<body>
<?php require APPROOT . '/views/includes/header.php' ?>
<?php require APPROOT . '/views/includes/indvProfileSideBar.php' ?>

    
  <div class="main--content">
    <div class="header--wrapper">
      <div class="header--title">
      <i class="fa-regular fa-bell"></i>
        <span>Notifications</span>
      </div>
      <div class="search-box">
        <div class="search-bar">
          <input type="text" name="search" placeholder="Search Give4Good">
          <i class="fa-solid fa-magnifying-glass"></i>
          
        </div>
      </div>

    </form>
      <!-- <div class="user--info">
        <div class="search--box">
          <i class="fa-solid fa-magnifying-glass"></i>
          <input type="text" placeholder="Search Name"/>
        </div>  
      </div>  -->
    </div>
    <div class="dashDetails">
    <div class="container">
        <div class="table-wrapper">
        <table>
        <thead>
        <tr>
            <th>Date</th>
            <th>Payment ID</th>
            <th>Donor ID</th>
            <th>Donor Username</th>
            <th>Fundraiser ID</th>
            <th>Fundraiser Title</th>
            <th>Amount(Rs.)</th>
            <th>Contribution(Rs.)</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>2023-12-04</td>
          <td>205</td>
          <td>13</td>
          <td> cpplpvjvjnjv</td>
          <td>2000.00</td>
          <td></td>
        </tr>   
      
        </tbody>
    </table>  
  </div>
</div>
</div>
</body>
<?php require APPROOT . '/views/includes/footer.php' ?>
</html>

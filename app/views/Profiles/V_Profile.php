<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GIVE4GOOD</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon"> 
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/components/main-styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>

<body>
    <?php require APPROOT . '/views/includes/header.php' ?>
    <div class="profile-side-bar">
        <ul class="profile-list">
            
                <li class="profile-list-items" onclick="toggleSection('personal-info')">
                    <i class="fa-solid fa-user"></i>
                    <p class="text-2">Personal Info</p>
                </li>

                <li class="profile-list-items" onclick="toggleSection('donations')">
                    <i class="fa-solid fa-user"></i>
                    <p class="text-2">Donations</p>
                </li>
            
           
        </ul>
     
        </div>  
        
    <main class="profile-main">
        <div id="personal-info" class="profile-section">
            Personal Info
        </div>
        <div id="donations" class="profile-section">
            Donationsw
        </div>
        <div class="profile-section">
            Fundraisers
        </div>
        <div class="profile-section">
            Merchs
        </div>
        
        <div class="profile-section">
            Stories
        </div>
        
        <div class="profile-section">
            Actons/complains
        </div>
        

    </main>
    <!-- <script src="../../../public/js/profile.js"></script> -->
<script src="<?php echo URLROOT ?>/public/js/profile.js"></script>
    
    <?php require APPROOT . '/views/includes/footer.php' ?> 
</body>
</html>       
     
  
   
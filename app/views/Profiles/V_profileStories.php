<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GIVE4GOOD</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/styles.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/components/profile_style.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/components/main-styles.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/9e9a03ae37.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
  <?php require APPROOT . '/views/includes/header.php' ?>
  <?php if ($_SESSION['userType'] == 'individual') {
    require APPROOT . '/views/includes/indvProfileSideBar.php';
  } else if ($_SESSION['userType'] == 'organisation') {
    require APPROOT . '/views/includes/orgProfileSideBar.php';
  }
  ?>
  <div class="main--content">
    <div class="header--wrapper">
      <div class="header--title">
        <i class='bx bxs-book-heart bx-sm'></i>
        <span>Your Stories</span>
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
          <input type="text" placeholder="Search Name" />
        </div>
      </div> -->
    </div>
    <div class="dashDetails">
      <div class="container">
        <!-- <div class="table-wrapper"> -->
          <!-- <table>
            <thead>
              <tr>
                <th>Title</th>
                <th>Decription</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($data as $profileStories) {
                ?>
                <tr>
                  <td><?php echo $profileStories->title; ?></td>
                  <td><?php echo $profileStories->description; ?></td>
                  <td><?php echo $profileStories->status; ?></td>
                  <td>
                    <div class="submit-button-div">
                      <button class="button-1-green" type="submit">View</button>
                    </div>
                    <div class="submit-button-div">
                      <button class="button-2-yellow" type="submit">Edit</button>
                    </div>
                    <div class="submit-button-div">
                      <button class="button-3-red" type="submit">Delete</button>
                    </div>
                  </td>
                </tr>
                <?php
              }
              ?>
            </tbody>
          </table> -->
     
        
    
       <div class="stories-container">
       <?php 
                  foreach ($data as $story) {
                  ?>
        <div class="story-card" id="<?php echo $story->id; ?>">
            <div class="story-card-left">
                <div class="story-card-img-container">
                    
                    <img src="<?php echo URLROOT . $story->image; ?>" alt="">
                </div>
            </div>
            <div class="story-card-right">
                <div class="story-description">
                    <h1><?php echo $story->title; ?></h1>
                    <div class="fundraiser-donee-name">
                    <?php
              if ($story->type == "individual") { ?>
                <i class="fa-solid fa-user fa-sm text-3"></i>
              <?php } elseif ($story->type == "organisation") { ?>
                <i class="fa-solid fa-building fa-sm text-3"></i>
              <?php } ?>
                        <p class="text-4">
    <?php echo ($story->username == $_SESSION['userName']) ? 'Mine' : $story->username; ?>
</p>

                      </div>
                    <p><?php echo $story->description; ?>
                       
                        
                        </p>
                </div>
                <div class="story-contact">
                    <table>
                        <tr>
                            <th>email:</th>
                            <td class="text-3"><?php echo $story->email; ?></td>
                        </tr>
                        <tr>
                            <th>Contact:</th>
                            <td class="text-3"><?php echo $story->contact; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <?php 
                  }
                  ?>
  
       </div>
    



        </div>
      </div>
    </div>
  </div>
</body>
<?php require APPROOT . '/views/includes/footer.php' ?>

</html>
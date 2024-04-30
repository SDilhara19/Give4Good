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
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>

<?php require APPROOT . '/views/includes/header.php' ?>
<?php require APPROOT . '/views/includes/side-bar.php' ?>

    <main>
        <div class="story-heading">
            <h1>Stories</h1>
            <a href="<?php echo URLROOT ?>/Stories/add"><i class="fa-solid fa-circle-plus fa-2xl"></i></a>
        </div>
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
    </main>
<script src="<?php echo URLROOT ?>/public/js/header.js"></script>

</body>

</html>
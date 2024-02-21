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
        <div class="story-card">
            <div class="story-card-left">
                <div class="story-card-img-container">
                    
                    <img src="<?php echo URLROOT . $story->image; ?>" alt="">
                </div>
            </div>
            <div class="story-card-right">
                <div class="story-description">
                    <h1><?php echo $story->title; ?></h1>
                    <div class="fundraiser-donee-name">
                        <i class="fa-solid fa-building fa-sm text-3"></i>
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
                            <td class="text-3"><?php echo $story->phone; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <?php 
                  }
                  ?>
       <div class="story-card">
            <div class="story-card-left">
                <div class="story-card-img-container">
                    <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/Stories/Story2.png" alt="">
                </div>
            </div>
            <div class="story-card-right">
                <div class="story-description">
                    <h1>In need of a kidney</h1>
                    <div class="fundraiser-donee-name">
                        <i class="fa-solid fa-user fa-sm text-3"></i>
                        <p class="text-4">LEO Club UOC</p>
                      </div>
                    <p>ොළඹ විශ්ව විද්‍යාලයීය ලියෝ සමාජය මගින් සංවිධානය කල සහෘද වියමන අදියර 6කින් යුතු ව්‍යාපෘතියේ දෙවන අදියර ඉතා සාර්ථකව නිමකරන කරන ලදී.  එම කටයුතු සාර්ථක කර ගැනීම උදෙසා උපකාර කළ ඔබ සැමට ස්තූතියි.❤

                        Facebook: https://bit.ly/3udizp5
                       
                        
                        </p>
                </div>
                <div class="story-contact">
                    <table>
                        <tr>
                            <th>email:</th>
                            <td class="text-3">leos@gmail.com</td>
                        </tr>
                        <tr>
                            <th>Contact:</th>
                            <td class="text-3">+9470 576 0021</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="story-card">
            <div class="story-card-left">
                <div class="story-card-img-container">
                    <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/Stories/Story3.jpeg" alt="">
                </div>
            </div>
            <div class="story-card-right">
                <div class="story-description">
                    <h1>Aarogya 6.0</h1>
                    <div class="fundraiser-donee-name">
                        <i class="fa-solid fa-building fa-sm text-3"></i>
                        <p class="text-4">LEO Club UOC</p>
                      </div>
                    <p>ොccළඹ විශ්ව විද්‍යාලයීය ලියෝ සමාජය මගින් සංවිධානය කල සහෘද වියමන අදියර 6කින් යුතු ව්‍යාපෘතියේ දෙවන අදියර ඉතා සාර්ථකව නිමකරන කරන ලදී.  එම කටයුතු සාර්ථක කර ගැනීම උදෙසා උපකාර කළ ඔබ සැමට ස්තූතියි.❤

                        Facebook: https://bit.ly/3udizp5
                       
                        
                        </p>
                </div>
                <div class="story-contact">
                    <table>
                        <tr>
                            <th>email:</th>
                            <td class="text-3">leos@gmail.com</td>
                        </tr>
                        <tr>
                            <th>Contact:</th>
                            <td class="text-3">+9470 576 0021</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="story-card">
            <div class="story-card-left">
                <div class="story-card-img-container">
                    <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/Stories/Story4.jpeg" alt="">
                </div>
            </div>
            <div class="story-card-right">
                <div class="story-description">
                    <h1>Nisagini 6.0</h1>
                    <div class="fundraiser-donee-name">
                        <i class="fa-solid fa-building fa-sm text-3"></i>
                        <p class="text-4">LEO Club UOC</p>
                      </div>
                    <p>ොළඹ විශ්ව විද්‍යාලයීය ලියෝ සමාජය මගින් සංවිධානය කල සහෘද වියමන අදියර 6කින් යුතු ව්‍යාපෘතියේ දෙවන අදියර ඉතා සාර්ථකව නිමකරන කරන ලදී.  එම කටයුතු සාර්ථක කර ගැනීම උදෙසා උපකාර කළ ඔබ සැමට ස්තූතියි.❤

                        Facebook: https://bit.ly/3udizp5
                       
                        
                        </p>
                </div>
                <div class="story-contact">
                    <table>
                        <tr>
                            <th>email:</th>
                            <td class="text-3">leos@gmail.com</td>
                        </tr>
                        <tr>
                            <th>Contact:</th>
                            <td class="text-3">+9470 576 0021</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div> 
       </div>
    </main>
<script src="<?php echo URLROOT ?>/public/js/header.js"></script>

</body>

</html>
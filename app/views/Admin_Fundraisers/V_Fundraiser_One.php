<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GIVE4GOOD</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon"> 
<link rel="stylesheet" href="public/styles/components/main-styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>

<body>
    <?php require APPROOT . '/views/includes/header.php' ?>


    <main class="admin-fundraiser">
        <h1 class="margin-bottom-0">Help us to assist them walk</h1>
        <p class="text-3">Category: Health</p>
        <div class="fundraiser-container">
            <div class="fundraiser-left">
                <div class="fundraiser-image-container">
                    <div class="left-arrow">
                        <i class="fa-solid fa-chevron-left fa-2xl"></i>
                    </div>
                    <div class="fundraiser-image">
                        <!-- <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/fundraiser1.jpg" alt="image"> -->
                        <img src="public/Assets/Uploaded-Images/fundraiser1.jpg" alt="image">
                    </div>
                    <div class="right-arrow">
                        <i class="fa-solid fa-chevron-right fa-2xl"></i>
                    </div>
                </div>
                <div class="fundraiser-count-row">
                    <p class="text-2">40 Donations</p>
                    <p class="text-2">121 Views</p>
                </div>
                <div class="fundraiser-donee">
                    <div class="fundraiser-donee-name">
                        <i class="fa-solid fa-building"></i>
                        <p class="text-2">Dialog</p>
                    </div>
                    <p class="text-3">No.21, UCSC, Reid Avenue, Colombo 7</p>
                </div>
                <div class="fundriaser-description">
                    <p class="text-1"> Wanted to take a moment to shed some light on an important issue that needs our
                        attention: the living conditions in slum areas. Many individuals and families in these
                        communities face daily challenges, from inadequate housing to limited access to basic amenities.
                        But here's the thing: we have the power to make a difference! ✨ By coming together as a
                        community, we can support and uplift those living in slum areas. Here are a few ways you can get
                        involved: Volunteer your time: Consider reaching out to local organizations that work directly
                        with these communities. You can offer your skills, whether it's teaching classes, organizing
                        workshops, or providing mentorship. Your presence and support</p>
                </div>


            </div>

            <div class="fundraiser-right">
                <div class="fundraiser-button-list">
                    <button class="button-1-green">
                        Activate
                    </button>

                    <button class="button-2-yellow" onclick="window.location.href = '#all-merchs'">
                        Set pending
                    </button>
                    <button class="button-3-red">
                        Deactivate
                    </button>
                    
                </div>
                <p class="text-3">Current status: Pending</p>

                <div class="fundraiser-amount">
                    <p class="text-2">Rs. 20 000</p>
                    <p class="text-3">raised of RS. 60 000</p>
                </div>
                <div class="fundraiser-progress-bar">
                    Progress bar
                </div>
               <hr>
                <div class="fundraiser-info">
                    <div class="info-box">
                        <table class="info-table">
                            <tr>
                                <th>Created date</th>
                                <td class="text-3">23-02-2023</td>
                            </tr>
                            <tr>
                                <th>Modified date</th>
                                <td class="text-3">23-02-2023</td>
                            </tr>
                            <tr>
                                <th>End date</th>
                                <td class="text-3">23-02-2024</td>
                            </tr>
                        </table>
                    </div>
                    

                </div>
            </div>
        </div>
    
<div class="reports">
    <h1>Reports & Documents</h1>
    <div class="all-report-container">
        <div class="report-container">
            <div class="report-container-top">
                <div class="report-image-container">
                    <img src="" alt="image">
                </div>
            </div>
            <div class="report-container-bottom">
                <p>Medical Report</p>
            </div>
        </div>
        <div class="report-container">
            <div class="report-container-top">
                <div class="report-image-container">
                    <img src="" alt="image">
                </div>
            </div>
            <div class="report-container-bottom">
                <p>Medical Report</p>
            </div>
        </div>
        <div class="report-container">
            <div class="report-container-top">
                <div class="report-image-container">
                    <img src="" alt="image">
                </div>
            </div>
            <div class="report-container-bottom">
                <p>Medical Report</p>
            </div>
        </div>
        <div class="report-container">
            <div class="report-container-top">
                <div class="report-image-container">
                    <img src="" alt="image">
                </div>
            </div>
            <div class="report-container-bottom">
                <p>Medical Report</p>
            </div>
        </div>
    </div>
</div>
        <div class="donations-we-need" id="donations-we-need">
            <h1>Donations Expected</h1>
            <div class="material-card-container">
                <div class="material-card">
                    <div class="material-img-container">
                        <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/Wheelchair.jpeg" alt="">
                    </div>
                    <div class="material-card-below">
                        <p class="text-1">Wheel Chair</p>
                        <button class="button-3" id="open-material-popup">View Details</button>
                    </div>
                </div>

            
                <div class="material-card">
                    <div class="material-img-container">
                        <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/Crutched.jpeg" alt="">
                    </div>
                    <div class="material-card-below">
                        <p class="text-1">Armpit Crutches</p>
                        <button class="button-3">View Details</button>
                    </div>
                </div>
                <div class="material-card">
                    <div class="material-img-container">
                        <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/Walker.png" alt="">
                    </div>
                    <div class="material-card-below">
                        <p class="text-1">Walker</p>
                        <button class="button-3">View Details</button>
                    </div>
                </div>


            </div>
        </div>

        <dialog class="material-popup">
            <span class="close-material-popup">&times;</span>
            <h2>Wheelchair</h2>
            <div class="material-popup-container">
                <div class="material-popup-left">
                    <div class="material-popup-img-container">
                        <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/Wheelchair.jpeg" alt="">
                    </div>
                </div>
                <div class="material-popup-right">
                    <p class="text-2">Description</p>
                    <p class="text-3">Patient chair with commode arm decline. Convenient commode arm for easy toileting access. With sturdy construction for patient safety. Designed for those who need assistance with mobility.</p>
                    <p class="text-2">Number of units required</p>
                    <p class="text-3">35</p>
                    <p class="text-2">Contact information for more details</p>
                    <table class="material-table">
                        <tr>
                            <th>email</th>
                            <td class="text-3">dialog@gmail.com</td>
                        </tr>
                        <tr>
                            <th>phone</th>
                            <td class="text-3">+9470 5643233</td>
                        </tr>
                    </table>
    
                </div>
            </div>
            
        </dialog>

        <div class="send-donations">
            <h1>Locations</h1>
            <div class="send-donation-card-container">
                <div class="send-donation-card">
                    <div class="send-donation-img-container">
                        <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/map.png" alt="">
                    </div>
                    <div class="send-donation-text">
                        <p class="text-2">Colombo 7</p>
                        <div class="send-donation-details">
                            <p class="text-1">Contact: </p>
                            <p class="text-3">+9470 3420012</p>
                            <p class="text-1">Location: </p>
                            <p class="text-3">No.21, Dharmapala Rd, Dematagoda</p>

                        </div>
                    </div>
                </div>
                <div class="send-donation-card">
                    <div class="send-donation-img-container">
                        <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/map.png" alt="">
                    </div>
                    <div class="send-donation-text">
                        <p class="text-2">Colombo 7</p>
                        <div class="send-donation-details">
                            <p class="text-1">Contact: </p>
                            <p class="text-3">+9470 3420012</p>
                            <p class="text-1">Location: </p>
                            <p class="text-3">No.21, Dharmapala Rd, Dematagoda</p>

                        </div>
                    </div>
                </div>
                <div class="send-donation-card">
                    <div class="send-donation-img-container">
                        <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/map.png" alt="">
                    </div>
                    <div class="send-donation-text">
                        <p class="text-2">Colombo 7</p>
                        <div class="send-donation-details">
                            <p class="text-1">Contact: </p>
                            <p class="text-3">+9470 3420012</p>
                            <p class="text-1">Location: </p>
                            <p class="text-3">No.21, Dharmapala Rd, Dematagoda</p>

                        </div>
                    </div>
                </div>
                <div class="send-donation-card">
                    <div class="send-donation-img-container">
                        <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/map.png" alt="">
                    </div>
                    <div class="send-donation-text">
                        <p class="text-2">Colombo 7</p>
                        <div class="send-donation-details">
                            <p class="text-1">Contact: </p>
                            <p class="text-3">+9470 3420012</p>
                            <p class="text-1">Location: </p>
                            <p class="text-3">No.21, Dharmapala Rd, Dematagoda</p>

                        </div>
                    </div>
                </div>
               
            </div>


        </div>

    </main>
    <script src="<?php echo URLROOT ?>/public/js/material.js"></script>
    <?php require APPROOT . '/views/includes/footer.php' ?> 
</body>
</html>       
     
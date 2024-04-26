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
</head>

<body>
    <?php require APPROOT . '/views/includes/header.php' ?>
    <?php require APPROOT . '/views/includes/orgProfileSideBar.php' ?>
    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <i class="fa-solid fa-bars"></i>
                <span>Edit Your Profile</span>
            </div>

        </div>
        <div class="dashDetails">
            <section class="section">
                <div class="card">
                    <div class="left-container">
                        <img class="logo_img" src="<?php echo URLROOT ?>/public/Assets/images/LogoBlack.png" alt="">
                    </div>
                    <div class="right-container">
                        <div class="profile-data">
                            <div class="form-group">
                                <label for="username">Name:</label>
                                <input type="text"  class="input"id="username" name="username" placeholder=<?php echo $data['other'][0]->username; ?>>
                            </div>
                            <div class="form-group">
                                <label for="regno">Name:</label>
                                <input type="text"  class="input" id="regno" name="regno" placeholder=<?php echo $data['other'][0]->regno; ?>>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" placeholder=<?php echo $data['other'][0]->email; ?>>
                            </div>
                            <div class="form-group">
                                <label for="contact">Contact No:</label>
                                <input type="text" id="contact" name="contact" placeholder=<?php echo $data['other'][0]->phone; ?>>
                            </div>
                            <div class="form-group">
                                <label for="address">Address:</label>
                                <input type="text" id="address" name="address" placeholder=<?php echo $data['other'][0]->Address; ?>>
                            </div>
                        </div>
                    </div>
            </section>

            <section class="section">
                <div class="card">
                    <div class="right-container">
                        <h3 class="gradienttext">President's Details</h3>
                        <div class="profile-data">
                            <div class="form-group">
                                <label for="presidentname">Name : </label>
                                <input type="text" id="presidentname" name="presidentname" placeholder=<?php echo $data['executive'][0]->executive_fullname; ?>>
                            </div>
                            <div class="form-group">
                                <label for="presidentdest">Designation : </label>
                                <input type="text" id="presidentdest" name="presidentdest" placeholder=<?php echo $data['executive'][0]->executive_designation; ?>>
                            </div>
                            <div class="form-group">
                                <label for="presidentnic">NIC No : </label>
                                <input type="text" id="presidentnic" name="presidentnic" placeholder=<?php echo $data['executive'][0]->executive_nic_no; ?>>
                            </div>
                            <div class="form-group">
                                <label for="presidentemail">Email : </label>
                                <input type="email" id="presidentemail" name="presidentemail" placeholder=<?php echo $data['executive'][0]->executive_email; ?>>
                            </div>
                            <div class="form-group">
                                <label for="presidentcontact">Contact No : </label>
                                <input type="text" id="presidentcontact" name="presidentcontact" placeholder=<?php echo $data['executive'][0]->executive_contact; ?>>
                            </div>
                        </div>
                        <h3 class="gradienttext">Secretary's Details</h3>
                        <div class="profile-data">
                            <div class="form-group">
                                <label for="secretaryname">Name : </label>
                                <input type="text" id="secretaryname" name="secretaryname" placeholder=<?php echo $data['secretary'][0]->secretary_fullname; ?>>
                            </div>
                            <div class="form-group">
                                <label for="secretarydest">Designation:  </label>
                                <input type="text" id="secretarydest" name="secretarydest" placeholder=<?php echo $data['secretary'][0]->secretary_designation; ?>>
                            </div>
                            <div class="form-group">
                                <label for="secretarynic">NIC No : </label>
                                <input type="text" id="secretarynic" name="secretarynic" placeholder=<?php echo $data['secretary'][0]->secretary_nic_no; ?>>
                            </div>
                            <div class="form-group">
                                <label for="secretaryemail">Email : </label>
                                <input type="email" id="secretaryemail" name="secretaryemail" placeholder=<?php echo $data['secretary'][0]->secretary_email; ?>>
                            </div>
                            <div class="form-group">
                                <label for="secretarycontact">Contact No : </label>
                                <input type="text" id="secretarycontact" name="secretarycontact" placeholder=<?php echo $data['secretary'][0]->secretary_contact; ?>>
                            </div>
                        </div>
                        <h3 class="gradienttext">Treasurer's Details</h3>
                        <div class="profile-data">
                            <div class="form-group">
                                <label for="treasurername">Name : </label>
                                <input type="text" id="treasurername" name="treasurername" placeholder=<?php echo $data['treasurer'][0]->treasurer_fullname; ?>>
                            </div>
                            <div class="form-group">
                                <label for="treasurerdest">Designation : </label>
                                <input type="text" id="treasurerdest" name="treasurerdest" placeholder=<?php echo $data['treasurer'][0]->treasurer_designation; ?>>
                            </div>
                            <div class="form-group">
                                <label for="treasurernic">NIC No : </label>
                                <input type="text" id="treasurernic" name="treasurernic" placeholder=<?php echo $data['treasurer'][0]->treasurer_nic_no; ?>>
                            </div>
                            <div class="form-group">
                                <label for="treasureremail">Email : </label>
                                <input type="email" id="treasureremail" name="treasureremail" placeholder=<?php echo $data['treasurer'][0]->treasurer_email; ?>>
                            </div>
                            <div class="form-group">
                                <label for="treasurercontact">Contact No : </label>
                                <input type="text" id="treasurercontact" name="treasurercontact" placeholder=<?php echo $data['treasurer'][0]->treasurer_contact; ?>>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section">
                <div class="card">
                    <div class="left-container">
                        <h4 class="gradienttext-h4">Bank Passbook</h4>
                        <img class="pbook_img" src="<?php echo URLROOT . $data['other'][0]->bank_pbook; ?>">
                    </div>
                    <div class="right-container">
                        <h3 class="gradienttext">Bank Details</h3>
                        <table class="table-profile">
                            <tr>
                                <td>Account Name :</td>
                                <td><?php echo $data['other'][0]->acc_holder; ?></td>
                            </tr>
                            <tr>
                                <td>Account No :</td>
                                <td><?php echo $data['other'][0]->account_no; ?></td>
                            </tr>
                            <tr>
                                <td>Bank Name  :</td>
                                <td><?php echo $data['other'][0]->bank_name; ?></td>
                            </tr>
                            <tr>
                                <td>Bank Code  :</td>
                                <td><?php echo $data['other'][0]->bank_code; ?></td>
                            </tr>
                            <tr>
                                <td>Branch Name :</td>
                                <td><?php echo $data['other'][0]->branch_name; ?></td>
                            </tr>
                            <tr>
                                <td>Branch Code :</td>
                                <td><?php echo $data['other'][0]->branch_code; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </section>
            <div class="form-group">
                <div class="button-set">
                    <input type="submit" value="Save">
                    <input type="submit" value="Reset">
                    <input type="submit" value="Cancel">
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
    <?php require APPROOT . '/views/includes/footer.php' ?>
</body>

</html>
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
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <?php require APPROOT . '/views/includes/header.php' ?>
    <?php require APPROOT . '/views/includes/orgProfileSideBar.php' ?>
    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <i class="fa-regular fa-pen-to-square"></i>
                <span>Edit Your Profile</span>
            </div>

        </div>
        <div class="dashDetails">
            <form action="" method="post" enctype="multipart/form-data">

                <section class="section">
                    <div class="card">
                        <div class="left-container">
                            <img class="logo_img" src="<?php echo URLROOT . $data[0]->profile_image ?>" id="profile_image_preview">
                            <input type="file" accept="image/png, image/jpeg" name="profile_image" id="profile_image">
                        </div>
                        <div class="right-container">
                            <h3 class="gradienttext">Profile Details</h3>
                            <div class="profile-data">
                                <div class="form-group">
                                    <label for="username">User Name:</label>
                                    <input type="text" id="username" name="username" value="<?php echo $data['other'][0]->username ?>">
                                    <span class="form-invalid">
                                        <?php if (!empty($data['username_err']))echo $data['username_err']; ?>
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="regno">Registration No:</label>
                                    <input type="text" id="regno" name="regno" value="<?php echo $data['other'][0]->regno ?>">
                                    <span class="form-invalid">
                                        <?php if (!empty($data['regno_err']))echo $data['regno_err']; ?>
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" id="email" name="email"value="<?php echo $data['other'][0]->email ?>">
                                    <span class="form-invalid">
                                        <?php if (!empty($data['email_err']))echo $data['email_err']; ?>
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="contact">Contact No:</label>
                                    <input type="text" id="contact" name="contact"value="<?php echo $data['other'][0]->phone ?>">
                                    <span class="form-invalid">
                                        <?php if (!empty($data['contact_err']))echo $data['contact_err']; ?>
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="address">Address:</label>
                                    <input type="text" id="address" name="address"value="<?php echo $data['other'][0]->Address ?>">
                                    <span class="form-invalid">
                                        <?php if (!empty($data['address_err']))echo $data['address_err']; ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                </section>

                <?php if ($_SESSION['userLevel'] == 2) { ?>
                    <section class="section">
                        <div class="card">
                            <div class="right-container">
                                <h3 class="gradienttext">President-Details</h3>
                                <div class="profile-data">
                                    <div class="form-group">
                                        <label for="presidentname">Name : </label>
                                        <input type="text" id="presidentname" name="presidentname"value="<?php echo $data['executive'][0]->executive_fullname ?>">
                                        <span class="form-invalid">
                                            <?php if (!empty($data['presidentname_err']))echo $data['presidentname_err']; ?>'
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label for="presidentdest">Designation : </label>
                                        <input type="text" id="presidentdest" name="presidentdest"value="<?php echo $data['executive'][0]->executive_designation ?>">
                                        <span class="form-invalid">
                                            <?php if (!empty($data['presidentdest_err']))echo $data['presidentdest_err']; ?>'
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label for="presidentnic">NIC No : </label>
                                        <input type="text" id="presidentnic" name="presidentnic"value="<?php echo $data['executive'][0]->executive_nic_no ?>">
                                        <span class="form-invalid">
                                            <?php if (!empty($data['presidentnic_err']))echo $data['presidentnic_err']; ?>'
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label for="presidentemail">Email : </label>
                                        <input type="email" id="presidentemail" name="presidentemail"value="<?php echo $data['executive'][0]->executive_email ?>">
                                        <span class="form-invalid">
                                            <?php if (!empty($data['presidentemail_err']))echo $data['presidentemail_err']; ?>'
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label for="presidentcontact">Contact No : </label>
                                        <input type="text" id="presidentcontact" name="presidentcontact"
                                            value="<?php echo $data['executive'][0]->executive_contact ?>">
                                        <span class="form-invalid">
                                            <?php if (!empty($data['presidentcontact_err']))echo $data['presidentcontact_err']; ?>'
                                        </span>
                                    </div>
                                </div>
                                <h3 class="gradienttext">Secretary-Details</h3>
                                <div class="profile-data">
                                    <div class="form-group">
                                        <label for="secretaryname">Name : </label>
                                        <input type="text" id="secretaryname" name="secretaryname"value="<?php echo $data['secretary'][0]->secretary_fullname ?>">
                                        <span class="form-invalid">
                                            <?php if (!empty($data['secretaryname_err']))echo $data['secretaryname_err']; ?>'
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label for="secretarydest">Designation: </label>
                                        <input type="text" id="secretarydest" name="secretarydest"value="<?php echo $data['secretary'][0]->secretary_designation ?>">
                                        <span class="form-invalid">
                                            <?php if (!empty($data['secretarydest_err']))echo $data['secretarydest_err']; ?>'
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label for="secretarynic">NIC No : </label>
                                        <input type="text" id="secretarynic" name="secretarynic"value="<?php echo $data['secretary'][0]->secretary_nic_no ?>">
                                        <span class="form-invalid">
                                            <?php if (!empty($data['secretarynic_err']))echo $data['secretarynic_err']; ?>'
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label for="secretaryemail">Email : </label>
                                        <input type="email" id="secretaryemail" name="secretaryemail"value="<?php echo $data['secretary'][0]->secretary_email ?>">
                                        <span class="form-invalid">
                                            <?php if (!empty($data['secretaryemail_err']))echo $data['secretaryemail_err']; ?>'
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label for="secretarycontact">Contact No : </label>
                                        <input type="text" id="secretarycontact" name="secretarycontact"value="<?php echo $data['secretary'][0]->secretary_contact ?>">
                                        <span class="form-invalid">
                                            <?php if (!empty($data['secretarycontact_err']))echo $data['secretarycontact_err']; ?>'
                                        </span>
                                    </div>
                                </div>
                                <h3 class="gradienttext">Treasurer-Details</h3>
                                <div class="profile-data">
                                    <div class="form-group">
                                        <label for="treasurername">Name : </label>
                                        <input type="text" id="treasurername" name="treasurername"value="<?php echo $data['treasurer'][0]->treasurer_fullname ?>">
                                        <span class="form-invalid">
                                            <?php if (!empty($data['secretaryname_err']))echo $data['presidentname_err']; ?>'
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label for="treasurerdest">Designation : </label>
                                        <input type="text" id="treasurerdest" name="treasurerdest"value="<?php echo $data['treasurer'][0]->treasurer_designation ?>">
                                        <span class="form-invalid">
                                            <?php if (!empty($data['treasurerdest_err']))echo $data['treasurerdest_err']; ?>'
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label for="treasurernic">NIC No : </label>
                                        <input type="text" id="treasurernic" name="treasurernic"value="<?php echo $data['treasurer'][0]->treasurer_nic_no ?>">
                                        <span class="form-invalid">
                                            <?php if (!empty($data['treasurernic_err']))echo $data['treasurernic_err']; ?>'
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label for="treasureremail">Email : </label>
                                        <input type="email" id="treasureremail" name="treasureremail"value="<?php echo $data['treasurer'][0]->treasurer_email ?>">
                                        <span class="form-invalid">
                                            <?php if (!empty($data['treasureremail_err']))echo $data['treasureremail_err']; ?>'
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label for="treasurercontact">Contact No : </label>
                                        <input type="text" id="treasurercontact" name="treasurercontact"value="<?php echo $data['treasurer'][0]->treasurer_contact ?>">
                                        <span class="form-invalid">
                                            <?php if (!empty($data['treasurercontact_err']))echo $data['treasurercontact_err']; ?>'
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="section">
                        <div class="card">
                            <div class="left-container">
                                <h4 class="gradienttext-h4">Bank Passbook</h4>
                                <img class="pbook_img" src=" <?php echo URLROOT . $data['other'][0]->bank_pbook ?>"
                                    id="pbook_img_preview">
                                <input type="file" accept="image/png, image/jpeg" name="pbook_img" id="pbook_img">
                            </div>
                            <div class="right-container">
                                <h3 class="gradienttext">Bank Details</h3>
                                <div class="profile-data">
                                    <div class="form-group">
                                        <label for="acc_holder">Account Name :</label>
                                        <input type="text" id="tacc_holder" name="acc_holder"value="<?php echo $data['other'][0]->acc_holder ?>">
                                        <span class="form-invalid">
                                            <?php if (!empty($data['accountname_err'])) echo $data['accountname_err']; ?>'
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label for="account_no">Account No : </label>
                                        <input type="text" id="acc_no" name="acc_no"value="<?php echo $data['other'][0]->account_no ?>">
                                        <span class="form-invalid">
                                            <?php if (!empty($data['acc_no_err'])) echo $data['acc_no_err']; ?>
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label for="bank_name">Bank Name :</label>
                                        <input type="text" id="bank_name" name="bank_name"value="<?php echo $data['other'][0]->bank_name ?>">
                                        <span class="form-invalid">
                                            <?php if (!empty($data['bankname_err'])) echo $data['bankname_err']; ?>
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label for="bank_code">Bank Code :</label>
                                        <input type="text" id="bank_code" name="bank_code"value="<?php echo $data['other'][0]->bank_code ?>">
                                        <span class="form-invalid">
                                            <?php if (!empty($data['bankcode_err']))echo $data['bankcode_err']; ?>
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label for="branch_name">Branch Name : </label>
                                        <input type="text" id="branch_name" name="branch_name"value="<?php echo $data['other'][0]->branch_name ?>">
                                        <span class="form-invalid">
                                            <?php if (!empty($data['branchname_err']))echo $data['branchname_err']; ?>
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label for="branch_code">Branch Code : </label>
                                        <input type="text" id="branch_code" name="branch_code" value="<?php echo $data['other'][0]->branch_code ?>">
                                        <span class="form-invalid">
                                            <?php if (!empty($data['branchcode_err'])) echo $data['branch_code_err']; ?>
                                        </span>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </section>
                    <?php
                }
                ?>
                <div class="form-group">
                    <div class="button-set">
                        <input type="submit" value="Save">
                        <input type="submit" value="Reset">
                        <input type="submit" value="Cancel">
                    </div>
                </div>
            </form>
        </div>

    </div>
    <?php require APPROOT . '/views/includes/footer.php' ?>
    <script src="<?php echo URLROOT ?>/public/js/form-image.js"></script>
    <script>
        // setupImagePreview("#form_image", ".form-image-container img");
        setupImagePreview("#pbook_img", "#pbook_img_preview");
        setupImagePreview("#profile_image", "#profile_image_preview");

    </script>
</body>

</html>
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
        <?php if ($_SESSION['userLevel']==1) { 
    echo '<div class="dashDetails">
            <section class="section">
                <div class="card">
                    <div class="left-container">
                        <img class="logo_img" src=" ' .URLROOT . $data['other'][0]->profile_image . '">
                        <div><button>Upload Photo</button></div>
                    </div>
                    <div class="right-container">
                    <h3 class="gradienttext">Profile Details</h3>
                        <div class="profile-data">
                            <div class="form-group">
                                <label for="username">Name:</label>
                                <input type="text" id="username" name="username" placeholder="' . $data['other'][0]->username . '">
                            </div>
                            <div class="form-group">
                                <label for="regno">Name:</label>
                                <input type="text" id="regno" name="regno" placeholder="' . $data['other'][0]->regno . '">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" placeholder="' . $data['other'][0]->email . '">
                            </div>
                            <div class="form-group">
                                <label for="contact">Contact No:</label>
                                <input type="text" id="contact" name="contact" placeholder="' . $data['other'][0]->phone . '">
                            </div>
                            <div class="form-group">
                                <label for="address">Address:</label>
                                <input type="text" id="address" name="address" placeholder="' . $data['other'][0]->Address . '">
                            </div>
                        </div>
                    </div>
            </section>
            </div>';
           }else if($_SESSION['userLevel']==2) {
           echo '<div class="dashDetails">
            <section class="section">
                <div class="card">
                    <div class="left-container">
                        <img class="logo_img" src=" ' .URLROOT . $data['other'][0]->profile_image . '">
                    </div>
                    <div class="right-container">
                    <h3 class="gradienttext">Profile Details</h3>
                        <div class="profile-data">
                            <div class="form-group">
                                <label for="username">Name:</label>
                                <input type="text" id="username" name="username" placeholder="' . $data['other'][0]->username . '">
                            </div>
                            <div class="form-group">
                                <label for="regno">Name:</label>
                                <input type="text" id="regno" name="regno" placeholder="' . $data['other'][0]->regno . '">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" placeholder="' . $data['other'][0]->email . '">
                            </div>
                            <div class="form-group">
                                <label for="contact">Contact No:</label>
                                <input type="text" id="contact" name="contact" placeholder="' . $data['other'][0]->phone . '">
                            </div>
                            <div class="form-group">
                                <label for="address">Address:</label>
                                <input type="text" id="address" name="address" placeholder="' . $data['other'][0]->Address . '">
                            </div>
                        </div>
                    </div>
            </section>
            </div>
             <section class="section">
                <div class="card">
                    <div class="right-container">
                        <h3 class="gradienttext">President-Details</h3>
                        <div class="profile-data">
                            <div class="form-group">
                                <label for="presidentname">Name : </label>
                                <input type="text" id="presidentname" name="presidentname" placeholder="' . $data['executive'][0]->executive_fullname . '">
                            </div>
                            <div class="form-group">
                                <label for="presidentdest">Designation : </label>
                                <input type="text" id="presidentdest" name="presidentdest" placeholder="' . $data['executive'][0]->executive_designation . '">
                            </div>
                            <div class="form-group">
                                <label for="presidentnic">NIC No : </label>
                                <input type="text" id="presidentnic" name="presidentnic" placeholder="' . $data['executive'][0]->executive_nic_no . '">
                            </div>
                            <div class="form-group">
                                <label for="presidentemail">Email : </label>
                                <input type="email" id="presidentemail" name="presidentemail" placeholder="' . $data['executive'][0]->executive_email . '">
                            </div>
                            <div class="form-group">
                                <label for="presidentcontact">Contact No : </label>
                                <input type="text" id="presidentcontact" name="presidentcontact" placeholder="' .  $data['executive'][0]->executive_contact . '">
                            </div>
                        </div>
                        <h3 class="gradienttext">Secretary-Details</h3>
                        <div class="profile-data">
                            <div class="form-group">
                                <label for="secretaryname">Name : </label>
                                <input type="text" id="secretaryname" name="secretaryname" placeholder="' . $data['secretary'][0]->secretary_fullname . '">
                            </div>
                            <div class="form-group">
                                <label for="secretarydest">Designation:  </label>
                                <input type="text" id="secretarydest" name="secretarydest" placeholder="' . $data['secretary'][0]->secretary_designation . '">
                            </div>
                            <div class="form-group">
                                <label for="secretarynic">NIC No : </label>
                                <input type="text" id="secretarynic" name="secretarynic" placeholder="' . $data['secretary'][0]->secretary_nic_no . '">
                            </div>
                            <div class="form-group">
                                <label for="secretaryemail">Email : </label>
                                <input type="email" id="secretaryemail" name="secretaryemail" placeholder="' . $data['secretary'][0]->secretary_email . '">
                            </div>
                            <div class="form-group">
                                <label for="secretarycontact">Contact No : </label>
                                <input type="text" id="secretarycontact" name="secretarycontact" placeholder="' . $data['secretary'][0]->secretary_contact . '">
                            </div>
                        </div>
                        <h3 class="gradienttext">Treasurer-Details</h3>
                        <div class="profile-data">
                            <div class="form-group">
                                <label for="treasurername">Name : </label>
                                <input type="text" id="treasurername" name="treasurername" placeholder="' . $data['treasurer'][0]->treasurer_fullname . '">
                            </div>
                            <div class="form-group">
                                <label for="treasurerdest">Designation : </label>
                                <input type="text" id="treasurerdest" name="treasurerdest" placeholder="' . $data['treasurer'][0]->treasurer_designation . '">
                            </div>
                            <div class="form-group">
                                <label for="treasurernic">NIC No : </label>
                                <input type="text" id="treasurernic" name="treasurernic" placeholder="' . $data['treasurer'][0]->treasurer_nic_no . '">
                            </div>
                            <div class="form-group">
                                <label for="treasureremail">Email : </label>
                                <input type="email" id="treasureremail" name="treasureremail" placeholder="' . $data['treasurer'][0]->treasurer_email . '">
                            </div>
                            <div class="form-group">
                                <label for="treasurercontact">Contact No : </label>
                                <input type="text" id="treasurercontact" name="treasurercontact" placeholder="' . $data['treasurer'][0]->treasurer_contact . '">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section">
                <div class="card">
                    <div class="left-container">
                        <h4 class="gradienttext-h4">Bank Passbook</h4>
                       <img class="pbook_img" src=" ' .URLROOT . $data['other'][0]->bank_pbook . '">

                    </div>
                    <div class="right-container">
                       <h3 class="gradienttext">Bank Details</h3>
                        <div class="profile-data">
                            <div class="form-group">
                                <label for="acc_holder">Account Name :</label>
                                <input type="text" id="tacc_holder" name="acc_holder" placeholder=' . $data['other'][0]->acc_holder . '>
                            </div>
                            <div class="form-group">
                                <label for="account_no">Account No : </label>
                                <input type="text" id="account_no" name="account_no" placeholder=' . $data['other'][0]->account_no . '>
                            </div>
                            <div class="form-group">
                                <label for="bank_name">Bank Name  :</label>
                                <input type="text" id="bank_name" name="bank_name" placeholder=' . $data['other'][0]->bank_name . '>
                            </div>
                            <div class="form-group">
                                <label for="bank_code">Bank Code  :</label>
                                <input type="text" id="bank_code" name="bank_code" placeholder=' . $data['other'][0]->bank_code . '>
                            </div>
                            <div class="form-group">
                                <label for="branch_name">Branch Name : </label>
                                <input type="text" id="branch_name" name="branch_name" placeholder=' . $data['other'][0]->branch_name . '>
                            </div>
                            <div class="form-group">
                                <label for="branch_code">Branch Code : </label>
                                <input type="text" id="branch_code" name="branch_code" placeholder=' . $data['other'][0]->branch_code . '>
                            </div>
                        </div>

                      
                        
                    </div>

                </div>
            </section>
            </div>';
            }
            ?>
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
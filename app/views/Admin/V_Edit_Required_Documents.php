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
    <?php require APPROOT . '/views/includes/admin-header.php' ?>

    <main class="admin-document">
        <h1 class="margin-bottom-0">Category: Health</h1>
        <p class="text-3">Edit documents required to start a fundraiser for Education by an Individual</p>



       <div class="edit-document-container">
            <div class="edit-document-left">
                <div class="add-container">
                    <div class="admin-add-remove fundraiser-donee-name">
                        <i class="fa-solid fa-circle-plus fa-xl"></i>
                        <p class="text-2">Add Document or Report</p>
                    </div>
                    <div>

                        <form action="" method="post" enctype="multipart/form-data">
                            <!-- <input type="hidden" name="type" value="Individual"> -->

                            <input type="text" name="add-document" id="add-document" class="input">
                            <span class="form-invalid"><?php if(!empty($data['add-document_err']))echo $data['add-document_err']; ?></span>
                        
                        
                            <br><br>
                            <div class="submit-button-div">
                                <button class="button-submit" type="submit">Add</button>
                            </div>
                        </form>
                        </div>
                </div>
                <div class="remove-container">
                    <div class="admin-add-remove fundraiser-donee-name">
                        <i class="fa-solid fa-circle-minus fa-xl"></i>
                        <p class="text-2">Remove Document or Report</p>
                    </div>
                    <div>

                        <form action="" method="post" enctype="multipart/form-data">
                            <!-- <input type="hidden" name="type" value="Individual"> -->

                            <select name="remove-document" id="remove-document" class="input">
                                <option value="none">None</option>
                                <option value="medical-report">Medical Report</option>
                                <option value="government-officer">Conscent of government officer</option>
                                <option value="Doctor-letter">Doctor's letter</option>
                                </select>
                            <span class="form-invalid"><?php if(!empty($data['remove-document_err']))echo $data['remove-document_err']; ?></span>
                        
                        
                            <br><br>
                            <div class="submit-button-div">
                                <button class="button-submit" type="submit">Remove</button>
                            </div>
                        </form>
                        </div>
                </div>
                
            </div>
            <div class="edit-document-right">
                <p class="text-2">Current required documents and Reports</p>
                <div class="current-document-list">
                    <div class="admin-current-documents fundraiser-donee-name">
                        <i class="fa-solid fa-file-invoice fa-xl"></i><p class="text-1">Medical Report</p>
                    </div>
                    <div class="admin-current-documents fundraiser-donee-name">
                        <i class="fa-solid fa-file-invoice fa-xl"></i><p class="text-1">Conscent of government officer</p>
                    </div>
                    <div class="admin-current-documents fundraiser-donee-name">
                        <i class="fa-solid fa-file-invoice fa-xl"></i><p class="text-1">Doctor's letter</p>
                    </div>
                </div>
            </div>
       </div>



    </main>
    <script src="<?php echo URLROOT ?>/public/js/material.js"></script>
    <?php require APPROOT . '/views/includes/footer.php' ?>
</body>

</html>
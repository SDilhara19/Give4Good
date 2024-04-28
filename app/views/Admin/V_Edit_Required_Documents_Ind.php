<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIVE4GOOD</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/components-3/Admin_style.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/components/main-styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>

<body>
    <?php require APPROOT . '/views/includes/admin-header.php' ?>
    <?php require APPROOT . '/views/includes/admin-dashboard.php' ?>
    <main class="admin-document">

        <h1 class="margin-bottom-0">Category: <?php echo ucfirst($data['category']) ?> </h1>
        <p class="text-3">Edit documents required to start a fundraiser for <?php echo $data['category'] ?> by an <b>
                <?php echo $data['user'] ?></b> </p>



        <div class="edit-document-container">
            <div class="edit-document-left">
                <div class="add-container">
                    <div class="admin-add-remove fundraiser-donee-name">
                        <i class="fa-solid fa-circle-plus fa-xl"></i>
                        <p class="text-2">Add Document or Report</p>
                    </div>
                    <div>

                        <form action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="type" value="add">
                            <div class="form-row">
                                <div class="form-input-title2">Document Name<span class="required">*</span>
                                </div>
                                <input type="text" name="doc_name" id="doc_name" class="input" placeholder="">
                                <span class="form-invalid">
                                    <?php if (!empty($data['doc_name_err']))
                                        echo $data['doc_name_err']; ?>
                                </span>
                            </div>
                            <div class="form-row">
                                <div class="form-input-title2">A description about the document<span
                                        class="required">*</span>
                                </div>
                                <textarea name="doc_description" id="doc_description" class="fund_story" rows="2"
                                    maxlength="100" placeholder=""></textarea>
                                <span class="form-invalid">
                                    <?php if (!empty($data['doc_description_err']))
                                        echo $data['doc_description_err']; ?>
                                </span>
                            </div>

                            <div class="submit-button-div">
                                <button class="button-submit" onclick='if (window.confirm("Are you sure you want to add the given document")) {return true}' type="submit">Add</button>
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
                            <input type="hidden" name="type" value="remove">

                            <select name="remove-document" id="remove-document" class="input">
                                <?php foreach ($data['document'] as $document_row) { ?>
                                    <option value=<?php echo $document_row->document ?>><?php echo $document_row->document_name ?></option>
                                <?php } ?>
                            </select>

                            <br><br>
                            <div class="submit-button-div">
                                <button class="button-submit" onclick='if (window.confirm("Are you sure you want to remove the given document")){return true};' type="submit">Remove</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <div class="edit-document-right">
                <p class="text-2">Current required documents and Reports</p>
                <div class="current-document-list">
                    <?php foreach ($data['document'] as $document_row) { ?>
                        <div class="admin-current-documents fundraiser-donee-name">
                            <i class="fa-solid fa-file-invoice fa-xl"></i>
                            <p class="text-1"><?php echo $document_row->document_name ?></p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>



    </main>
    <script src="<?php echo URLROOT ?>/public/js/material.js"></script>
    <?php require APPROOT . '/views/includes/footer.php' ?>
</body>

</html>
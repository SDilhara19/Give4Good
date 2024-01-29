<html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIVE4GOOD</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/styles.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/components-3/Admin_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9e9a03ae37.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php require APPROOT . '/views/includes/admin-header.php' ?>
    <?php require APPROOT . '/views/includes/admin-dashboard.php' ?>

    <div class="main--content">
        <?php require APPROOT . '/views/Admin_Fundraisers/fundraiser-header.php' ?>
        <div class="dashDetails">
            <div class="container">
                <div class="table-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>Fundraiser ID</th>
                                <th>Username</th>
                                <th>Category</th>
                                <th class="action-th">Title</th>
                                <th>Required Amount</th>
                                <th>Amount Collected</th>
                                <th>Created Date</th>
                                <th>Modified Date</th>
                                <th>Requirement End Date</th>
                                <th>Features Used</th>
                                <th>Merchs</th>
                                <th>User Type</th>
                                <th>Status</th>
                                <th class="action-th">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($data as $fundraiser) {
                                ?>

                                <tr>
                                    <td>
                                        <span>
                                            <span class="fi fi-af"></span>
                                        </span>
                                        <span>
                                            <?php echo $fundraiser->id; ?>
                                        </span>
                                    </td>
                                    <td>
                                        <?php echo $fundraiser->username; ?>
                                    </td>
                                    <td>
                                        <?php echo $fundraiser->category; ?>
                                    </td>
                                    <td>
                                        <?php echo $fundraiser->title; ?>
                                    </td>
                                    <td>80000</td>
                                    <td>20500</td>
                                    <td>2023-12-24</td>
                                    <td>2024-01-01</td>
                                    <td>2024-02-05</td>
                                    <td>Merch + Material</td>
                                    <td>
                                        <a href="<?php echo URLROOT ?>/Admin_Merchandise/fundmerchs/<?php echo $fundraiser->id ?>">
                                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <?php echo $fundraiser->type; ?>
                                    </td>
                                    <td>
                                        <?php echo $fundraiser->status; ?>
                                    </td>
                                    <td class="action-td">
                                        <a href="<?php echo URLROOT ?>/Admin_Fundraisers/fundraiser_one/<?php echo $fundraiser->id ?>"
                                            class="action-icons"><i class="fa-solid fa-info"></i></a>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIVE4GOOD</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/styles.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/components-3/Admin_style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9e9a03ae37.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php require APPROOT . '/views/includes/admin-header.php' ?>
    <?php require APPROOT . '/views/includes/admin-dashboard.php' ?>

    <div class="main--content">
        <?php require APPROOT . '/views/Admin_Merchandise/merchandise-header.php' ?>
        <div class="dashDetails">
            <div class="container">
                <div class="table-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>Merch Id</th>
<<<<<<< HEAD
<<<<<<< HEAD
                                <th>Fundraiser Id</th>
=======
>>>>>>> main
=======
                                <th>Fundraiser Id</th>
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
                                <th>Title</th>
                                <th>Fundraiser Title</th>
                                <th>Initial Stock</th>
                                <th>Current Stock</th>
                                <th>Price of Merch</th>
                                <th>Amount for Fund</th>
                                <th>Status</th>
<<<<<<< HEAD
<<<<<<< HEAD
                                <th class="action-th">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $merchandise) { ?>
                                <tr>
                                    <td><?php echo $merchandise->id; ?></td>
                                    <td><?php echo $merchandise->fundraiser_id; ?></td>
                                    <td><?php echo $merchandise->product_name; ?></td>
                                    <td><?php echo $merchandise->title; ?></td>
                                    <td><?php echo $merchandise->total_quantity; ?></td>
                                    <td><?php echo $merchandise->current_stock; ?></td>
                                    <td><?php echo $merchandise->price; ?></td>
                                    <td><?php echo $merchandise->amount; ?></td>
                                    <td><?php echo $merchandise->status; ?></td>
                                    <td class="action-td">
                                        <a href="<?php echo URLROOT ?>/Admin_Merchandise/info/<?php echo $merchandise->id; ?>"
                                            class="action-icons">
                                            <i class="fa-solid fa-info"></i>
                                        </a>


                                        <a class="action-icons">
                                            <i class="fa-solid fa-check" onclick='if(window.confirm("Are you sure you want to activate the <?php echo $merchandise->id; ?>")){
                                            window.open("<?php echo URLROOT ?>/Admin_Merchandise/setActive/<?php echo $merchandise->id; ?>");
                                         }'>
                                            </i>
                                        </a>


                                    </td>
                                </tr>
                            <?php } ?>
=======
                                <th class="action-td">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Cotton Navy T-shirt</td>
                                <td>Help John travel for work</td>
                                <td>300</td>
                                <td>232</td>
                                <td>2000</td>
                                <td>250</td>
                                <td>Rejected</td>
                                <td class="action-td">
                                    <a href="<?php echo URLROOT ?>/Admin_Merchandise/info/<?php echo $merchandise->id ?>" class="action-icons">
                                        <i class="fa-solid fa-info"></i>
                                    </a>
                                </td>
                            </tr>
>>>>>>> main
=======
                                <th class="action-th">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $merchandise) { ?>
                                <tr>
                                    <td><?php echo $merchandise->id; ?></td>
                                    <td><?php echo $merchandise->fundraiser_id; ?></td>
                                    <td><?php echo $merchandise->product_name; ?></td>
                                    <td><?php echo $merchandise->title; ?></td>
                                    <td><?php echo $merchandise->total_quantity; ?></td>
                                    <td><?php echo $merchandise->current_stock; ?></td>
                                    <td><?php echo $merchandise->price; ?></td>
                                    <td><?php echo $merchandise->amount; ?></td>
                                    <td><?php echo $merchandise->status; ?></td>
                                    <td class="action-td">
                                        <a href="<?php echo URLROOT ?>/Admin_Merchandise/info/<?php echo $merchandise->id; ?>"
                                            class="action-icons">
                                            <i class="fa-solid fa-info"></i>
                                        </a>


                                        <a class="action-icons">
                                            <i class="fa-solid fa-check" onclick='if(window.confirm("Are you sure you want to activate the <?php echo $merchandise->id; ?>")){
                                            window.open("<?php echo URLROOT ?>/Admin_Merchandise/setActive/<?php echo $merchandise->id; ?>");
                                         }'>
                                            </i>
                                        </a>


                                    </td>
                                </tr>
                            <?php } ?>
>>>>>>> 507039d45abbbefb9d3eaae99553f41235372f2d
                    </table>
                </div>
            </div>
        </div>
</body>

</html>
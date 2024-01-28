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
     <div class ="dashDetails"> 
     <div class="container">
        <div class="table-wrapper">
        <table>
        <thead>
        <tr>
            <th>Fundraiser ID</th>
            <th>Username</th>
            <th>Category</th>
            <th>Title</th>
            <th>Description</th>
            <th>Required Amount</th>
            <th>Amount Collected</th>
            <th>Created Date</th>
            <th>Modified Date</th>
            <th>Requirement End Date</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>

        <tr>
            <td>
                <span>
                    <span class="fi fi-af"></span>
                </span>
                <span>010</span>
                </td>
                <td>14</td>
            <td></td>
            <td>Health</td>
            <td>............</td>
            <td>1.jpg</td>
            <td>43000.00</td>
            <td>2023-12-24</td>
            <td>2024-01-01</td>
            <td>2024-02-05</td>
            <td>deactive</td>
            <td>
                <button class="data_view"
            onclick="window.location.href = '<?php echo URLROOT ?>/Admin_Fundraisers/fundraiser_one'">View</button>
                <button onclick class="data_reactivate">Reactivate</button>
            </td>
            </tr>
    <?php 
        foreach ($data as $fundraiser) {
            ?>

        <tr>
            <td><?php echo $fundraiser->id; ?></td>
            <td><?php echo $fundraiser->username; ?></td>
            <td><?php echo $fundraiser->category; ?></td>
            <td><?php echo $fundraiser->title; ?></td>
            <td>-</td>
            <td><?php echo $fundraiser->contact; ?></td>
            <td>blood.png</td>
            <td><?php echo $fundraiser->type; ?></td>
            <td><?php echo $fundraiser->status; ?></td>
            <td>
            <td>
                <button onclick="window.location.href = '<?php echo URLROOT ?>/Admin_Fundraisers/fundraiser_one/<?php echo $story->id ?>'" class="data_view">Deactive</button>
                <button onclick class="data_reactivate">Reactivate</button>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
  </div>
</body>
</html>

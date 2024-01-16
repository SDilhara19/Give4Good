<!DOCTYPE html>
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
        <?php require APPROOT . '/views/Admin_Stories/stories-header.php' ?>
        <div class ="dashDetails">
        <div class="container">
        <div class="table-wrapper">
        <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>User Name</th>
            <th>Title</th>
            <th>Description</th>
            <th>Contact</th>
            <th>Image</th>
            <th>Indvidual Or Organization</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        foreach ($data as $story) {
            ?>

        <tr>
            <td><?php echo $story->id; ?></td>
            <td><?php echo $story->username; ?></td>
            <td><?php echo $story->title; ?></td>
            <td>-</td>
            <td><?php echo $story->contact; ?></td>
            <td>blood.png</td>
            <td><?php echo $story->type; ?></td>
            <td>Deactive</td>
            <td>
                <button onclick class="data_view">View</button>
                <button onclick="window.location.href = '<?php echo URLROOT ?>/Admin_Stories/setDeactive/<?php echo $story->id ?>'" class="data_view">Deactive</button>
               
                <!-- <button onclick class="data_reactivate">Reactivate</button> -->
            </td>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
    </div>
</div>
</div>

</body>
</html>

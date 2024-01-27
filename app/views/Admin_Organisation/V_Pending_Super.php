<html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GIVE4GOOD</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/styles.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/components-3/Admin_style.css">
  <script src="https://kit.fontawesome.com/9e9a03ae37.js" crossorigin="anonymous"></script>
</head>

<body>
  <?php require APPROOT . '/views/includes/admin-header.php' ?>
  <?php require APPROOT . '/views/includes/admin-dashboard.php' ?>

  <div class="main--content">
    <?php require APPROOT . '/views/Admin_Organisation/Organisation-header.php' ?>
    <div class="dashDetails">
      <div class="container">
        <div class="table-wrapper">
          <table>
              <thead>
                <tr>

                  <th>ID</th>
                  <th>About</th>
                  <th>Contact No</th>
                  <th>Address</th>
                  <th>Registration Certificate Photo</th>
                  <th>Logo</th>
                  <th>Cover Image</th>
                  <th>Bank Code</th>
                  <th>Bank Name</th>
                  <th>Branch Code</th>
                  <th>Branch Name</th>
                  <th>Bank Account No</th>
                  <th>Passbook Photo</th>
                  <th>Executive Name</th>
                  <th>Executive NIC</th>
                  <th>Executive Address</th>
                  <th>Executive Contact</th>
                  <th>Executive Email</th>
                  <th>Executive NIC image</th>
                  <th>Treasurer Name</th>
                  <th>Treasurer NIC</th>
                  <th>Treasurer Address</th>
                  <th>Treasurer Contact</th>
                  <th>Treasurer Email</th>
                  <th>Treasurer NIC Image</th>
                  </th>

                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <span>
                      <span class="fi fi-af"></span>
                    </span>
                    <span>001</span>
                  </td>
                  <td>Non-profit organization</td>
                  <td>0112458654</td>
                  <td>No 78, Galle Rd, Dehiwala</td>
                  <td>regcer.jpg</td>
                  <td>logo1.jpg</td>
                  <td>1255</td>
                  <td>sampath</td>
                  <td>78</td>
                  <td>colombo07</td>
                  <td>7276464</td>
                  <td>thpb.png</td>
                  <td>1</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>

                  <td>-</td>
                  <td><button onclick class="data_view">View</button>
                    <button onclick class="data_activate">Activate</button>

                  </td>
                </tr>

              </tbody>
            </table>
          </div>
</body>

</html>
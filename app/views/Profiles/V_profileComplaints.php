<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GIVE4GOOD</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/styles.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/components/profile_style.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/components/admin.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://kit.fontawesome.com/9e9a03ae37.js" crossorigin="anonymous"></script>
</head>

<body>
  <?php require APPROOT . '/views/includes/header.php' ?>
  <?php if ($_SESSION['userType'] == 'individual') {
    require APPROOT . '/views/includes/indvProfileSideBar.php';
  } else if ($_SESSION['userType'] == 'organisation') {
    require APPROOT . '/views/includes/orgProfileSideBar.php';
  }
  ?>


  <div class="main--content">
    <div class="header--wrapper">
      <div class="header--title">
      <i class="fa-regular fa-comment-dots"></i>
        <span>Your Complaints</span>
      </div>
   <form>
      <div class="search-box">
        <div class="search-bar">
          <input type="text" name="" id="myInput" onkeyup="searchFun()" placeholder="Search Give4Good" >
          <i class="fa-solid fa-magnifying-glass"></i>
          
        </div>
      </div>
   </form>
      <!-- <div class="user--info">
         <div class="search--box">
          <i class="fa-solid fa-magnifying-glass"></i>
          <input type="text" placeholder="Search Name" />
        </div>
      </div> -->
    </div>
    <div class="dashDetails">
      <div class="container">
        <div class="table-wrapper">
          <table class="myTable">
            <!-- <thead> -->
              <tr>
                <th>Fundraiser Title</th>
                <th>Reason</th>
                <th>Others</th>
                <th>Actions</th>
              </tr>
            <!-- </thead> -->
            <tbody>
              <?php
              foreach ($data as $profileComplaints) {
                ?>
                <tr>
                  <td><?php echo $profileComplaints->fundraiser_name; ?></td>
                  <td><?php echo $profileComplaints->reason; ?></td>
                  <td><?php echo $profileComplaints->others; ?></td>
                  <td>
                  <div class="submit-button-div">
                      <button class="button-1-green">
                          <a
                            href="http://localhost/give4good/Fundraiser/fundraiser/<?php echo $profileComplaints->fundraiser_id; ?>">View</a>
                        </button>
                    </div>
                  </td>
                </tr>
                <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
</body>

<?php require APPROOT . '/views/includes/footer.php' ?>
<script>
// function myFunction() {
//   // Declare variables
//   var input, filter, table, tr, td, i, j, txtValue;
//   input = document.getElementById("myInput");
//   filter = input.value.toUpperCase();
//   table = document.getElementById("myTable");
//   tr = table.getElementsByTagName("tr");

//   // Loop through all table rows
//   for (i = 0; i < tr.length; i++) {
//     // Reset the display of each row to show initially
//     tr[i].style.display = "";

//     // Loop through all columns of the current row
//     td = tr[i].getElementsByTagName("td");
//     for (j = 0; j < td.length; j++) {
//       // Get the text content of the current cell
//       txtValue = td[j].textContent || td[j].innerText;

//       // If the text content matches the filter, keep the row visible and exit the loop
//       if (txtValue.toUpperCase().indexOf(filter) > -1) {
//         tr[i].style.display = "";
//         break; // Exit the loop if a match is found
//       } else {
//         // If no match is found in the current cell, hide the row
//         tr[i].style.display = "none";
//       }
//     }
//   }
//}
// const searchFun=()=>{
//   let filter=document.getElementById('myInput').value.toUpperCase();
//   let myTable=document.getElementById('myTable');
//   let tr=myTable.getElementsByTagName('tr');

//   for(var i=0; i<tr.length; i++){
//     let td = tr[i].getElementsByTagName('td')[0];

//     if(td){
//       let textValue=td.textContent || td.innerText;
//       if(textValue.toUpperCase().indexOf(filter) > -1){
//         tr[i].style.display="";
//       }else{
//         tr[i].style.display="none";  
//       }
//     }
//   }
// }
</script>

</html>
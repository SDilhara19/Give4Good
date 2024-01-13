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
    <div class="header--wrapper">
      <div class="header--title">
        <i class="fa-solid fa-bars"></i>
        <span>Dashboard</span>
      </div>
      <div class="user--info">
        <div class="search--box">
          <i class="fa-solid fa-magnifying-glass"></i>
          <input type="text" placeholder="Search Name"/>
        </div>  
      </div>  
    </div>

      <div class="dashDetails">
        <div class="dashUnit">
          <div class="client">
            <span>Pending Sign Ups<strong>  05</strong></span>
          </div>   
          <div class="dash_table">
            <table>
          <tbody>
            <tr>           
              <td>RotractUOC</td>            
              <td><button class="dash_view">View</button></td>
            </tr>
            <tr>           
              <td>Friends98</td>            
              <td><button class="dash_view">View</button></td>
            </tr> 
            <tr>           
              <td>SAC</td>            
              <td><button class="dash_view">View</button></td>
            </tr>
            </tbody>
           </table>
           <div class="viewall">
              <button>View All</button>
            </div>
            </div>      
        </div>
        <div class="dashUnit">
            <div class="client">
              <span>Pending Reactivations <strong>  13</strong></span>
            </div>
            <div class="dash_table">
              <table>
              
            <tbody>
              <tr>           
                <td>SarathWK</td>            
                <td><button class="dash_view">View</button></td>
              </tr>
              <tr>           
                <td>KDPathma</td>            
                <td><button class="dash_view">View</button></td>
              </tr>
              <tr>           
                <td>MCGroup</td>            
                <td><button class="dash_view">View</button></td>
              </tr>
              </tbody>
             </table>
             <div class="viewall">
                <button>View All</button>
              </div>
              </div>      
          </div>
          <div class="dashUnit">
            <div class="client">
              <span>Pending Fundraisers <strong>  13</strong></span>
            </div>   
            <div class="dash_table">
              <table>
              
            <tbody>
              <tr>           
                <td>Educational help</td>            
                <td><button class="dash_view">View</button></td>
              </tr>
              <tr>           
                <td>Build a library</td>            
                <td><button class="dash_view">View</button></td>
              </tr>
              <tr>           
                <td>Help for building a house</td>            
                <td><button class="dash_view">View</button></td>
              </tr>
              </tbody>
             </table>
             <div class="viewall">
                <button>View All</button>
              </div>
              </div>      
          </div>
          <div class="dashUnit">
            <div class="client">
              <span>Pending Stories <strong>  13</strong></span>
            </div>  
            <div class="dash_table">
              <table>
              
            <tbody> 
              <tr>           
                <td>Blood Donation Camp</td>            
                <td><button class="dash_view">View</button></td>
              </tr>
              <tr>           
                <td>Request kidney</td>            
                <td><button class="dash_view">View</button></td>
              </tr>
              <tr>           
                <td>Health Camp</td>            
                <td><button class="dash_view">View</button></td>
              </tr>
              </tbody>
             </table>
             <div class="viewall">
                <button>View All</button>
              </div>
              </div>      
          </div>
      </div>
    </div>
</body>
</html>
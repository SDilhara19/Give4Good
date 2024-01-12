<html>
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
  <div class="side-nav">
    <a href="#" class="logo">
      <img src="LogoBlack.png" alt="" class="LOGO-img">
    </a>
    <ul class="nav-links">
      <li><a href="Admindashboard.html"><i class="fa-brands fa-windows"></i><p>Dashboard</p></a></li>
      <li><a href="AdmindoneeIndividuals.html"><i class="fa-solid fa-people-group"></i><p>Individual Donees</p></a></li>
      <li><a href="AdmindonorIndividuals.html"><i class="fa-solid fa-people-group"></i><p>Individual Donors</p></a></li>
      <li><a href="AdmindonorOrganizations.html"><i class="fa-solid fa-people-roof"></i><p>Donor Organizations</p></a></li>
      <li><a href="AdmindoneeOrganizations.html"><i class="fa-solid fa-people-roof"></i><p>Donee Organizations</p></a></li>
      <li><a href="AdminFundraisers-active.html"><i class="fa-solid fa-table"></i><p>Fundraisers</p></a></li>
      <li><a href="AdminDonations.html"><i class="fa-solid fa-table"></i><p>Donations</p></a></li>
      <li><a href="AdminStories.html"><i class="fa-solid fa-table"></i><p>Stories</p></a></li>
      <li><a href="AdminComplaigns.html"><i class="fa-regular fa-comments"></i><p>Complaigns</p></a></li>
      <li><a href="AdminaddAdmin.html"><i class="fa-solid fa-user-plus"></i><p>Add an admin</p></a></li>
      <li><a href="#"><i class="fa-solid fa-right-from-bracket"></i><p>Log out</p></a></li>
      <div class="active"></div>
    </ul>
  </div>
  <div class="main--content">
    <div class="header--wrapper">
      <div class="header--title">
        <i class="fa-solid fa-bars"></i>
        <span>Donee Individuals (Deactived)</span>
      </div>
      <div class="header--buttons">
        <a href="AdmindoneeIndividuals.html"><button class="all-button">All</button></a>
        <a href="AdmindoneeIndividuals-active.html"><button class="active-button">Active</button></a>
        <a href="AdmindoneeIndividuals-deactivated.html"><button class="deactivated-button">Deactivated</button></a>
        <a href="AdmindoneeIndividuals-pending.html"><button class="pending-button">Pending</button></a>
      </div>
      <div class="user--info">
        <div class="search--box">
          <i class="fa-solid fa-magnifying-glass"></i>
          <input type="text" placeholder="Search Name"/>
        </div>  
      </div>
    </div>
    <div class ="dashDetails">
    <div class="container">
    <div class="table-wrapper">
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>NIC No</th>
            <th>NIC Image</th>
            <th>Bank Code</th>
            <th>Bank Name</th>
            <th>Branch Code</th>
            <th>Branch Name</th>
            <th>Bank Account No</th>
            <th>Passbook Photo</th>
            <th>User ID</th>
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
            <td>janith thenuja</td>
            <td>1233</td>
            <td>janithnic.jpg</td>
            <td>1255</td>
            <td>sampath</td>
            <td>78</td>
            <td>colombo07</td>
            <td>7276464</td>
            <td>janithpb.png</td>
            <td>1</td>
            <td><button onclick class="data_view">View</button>
              <button onclick class="data_deactivate">Deactivate</button>
            </td>
          </tr>
          <tr>
            <td>
                <span>
                    <span class="fi fi-af"></span>
                  </span>
                  <span>002</span>
                </td>
                <td>shalini imasha</td>
                <td>1233</td>
                <td>shalininic.jpg</td>
                <td>1255</td>
                <td>sampath</td>
                <td>78</td>
                <td>colombo07</td>
                <td>7276464</td>
                <td>shalinipb.png</td>
                <td>2</td>
                <td><button onclick class="data_view">View</button>
                  <button onclick class="data_deactivate">Deactivate</button>
                </td>
          </tr>
          <tr>
            <td>
                <span>
                    <span class="fi fi-af"></span>
                  </span>
                  <span>003</span>
                </td>
                <td>sanduni dilhara</td>
                <td>1233</td>
                <td>sanduninic.jpg</td>
                <td>125</td>
                <td>commercial</td>
                <td>28</td>
                <td>colombo07</td>
                <td>7276464</td>
                <td>sanduni.png</td>
                <td>3</td>
                <td><button onclick class="data_view">View</button>
                  <button onclick class="data_deactivate">Deactivate</button>
                </td>
          </tr>
          <tr>
            <td>
                <span>
                    <span class="fi fi-af"></span>
                  </span>
                  <span>004</span>
                </td>
                <td>hansini bhagya</td>
                <td>1233</td>
                <td>bhagyanic.jpg</td>
                <td>155</td>
                <td>boc</td>
                <td>78</td>
                <td>colombo07</td>
                <td>7276364</td>
                <td>bhagyapb.png</td>
                <td>4</td>
                <td><button onclick class="data_view">View</button>
                  <button onclick class="data_deactivate">Deactivate</button>
                </td>
          </tr>
        </tbody>
      </table>
</div>   
</body>
</html>
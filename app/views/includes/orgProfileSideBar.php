<div class="side-bar-main active">
    <!-- <a href="#" class="logo">
      <img src="LogoBlack.png" alt="" class="LOGO-img">
    </a> -->
    <ul class="nav-links">
      <li><a href="<?php echo URLROOT?>/Profile/index/<?php echo $_SESSION['userId'] ?>"><i class="fa-brands fa-windows"></i><p>Organisational Info</p></a></li>
      <li><a href="<?php echo URLROOT?>/Profile/edit_org/<?php echo $_SESSION['userId'] ?>"><i class="fa-regular fa-pen-to-square"></i><p>Edit profile</p></a></li>
      <li><a href="<?php echo URLROOT?>/Profile/donations/<?php echo $_SESSION['userId'] ?>"><i class="fa-light fa-handshake-angle"></i><p>Donations</p></a></li>
      <li><a href="<?php echo URLROOT?>/Profile/fundraisers/<?php echo $_SESSION['userId'] ?>"><i class="fa-light fa-hand-holding-dollar"></i><p>Fundraisers</p></a></li>
      <li><a href="<?php echo URLROOT?>/Profile/stories/<?php echo $_SESSION['userId'] ?>"><i class="fa-solid fa-people-roof"></i><p>Stories</p></a></li>
      <li><a href="<?php echo URLROOT?>/Profile/complaints/<?php echo $_SESSION['userId'] ?>"><i class="fa-solid fa-table"></i><p>Complaints</p></a></li>
      <li><a href="<?php echo URLROOT?>/Profile/merchandises/<?php echo $_SESSION['userId'] ?>"><i class="fa-light fa-shirt"></i><p>Merchandises</p></a></li>
      <li><a href="<?php echo URLROOT?>/Profile/subpayments/<?php echo $_SESSION['userId'] ?>"><i class="fa-light fa-shirt"></i><p>Subscription payments</p></a></li>
      <li><a href="<?php echo URLROOT?>/Profile/change_pwd/<?php echo $_SESSION['userId'] ?>"><i class="fa-solid fa-gears"></i><p>Change password</p></a></li>
      <li><a href="<?php echo URLROOT?>/Profile/notifications/<?php echo $_SESSION['userId'] ?>"><i class="fa-regular fa-bell"></i><p>Notifications</p></a></li>
      <div class="active"></div>
    </ul>
  </div>

<script src="<?php echo URLROOT ?>/public/js/admin-header.js"></script>

<div class="side-bar-main active">
    <!-- <a href="#" class="logo">
      <img src="LogoBlack.png" alt="" class="LOGO-img">
    </a> -->
    <ul class="nav-links">
      <li><a href="<?php echo URLROOT?>/Profile/index/<?php echo $_SESSION['userId'] ?>"><i class="fa-regular fa-building"></i><p>Organisational Info</p></a></li>
      <li><a href="<?php echo URLROOT?>/Profile/edit_org/<?php echo $_SESSION['userId'] ?>"><i class="fa-regular fa-pen-to-square"></i><p>Edit profile</p></a></li>
      <li><a href="<?php echo URLROOT?>/Profile/donations/<?php echo $_SESSION['userId'] ?>"><i class="fa-solid fa-hand-holding-heart fa-xl"></i><p>Donations</p></a></li>
      <li><a href="<?php echo URLROOT?>/Profile/fundraisers/<?php echo $_SESSION['userId'] ?>"><i class="fa-solid fa-hands-holding"></i><p>Fundraisers</p></a></li>
      <li><a href="<?php echo URLROOT?>/Profile/stories/<?php echo $_SESSION['userId'] ?>"><i class="bx bxs-book-heart bx-sm"></i><p>Stories</p></a></li>
      <li><a href="<?php echo URLROOT?>/Profile/complaints/<?php echo $_SESSION['userId'] ?>"><i class="fa-regular fa-comment-dots"></i><p>Complaints</p></a></li>
      <li><a href="<?php echo URLROOT?>/Profile/merchandises/<?php echo $_SESSION['userId'] ?>"><i class='bx bxs-t-shirt bx-sm'></i><p>Merchandises</p></a></li>
      <li><a href="<?php echo URLROOT?>/Profile/subpayments/<?php echo $_SESSION['userId'] ?>"><i class="fa-solid fa-file-invoice-dollar"></i><p>Subscription payments</p></a></li>
      <li><a href="<?php echo URLROOT?>/Profile/change_pwd/<?php echo $_SESSION['userId'] ?>"><i class="fa-solid fa-gears"></i><p>Change password</p></a></li>
      <li><a href="<?php echo URLROOT?>/Profile/notifications/<?php echo $_SESSION['userId'] ?>"><i class="fa-regular fa-bell"></i><p>Notifications</p></a></li>
      <div class="active"></div>
    </ul>
  </div>

<!-- <script src="<?php echo URLROOT ?>/public/js/admin-header.js"></script> -->

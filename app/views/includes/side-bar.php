<div class="home-side-bar-main">
    <div class="top-side-bar">
    </div>
    <ul>
        <li onclick="window.location.href = '<?php echo URLROOT ?>/index'">
            <i class='bx bxs-home bx-sm'></i>
                <span class="nav-item-side-bar">Home</span>
            <!-- <span class="tooltip">Dashxxboard</span> -->
        </li>
        <li onclick="window.location.href = '<?php echo URLROOT ?>/Fundraiser'">
                <i class='bx bxs-donate-heart bx-sm'></i>
                <span class="nav-item-side-bar">Fundraisers</span>
            <!-- <span class="tooltip">bbbb</span> -->
        </li>
        <div class="side-fundraiser-categories">
            <ul>
                <li>
                        <i class="fa-solid fa-hand-holding-heart fa-xl"></i>
                        <span class="nav-item-side-bar">Fundraisers</span>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-hand-holding-heart fa-xl"></i>
                        <span class="nav-item-side-bar">Fundraisers</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-hand-holding-heart fa-xl"></i>
                        <span class="nav-item-side-bar">Fundraisers</span>
                    </a>
                </li>

            </ul>
</div>
        <li onclick="window.location.href = '<?php echo URLROOT ?>/Stories'">
                <i class='bx bxs-book-heart bx-sm'></i>
                <span class="nav-item-side-bar">Stories</span>
            <!-- <span class="tooltip">Dashboard</span> -->
        </li>
        <li onclick="window.location.href = '<?php echo URLROOT ?>/Merchandise'">
            <i class='bx bxs-t-shirt bx-sm'></i>
                <span class="nav-item-side-bar">Merchandise</span>
            <!-- <span class="tooltip">Dashboard</span> -->
        </li>
        <li onclick="window.location.href = '<?php echo URLROOT ?>/Fundraisersuper/'">
            <i class='bx bxs-caret-up-square bx-sm' onclick="window.location.href = '<?php echo URLROOT ?>/Fundraiser/start'"></i>
                <span class="nav-item-side-bar">Start Fundraising</span>
            <!-- <span class="tooltip">Create a story</span> -->
        </li>
        <li onclick="window.location.href = '<?php echo URLROOT ?>/individual/super'">
            <i class='bx bxs-star bx-sm' #></i>
                <span class="nav-item-side-bar">Super User</span>
            <!-- <span class="tooltip">Dashboard</span> -->
        </li>
            
     <li onclick="window.location.href = '<?php echo URLROOT?>/Profile/index/<?php echo $_SESSION['userId'] ?>'">
            <i class='bx bxs-user bx-sm'></i>
                <span class="nav-item-side-bar">Profile</span>
            <!-- <span class="tooltip">Dashboard</span> -->
        </li>
           
        
        <li onclick="window.location.href = '<?php echo URLROOT ?>/users/logout'">
            <!-- <a href="<? //php echo URLROOT?>/users/logout"> -->
            <i class='bx bxs-exit bx-sm'></i>
                <span class="nav-item-side-bar">Logout</span>
          
            <!-- <span class="tooltip">Dashboard</span> -->
        </li>
    </ul>
</div>
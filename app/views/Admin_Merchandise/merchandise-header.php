<div class="header--wrapper">
    <div class="header--title">
        <span>Fundraiser Merchandise</span>
    </div>
    <div class="header--buttons">
        <button class="active-button"
            onclick="window.location.href = '<?php echo URLROOT ?>/Admin_Merchandise/active'">Active</button>
        <button class="deactivated-button"
            onclick="window.location.href = '<?php echo URLROOT ?>/Admin_Merchandise/rejected'">Rejected</button>
        <button class="pending-button"
            onclick="window.location.href = '<?php echo URLROOT ?>/Admin_Merchandise/pending'">Pending</button>
        <button class="all-button"
            onclick="window.location.href = '<?php echo URLROOT ?>/Admin_Merchandise/index'">All</button>
    </div>
    <div class="user--info">
        <div class="search--box">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="Search Name" />
        </div>
    </div>
</div>
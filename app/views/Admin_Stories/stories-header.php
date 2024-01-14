<div class="header--wrapper">
    <div class="header--title">
        <i class="fa-solid fa-bars"></i>
        <span>Stories</span>
    </div>
    <div class="header--buttons">
        <button class="active-button"
            onclick="window.location.href = '<?php echo URLROOT ?>/Admin_Stories/active'">Active</button>
        <button class="deactivated-button"
            onclick="window.location.href = '<?php echo URLROOT ?>/Admin_Stories/deactive'">Deactivated</button>
        <button class="pending-button"
            onclick="window.location.href = '<?php echo URLROOT ?>/Admin_Stories/pending'">Pending</button>
    </div>
    <div class="user--info">
        <div class="search--box">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="Search Name" />
        </div>
    </div>
</div>
<div class="donations-we-need" id="donations-we-need">
    <h1>Donations we need</h1>
    <div class="material-card-container">
        <?php
        foreach ($data['materials'] as $material) { ?>
            <div class="material-card">
                <div class="material-img-container">
                    <img src="<?php echo URLROOT . $material->image; ?>">
                    <!-- <p><?php // echo URLROOT . $material->image;  ?></p> -->
                </div>
                <div class="material-card-below">
                    <p class="text-1">
                        <?php echo $material->name; ?>
                    </p>
                    <button class="button-3 open-material-popup" data-popup-id="<?php echo $material->material_id; ?>">View
                        Details</button>
                </div>
            </div>
            <dialog class="material-popup" id='material-popup-<?php echo $material->material_id; ?>'>
                <span class="close-popup" id='close-material-popup-<?php echo $material->material_id; ?>'>&times;</span>
                <h2>
                    <?php echo $material->name; ?>
                </h2>
                <div class="material-popup-container">
                    <div class="material-popup-left">
                        <div class="material-popup-img-container">
                            <img src="<?php echo URLROOT . $material->image; ?>" alt="">
                        </div>
                    </div>
                    <div class="material-popup-right">
                        <div>
                            <p class="text-2">Description</p>
                            <p class="text-3">
                                <?php echo $material->description; ?>
                            </p>
                            <p class="text-2">Number of units required</p>
                            <p class="text-3">
                                <?php echo $material->units; ?>
                            </p>
                        </div>
                        <div>
                            <p class="text-2">Contact information for more details</p>
                            <table class="material-table">
                                <tr>
                                    <th>email</th>
                                    <td class="text-3">dialog@gmail.com</td>
                                </tr>
                                <tr>
                                    <th>phone</th>
                                    <td class="text-3">+9470 5643233</td>
                                </tr>
                            </table>
                        </div>


                    </div>
                </div>

            </dialog>
            <script src="<?php echo URLROOT ?>/public/js/popup.js"></script>

            <script>
                setupPopup('.open-material-popup[data-popup-id="<?php echo $material->material_id; ?>"]', '#material-popup-<?php echo $material->material_id; ?>', '#close-material-popup-<?php echo $material->material_id; ?>');
            </script>
            <?php
        } ?>
    </div>
</div>

<div class="send-donations">
    <h1>Send Donations</h1>
    <div class="send-donation-card-container">
        <div class="send-donation-card">
            <div class="send-donation-img-container">
                <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/map.png" alt="">
            </div>
            <div class="send-donation-text">
                <p class="text-2">Colombo 7</p>
                <div class="send-donation-details">
                    <p class="text-1">Contact: </p>
                    <p class="text-3">+9470 3420012</p>
                    <p class="text-1">Location: </p>
                    <p class="text-3">No.21, Dharmapala Rd, Dematagoda</p>

                </div>
            </div>
        </div>
        <div class="send-donation-card">
            <div class="send-donation-img-container">
                <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/map.png" alt="">
            </div>
            <div class="send-donation-text">
                <p class="text-2">Colombo 7</p>
                <div class="send-donation-details">
                    <p class="text-1">Contact: </p>
                    <p class="text-3">+9470 3420012</p>
                    <p class="text-1">Location: </p>
                    <p class="text-3">No.21, Dharmapala Rd, Dematagoda</p>

                </div>
            </div>
        </div>
        <div class="send-donation-card">
            <div class="send-donation-img-container">
                <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/map.png" alt="">
            </div>
            <div class="send-donation-text">
                <p class="text-2">Colombo 7</p>
                <div class="send-donation-details">
                    <p class="text-1">Contact: </p>
                    <p class="text-3">+9470 3420012</p>
                    <p class="text-1">Location: </p>
                    <p class="text-3">No.21, Dharmapala Rd, Dematagoda</p>

                </div>
            </div>
        </div>
        <div class="send-donation-card">
            <div class="send-donation-img-container">
                <img src="<?php echo URLROOT ?>/public/Assets/Uploaded-Images/map.png" alt="">
            </div>
            <div class="send-donation-text">
                <p class="text-2">Colombo 7</p>
                <div class="send-donation-details">
                    <p class="text-1">Contact: </p>
                    <p class="text-3">+9470 3420012</p>
                    <p class="text-1">Location: </p>
                    <p class="text-3">No.21, Dharmapala Rd, Dematagoda</p>

                </div>
            </div>
        </div>

    </div>


</div>
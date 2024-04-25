<?php
    if ($_SESSION['userType'] == 'organisation') { ?>
      <div class="js-next-prev-button">
        <div class="js-next" onclick="nextStep(4)">Next</div>
      </div>
    <?php } else if ($_SESSION['userType'] == 'individual') { ?>
        <div class="js-next-prev-button">
          <div class="js-next" onclick="nextStep(3)">Next</div>
        </div>
    <?php } ?>

  </fieldset>
</div>
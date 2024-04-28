<?php
    if ($_SESSION['userType'] == 'organisation') { ?>
      <div class="js-next-prev-button">
        <div class="js-next" onclick="nextStep(4)">Next</div>
      </div>
    <?php } else if ($_SESSION['userType'] == 'individual') { ?>
        <div class="js-next-prev-button">
          <div class="js-next" id="indvNext">Next</div>
        </div>
    <?php } ?>

  </fieldset>
</div>
<script>
  
var nextButton = document.getElementById('indvNext');
const fundImageBox =document.getElementById('chose_images')
nextButton.addEventListener('click', function (event) {
  if (!selectedFiles || selectedFiles.length === 0){
    console.log("d")
    fundImageBox.parentElement.parentElement.querySelector('.form-invalid').textContent = "Atlest one image is required"
  }
});
</script>
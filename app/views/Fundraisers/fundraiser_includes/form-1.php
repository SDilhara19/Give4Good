<div class="step-container active">
  <fieldset class="start-fundraiser-fieldset">
    <div class="form-set">
      <p class="text-6">Fundraiser Info</p>
      <div class="form-row">
        <div class="form-input-title2">Title<span class="required">*</span>
        </div>
        <input type="text" name="title" id="title" class="input" placeholder="">
        <span class="form-invalid">
          <?php if (!empty($data['title_err']))
            echo $data['title_err']; ?>
        </span>
      </div>
      <div class="form-row">
        <div class="form-input-title2">Your Story<span class="required">*</span></div>
        <textarea name="fund_story" id="fund_story" class="fund_story" rows="5" maxlength="2000"
          placeholder=""></textarea>
        <span class="form-invalid">
          <?php if (!empty($data['fund_story_err']))
            echo $data['fund_story_err']; ?>
        </span>

      </div>
      <div class="form-row" id="input_image">
        <div class="form-flex img-label">
          <div class="form-input-title">Add images related to the fundraiser<span class="required">*</span>
          </div>
          <div id="dynamic-input-image">

          </div>

          <button class="custom-file-input3" type="button" onclick="image_select()">Choose Images
          </button>
        </div>
        <div class="fund-images-box" id="fund-images-box">

        </div>
        <span class="form-invalid">
          <?php if (!empty($data['fundraiser_image_err']))
            echo $data['fundraiser_image_err']; ?>
        </span>

      </div>
      <div class="form-row form-flex">
        <div class="flx-1">
          <div class="form-input-title2">Amount Required(Rs.)<span class="required">*</span>
          </div>
          <input type="text" name="amount" id="amount" class="input" placeholder="">
          <span class="form-invalid">
            <?php if (!empty($data['amount_err']))
              echo $data['amount_err']; ?>

          </span>
        </div>
        <div class="flx-1">
          <div class="form-input-title2">Date to end fundraising<span class="required">*</span>
          </div>
          <input type="date" name="end_date" id="end_date" class="input">
          <span class="form-invalid">
            <?php if (!empty($data['end_date_err']))
              echo $data['end_date_err']; ?>
          </span>
        </div>
      </div>
      <div class="form-row form-flex">
        <div class="form-input-title2">Would you prefer to stay anonymous during the fundraiser</div>
        <div class="checkbox-wrapper-2">
          <input type="checkbox" class="sc-gJwTLC ikxBAC" name="anonymous" id="anonymous">
        </div>

      </div>
      <script type="text/javascript">
        var images = [];
        var selectedFiles = [];
        let count = 0;

        function image_select() {
          count++;
          console.log(count)

          let imageInput = document.createElement("input")

          imageInput.type = "file"
          imageInput.accept = "image/png, image/jpeg";
          imageInput.name = `fundraiser_image_${count}`;
          imageInput.id = `fundraiser_image_${count}`;
          imageInput.style = "display: none;"

          imageInput.addEventListener('change', function () {
            handleFileSelect(this.files);
          });


          document.getElementById("dynamic-input-image").appendChild(imageInput);

          imageInput.click()

          function handleFileSelect(files) {
            for (var i = 0; i < files.length; i++) {
              if (check_duplicate(files[i].name)) {
                images.push({
                  "name": files[i].name,
                  "url": URL.createObjectURL(files[i]),
                  "file": files[i],
                });
                selectedFiles.push(files[i]); // Add the file to selectedFiles array
              } else {
                alert(files[i].name + " is already added");
              }
            }
            document.getElementById("fund-images-box").innerHTML = image_show();
          }


        }
        function image_show() {
          var image = "";
          images.forEach((i) => {
            image += `<div class="fund-images-con">
                          <img src="` + i.url + `" alt="">
                        </div>`;
          });
          return image;
        }


        //image_show() with close button
        // function image_show() {
        //   var image = "";
        //   images.forEach((i) => {
        //     image += `<div class="fund-images-con">
        //                       <img src="` + i.url + `" alt="">
        //                       <span onclick="delete_image(` + images.indexOf(i) + `)">&times;</span>
        //                     </div>`;
        //   });
        //   return image;
        // }

        // function delete_image(e) {
        //   images.splice(e, 1);
        //   selectedFiles.splice(index, 1);
        //   document.getElementById('fund-images-box').innerHTML = image_show();
        // }

        function check_duplicate(name) {
          var image = true;
          // if (images.length > 0) {
          //   for (e = 0; e < images.length; e++) {
          //     if (images[e].name == name) {
          //       image = false;
          //       break;
          //     }
          //   }
          // }
          return image
        }


      </script>

    </div>

   
<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>

<body>

<?php include 'navbar.php'; ?>



<main role="main">

    <div class="container" style="padding-top: 6%">
        <div class="form-wrapper">

      <div class="row">
              <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                  <span class="text-muted"> Muzahidul Islam</span>
                </h4>
                  <ul class="list-group mb-3">


                      <li class="list-group-item d-flex justify-content-between lh-condensed">

                          <a href="myprofil.php" data-purpose="user_manage:edit-profile">
                              Profile
                          </a>

                      </li>




                      <li class="list-group-item d-flex justify-content-between lh-condensed">

                          <a href="userphoto.php" data-purpose="user_manage:edit-photo">
                              Photo
                          </a>

                      </li>




                      <li class="list-group-item d-flex justify-content-between lh-condensed">

                          <a href="userAccount.php" data-purpose="user_manage:edit-account">
                              Account
                          </a>

                      </li>

                      <li class="list-group-item d-flex justify-content-between lh-condensed">

                          <a href="userPrivecy.php" data-purpose="user_manage:edit-privacy">
                              Privacy
                          </a>

                      </li>



                  </ul>



              </div>
            <div class="col-md-8 order-md-1">
              <div class="col-md-8 order-md-1">
                <h4 class="mb-3 display-4">Photo</h4>
                  <div class="form-field-container  labeled form-section" id="form-item-image_file">
                      <label class="control-label " for="id_image_file">Image Preview:</label>
                      <div id="tooltip-reference-image_file" class="tooltip-reference pos-r ">
                          <div>
                              <div class="ud-app-loader ud-component--versioned-image-upload-with-preview--app mt20 mb30 ud-app-loaded" data-module-id="versioned-image-upload-with-preview" data-module-args="{&quot;minWidth&quot;:200,&quot;allowedImageExtensions&quot;:&quot;.gif,.jpg,.jpeg,.png&quot;,&quot;aspect&quot;:1,&quot;imageUrl&quot;:&quot;https://udemy-images.udemy.com/user/200_H/39034582_a55f.jpg&quot;,&quot;fieldPurpose&quot;:&quot;Add / Change Image&quot;,&quot;minHeight&quot;:200,&quot;fieldName&quot;:&quot;image_file&quot;,&quot;uploadLabel&quot;:&quot;Upload Image&quot;,&quot;tips&quot;:&quot;Your image should be at minimum 200x200 pixels and maximum 6000x6000 pixels.&quot;,&quot;awsKey&quot;:&quot;AKIAIOTLFW3HMG563JEA&quot;}" ng-non-bindable="">
                                  <div data-reactroot="" class="">
                                      <div class="image-upload-preview-with-crop--previewWrapper--1eYsy">
                                          <div class="image-upload-preview-with-crop--imageWrapper--fNINE">
                                              <img data-purpose="image-preview" src="https://udemy-images.udemy.com/user/200_H/39034582_a55f.jpg" alt="Course image" class="">
                                          </div>
                                          <div class="image-upload-preview-with-crop--tips--17Lj2">Your image should be at minimum 200x200 pixels and maximum 6000x6000 pixels.</div>
                                      </div>
                                      <div class="image-upload-preview-with-crop--form-element--2Nnsf">
                                          <div><label>Add / Change Image:</label></div>
                                          <div class="file-uploader--file-selector--SGCns" data-purpose="">
                                              <label for="FileUploaderS3-0--2"><span class="input-group">
                                                      <input type="text" readonly="" value="No file selected" class="form-control">
                                                      <span class="input-group-btn"><button type="button" class="btn btn-primary">Upload Image</button>
                                                      </span></span></label>
                                              <input type="file" accept=".gif,.jpg,.jpeg,.png" id="FileUploaderS3-0--2" class="">
                                              <!-- react-empty: 18 --></div><!-- react-empty: 19 -->
                                          <input type="hidden" name="image_file" value=""></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
        </div>
        </div>
        

</main>



<?php include 'signinpop.php'; ?>

<?php include 'footer.php'; ?>
</body>
</html>

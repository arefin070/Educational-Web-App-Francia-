<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>

<body>

<?php include 'navbar.php'; ?>



<main role="main">

    <div class="container" style="padding-top: 6%">

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




            </div>
            <div class="col-md-8 order-md-1" style="padding-right: 4%">
                <h4 class="mb-3 display-4">Account</h4>
                <div class="form-wrapper">
                    <h4>
                        Edit your account settings and change your password here.
                    </h4>




                    <form method="post" action="" class="ng-pristine ng-valid">
                        <div class="manage-fields-wrapper sectioned">
                            <div class="form-section" id="form-item-email">
                                <label>Email:</label>

                                <div id="tooltip-reference-email" class="tooltip-reference">
                                    <div class="input-group w100p">


                                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" data-toggle="modal" data-target="#editModal" type="button">Edit</button>
                                        </div>

                                        <!-- Modal Start -->
                                        <div id="editModal" class="modal" tabindex="-1" role="dialog">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Change Your Email</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <input style="padding-bottom: 2%" type="text" class="form-control" placeholder="Enter new email address" aria-label="Username" aria-describedby="basic-addon1">
                                                        <input type="password" class="form-control" placeholder="Enter your password" aria-label="Username" aria-describedby="basic-addon1">
                                                    </div>
                                                    <div class="modal-footer">

                                                        <button type="button" class="btn btn-primary" >Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal End -->

                                    </div>
                                </div>
                            </div>
                        </div>



                        <input type="hidden" name="csrfmiddlewaretoken" value="Yxjdq6wyuXew0CCEkviH6fEZU1B5ZhzUhswJhEEq8ApP0h0nqUYNFr7DvwPBtYx4" autocomplete="off"> <div class="manage-fields-wrapper"> <div class="form-field-container  labeled form-section" id="form-item-current_password"> <label class="control-label " for="id_current_password">Password:</label> <div id="tooltip-reference-current_password" class="tooltip-reference pos-r "> <input class="textinput textInput form-control" id="id_current_password" maxlength="64" minlength="6" name="current_password" placeholder="Enter Current Password" type="password" required=""> </div>
                            </div> <div class="form-field-container  non-labeled form-section" id="form-item-new_password"> <div id="tooltip-reference-new_password" class="tooltip-reference pos-r "> <input class="textinput textInput form-control" id="id_new_password" maxlength="64" minlength="6" name="new_password" placeholder="Enter New Password" type="password" required=""> </div>
                            </div> <div class="form-field-container  non-labeled form-section" id="form-item-confirm_new_password"> <div id="tooltip-reference-confirm_new_password" class="tooltip-reference pos-r "> <input class="textinput textInput form-control" id="id_confirm_new_password" maxlength="64" minlength="6" name="confirm_new_password" placeholder="Re-type New Password" type="password" required=""> </div>
                            </div>

                        </div>
                        <div class="form-actions"> <div class="submit-row"> <input type="submit" name="submit" value="Change Password" class="btn btn-primary " id="submit-id-submit">

                            </div>

                        </div> </form>




                </div>
            </div>
        </div>


</main>



<?php include 'signinpop.php'; ?>

<?php include 'footer.php'; ?>
</body>
</html>

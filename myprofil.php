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



                  </ul>


                <form class="card p-2">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Promo code">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-secondary">Redeem</button>
                    </div>
                  </div>
                </form>

              </div>
              <div class="col-md-8 order-md-1" style="padding-right: 4%">
                <h4 class="mb-3">Profile</h4>
                <form class="needs-validation" novalidate="">
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="firstName">First name</label>
                      <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                      <div class="invalid-feedback">
                        Valid first name is required.
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="lastName">Last name</label>
                      <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                      <div class="invalid-feedback">
                        Valid last name is required.
                      </div>
                    </div>
                  </div>

                  <div class="mb-3">
                    <label for="username">Username</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                      </div>
                      <input type="text" class="form-control" id="username" placeholder="Username" required="">
                      <div class="invalid-feedback" style="width: 100%;">
                        Your username is required.
                      </div>
                    </div>
                  </div>

                  <div class="mb-3">
                    <label for="email">Email <span class="text-muted">(Optional)</span></label>
                    <input type="email" class="form-control" id="email" placeholder="you@example.com">
                    <div class="invalid-feedback">
                      Please enter a valid email address for shipping updates.
                    </div>
                  </div>

                  <div class="mb-3">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
                    <div class="invalid-feedback">
                      Please enter your shipping address.
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-5 mb-3">
                      <label for="country">Country</label>
                      <select class="custom-select d-block w-100" id="country" required="">
                        <option value="">Choose...</option>
                        <option>United States</option>
                      </select>
                      <div class="invalid-feedback">
                        Please select a valid country.
                      </div>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="state">State</label>
                      <select class="custom-select d-block w-100" id="state" required="">
                        <option value="">Choose...</option>
                        <option>California</option>
                      </select>
                      <div class="invalid-feedback">
                        Please provide a valid state.
                      </div>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="zip">Zip</label>
                      <input type="text" class="form-control" id="zip" placeholder="" required="">
                      <div class="invalid-feedback">
                        Zip code required.
                      </div>
                    </div>

                  </div>



                  <hr class="mb-4">
                  <button class="btn btn-primary btn-lg btn-block" type="submit">Save Changes</button>
                </form>
              </div>
            </div>
        

</main>



<?php include 'signinpop.php'; ?>

<?php include 'footer.php'; ?>
</body>
</html>

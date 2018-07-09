
<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>

<body>




	<main role="main">
    
    <form class="form-signin" >
        <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h4 mb-4 font-weight-normal" style="color: dimgray">Please, Fill Request Form</h1>
        <label for="inputEmail" class="sr-only">Name</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Name" required="" autofocus="">
        <label for="inputEmail" class="sr-only">Phone Number</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Phone Number" required="" autofocus="">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
        <small style="color: #8e8e8e">Address</small>
        <label for="inputEmail" class="sr-only">House No.</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="House No." required="" autofocus="">
        <label for="inputEmail" class="sr-only">Street</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Street Address" required="" autofocus="">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
       <!-- <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
        -->
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-md btn-primary" type="submit">Submit</button>
        <br>
        <a class="text-info" href="terms&con.php"><small>Please, read terms & condition carefully</small></a>
    </form>


  </main>



	<?php include 'signinpop.php'; ?>


</body>
</html>

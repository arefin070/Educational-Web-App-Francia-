<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>

<body>

  


   <body class="text-center" style="background-color: #f5f5f5;padding-bottom: 40px;padding-top: 40px;align-items: center;height: 100%;">
    <form class="form-signin">
      <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" >Sign in</button>
      
    </form>
  </body>

    
  <?php include 'signinpop.php'; ?>

  <?php include 'footer.php'; ?>
</body>
</html>
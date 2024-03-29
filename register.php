<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    </head>
    <body class="text-center">
        <!-- Christian Peterson and Devanshi Chavda -->
        <?php
            session_start();
        ?>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-auto">
                    <h2 class="mb-3">Register</h2>
                    <form action="controller.php?mode=register" method="post">
                      <div class="form-row">
                        <div class="col-md-6 mb-3">
                          <label for="first_name">First name</label>
                          <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="last_name">Last name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name" required>
                        </div>
                      </div>
                      <div class="form-row">
                          <div class="col-md-12 mb-5">
                              <label for="email">Email address</label>
                              <input pattern="^[a-zA-Z_\-]+@(([a-zA-Z_\-])+\.)+[a-zA-Z]{2,4}$" type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                          </div>
                      </div>
                      <div class="form-row">
                          <div class="col-md-12 mb-3">
                            <label for="city">Street Address</label>
                            <input type="text" class="form-control" id="street_address" name="street_address" placeholder="Street Address" required>
                          </div>
                        <div class="col-md-6 mb-5">
                          <label for="city">City</label>
                          <input type="text" class="form-control" id="city" name="city" placeholder="City" required>
                        </div>
                        <div class="col-md-3 mb-5">
                          <label for="state">State</label>
                          <input type="text" class="form-control" id="state" name="state" placeholder="State" required>
                        </div>
                        <div class="col-md-3 mb-5">
                          <label for="zip">Zip</label>
                          <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip" required>
                        </div>
                      </div>
                      <div class="form-row">
                          <div class="col-md-12 mb-3">
                              <label for="password">Password</label>
                              <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                          </div>
                      </div>
                      <?php
                          if(isset($_SESSION ['registrationError'])) {
                              echo '<div class="alert alert-danger col-md-12" role="alert">' . $_SESSION['registrationError'] . '</div>';
                              unset($_SESSION ['registrationError']);
                          };
                      ?>
                      <button class="btn btn-primary" type="submit">Register</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
    </body>
</html>

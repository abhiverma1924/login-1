<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css" />
  <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css" />
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-signin my-5">
            <div class="card-body">
              <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab" ><i class="fa fa-user mr-1 fa-lg"></i>
                    Login
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#panel2" role="tab" ><i class="fa fa-user-plus mr-1 fa-lg"></i>
                    Register
                  </a>
                </li>
              </ul>
              <br>


              <div class="tab-content">
                <div class="tab-pane fade" id="panel2" role="tabpanel">
                  <form class="form-signin">
                    <div class="form-label-group">
                      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                      <label for="inputEmail">Email address</label>
                    </div>

                    <div class="form-label-group">
                      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                      <label for="inputPassword">Password</label>
                    </div>
                    <div class="options text-center text-md-right mt-1">
                      <p style="color: blue;">Not a member? <a href="#panel2" style="color: rgb(171, 194, 219);">Sign Up</a></p>
                      <p style="color: blue;">Forgot <a href="#" style="color:rgb(169, 190, 214);">Password?</a></p>
                    </div>

                    <div class="custom-control custom-checkbox mb-3">
                      <input type="checkbox" class="custom-control-input" id="customCheck1">
                      <label class="custom-control-label" for="customCheck1">Remember password</label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
                    <hr class="my-4">
                  </form>
                </div>
              </div>


              <div class="tab-content">
                <div class="tab-pane fade in show active" id="panel2" role="tabpanel">
                  <form class="form-signin">
                    <div class="form-label-group">
                      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                      <label for="inputEmail">Email address</label>
                    </div>

                    <div class="form-label-group">
                      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                      <label for="inputPassword">Password</label>
                    </div>
                    <div class="options text-center text-md-right mt-1">
                      <p style="color: blue;">Already Member? <a href="#panel1" style="color: rgb(171, 194, 219);">Sign Up</a></p>
                    </div>

                    <div class="custom-control custom-checkbox mb-3">
                      <input type="checkbox" class="custom-control-input" id="customCheck1">
                      <label class="custom-control-label" for="customCheck1">Remember password</label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign Up</button>
                    <hr class="my-4">
                  </form>
                </div>
              </div>



            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="./node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="./node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>

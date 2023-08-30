<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/boxicons.min.css">
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" integrity="sha256-3sPp8BkKUE7QyPSl6VfBByBroQbKxKG7tsusY2mhbVY=" crossorigin="anonymous" />

    <title>Admin Login</title>
</head>
<style>

/* ===== LOGIN PAGE ===== */
.login-box {
  -webkit-box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.1);
          box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.1);
  border-radius: 10px;
}

@media (min-width: 992px) {
  .login-box {
    margin: 170px 0;
  }
}
.login-box .form-wrap {
  border-radius: 10px;
  -webkit-box-shadow: 20px 15px 20px 20px rgba(0, 0, 0, 0.1);
          box-shadow: 0 15px 20px 0 rgba(0, 0, 0, 0.1);
}
@media (min-width: 992px) {
  .login-box .form-wrap {
    margin-top: -60px;
    margin-bottom: -30px;
    padding: 30px;
  }
}
.form-group .zmdi {
    position: absolute;
    z-index: 1;
    color: #fff;
    background-color: #d63e20;
    border-radius: 5px;
    height: 100%;
    width: 60px;
    text-align: center;
    font-size: 30px;
    /* align-items: center; */
    padding-top: 7px;
}

.form-group input[type='text'], .form-group input[type='email'], .form-group input[type='password'] {
    padding-left: 70px;
    font-size: 20px;
    font-family: barlow, sans-serif !important;
    margin-top: 20px;
}
.socials a {
    width: 35px;
    height: 35px;
    background-color: #d63e20;
    border-radius: 50%;
    -webkit-box-shadow: 0 3px 2px 0 #516cd9;
    box-shadow: 0 3px 2px 0 #516cd9;
    text-align: center;
    color: #fff;
    padding-top: 10px;
    font-size: 20px;
    margin-right: 10px;
}
.socials a:hover{
    background-color: #fff;
    color: #d63e20;
}
h4{
    font-size: 32px;
    padding-top: 20px;
}
.c-black{
    color: black;
    margin-bottom: 7px;
}
.forgot_pas{
    color: black;
    margin-bottom: 7px;padding-left: 260px;
}
.sign_up{
    color: black;
}
.card-footer a{
    color: black;
}
.card-footer a:hover{
    color: #d63e20;
}
</style>
<body class="back" style="background: linear-gradient(to bottom, rgba(9, 32, 50, 0.8), rgba(9, 32, 50, 0.8)), url(./assets/images/6.jpg);">
    <div class="container" id="login">
        <div class="row">
            <div class="col-md-11 mt-60 mx-md-auto">
                <div class="login-box bg-white pl-lg-5 pl-0">
                    <div class="row no-gutters align-items-center">
                        <div class="col-md-6">
                            <div class="form-wrap bg-white">
                                <h2>Nk Design<span style="color: #d63e20;">.</span></h2>
                                <h4 class="btm-sep pb-3">Login</h4>
                                <form class="form" method="POST" action="#">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group position-relative">
                                                <span class="zmdi zmdi-account"></span>
                                                <input type="email" id="email" class="form-control" placeholder="Email Address">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group position-relative">
                                                <span class="zmdi zmdi-email"></span>
                                                <input type="password" id="password" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="col-12 text-lg-right">
                                            <a href="./actions/forgotpass.php" class="forgot_pas">Forgot password ?</a>
                                        </div>
                                        <div class="col-12 mt-30">
                                            <button type="submit" id="submit" class="btn btn-lg btn-brand btn-dark btn-block">Sign In</button>
                                        </div>
                                        <div class="card-footer">
				                            <div class="#">
                                                Back to Home Page? <a href="./index.php">Click Here</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="content text-center">
                                <div class="border-bottom pb-5 mb-5">
                                    <h3 class="c-black">First time here?</h3>
                                    <a href="./actions/creatAccount.php" class="sign_up">Sign up (Register)</a>
                                </div>
                                <h5 class="c-black mb-4 mt-n1">Or Sign In With</h5>
                                <div class="socials">
                                    <a href="#" class="zmdi zmdi-facebook"></a>
                                    <a href="#" class="zmdi zmdi-twitter"></a>
                                    <a href="#" class="zmdi zmdi-google"></a>
                                    <a href="#" class="zmdi zmdi-instagram"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
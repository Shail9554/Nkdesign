

<!DOCTYPE html>
<html>
<head>
	<title>Login Page>Login Page.</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/boxicons.min.css">
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" href="./css/style.css">
</head>
<style>

    @import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
    background: linear-gradient(to bottom, rgba(9, 32, 50, 0.8), rgba(9, 32, 50, 0.8)), url(../assets/images/6.jpg);
}
.card{
    height: 490px;
    margin-top: auto;
    margin-bottom: auto;
    width: 400px;
	margin-top: 100px;
	border-radius: 15px;
}
.btn-brand{
    background-color: #ff4d29;
    color: white;
    border-color: #ff4d29;
    font-size: 20px;
}
.btn-brand:hover{
    color: #ffffff;
    background-color: #d63e20;
}
.card-header h3{
    color: black;
    font-size: 32px;
    font-family: barlow, sans-serif !important;
}
.input-group-prepend span{
    width: 50px;
    background-color: #ff4d29;
    color: white;
  
}
.links{
    color: black;
    font-size: 20px;
}
.links a{
    margin-left: 10px;
    color: black;
}
.links a:hover{
    color: #ff4d29;
}
</style>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header" style="text-align: center;">
				<h3>Sign Up</h3>
			</div>
			<div class="card-body">
				<form>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-users"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="User Full Name">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Username">
					</div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-envelope"></i></span>
						</div>
						<input type="email" class="form-control" placeholder="Email Id">
					</div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-lock"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Password">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-lock"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Conform Password">
					</div>
					<div class="col-12 mt-30">
                        <button type="submit" id="submit" class="btn btn-brand">Sign In</button>
                    </div>
					
				</form>
			</div>
            <div class="card-footer">
				<div class="sign_up d-flex justify-content-center links">
                Alread have an  Account?<a href="../login.php">Login Here</a>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
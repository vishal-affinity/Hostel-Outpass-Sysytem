<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
	<title>login</title>
</head>
<body>
	<nav>
		<img class="logo" src="logo.png">
	</nav>


    <div class="container">
        <div class="login-box">
        <div class="row">
            <div class="col-lg-6 login-left">
                <h1>Login Form</h1>

                <form action="validation.php" method="post">
                    <div class="form-group">
                        <label>email</label>
                        <input type="text" name="email" class="form-control" placeholder="Enter your email" required>
                    </div>

                    <div class="form-group">
                        <label>password</label>
                        <input type="text" name="password" class="form-control" placeholder="Enter Password" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Log In</button>
                </form>
            </div>

            <div class="col-lg-6 login-right">
                <h1>SignUP Form</h1>

                <form action="registration.php" method="post">
                    <div class="form-group">
                        <label>email</label>
                        <input type="text" name="email" class="form-control" placeholder="Enter your email" required>
                    </div>

                    <div class="form-group">
                        <label>password</label>
                        <input type="text" name="password" class="form-control" placeholder="Enter Password" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Sign Up</button>
                </form>
            </div>
        </div>
        </div>
    </div>
	
	<script>
		var x = document.getElementById("login");
		var y = document.getElementById("register");
		var z = document.getElementById("btn");

		function register() {
			x.style.left = "-400px";
			y.style.left = "50px";
			z.style.left = "110px";
		}

		function login() {
			x.style.left = "50px";
			y.style.left = "450px";
			z.style.left = "0";
		}
	</script>
</body>
</html>

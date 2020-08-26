
<!DOCTYPE html>
<html>
<head>
	<title>SignUp and Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


<div class="container" id="container">
<div class="form-container sign-up-container">

<form  action="">
	<h1>Create Account</h1>
	<div class="social-container">
		<a href="#" class="social"><i class="fa fa-facebook" onclick="fblogin();"></i></a>
		<a href="#" class="social"><i class="fa fa-google" onclick="GoogleLogin();"></i></a>
		<a href="#" class="social"><i class="fa fa-linkedin"></i></a>
	</div>
	<span>or use your email for registration</span>
	<input type="text" name="name" placeholder="Name">
	<input type="password" name="password" placeholder="Password">
	<button>SignUp</button>
	
</form>
</div>
<div class="form-container sign-in-container">
	<form method="$POST" action="#">
		<h1>Sign In</h1>
		<div class="social-container">
		<a href="#"><i class="fa fa-facebook"onclick="fblogin();"></i></a>
		<a href="#"><i class="fa fa-google"  onclick="GoogleLogin();"></i></a>
		<a href="#"><i class="fa fa-linkedin"></i></a>
	</div>
	<span>or use your account</span>
	<input type="username" name="uname" placeholder="Username">
	<input type="password" name="password" placeholder="Password">
	<a href="#">Forgot Your Password</a>

	<button>Sign In</button>
	</form>
</div>
<div class="overlay-container">
	<div class="overlay">
		<div class="overlay-panel overlay-left">
			<h1>Welcome Back!</h1>
			<p>To keep connected with us please login with your personal info</p>
			<button class="ghost" id="signIn">Sign In</button>
		</div>
		<div class="overlay-panel overlay-right">
			<h1>Hello, Friend!</h1>
			<p>Enter your details and start journey with us</p>
			<button class="ghost" id="signUp">Sign Up</button>
		</div>
	</div>
</div>
</div>
<script src="https://www.gstatic.com/firebasejs/6.1.1/firebase-app.js"></script>

<!-- Add Firebase products that you want to use -->
<script src="https://www.gstatic.com/firebasejs/6.1.1/firebase-auth.js"></script>

<script src="https://www.gstatic.com/firebasejs/6.1.1/firebase-database.js"></script>


  	
<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyCDoy3quc_jLBZL1u2UQN6HzBZM6zFlVFw",
    authDomain: "fir-cbd4a.firebaseapp.com",
    databaseURL: "https://fir-cbd4a.firebaseio.com",
    projectId: "fir-cbd4a",
    storageBucket: "fir-cbd4a.appspot.com",
    messagingSenderId: "35240125187",
    appId: "1:35240125187:web:a24aaa8ca12a86e6e27f36",
    measurementId: "G-5QRHDNNCKJ"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>


  <script>
  	function GoogleLogin(){
  		// body...
  		var provider = new firebase.auth.GoogleAuthProvider();

  		firebase.auth().signInWithPopup(provider).then(function(result) {
        //code executes after successful login
        window.location = "home.php"
  		}).catch(function (error) {
  			var errorMessage = error.message;
  			alert("errorMessage");
  		})

  	}

  </script>




<script type="text/javascript">
	const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const container = document.getElementById('container');

	signUpButton.addEventListener('click', () => {
		container.classList.add("right-panel-active");
	});
	signInButton.addEventListener('click', () => {
		container.classList.remove("right-panel-active");
	});
</script>




</body>
</html>   





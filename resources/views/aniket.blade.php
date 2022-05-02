<?php
// include("connection.php");
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/registerstyle.css">
<title>Login & Register Form</title>
</head>
<body>
<form method="POST" action="/addlogin">

@csrf	
    <div class="login-wrap">
	<div class="login-html">
	
	@if(session('message'))
				<div class="alert alert-success">
					{{session('message')}}
				</div>
				@endif

				@if(session('logmessage'))
				<div  class="alert alert-success">
					{{session('logmessage')}}
				</div>
				@endif

				@if(session('emailerrormessage'))
				<div  class="alert alert-success">
					{{session('emailerrormessage')}}
				</div>
				@endif
				@if($errors->any())
				@foreach($errors->all() as $error)
				<div class="alert alert-danger">{{($error)}}</div>
				@endforeach
				@endif
				<br>
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
        
		<div class="login-form">
			<div class="sign-in-htm">
			
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" name="logusername" class="input" required>
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" name="logpassword" class="input" data-type="password" required>
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" name="login" class="button" value="Sign In">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
				</div>
			</div>
			</form>
			<div class="sign-up-htm">
			<form method="POST" action="/add">
				@csrf
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" name="username" class="input" required>
				</div>
                <div class="group">
					<label for="pass" class="label">Email Address</label>
					<input id="pass" type="text" name="email" class="input" required>
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" name="password" data-type="password" required>
				</div>
				<div class="group">
					<label for="pass" class="label">Confirm Password</label>
					<input id="pass" type="password" class="input" name="conpassword" data-type="password" required>
				</div>
				<div class="group">
					<input type="submit" class="button" name="submit" value="Sign Up">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
			</div>
</form>
            
		</div>
    
	</div>
</div>

</body>
</html>

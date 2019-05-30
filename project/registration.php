<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form id='register' action="clients.php" method="get">
  	<input type='hidden' name='register' value='register'>
	<div class="input-group">
  	  <label>Username</label>
  	 <input type='text' name='username' id='username' maxlength="50" placeholder="Enter Username" required autofocus autocomplete=on />
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	 <input type='email' name='email' id='email' maxlength="50" placeholder="Enter Email" required autofocus autocomplete=on />
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type='password' name='password' id='password' maxlength="50" placeholder="Enter Password" required autofocus autocomplete=on />
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="index.html">Sign in</a>
  	</p>
  </form>
</body>
</html>

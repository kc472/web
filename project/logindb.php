<?php
class loginDB
{
private $logindb;
public function __construct()
{
	$this->logindb = new mysqli("localhost","test1","Letmein123!","userlogin");
	if ($this->logindb->connect_errno != 0)
	{
		echo "Error connecting to database: ".$this->logindb->connect_error.PHP_EOL;
		exit(1);
	}
	echo "correctly connected to database".PHP_EOL;
}
public function validateLogin($username,$password)
{
	$un = $this->logindb->real_escape_string($username); //$username
	$pw = $this->logindb->real_escape_string($password); //$password
	$statement = "select * from users where username = '$un'";
	$response = $this->logindb->query($statement);
	while ($row = $response->fetch_assoc())
	{
		echo "checking password for $username".PHP_EOL;
		if ($row["password"] == $pw)
		{
		
			echo "passwords match for $username".PHP_EOL;
			return 1;// password match
		}
		echo "passwords did not match for $username".PHP_EOL;
	}
	echo "no username exists";
	return  0;//no users matched username
}
}
?>

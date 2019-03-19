<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Validating Forms</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		<h1>Registration Form</h1>

		<p>
			This form validates user input and then displays "Thank You" page.
		</p>
		
		<hr />
		
		<h2>Please, fill below fields correctly</h2>
		<form action="" method="POST">
		<dl>
			<dt>Name</dt>
			<dd>
				<input type="text" required name="Name" pattern="^[a-zA-Z]{2,}$" />
			</dd>
			<dt>Email</dt>
			<dd>
			<input type="text" required name="Email" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$" />
			</dd>
			<dt>Username</dt>
			<dd><input type="text name=""Username" pattern=".{5,}"  required /></dd>
			<dt>Password</dt>
			<dd><input type="Password" name="Password" pattern="\w{8,10}" required /></dd>
			<dt>Confirm Password</dt>
			<dd>
				<input type="Password" name="Confirm" pattern="(?=\w{6,10})(?=[^a-z]*[a-z])(?=(?:[^A-Z]*[A-Z]){3})\D*\d.*" required />
			</dd>
			<dt>Date of Birth</dt>
			<dd><input type="text" name="Date" pattern="\d{2}\.\d{2}\.\d{4}" required /></dd>
			<dt>Gender</dt>
			<input type="radio" name="Gender" value="Male" />Male
			<input type="radio" name="Gender" value="Female" />Female
			<dt>Marital Status</dt>
			<input type="radio" name="Marital Status" value="Single" />Single
			<input type="radio" name="Marital Status" value="Married" />Married
			<input type="radio" name="Marital Status" value="Divorced" />Divorced
			<input type="radio" name="Marital Status" value="Widowed" />Widowed
			<dt>Address</dt>
			<dd><input type="text" required name="Address" /></dd>
			<dt>City</dt>
			<dd><input type="text" required name="City" pattern="\w*" /></dd>
			<dt>Postal Code</dt>
			<dd><input type="text" required name="Postal" pattern="\d{6}" /></dd>
			<dt>Home Phone</dt>
			<dd><input type="text" name="Phone" required pattern="\d{9}" /></dd>
			<dt>Mobile Phone</dt>
			<dd><input type="text" name="Mobile" required pattern="\d{9}" /></dd>
			<dt>Credit Card Number</dt>
			<dd><input type="text" name="Credit" required pattern="\d{16}" /></dd>
			<dt>Credit Card Expiry Date</dt>
			<dd><input type="text" name="Expiry" required pattern="\d{2}\.\d{2}\.\d{4}" /></dd>
			<dt>Monthly Salary</dt>
			<dd><input type="text" name="Salary" required pattern="UZS \d*" /></dd>
			<dt>Web Site</dt>
			<dd><input type="text" name="Web Site" required pattern="http\:\/\/.*\..*"></dd>
			<dt>Overall GPA</dt>
			<dd><input type="text" name="GPA" required pattern="(^[+]?[0-3]*\.?[0-9]*$)|(^[+]?[4]*\.?[0-5]*)" /></dd>



			<!-- Write other fiels similar to Name as specified in lab6.pdf -->

		</dl>
		
		<div>
			<input type="submit" value="Register" />
		</div>
		</form>
	</body>
</html>
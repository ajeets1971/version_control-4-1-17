<!DOCTYPE html>
<html>
<head>
	<title>Javascript Validation</title>
	<script type="text/javascript">
		function validate_fname()
		{
			if(document.form.fname.value != "^[a-zA-Z]+$" || document.form.fname.value == "")
			{
					document.getElementById('fnameerr').innerHTML="Please enter your first name properply";
					return false;
			}
			return true;
		}
		function validate_lname()
		{
			if(document.form.lname.value != "^[a-zA-Z]+$" || document.form.lname.value == "")
			{
					document.getElementById('lnameerr').innerHTML="Please enter your Last name properply";
					return false;
			}
			return true;
		}
		function validate_email()
		{
			if(document.form.email.value != "^[a-zA-Z0-9]+@[a-z]+.[a-z]+$" || document.form.email.value == "")
			{
					document.getElementById('emailerr').innerHTML="Please enter your Email properply";
					return false;
			}
			return true;
		}
		function validate_mbno()
		{
			if(document.form.mbno.value != "^\d{10}$" || document.form.mbno.value == "")
			{
					document.getElementById('mbnoerr').innerHTML="Please enter your Mobile Number properply";
					return false;
			}
			return true;
		}
		function validate_pincode()
		{
			if(document.form.pincode.value != "^\d{6}$" || document.form.pincode.value == "")
			{
					document.getElementById('pincodeerr').innerHTML="Please enter your Pincode properply";
					return false;
			}
			return true;
		}
	</script>
</head>
<body>
<form method="post" action="" name="form">
	<input type="text" name="fname" placeholder="First Name" onblur="return(validate_fname())"><br>
	<font color="red"><label id="fnameerr"></label></font><br>
	<input type="text" name="lname" placeholder="Last Name" onblur="return(validate_lname())"><br>
	<font color="red"><label id="lnameerr"></label></font><br>
	<input type="text" name="email" placeholder="Email" onblur="return(validate_email())"><br>
	<font color="red"><label id="emailerr"></label></font><br>
	<input type="text" name="mbno" placeholder="Mobile Number" onblur="return(validate_mbno())"><br>
	<font color="red"><label id="mbnoerr"></label></font><br>
	<input type="text" name="pincode" placeholder="Pincode" onblur="return(validate_pincode())"><br>
	<font color="red"><label id="pincodeerr"></label></font><br>
	<input type="submit" name="submit">
</form>
</body>
</html>
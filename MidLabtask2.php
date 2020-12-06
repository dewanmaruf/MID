<!DOCTYPE html>
<html>
<head>
	<title>My Form</title>
</head>
<body>

	<?php
	  	$studentidError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["studentid"])) {
				  $studentidError = "ID is required";
			}
			else {
				echo "ID is: " . $_REQUEST["studentid"];
			}
		}
        echo "<br>";
        $studentnameError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["studentname"])) {
				  $studentnameError = "Name is required";
			}
			else {
				echo "Name is: " . $_REQUEST["studentname"];
			}
		}
        echo "<br>";
        $genderError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["gender"])) {
				  $gernderError = "Gender is required";
			}
			else {
				echo "Gender is: " . $_REQUEST["gender"];
			}
		}
        
        echo "<br>";
        $studentemailError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["studentemail"])) {
				  $studentemailError = "Email is required";
			}
			else {
				echo "Email is: " . $_REQUEST["studentemail"];
			}
		}
        
        echo "<br>";
        $addressError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["address"])) {
				  $addressError = "Address is required";
			}
			else {
				echo "Address is: " . $_REQUEST["address"];
			}
		}
    
        echo "<br>";
        $cityError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["city"])) {
				  $cityError = "City is required";
			}
			else {
				echo "City is: " . $_REQUEST["city"];
			}
		}
    
        echo "<br>";
        $stateError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["state"])) {
				  $stateError = "State is required";
			}
			else {
				echo "State is: " . $_REQUEST["state"];
			}
		}
    
        echo "<br>";
        $countryError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["country"])) {
				  $countryError = "country is required";
			}
			else {
				echo "Country is: " . $_REQUEST["country"];
			}
		}
        echo "<hr>";
        
	?>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
	Student Id <br/> 
    <input type="text" name="studentid" required>
	<br />
	<span><?php echo $studentidError; ?></span><br />
        
	Student Name <br/>
    <input type="text" name="studentname" required>
	<br /><br />
    <span><?php echo $studentnameError; ?></span><br />


	Gender <br /> 
	<input type="radio" name="gender" value="male"required>Male
	<input type="radio" name="gender" value="female"required>Female
	<br /><br />
	<span><?php echo $genderError; ?></span><br />

	Student Email <br/>
    <input type="text" name="studentemail" value="@" required>
	<br /><br />
    <span><?php echo $studentemailError; ?></span><br />

	Address <br />
	<input type="text" name="address"required> 
	<span><?php echo $addressError; ?></span><br />
    Street Address<br />
    <input type="text" name="address2" required>
	<span><?php echo $addressError; ?></span><br />
    Address line 2 
    <span><?php echo $addressError; ?></span><br />  
    <input type="text" name="city" required>
    <span><?php echo $cityError; ?></span>
    <input type="text" name="state" required>
    <span><?php echo $stateError; ?></span>
    <br/>
    <span style="margin-right:150px">City</span>
    <span>State/Province/Region</span>
    <br/>
    <input type="text" name="zip" >
    <select name="country" >
    <option value="Bangladesh">Bangladesh</option>
    <option value="India">India</option>
    <option value="Pakisthan">Pakistan</option>
    </select>
    <span><?php echo $countryError; ?></span>
    <br/>
    <span style="margin-right:75px">Zip/Postal Code</span>
    <span>Country</span>
    <br />
    <br />
	<input type="submit" value="Save Form" style="color:green;">
	</form>
</body>
</html>
    


<?php include("top.php");?>
<?php include("header.php");?>

<div class="mainWrap">
<form name ='signUpForm' action='signUp.php' onsubmit="return validateForm();" method = 'POST' enctype="multipart/form-data">
<label id ='emailLabel'> Enter Your UVM Email </label>
<input placeholder ='Enter your email' type="text" id="studentEmail" name="txtStudentEmail" value="<?php print $userNetId; ?>@uvm.edu">
<label id ='phoneLabel'> Enter Your Phone Number </label>
<input type="text" id="phoneNumber" name="phoneNumber" placeholder="Enter your phone number">
<label id ='firstNameLabel'> Enter Your First Name </label>
<input type="text" id="firstNameInput" name="firstName" placeholder="Enter your first name">
<label id ='lastNameLabel'> Enter Your Last Name </label>
<input type="text" id="lastNameInput" name="lastName" placeholder="Enter your last name">
<button type ='submit' id='submitLogin' onclick='validateEmail()' >
</form>
</div>
<?php include("footer.php"); ?>

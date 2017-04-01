
<?php include("top.php");?>
<?php include("header.php");?>
<div class="mainWrap">
<form name ='signUpForm' action='signUp.php'>
<label for ='studentEmail'> Enter Your UVM Email </label>
<input placeholder ='Enter your email' type="text" id="studentEmail" name="txtStudentEmail" value="@uvm.edu">
<label id ='phoneLabel'> Enter Your Phone Number </label>
<input type="text" id="phoneNumber" name="phoneNumber" placeholder="Enter your phone number">
<label id ='firstNameLabel'> Enter Your First Name </label>
<input type="text" id="firstNameInput" name="firstName" placeholder="Enter your first name">
<label for="lastnameInput"> Enter Your Last Name </label>
<input type="text" id="lastNameInput" name="lastName" placeholder="Enter your last name">
<button type ='submit' id='submitLogin' onclick='validateEmail()'>
</form>
</div>
<script> 
  $('#studentEmail').bind('input', function() {
    $(this).next().stop(true, true).fadeIn(0).html('[input event fired!]: ' + $(this).val()).fadeOut(2000);
});
  }
 </script>
<?php include("footer.php"); ?>

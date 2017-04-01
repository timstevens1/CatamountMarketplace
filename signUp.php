
<?php include("top.php");?>
<?php include("header.php");?>
<script> 
 $(document).ready(function(){
    $("#studentEmail").change(function(){
        alert($("#studentEmail").value);
    });
});
 </script>
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
<?php include("footer.php"); ?>


<?php include("top.php");?>
<?php include("header.php");?>
<script> 
 $(document).ready(function(){
    $("#studentEmail").change(function(){
        alert($("#studentEmail").val());
    });
});
 </script>

<form name ='signUpForm' action='login.php'>

    <legend>Login</legend>

    <label for ='studentEmail'> Enter Your Email </label>
    <input placeholder ='Enter your email' type="text" id="studentEmail" name="txtStudentEmail" value="@uvm.edu"></input>

    <label for ='studentEmail'> Enter Your Password </label>
    <input type='PASSWORD' name='password' placeholder='Enter your password'></input>

    <button type ='submit' id='submitLogin' onclick='validateEmail()'> </button>

	<label>Not registered? Please <a href="signUp.php">sign-up</a>!</label>
</form>


<?php include("footer.php"); ?>

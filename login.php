
<?php include("top.php");?>
<?php include("header.php");?>

<form name ='signUpForm' action='login.php' method="POST">

    <legend>Login</legend>

    <label for ='studentEmail'> Enter Your Email </label>
    <input placeholder ='Enter your email' type="text" id="studentEmail" name="txtStudentEmail" value="@uvm.edu"></input>

    <label for ='studentEmail'> Enter Your Password </label>
    <input type='PASSWORD' name='password' placeholder='Enter your password'></input>

	<label>Not registered? Please <a href="signUp.php">sign-up</a>!</label>
    <label><button id='login-button' name='submit' type ='submit' id='submitLogin''>Login</button></label>
</form>

<?php
    if(isset($_POST['submit'])){
        $query = "SELECT fldEmail FROM tblUser WHERE fldEmail = ?";
        $selectUser = $thisDatabaseReader->testquery($query,$data,1);
    }
 include("footer.php"); 
 ?>

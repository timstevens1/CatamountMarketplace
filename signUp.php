
<?php include("top.php");?>
<?php include("header.php");?>
<script> 
 $(document).ready(function(){
    $("#studentEmail").change(function(){
        var email = $("#studentEmail").val();
        if(email.toLowerCase().indexOf("@uvm.edu") >= 0){
        $("#studentEmail").css("background-color","Green");
        }
        
    });
});
 </script>

<form name ='signUpForm' action='signUp.php'>

    <legend>Create A Post</legend>

    <label for ='studentEmail'> Enter Your UVM Email </label>
    <input placeholder ='Enter your email' type="text" id="studentEmail" name="txtStudentEmail" value="@uvm.edu"></input>
    <label id ='phoneLabel'> Enter Your Phone Number </label>
    <input type="text" id="phoneNumber" name="phoneNumber" placeholder="Enter your phone number"></input>
    <label id ='firstNameLabel'> Enter Your First Name </label>
    <input type="text" id="firstNameInput" name="firstName" placeholder="Enter your first name"></input>
    <label for="lastnameInput"> Enter Your Last Name </label>
    <input type="text" id="lastNameInput" name="lastName" placeholder="Enter your last name"></input>
    <button type ='submit' id='submitLogin'></button>
     </legend>
</form>


<?php include("footer.php"); ?>

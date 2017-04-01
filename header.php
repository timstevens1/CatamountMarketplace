<?php

       print "<!-- require Database.php -->";
       //include ('constants.php');
       require ('database.php');
    

        print "<!-- make Database connections -->"; 
        $dbName = 'CKWESTON_CATLIST';
        
        $dbUserName = 'ckweston' . '_reader';
        $whichPass = "r"; //flag for which one to use.
        $thisDatabaseReader = new Database($dbUserName, $whichPass, $dbName);
        
       
        
        $dbUserName = 'ckweston' . '_writer';
        $whichPass = "w";
        $thisDatabaseWriter = new Database($dbUserName, $whichPass, $dbName);
        
        
        
        $dbUserName = 'ckweston' . '_admin';
        $whichPass = "a";
        $thisDatabaseAdmin = new Database($dbUserName, $whichPass, $dbName);
    
        
        ?> 


  <div class="banner">
      <img id="headerLogo" src="images/uvmheaderlogo.svg" alt="" />		    
      <a id="profileLink" href="user.php">your profile</a>		     
        <a id="signUpLink" href="signUp.php">sign up</a>
  </div> 		  


  		  
<ul class="navBar">		     
    <li><form class="searchListingsPage">
        <input type="text" name="search" placeholder="Search..">
        </form>
    </li>
 
    <li><a class="active" href="#home">Home</a></li>		        
    <li><a href="#news">News</a></li>		          
    <li><a href="#contact">Contact</a></li>		          

</ul>
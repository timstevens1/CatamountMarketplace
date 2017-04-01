<?php
        // %^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
        //
        // inlcude all libraries. 
        // %^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%

       print "<!-- require Database.php -->";
       //include ('constants.php');
       require ('database.php');
       


        // %^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
        //
        // Set up database connection
        //
        // generally you dont need the admin on the web

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
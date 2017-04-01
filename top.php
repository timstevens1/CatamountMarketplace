<!DOCTYPE html>
<?php
        // %^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
        //
        // inlcude all libraries. 
        // %^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%

       print "<!-- require Database.php -->";
       include ('constants.php');
       require ('database.php');
       session_start();


        // %^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
        //
        // Set up database connection
        //
        // generally you dont need the admin on the web

        print "<!-- make Database connections -->"; 
        $dbName = 'ad_b97e9daadfe3206';
        
        $dbUserName = 'b7d08c2d63675f';
        $whichPass = "r"; //flag for which one to use.
        $thisDatabaseReader = new Database($dbUserName, $whichPass, $dbName);
        
       
        
        $dbUserName = 'b7d08c2d63675f';
        $whichPass = "w";
        $thisDatabaseWriter = new Database($dbUserName, $whichPass, $dbName);
        
        
        
        $dbUserName = 'b7d08c2d63675f';
        $whichPass = "a";
        $thisDatabaseAdmin = new Database($dbUserName, $whichPass, $dbName);
        

        
        
        print "<!-- Database connect successs -->";
        ?> 
<html>
<head>
	<title>Catamount Marketplace</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/header.css" />
	<link rel="stylesheet" href="css/template.css" />
	<link rel="stylesheet" href="css/post.css" />
	<link rel="stylesheet" href="css/user.css" />
	<link rel="stylesheet" href="css/footer.css" />
	<link rel="stylesheet" href="css/settings.css" />
	<link rel="stylesheet" href="css/listings.css" />
	<link rel="stylesheet" href="css/createAPost.css" />
        <link rel="stylesheet" href="css/buySell.css" />
	<link rel="stylesheet" href="css/housing.css" />
	<link rel="stylesheet" href="css/news.css" />
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<body>

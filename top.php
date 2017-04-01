<!DOCTYPE html>
  <?php     print "<!-- require Database.php -->";
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
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<body>

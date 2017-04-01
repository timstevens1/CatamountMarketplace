<?php
//require the header page 
include ('header.php'); 
echo($dbUserName);
echo($dbName);



$query	=	'SELECT	pmkNetId FROM tblUser';

$user =	$thisDatabaseReader->select($query,"",	0,	0,	0,	0,	false,	false);
print_r($user);


$postId = array(1);
$query	=	'SELECT	fnkNetId, fldDescription, fldLocation, fldTitle, fldCondition, fldPostDate, fldPrice,
fldCategory, fldSubCategory FROM tblPost WHERE pmkPostId = ?';
//public	function	select($query,	$values	=	"",	$wheres	=	1,	$conditions	=	0,
//			$quotes	=	0,	$symbols	=	0,	$spacesAllowed	=	false,	$semiColonAllowed	=	false)
$postContent =	$thisDatabaseReader->select($query,	$postId,	1,	0,	0,	0,	false,	false);

if (is_array($postContent)){
        foreach ($postContent as $c){
            print "<p>" .$c['fldTitle']. " " .$c['fldLocation']. " " .$c['fldPrice']. " " .$c['fldDescription']. " " .$c['fnkNetId'].
            " " .$c['fldCondition']. " " .$c['fldCategory']. " " .$c['fldSubCategory'].  " " .$c['fldPostDate']. "</p>" ;
        }
    }

?>

<?php include("top.php");?>
<?php include("header.php");?>
<?php

$query	=	'SELECT	pmkPostId FROM tblpost';
$user =	$thisDatabaseReader->select($query,"",	0,	0,	0,	0,	false,	false);

$length = count($user);
$pmkArray = array();
for ($i=0; $i<=$length; $i++){

array_push($pmkArray, $user[$i][0]);

}



?>


<div class = "listingWrap">
   <!--wrap for listing items-->
   <div class="itemsListWrap">
       <!--an item-->
<?php
for ($i=0; $i<$length; $i++){

	$postKey = array($pmkArray[$i]);
	
	$query	=	'SELECT	fldTitle, fldPrice, fldLocation  FROM tblpost WHERE pmkPostId = ?';
	//public	function	select($query,	$values	=	"",	$wheres	=	1,	$conditions	=	0,
	//			$quotes	=	0,	$symbols	=	0,	$spacesAllowed	=	false,	$semiColonAllowed	=	false)
	$item =	$thisDatabaseReader->select($query,	$postKey,	1,	0,	0,	0,	false,	false);
	
	
	echo "<div class='listingItemContainer'>";
    echo "<a href='post.php?id=".$pmkArray[$i]."&img=".($i+1)."'>";
	echo "<img src='/images/". ($i+1) .".jpg' alt=''>";
	echo "    </a>";
	echo "    <h3>".$item[0][0]." </h3>";
	echo "    <h3>".$item[0][1]."</h3>";
	echo "    <h3>".$item[0][2]."</h3>";
	echo "    </div>";
}
?>

  </div>
</div>
	<?php include("footer.php"); ?>
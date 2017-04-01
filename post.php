<?php include("top.php");?>
<?php include("header.php");?>

<?php
$postId = array(1);
$query	=	'SELECT	fnkNetId, fldDescription, fldLocation, fldTitle, fldCondition, fldPostDate, fldPrice,
fldCategory, fldSubCategory FROM tblPost WHERE pmkPostId = ?';
//public	function	select($query,	$values	=	"",	$wheres	=	1,	$conditions	=	0,
//			$quotes	=	0,	$symbols	=	0,	$spacesAllowed	=	false,	$semiColonAllowed	=	false)
$postContent =	$thisDatabaseReader->select($query,	$postId,	1,	0,	0,	0,	false,	false);
/*
if (is_array($postContent)){
        foreach ($postContent as $c){
            print "<p>" .$c['fldTitle']. " " .$c['fldLocation']. " " .$c['fldPrice']. " " .$c['fldDescription']. " " .$c['fnkNetId'].
            " " .$c['fldCondition']. " " .$c['fldCategory']. " " .$c['fldSubCategory'].  " " .$c['fldPostDate']. "</p>" ;
        }
    }
*/
$netId = array($postContent[0][0]);
$query	= 'SELECT fldEmail FROM tblUser WHERE pmkNetId = ?';
//public	function	select($query,	$values	=	"",	$wheres	=	1,	$conditions	=	0,
//			$quotes	=	0,	$symbols	=	0,	$spacesAllowed	=	false,	$semiColonAllowed	=	false)
$netId =	$thisDatabaseReader->select($query,	$netId,	1,	0,	0,	0,	false,	false);
?>

<div class="itemWrap">
    <div class="topItemWrap">
    <div>
        <h1>Picture Holder</h1>
    </div>
    <div>
        <h1> <?php print($postContent[0][3]); ?> </h1>
        <h3><?php print($postContent[0][6]); ?> </h3>
        <p><?php print($postContent[0][1]); ?> </p>
        <a href="mailto:"<?php print($netId[0][0]); ?>"">Email User</a>
    </div>

    </div>
    <div class="bottomItemWrap">
        <div>
            Place Holder
        </div>
    <div>
        <p>
            <span>Location</span>
            <span><?php print($postContent[0][2]); ?> </span>
        </p>

         <p>
            <span>Date</span>
            <span><?php print($postContent[0][5]); ?> </span>
        </p>
        <p>
            <span>Condition</span>
            <span><?php print($postContent[0][4]); ?> </span>
        </p>
        <p>
            <span>Category</span>
            <span><?php print($postContent[0][7]); ?> </span>
        </p>

                <p>
            <span>Sub Category</span>
            <span><?php print($postContent[0][8]); ?> </span>
        </p>
    </div>
    </div>
</div>

<?php include("footer.php"); ?>
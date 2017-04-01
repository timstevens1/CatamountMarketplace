<?php include("top.php");?>
<?php include("header.php");?>
<?php include("Twilio/sendnotifications.php");?>
<?php include("watson.php"); ?>
<?php
$postId = array($_GET['id']);
$pic = $_GET['img'];
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
        <img src="../images/<?php echo $pic;?>.jpg" alt="">
    </div>
    <div>
        <h1><?php print($postContent[0][3]); ?></h1>
        <h3><?php print($postContent[0][6]); ?></h3>
        <p class = "addPadding"><?php print($postContent[0][1]); ?></p>
        
        
        
        <?php
        $currentPage = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        
       echo" <form method ='POST' action = 'post.php?id=".$postId."&img=".$pic."'>
            <input type='text' name='message' placeholder='let this seller know you're interested in buying their item or to ask them a question'>
            <input type='submit' name='submit'>  ";
        $postersPhoneNumber = 16036671346;
        if(isset($_POST['submit'])){
            $message = $_POST['message'];
            if ($message != "" && $message != null){
             sendMessage($postersPhoneNumber, 12345678111, $message);
             }
        }
             $message = null;
        ?>
        
        
        
        <div style="margin-top: 30px;" class="genInfoWrap">
        <p class="genInfoP">
            <span>Location</span>
            <span><?php print($postContent[0][2]); ?> </span>
                 <!-- HARDCODED EXAMPLE BELOW FOR STYLING -->
            <span class="infoDescription"></span>
        </p>

          <p class="genInfoP">
            <span>Date</span>
            <span><?php print($postContent[0][5]); ?></span>
              <!-- HARDCODED EXAMPLE BELOW FOR STYLING -->
              <span class="infoDescription"></span>
        </p>
         <p class="genInfoP">
            <span>Condition</span>
            <span><?php print($postContent[0][4]); ?></span>
              <!-- HARDCODED EXAMPLE BELOW FOR STYLING -->
              <span class="infoDescription"></span>
        </p>
         <p class="genInfoP">
            <span>Category</span>
            <span><?php print($postContent[0][7]); ?></span>
              <!-- HARDCODED EXAMPLE BELOW FOR STYLING -->
              <span class="infoDescription"></span>
        </p>

                 <p class="genInfoP">
            <span>Sub Category</span>
            <span><?php print($postContent[0][8]); ?></span>
              <!-- HARDCODED EXAMPLE BELOW FOR STYLING -->
              <span class="infoDescription"></span>
        </p>
    </div>
    </div>
    </div>
</div>
    <div class="newsWrap">
    <h1>Watson Generated Meta Tags</h1>
    <?php 
            $str = "images/".$pic.".jpg";
            $x = watsonClassify("images/1.jpg");
             ?>
             
  <ul class= "watsonPictureInfo">
      <?php foreach($x as $class => $score): ?>
        <li><?= $class ?></li>
      <?php endforeach ?>
  </ul>
</div>

<?php include("footer.php"); ?>

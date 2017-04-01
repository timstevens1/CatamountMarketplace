<?php include("top.php");?>
<?php include("header.php");?>
<?php include("watson.php"); ?>
<?php include("watsonNews.php"); ?>

<h1 class="newsInfo">Your Daily Northeast News</h1>
<div class="newsWrap">
   
    <?php $x = WatsonNews();?>
             
             
  <ul class= "watsonPictureInfo">
  <li id="providedby"> provided by Bluemix's Alchemist news platform </li>
      <?php foreach($x as $id => $text): ?>
        <li><?= $text ?></li>
      <?php endforeach ?>
  </ul>
</div>


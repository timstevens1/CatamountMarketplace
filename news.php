<?php include("top.php");?>
<?php include("header.php");?>
<?php include("watson.php"); ?>
<?php include("watsonNews.php"); ?>

<h1 "newsInfo">Your Daily News</h1>
<div class="newsWrap">
   
    <?php $x = WatsonNews();?>
             
  <ul class= "watsonPictureInfo">
      <?php foreach($x as $id => $text): ?>
        <li><?= $text ?></li>
      <?php endforeach ?>
  </ul>
</div>


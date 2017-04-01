
<?php include("top.php");?>
<?php include("header.php");?>
<?php include("watson.php"); ?>
<h1 "newsInfo">Picture Tags</h1>
<div class="newsWrap">
   
    <?php $x = watsonClassify("images/electronics.jpg");
             ?>
             
  <ul class= "watsonPictureInfo">
      <?php foreach($x as $id => $text): ?>
        <li><?= $text ?></li>
      <?php endforeach ?>
  </ul>
</div>
<?php include("footer.php"); ?>


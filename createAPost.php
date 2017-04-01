
<?php include("top.php");?>
<?php include("header.php");?>

<form class = 'post' enctype="multipart/form-data" method = 'post' action = 'listings.php'>

            <legend>Create A Post</legend>

            <p>
                    <label for="fldTitle" class="required">Product Name </label>
                    <input type="text" 
                           value="<?php print $misc; ?>"
                           tabindex="120" 
                           maxlength="45" 
                           placeholder=""
                           <?php if ($miscERROR) print 'class="mistake"'; ?>
                           onfocus="this.select()" 
                           name='fldProductName'
                           >
            </p>

            <fieldset class="text">
                <p>             
                    <label for="fldDescription" class="required"> Product Description</label>
                    <textarea id="fldDescription" 
                              tabindex="602" onfocus="this.select()"
                                                      name='fldProductDescription'></textarea>
                </p>

            </fieldset>

            <fieldset class="text">
                <p>             
                    <label for="fldLocation" class="required"> Product Location</label>
                    <textarea id="fldLocation" 
                              tabindex="602" onfocus="this.select()"
                                                      name='fldProductLocation'></textarea>
                </p>

            </fieldset>


            <fieldset class="text">
                <p>             
                    <label for="fldCondition" class="required"> Product Condition</label>
                    <textarea id="fldCondition" 
                              tabindex="602" onfocus="this.select()"
                                                      name='fldProductCondition'></textarea>
                </p>

            </fieldset>

            <fieldset class="text">
                <p>             
                    <label for="fldPostDate" class="required">Post Date</label>
                    <input id="fldPostDate" 
                              tabindex="602" onfocus="this.select()" type="date"
                                    name='fldPostDate'>
                </p>

            </fieldset>

            <fieldset class="text">
                <p>             
                    <label for="fldPrice" class="required">Price</label>
                    <textarea id="fldPrice" 
                              tabindex="602" onfocus="this.select()"
                                                      name='fldPrice'></textarea>
                </p>

            </fieldset>

            <fieldset class="text">
                <p>             
                    <label for="fldCategory" class="required">Category</label>
                    <textarea id="fldCategory" 
                              tabindex="602" onfocus="this.select()"
                                                      name = "fldCategory"></textarea>
                </p>

            </fieldset>

            <fieldset class="text">
                <p>             
                    <label for="fldSubCategory" class="required">SubCategory</label>
                    <textarea id="fldSubCategory" 
                              tabindex="602" onfocus="this.select()"
                                    name = "fldSubCategory"></textarea>
                </p>

            </fieldset>
            
            <fieldset class="buttons">
            <input name = "postPictures[]" class = 'createPost' id ='btnpictures'  type="file" accept="image/jpeg,image/gif,image/jpg" multiple />
                <legend></legend>
                <input type="submit" id="btnSubmit" name="postSubmit" value="Register" tabindex="900" class="button">
            </fieldset> <!-- ends buttons -->

            <!-- Ends Wrapper -->
        </form>
<?php 
//The following block is for uploading pictures and posts to the database
//If the user hits submit than start
if(isset($_POST['postSubmit'])){
$filesToBeUploaded = array();
$noFiles = false;
$totalFiles = count($_FILES['postPictures']['name']);
$uploadError = false;
$counter = 0;
$allFilesSuccess = 0;
$target_dir = "uploads/postPictures/";
if(strlen($_FILES['postPictures']['name'][0]) != 0){
for ($i=0; $i < $totalFiles ; $i++) { 
  $fileName = clean($_FILES['postPictures']['name'][$i]);
  $target_file = $target_dir .'postPicture';
  $imageFileType = pathinfo($fileName,PATHINFO_EXTENSION);
  $ext = ".".strtolower($imageFileType);
  $target_file = $target_dir .'postPicture'.$ext;
if($ext != ".jpg" && $ext != ".gif" && $ext != ".jpeg"){
       $uploadError = true;
       $errormsg = $fileName."-User uploaded invalid image type: ".$ext."<br>";
}
// Check if file already exists
while (file_exists($target_file)) {
    $target_file = $target_dir.'postPicture'.$counter.$ext;
    $counter = $counter + 1;
}
if(!$uploadError){
   $tmp_name = $_FILES['postPictures']['tmp_name'][$i];
   if(move_uploaded_file($tmp_name, $target_file)){
    $allFilesSuccess +=1;
    array_push($filesToBeUploaded, $target_file);
   }
   else{
    echo "move_uploaded_file was unsuccessfull for file - ".$fileName;
   }
   }
else{
  echo $errormsg;
}
}
}
else{
  $noFiles = true;
}
if($allFilesSuccess == $totalFiles || $noFiles == true){
$date = date("Y-m-d h:i:sa");
$data = array($_POST['fldProductDescription'],$_POST['fldProductLocation'],$_POST['fldProductName'],$_POST['fldProductCondition'],$_POST['fldPostDate'],$POST['fldPrice'],$_POST['fldCategory'],$_POST['fldSubCategory']);
$query = "INSERT INTO tblPost SET
    fldDescription = ?,
    fldLocation = ?,
    fldTitle = ?,
    fldCondition = ?,
    fldPostDate = ?,
    fldPrice = ?,
    fldCategory = ?,
    fldSubCategory = ?
    ";
$insertNewPost = $thisDatabaseWriter->insert($query,$data);
if($noFiles == true){
echo '<script type="text/javascript">';
echo 'window.location.href="listings.php";';
echo '</script>';
}
//only run the upload picture to DB loop if the user uploaded pictures AND the post insert was successfull 
if ($insertNewPost && !$noFiles){
$pmkPostId = $thisDatabaseWriter->lastInsert();
foreach($filesToBeUploaded as $file){
    $query = "INSERT INTO tblPostPictures SET
        fnkPostId = ?,
            fldPictureLocation = ?";
       $data = array($pmkPostId,$file);
       $insertNewPicture = $thisDatabaseWriter ->insert($query,$data);
  }
echo '<script type="text/javascript">';
echo 'window.location.href="listings.php";';
echo '</script>';
}
}
}

?>
<?php include("footer.php"); ?>

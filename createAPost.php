
<?php include("top.php");?>
<?php include("header.php");?>

<form class="post">

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
                           >
            </p>

            <fieldset class="text">
                <p>             
                    <label for="fldDescription" class="required"> Product Description</label>
                    <textarea id="fldDescription" 
                              tabindex="602" onfocus="this.select()"></textarea>
                </p>

            </fieldset>

            <fieldset class="text">
                <p>             
                    <label for="fldLocation" class="required"> Product Location</label>
                    <textarea id="fldLocation" 
                              tabindex="602" onfocus="this.select()"></textarea>
                </p>

            </fieldset>


            <fieldset class="text">
                <p>             
                    <label for="fldCondition" class="required"> Product Condition</label>
                    <textarea id="fldCondition" 
                              tabindex="602" onfocus="this.select()"></textarea>
                </p>

            </fieldset>

            <fieldset class="text">
                <p>             
                    <label for="fldPostDate" class="required">Post Date</label>
                    <input id="fldPostDate" 
                              tabindex="602" onfocus="this.select()" type = type="date"></input>
                </p>

            </fieldset>

            <fieldset class="text">
                <p>             
                    <label for="fldPrice" class="required">Price</label>
                    <textarea id="fldPrice" 
                              tabindex="602" onfocus="this.select()"></textarea>
                </p>

            </fieldset>

            <fieldset class="text">
                <p>             
                    <label for="fldCategory" class="required">Category</label>
                    <textarea id="fldCategory" 
                              tabindex="602" onfocus="this.select()"></textarea>
                </p>

            </fieldset>

            <fieldset class="text">
                <p>             
                    <label for="fldSubCategory" class="required">SubCategory</label>
                    <textarea id="fldSubCategory" 
                              tabindex="602" onfocus="this.select()"></textarea>
                </p>

            </fieldset>

            <input type="hidden" name="hidUrl" value="https://lmross.w3.uvm.edu/cs142/dev/lab1">
            <input type="hidden" name="hidStyle" value="form.css">
            <input type="hidden" name="hidStyle2" value="form2.css">
            <fieldset class="buttons">

                <legend></legend>
                <input type="submit" id="btnSubmit" name="btnSubmit" value="Register" tabindex="900" class="button">
            </fieldset> <!-- ends buttons -->

            <!-- Ends Wrapper -->
        </form>
<?php include("footer.php"); ?>

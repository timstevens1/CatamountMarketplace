
<?php include("top.php");?>
<?php include("header.php");?>

<form>
<fieldset class="text">
                <legend>Create A Post</legend>

                <p>             
                    <label for="fldDescription" class="required"> Product Description</label>
                    <textarea id="fldDescription" 
                              tabindex="602" onfocus="this.select()"></textarea>
                </p>

            </fieldset>

                <p>
                    <label for="txtMisc" class="required">Email 2</label>
                    <input type="text" 
                           id="txtMisc" 
                           name="txtMisc"
                           value="<?php print $misc; ?>"
                           tabindex="120" 
                           maxlength="45" 
                           placeholder="Enter an alternate email"
                           <?php if ($miscERROR) print 'class="mistake"'; ?>
                           onfocus="this.select()" 
                           >
                </p>


            </fieldset>


            <!-- ends contact -->

            <fieldset class="checkbox">
                <legend>What is your favorite piano? <br/> Check all that apply:</legend>
                <p>
                    <label><input type="checkbox" 
                                  id="chkChoco" 
                                  name="chkChoco" 
                                  value="Choco"
                                  <?php if ($choco) print ' checked '; ?>                                      
                                  tabindex="430"> Spinet</label>
                </p>
                <p>
                    <label><input type="checkbox" 
                                  id="chkSugar" 
                                  name="chkSugar" 
                                  value="Sugar"
                                  <?php if ($sugar) print ' checked '; ?>                                      
                                  tabindex="430"> Console</label>
                </p>
                <p>
                    <label><input type="checkbox" 
                                  id="chkFudge" 
                                  name="chkFudge" 
                                  value="Fudge"
                                  <?php if ($fudge) print ' checked '; ?>                                      
                                  tabindex="430"> Studio </label>
                </p>
            </fieldset>

            <fieldset class="radio">
                <legend>What is your age range?</legend>
                <p><label><input type="radio" 
                                 id="radUnder18" 
                                 name="radAge" 
                                 value="Under 18"
                                 <?php if ($age == "Under 18") print 'checked' ?>         
                                 tabindex="330">Under 18</label></p>
                <p>
                    <label><input type="radio" 
                                  id="rad18-25" 
                                  name="radAge" 
                                  value="18-25"
                                  <?php if ($age == "18-25") print 'checked' ?>                                      
                                  tabindex="340">18-25</label></p>
                <p>
                    <label><input type="radio" 
                                  id="radOver25" 
                                  name="radAge" 
                                  value="Over 25"
                                  <?php if ($age == "Over 25") print 'checked' ?>                                      
                                  tabindex="340">Over 25</label> </p>
            </fieldset>


            <fieldset  class="listbox">
                <legend>Newsletter Frequency</legend>
                <p>
                    <select id="lstAmount" 
                            name="lstAmount" 
                            tabindex="520" >
                        <option <?php if ($amount == "1") print " selected "; ?>
                            value="1">Once a week</option>

                        <option <?php if ($amount == "2") print " selected "; ?>
                            value="2">Twice a week</option>

                        <option <?php if ($amount == "3") print " selected "; ?> 
                            value="3" >Three times a week</option>
                    </select></p>
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

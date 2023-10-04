<?php
$timeNow = time();
//print_r($job);
?>
<script>
$(document).ready(function() {
  $("#formapply").validate();
});
</script>
<div class="row">
            <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
             
            <div class="panel-body" >
            	<p class="text-center">You Applying for this job: <b><?=$job[0]->job_title; ?></b></p>
                        <form action="../submitapplyjob" id="formapply" class="form-horizontal" method="post" enctype="multipart/form-data">
                        <input type='hidden' name='job_id' value='<?=$job[0]->id; ?>' />
                        <div id="div_id_select" class="form-group required">
                            <label for="id_select"  class="control-label col-md-4  requiredField"> Select<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 "  style="margin-bottom: 10px">
                                <label class="radio-inline"><input type="radio" checked="checked" name="select_1" id="select_1" value="Fresher"  style="margin-bottom: 10px">Fresher</label>
                                <label class="radio-inline"> <input type="radio" name="select_1" id="select_1" value="Proffessional"  style="margin-bottom: 10px">Proffessional </label>
                            </div>
                        </div> 
                        <div id="div_id_name" class="form-group required"> 
                            <label for="id_name" class="control-label col-md-4  requiredField"> Full name<span class="asteriskField">*</span> </label> 
                            <div class="controls col-md-8 "> 
                                <input class="input-md textinput textInput form-control" id="name" name="name" placeholder="Your Frist name and Last name" style="margin-bottom: 10px" type="text" required="required" />
                            </div>
                        </div>
                        <div id="div_id_gender" class="form-group required">
                            <label for="id_gender"  class="control-label col-md-4  requiredField"> Gender<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 "  style="margin-bottom: 10px">
                                 <label class="radio-inline"> <input type="radio" name="gender" id="id_gender_1" value="Male"  style="margin-bottom: 10px">Male</label>
                                 <label class="radio-inline"> <input type="radio" name="gender" id="id_gender_2" value="Female"  style="margin-bottom: 10px" >Female </label>
                            </div>
                        </div>
                        <div id="div_id_company" class="form-group required"> 
                            <label for="id_company" class="control-label col-md-4  requiredField"> company name<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 "> 
                                 <input class="input-md textinput textInput form-control" id="id_company" name="company" placeholder="your company name" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div> 
                        <div id="div_id_catagory" class="form-group required">
                            <label for="id_catagory" class="control-label col-md-4  requiredField"> Skill<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 "> 
                                 <input class="input-md textinput textInput form-control" id="skills" name="skills" placeholder="skills catagory" style="margin-bottom: 10px" type="text" required="required"/>
                            </div>
                        </div>
                        <div id="div_id_name" class="form-group required"> 
                            <label for="id_name" class="control-label col-md-4  requiredField"> DOB name<span class="asteriskField">*</span> </label> 
                            <div class="controls col-md-8 "> 
                                <input class="input-md textinput textInput form-control" id="dob" name="dob" placeholder="Your DOB" style="margin-bottom: 10px" type="text" required="required"/>
                            </div>
                        </div>
                        <div id="div_id_name" class="form-group required"> 
                            <label for="id_name" class="control-label col-md-4  requiredField"> Email<span class="asteriskField">*</span> </label> 
                            <div class="controls col-md-8 "> 
                                <input class="input-md textinput textInput form-control" id="email" name="email" placeholder="Your DOB" style="margin-bottom: 10px" type="text" required="required"/>
                            </div>
                        </div>
                        <div id="div_id_number" class="form-group required">
                             <label for="id_number" class="control-label col-md-4  requiredField"> contact number<span class="asteriskField">*</span> </label>
                             <div class="controls col-md-8 ">
                                 <input class="input-md textinput textInput form-control" id="contact" name="contact" placeholder="provide your number" style="margin-bottom: 10px" type="text" required="required"/>
                            </div> 
                        </div>
                        <div id="div_id_location" class="form-group required">
                            <label for="id_location" class="control-label col-md-4  requiredField">Country<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <select class="form-control" id="country" name="country">
                                <option value="">Select Country</option>
                                <option value="Canada">Canada</option>
                                <option value="India">India</option>
                              </select>
                            </div> 
                        </div> 
                        <div id="div_id_location" class="form-group required">
                            <label for="id_location" class="control-label col-md-4  requiredField"> Your Address<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md textinput textInput form-control" id="location" name="location" placeholder="Your Pincode and City" style="margin-bottom: 10px" type="text" required="required"/>
                            </div> 
                        </div>
                        <div id="div_id_location" class="form-group required">
                            <label for="id_location" class="control-label col-md-4  requiredField"> Attach Your Resume<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input id="resume" name="resume" style="margin-bottom: 10px" type="file" required="required"/>
                            </div> 
                        </div>
                        <div class="form-group">
                            <div class="controls col-md-offset-4 col-md-8 ">
                                <div id="div_id_terms" class="checkbox required">
                                    <label for="id_terms" class=" requiredField">
                                         <input class="input-ms checkboxinput" id="id_terms" name="terms" style="margin-bottom: 10px" type="checkbox" />
                                         Agree with the terms and conditions
                                    </label>
                                </div> 
                                    
                            </div>
                        </div> 
                        <div class="form-group"> 
                            <div class="aab controls col-md-4 "></div>
                            <div class="controls col-md-8 ">
                                <input type="submit" name="submitapplyjob" value="Apply" class="btn btn btn-primary" id="button-id-signup" />
                            </div>
                        </div> 
                            
                    </form>

                
            </div>
        </div>
    </div> 

 </div>


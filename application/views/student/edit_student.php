<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Edit Student</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Edit Student</h2>

            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <h3>
            <?php
            $msg = $this->session->userdata('message');
            if ($msg) {
                echo $msg;
                $this->session->unset_userdata('message');
            }
            ?>
        </h3>
        <div class="box-content">
            <form name="edit_student" class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url(); ?>super_student/update_student" method="post">
                <fieldset>
                    <legend></legend>
                   
                   
                    
<input type="hidden" class="span6 typeahead" id="typeahead"  name="student_id" value="<?php echo $student_info->student_id; ?>">
               
                 
<!--                    <?php 
                    if($student_info->student_image)
                    {
                     ?>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Student  Image </label>
                        <div class="controls">
                            <img src='<?php echo base_url().$student_info->student_image;?>' height="100" width="80"/> 
                            
                            <a href="<?php echo base_url();?>super_student/delete_image/<?php echo $student_info->student_id?>">delete image</a>

                        </div>  
                    <?php 
                    }
                    else
                    {
                    ?>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Student  Image   (Max Size: 500 KB | Max Dimension: 500 px * 300 px) </label>
                        <div class="controls">
                            <input type="file" class="span6"   name="student_image" value="<?php echo $student_info->student_image; ?>">

                        </div>
                    <?php } ?>
                    </div>-->
                        
                        <div class="control-group">
                        <label class="control-label" for="typeahead"> Father's Name  </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="student_father_name" value="<?php echo $student_info->student_father_name; ?>">
                            
                        </div>
                    </div>
                    
                       <div class="control-group">
                        <label class="control-label" for="typeahead"> Mother's Name  </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="student_mother_name" value="<?php echo $student_info->student_mother_name; ?>">
                            
                        </div>
                    </div>
                    
                       <div class="control-group">
                        <label class="control-label" for="typeahead"> Guardian's Contact No </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="guardian_contact_no" value="<?php echo $student_info->guardian_contact_no; ?>">
                            
                        </div>
                    </div>

                        <div class="control-group">
                        <label class="control-label" for="typeahead">Select Batch  </label>
                        <div class="controls">
                            <select name="student_batch">
                                <option><?php echo $student_info->student_batch; ?></option>
                                <?php
                                foreach($all_published_batch as $v_batch)
                                {
                                ?>
                                <option value="<?php echo $v_batch->batch_name;?>"><?php echo $v_batch->batch_name;?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    
                    
                       <div class="control-group">
                        <label class="control-label" for="typeahead">Email Address </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="student_email" value="<?php echo $student_info->student_email; ?>">

                        </div>
                    </div>
                       
                         <div class="control-group">
                        <label class="control-label" for="typeahead">Personal Contact</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="student_contact_no" value="<?php echo $student_info->student_contact_no; ?>">

                        </div>
                    </div>
                        <div class="control-group">
                        <label class="control-label" for="typeahead">Address </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="student_address" value="<?php echo $student_info->student_address; ?>">

                        </div>
                    </div>
                        <div class="control-group">
                        <label class="control-label" for="typeahead">Expert Area  </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="student_expert_area" value="<?php echo $student_info->student_expert_area; ?>">

                        </div>
                    </div>
                        <div class="control-group">
                        <label class="control-label" for="typeahead">Job Sector </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="student_job_location" value="<?php echo $student_info->student_job_location; ?>">

                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label" for="typeahead">Designation </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="student_designation" value="<?php echo $student_info->student_job_location; ?>">

                        </div>
                    </div>
                        
                         <div class="control-group">
                        <label class="control-label" for="textarea2"> Residential Hall</label>
                        <div class="controls">
                            <select name="student_hall"  value="<?php echo $student_info->student_hall; ?>">
                                <option><?php echo $student_info->student_hall; ?></option>
                                <option value="Sher-e-Bangla Hall-1">Sher-e-Bangla Hall-1 (D1)</option>
                                <option value="Sher-e-Bangla Hall-2">Sher-e-Bangla Hall-2 (D2)</option>
                                <option value="Begum Sufia Kamal Hall">Begum Sufia Kamal Hall (D3)</option>
                                <option value="M. Keramot Ali Hall (D4)">M. Keramot Ali Hall (D4)</option>
                                <option value="Bongobandhu Sheikh Mujibur Rahman (D5)">Bangabandhu Sheikh Mujibur Rahman (D5)</option>
                                <option value="Sheikh Fazilatunnesa Mujib Hall">Sheikh Fazilatunnesa Mujib Hall (D6)</option>
                                
                            </select>
                        </div>
                    </div>

                     <div class="control-group">
                        <label class="control-label" for="textarea2"> Blood Group</label>
                        <div class="controls">
                            <select name="student_blood_group"  value="<?php echo $student_info->student_blood_group; ?>">
                                <option><?php echo $student_info->student_blood_group; ?></option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                
                            </select>
                        </div>
                    </div>

                        <div class="control-group">
                        <label class="control-label" for="textarea2"> Gender</label>
                        <div class="controls">
                            <select name="student_gender"value="<?php echo $student_info->student_gender; ?>">
                                <option><?php echo $student_info->student_gender; ?></option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                
                                
                            </select>
                        </div>
                    </div>
                       
                     
                   
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save </button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->
<script type="text/javascript">
document.forms['edit_student'].elements['publication_status'].value='<?php echo $student_info->publication_status; ?>';
document.forms['edit_student'].elements['session_id'].value='<?php echo $student_info->session_id ?>';


</script>
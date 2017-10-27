<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Add Student</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Add Student</h2>
            
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <h3>
                <?php
                    $msg=$this->session->userdata('message');
                    if($msg)
                    {
                        echo $msg;
                        $this->session->unset_userdata('message');
                    }
                ?>
            </h3>
        <div class="box-content">
            <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url();?>super_admin/save_student" method="post">
                <fieldset>
                    <legend></legend>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Student Name  </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="student_name">
                            
                        </div>
                    </div>
                     <div class="control-group">
                        <label class="control-label" for="typeahead">Session </label>
                        <div class="controls">
                            <select name="session_id">
                                <option>Select session Name....</option>
                                <?php
                                foreach($all_published_session as $v_session)
                                {
                                ?>
                                <option value="<?php echo $v_session->session_id;?>"><?php echo $v_session->session_name;?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                      <div class="control-group">
                        <label class="control-label" for="typeahead"> Student ID  </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="student_roll_no">
                            
                        </div>
                    </div>
                      <div class="control-group">
                        <label class="control-label" for="typeahead">  Reg No </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="student_reg_no">
                            
                        </div>
                    </div>
                   <div class="control-group">
                        <label class="control-label" for="textarea2">Semester</label>
                        <div class="controls">
                            <select name="student_semester">
                                <option>Select Your Semester</option>
                                <option value="First Semester">First Semester</option>
                                <option value="Second Semester">Second Semester</option>
                                <option value="Third Semester">Third Semester</option>
                                <option value="Fourth Semester">Fourth Semester</option>
                                <option value="Fifth Semester">Fifth Semester</option>
                                <option value="Sixth Semester">Sixth Semester</option>
                                <option value="Seventh Semester">Seventh Semester</option>
                                <option value="Eighth Semester">Eighth Semester</option>
                                
                            </select>
                        </div>
                    </div>
                      <div class="control-group">
                        <label class="control-label" for="textarea2"> Residential Hall</label>
                        <div class="controls">
                            <select name="student_hall">
                                <option>Select Your Residential Hall</option>
                                <option value="Sher-e-Bangla Hall-1">Sher-e-Bangla Hall-1 (D1)</option>
                                <option value="Sher-e-Bangla Hall-2">Sher-e-Bangla Hall-2 (D2)</option>
                                <option value="Begum Sufia Kamal Hall">Begum Sufia Kamal Hall (D3)</option>
                                <option value="M. Keramot Ali Hall (D4)">M. Keramot Ali Hall (D4)</option>
                                <option value="Bongobandhu Sheikh Mujibur Rahman (D5">Bongobandhu Sheikh Mujibur Rahman (D5)</option>
                                <option value="Sheikh Fazilatunnesa Mujib Hall">Sheikh Fazilatunnesa Mujib Hall (D6)</option>
                                
                            </select>
                        </div>
                    </div>
                      <div class="control-group">
                        <label class="control-label" for="typeahead"> Father's Name  </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="student_father_name">
                            
                        </div>
                    </div>
                    
                       <div class="control-group">
                        <label class="control-label" for="typeahead"> Mother's Name  </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="student_mother_name">
                            
                        </div>
                    </div>
                    
                       <div class="control-group">
                        <label class="control-label" for="typeahead"> Guardian's Contact No </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="guardian_contact_no">
                            
                        </div>
                    </div>
                    
                       <div class="control-group">
                        <label class="control-label" for="typeahead"> Address  </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="student_address">
                            
                        </div>
                    </div>
                    
                       <div class="control-group">
                        <label class="control-label" for="typeahead"> Personal Contact No  </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="student_contact_no">
                            
                        </div>
                    </div>
                    
                       <div class="control-group">
                        <label class="control-label" for="typeahead"> Batch </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="student_batch">
                            
                        </div>
                    </div>
                      <div class="control-group">
                        <label class="control-label" for="textarea2"> Gender</label>
                        <div class="controls">
                            <select name="student_gender">
                                <option>Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    
                     <div class="control-group">
                        <label class="control-label" for="typeahead">Student  Image </label>
                        <div class="controls">
                            <input type="file" class="span6"   name="student_image">
                            
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="textarea2"> Publication Status</label>
                        <div class="controls">
                            <select name="publication_status">
                                <option>Select Publication Status</option>
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead"> Email  </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="student_email">
                            
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead"> Password  </label>
                        <div class="controls">
                            <input type="password" class="span6 typeahead" id="typeahead"  name="student_password">
                            
                        </div>
                    </div>
                    
                     
                    
                    
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save </button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span--></div><!--/row-->

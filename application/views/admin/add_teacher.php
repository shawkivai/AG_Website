<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Add Teacher</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Add Teacher</h2>
            
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
            <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url();?>super_admin/save_teacher" method="post">
                <fieldset>
                    <legend></legend>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Teacher Name</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="teacher_name">
                            
                        </div>
                    </div>
                     <div class="control-group">
                        <label class="control-label" for="typeahead">Department Name  </label>
                        <div class="controls">
                            <select name="department_id">
                                <option>Select Department Name....</option>
                                <?php
                                foreach($all_published_department as $v_department)
                                {
                                ?>
                                <option value="<?php echo $v_department->department_id;?>"><?php echo $v_department->department_name;?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="textarea2" > Designation</label>
                        <div class="controls">
                            <select name="teacher_designation">
                                <option>Select Designation</option>
                               
                                <option value="Professor">Professor</option>
                                <option value="Associate Professor">Associate Professor</option>
                                <option value="Assistant Professor">Assistant Professor</option>
                                <option value="Lecturer">Lecturer</option>
                                
                            </select>
                        </div>
                    </div>
                             
                    <div class="control-group">
                        <label class="control-label" for="textarea2">About</label>
                        <div class="controls">
                            <textarea name="teacher_about" class="cleditor" id="textarea2" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Contact No.  </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="teacher_contact_no">
                            
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Research Area  </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="research_area">
                            
                        </div>
                    </div>
                      <div class="control-group">
                        <label class="control-label" for="typeahead">Education </label>
                        <div class="controls">
                              <textarea name="teacher_education" id="myTextarea"></textarea>
                            
                        </div>
                    </div>
                   
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Chairman </label>
                        <div class="controls">
                            <input type="checkbox" class="span6 "  name="chairman">
                            
                        </div>
                    </div>
                     <div class="control-group">
                        <label class="control-label" for="typeahead">Teacher  Image </label>
                        <div class="controls">
                            <input type="file" class="span6"   name="teacher_image">
                            
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
                            <input type="text" class="span6 typeahead" id="typeahead"  name="teacher_email">
                            
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead"> password  </label>
                        <div class="controls">
                            <input type="password" class="span6 typeahead" id="typeahead"  name="teacher_password">
                            
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



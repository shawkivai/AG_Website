<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Edit Teacher</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Edit Teacher</h2>

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
            <form name="edit_teacher" class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url(); ?>super_admin/update_teacher" method="post">
                <fieldset>
                    <legend></legend>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Teacher Name  </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="teacher_name" value="<?php echo $teacher_info->teacher_name; ?>">
                            <input type="hidden" class="span6 typeahead" id="typeahead"  name="teacher_id" value="<?php echo $teacher_info->teacher_id; ?>">

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Department Name  </label>
                        <div class="controls">
                            <select name="department_id" id="department_id">
                                <option>Select Department Name....</option>
                                <?php
                                foreach ($all_published_department as $v_department) {
                                    ?>
                                    <option value="<?php echo $v_department->department_id; ?>"><?php echo $v_department->department_name; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    
 <div class="control-group">
                        <label class="control-label" for="textarea2" required=""> Designation</label>
                        <div class="controls">
                            <select name="teacher_designation">
                                <option><?php echo $teacher_info->teacher_designation; ?></option>
                               
                                <option value="Professor">Professor</option>
                                <option value="Associate Professor">Associate Professor</option>
                                <option value="Assistant Professor">Assistant Professor</option>
                                <option value="Lecturer">Lecturer</option>
                                
                            </select>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="typeahead">About </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="teacher_about" value="<?php echo $teacher_info->teacher_about; ?>">

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Contact No.  </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="teacher_contact_no" value="<?php echo $teacher_info->teacher_contact_no; ?>">

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Research Area  </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="research_area" value="<?php echo $teacher_info->research_area; ?>">

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Chairman </label>
                        <div class="controls">
                            <input type="checkbox" class="span6 "  name="chairman" >

                        </div>
                    </div>
                    <?php 
                    if($teacher_info->teacher_image)
                    {
                     ?>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Teacher  Image </label>
                        <div class="controls">
                            <img src='<?php echo base_url().$teacher_info->teacher_image;?>' /> 
                            
                            <a href="<?php echo base_url();?>super_admin/delete_image/<?php echo $teacher_info->teacher_id?>">delete image</a>

                        </div>  
                    <?php 
                    }
                    else
                    {
                    ?>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Teacher  Image </label>
                        <div class="controls">
                            <input type="file" class="span6"   name="teacher_image" value="teacher_image">

                        </div>
                    <?php } ?>
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
                        <label class="control-label" for="textarea2">Email</label>
                        <div class="controls">
                             <input type="text" class="span6 typeahead" id="typeahead"  name="teacher_email" value="<?php echo $teacher_info->teacher_email; ?>">
                               
                            </textarea>
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
document.forms['edit_teacher'].elements['publication_status'].value='<?php echo $teacher_info->publication_status; ?>';
document.forms['edit_teacher'].elements['department_id'].value='<?php echo $teacher_info->department_id ?>';

document.forms['edit_teacher'].elements['chairman'].checked='<?php if($teacher_info->chairman==1){echo true;}else{echo false;} ?>';
</script>
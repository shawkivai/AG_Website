
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Forms</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Edit Department</h2>
            
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
            <form name="edit_department" class="form-horizontal" action="<?php echo base_url();?>super_admin/update_department" method="post" onsubmit="return validateStandard(this)">
                <fieldset>
                    <legend></legend>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Department Name (<span style="color:red">*</span>)  </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead" err="Enter valid department name...."  name="department_name" required value="<?php echo $department_info->department_name?>">
                            <input type="hidden" class="span6 typeahead" id="typeahead"  name="department_id"  value="<?php echo $department_info->department_id?>">
                            
                        </div>
                    </div>
                             
                    <div class="control-group">
                        <label class="control-label" for="textarea2">Department Description</label>
                        <div class="controls">
                            <textarea name="department_description" class="cleditor" id="textarea2" rows="3">  <?php echo $department_info->department_description?></textarea>
                        </div>
                    </div>
                    
                     <div class="control-group">
                        <label class="control-label" for="typeahead">Department Chairman  </label>
                        <div class="controls">
                            <select name="chairman_id" id="chairman_id">
                                <option><?php echo $department_info->chairman_id?></option>
                                <?php
                                foreach ($all_teacher as $v_teacher) {
                                    ?>
                                    <option value="<?php echo $v_teacher->teacher_id; ?>"><?php echo $v_teacher->teacher_name; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="textarea2"> Publication Status (<span style="color:red">*</span>)</label>
                        <div class="controls">
                            <select name="publication_status" id="publication_status" err="Please Select Publication Status" required exclude=" ">
                                <option value=" ">Select Publication Status</option>
                                <option value="1">Published</option>
                                <option value="0">Un Published</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->
<script type="text/javascript">
document.forms['edit_department'].elements['publication_status'].value='<?php echo $department_info->publication_status?>';
</script>


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
            <h2><i class="icon-edit"></i> Edit Course</h2>
            
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
            <form name="edit_course" class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url();?>super_admin/update_course" method="post" onsubmit="return validateStandard(this)">
                <fieldset>
                    <legend></legend>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Course ID (<span style="color:red">*</span>)  </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead" err="Enter valid course ID...."  name="course_id" required value="<?php echo $course_info->course_id?>">
                            <input type="hidden" class="span6 typeahead" id="typeahead"  name="course_id"  value="<?php echo $course_info->course_id?>">
                            
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="textarea2">Course Code</label>
                        <div class="controls">
                            <textarea name="course_code" class="cleditor" id="textarea2" rows="3">  <?php echo $course_info->course_code?></textarea>
                        </div>
                    </div>
                             
                    <div class="control-group">
                        <label class="control-label" for="textarea2">Course Title</label>
                        <div class="controls">
                            <textarea name="course_title" class="cleditor" id="textarea2" rows="3">  <?php echo $course_info->course_title?></textarea>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="textarea2">Credit Hour</label>
                        <div class="controls">
                            <textarea name="credit_hour" class="cleditor" id="textarea2" rows="3">  <?php echo $course_info->credit_hour?></textarea>
                        </div>
                    </div>
                     <div class="control-group">
                        <label class="control-label" for="typeahead">Upload Course File </label>
                        <div class="controls">
                            <input type="file" class="span6"   name="selected_course_file">
                            
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
document.forms['edit_course'].elements['publication_status'].value='<?php echo $course_info->publication_status?>';
</script>

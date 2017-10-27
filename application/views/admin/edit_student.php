<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Edit student</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Edit student</h2>

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
            <form name="edit_student" class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url(); ?>super_admin/update_student" method="post">
                <fieldset>
                    <legend></legend>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">student Name  </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="student_name" value="<?php echo $student_info->student_name; ?>">
                            <input type="hidden" class="span6 typeahead" id="typeahead"  name="student_id" value="<?php echo $student_info->student_id; ?>">

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Session  </label>
                        <div class="controls">
                            <select name="session_id" id="session_id">
                                <option>Select Department Name....</option>
                                <?php
                                foreach ($all_published_session as $v_session) {
                                    ?>
                                    <option value="<?php echo $v_session->session_id; ?>"><?php echo $v_session->session_name; ?></option>
                                <?php } ?>
                            </select>
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
                        <label class="control-label" for="textarea2">Email</label>
                        <div class="controls">
                             <input type="text" class="span6 typeahead" id="typeahead"  name="student_email" value="<?php echo $student_info->student_email; ?>">
                               
                            </textarea>
                        </div>
                    </div>
                        <div class="control-group">
                        <label class="control-label" for="textarea2">Password</label>
                        <div class="controls">
                             <input type="text" class="span6 typeahead" id="typeahead"  name="student_password" value="<?php echo $student_info->student_password; ?>">
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
document.forms['edit_student'].elements['publication_status'].value='<?php echo $student_info->publication_status; ?>';
document.forms['edit_student'].elements['session_id'].value='<?php echo $student_info->session_id ?>';


</script>

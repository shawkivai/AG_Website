<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Upload Image</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i>Upload Image</h2>

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
            <form name="upload_image" class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url(); ?>super_student/update_student_image" method="post">
                <fieldset>
                    <legend></legend>
                   
                   
                    
<input type="hidden" class="span6 typeahead" id="typeahead"  name="student_id" value="<?php echo $student_info->student_id; ?>">
               
                 
                   
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Student  Image   (Max Size: 500 KB ) </label>
                        <div class="controls">
                            <input type="file" class="span6"   name="student_image" value="">

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
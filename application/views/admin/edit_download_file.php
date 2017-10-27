<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Edit File</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Edit File</h2>

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
            <form name="edit_file" class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url(); ?>super_admin/update_download_file" method="post">
                <fieldset>
                    <legend></legend>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">File Name  </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="file_name" value="<?php echo $file_info->file_name; ?>">
                            <input type="hidden" class="span6 typeahead" id="typeahead"  name="file_id" value="<?php echo $file_info->file_id; ?>">

                        </div>
                    </div>
             
                    

                   
              
                    
                     <?php 
                    if($file_info->file_location)
                    {
                     ?>
                    <div class="control-group">
                        <label class="control-label" for="typeahead"> File </label>
                        <div class="controls">
                           
                            
                            <a href="<?php echo base_url();?>super_admin/delete_download_file_location/<?php echo $file_info->file_id?>">Delete File</a>

                        </div>  
                    <?php 
                    }
                    else
                    {
                    ?>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">File </label>
                        <div class="controls">
                            <input type="file" class="span6"   name="file_location" value="file_location">

                        </div>
                    <?php } ?>
                    </div>
                   
              
                        <div class="control-group">
                        <label class="control-label" for="textarea2">File Category</label>
                        <div class="controls">
                             <input type="text" class="span6 typeahead" id="typeahead"  name="file_category" value="<?php echo $file_info->file_category; ?>">
                               
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




</script>

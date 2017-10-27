<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Edit CSE PSTU About</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Edit CSE PSTU About</h2>

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
            <form name="edit_about" class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url(); ?>super_admin/update_about" method="post">
                <fieldset>
                    <legend></legend>
                    <div class="control-group">
                       
                        <div class="controls">
                           
                            <input type="hidden" class="span6 typeahead" id="typeahead"  name="about_id" value="<?php echo $about_info->about_id; ?>">

                        </div>
                    </div>
                    
               <div class="control-group">
                        <label class="control-label" for="textarea2">Update Welcome Note</label>
                        <div class="controls">
                            <textarea class="cleditor" id="textarea2" rows="3" name="welcome"><?php echo $about_info->welcome; ?></textarea>
                        </div>
                    </div>
                    
             
                    

                   
              
                        <div class="control-group">
                        <label class="control-label" for="textarea2"><b>History</b></label>
                        <div class="controls">
                            
                             <textarea class="cleditor" id="" rows="3" name="history"><?php echo $about_info->history; ?></textarea>
                               
                            </textarea>
                        </div>
                    </div>
                        <div class="control-group">
                        <label class="control-label" for="textarea2"><b>Vision</b></label>
                        <div class="controls">
                            
                             <textarea class="cleditor" id="" rows="3" name="vision"><?php echo $about_info->vision; ?></textarea>
                               
                            </textarea>
                        </div>
                    </div>
                        <div class="control-group">
                        <label class="control-label" for="textarea2"><b>At a glance</b></label>
                        <div class="controls">
                            
                             <textarea class="cleditor" id="" rows="3" name="at_a_glance"><?php echo $about_info->at_a_glance; ?></textarea>
                               
                            </textarea>
                        </div>
                    </div>
                   
                        <div class="control-group">
                        <label class="control-label" for="textarea2"><b>Contact Information</b></label>
                        <div class="controls">
                            
                             <textarea class="cleditor" id="" rows="3" name="contact_information"><?php echo $about_info->contact_information; ?></textarea>
                               
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

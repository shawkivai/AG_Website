<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Edit Blog</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Edit Blog</h2>

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
            <form name="edit_blog" class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url(); ?>super_teacher/update_blog" method="post">
                <fieldset>
                    <legend></legend>
                    <div class="control-group">
                       
                        <div class="controls">
                           
                            <input type="hidden" class="span6 typeahead" id="typeahead"  name="blog_id" value="<?php echo $blog_info->blog_id; ?>">

                        </div>
                    </div>
                    
               
                    
                        <div class="control-group">
                            <label class="control-label" for=""><b>Update Title</b></label>
                        <div class="controls">
                            <textarea class="" id="" rows="3" name="blog_title"><?php echo $blog_info->blog_title; ?></textarea>
                        </div>
                    </div>
             
                    

                   
              
                        <div class="control-group">
                        <label class="control-label" for="textarea2"><b>Update Short Description</b></label>
                        <div class="controls">
                            
                             <textarea class="" id="" rows="3" name="blog_short_description"><?php echo $blog_info->blog_short_description; ?></textarea>
                               
                            </textarea>
                        </div>
                    </div>
                        <div class="control-group">
                        <label class="control-label" for="textarea2"><b>Update Long Description</b></label>
                        <div class="controls">
                            
                             <textarea class="" id="" rows="3" name="blog_description"><?php echo $blog_info->blog_description; ?></textarea>
                               
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

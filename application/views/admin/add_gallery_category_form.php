
<div>
    <ul class="breadcrumb">
        
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Add Gallery Category</h2>
            
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
            <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url();?>super_admin/save_gallery_category" method="post">
                <fieldset>
                    <legend></legend>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Gallery Category Name  </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="gallery_category_name">
                            
                        </div>
                    </div>
                             
                    <div class="control-group">
                        <label class="control-label" for="textarea2">Gallery Category Description</label>
                        <div class="controls">
                            <textarea name="gallery_category_description" class="cleditor" id="textarea2" rows="3"></textarea>
                        </div>
                    </div>
                    
                      <div class="control-group">
                        <label class="control-label" for="typeahead">Add any related Image </label>
                        <div class="controls">
                            <input type="file" class="span6"   name="file_location">
                            
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
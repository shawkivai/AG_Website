
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Upload Notice</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Upload Notice</h2>
            
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
            <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url();?>super_admin/save_file" method="post">
                <fieldset>
                    <legend></legend>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Notice Title  </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="file_name">
                            
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Notice Short Description  </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="file_short_description">
                            
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Notice Long Description  </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="file_long_description">
                            
                        </div>
                    </div>
                    
                             
                    
                   
                    
                     <div class="control-group">
                        <label class="control-label" for="typeahead">Select Notice </label>
                        <div class="controls">
                            <input type="file" class="span6"  value="" name="seleced_file">
                            
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
                   
                    
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save </button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->
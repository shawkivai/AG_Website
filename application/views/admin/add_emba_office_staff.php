<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Add EMBA Office Staff</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i>Add EMBA Office Staff</h2>
            
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
            <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url();?>super_admin/save_emba_office_staff" method="post">
                <fieldset>
                    <legend></legend>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Member Name  </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="emba_office_staff_name">
                            
                        </div>
                    </div>
            
                
                
               
                    
                       <div class="control-group">
                        <label class="control-label" for="typeahead"> Contact No  </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="emba_office_staff_contact_no">
                            
                        </div>
                    </div>
                    
                       <div class="control-group">
                        <label class="control-label" for="typeahead"> Designation  </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="emba_office_staff_designation">
                            
                        </div>
                    </div>
					
					
					  <div class="control-group">
                        <label class="control-label" for="typeahead">Email</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="emba_office_staff_email">
                            
                        </div>
                    </div>
					
					
              
                    
                     <div class="control-group">
                        <label class="control-label" for="typeahead">Image </label>
                        <div class="controls">
                            <input type="file" class="span6"   name="emba_office_staff_image">
                            
                        </div>
                    </div>
             
              
                
               
                    
                     
                    
                    
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save </button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span--></div><!--/row-->

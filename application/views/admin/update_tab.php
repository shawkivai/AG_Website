
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Upload Tab</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Upload Achievement</h2>
            
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
            <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url();?>super_admin/save_tab" method="post">
                <fieldset>
                    <legend></legend>
                   
                   <input type="hidden" class="span6 typeahead" id="typeahead"  name="image_id" value="1">
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Achievement Heading  </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="heading">
                            
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Achievement Description </label>
                        <div class="controls">
                            <!--<input type="text" class="span6 typeahead" id="typeahead"  name="descriptions">-->
                             <textarea class="cleditor" id="textarea2" rows="3" name="descriptions"></textarea>
                            
                        </div>
                    </div>
                    
                     <div class="control-group">
                        <label class="control-label" for="typeahead">Upload Achievement </label>
                        <div class="controls">
                            <input type="file" class="span6"  name="seleced_file">
                            
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

<!--Second banner image-->

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Upload Club</h2>
            
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <h3>
                <?php
                    $msg=$this->session->userdata('message2');
                    if($msg)
                    {
                        echo $msg;
                        $this->session->unset_userdata('message2');
                    }
                ?>
            </h3>
        <div class="box-content">
            <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url();?>super_admin/save_tab_2" method="post">
                <fieldset>
                    <legend></legend>
                   
                   <input type="hidden" class="span6 typeahead" id="typeahead"  name="image_id" value="2">
                   
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Club Heading  </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="heading">
                            
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Club Description </label>
                        <div class="controls">
                            <!--<input type="text" class="span6 typeahead" id="typeahead"  name="descriptions">-->
                             <textarea class="cleditor" id="textarea2" rows="3" name="descriptions"></textarea>
                            
                        </div>
                    </div>
                    
                     <div class="control-group">
                        <label class="control-label" for="typeahead">Upload Club </label>
                        <div class="controls">
                            <input type="file" class="span6"  name="seleced_file">
                            
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

</div>


<!--third banner image-->

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Upload Activities</h2>
            
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <h3>
                <?php
                    $msg=$this->session->userdata('message3');
                    if($msg)
                    {
                        echo $msg;
                        $this->session->unset_userdata('message3');
                    }
                ?>
            </h3>
        <div class="box-content">
            <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url();?>super_admin/save_tab_3" method="post">
                <fieldset>
                    <legend></legend>
                   
                   <input type="hidden" class="span6 typeahead" id="typeahead"  name="image_id" value="3">
                   
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Activities Heading  </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="heading">
                            
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Activities Description </label>
                        <div class="controls">
                            <!--<input type="text" class="span6 typeahead" id="typeahead"  name="descriptions">-->
                             <textarea class="cleditor" id="textarea2" rows="3" name="descriptions"></textarea>
                            
                        </div>
                    </div>
                    
                     <div class="control-group">
                        <label class="control-label" for="typeahead">Upload Activities </label>
                        <div class="controls">
                            <input type="file" class="span6"  name="seleced_file">
                            
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

</div>

<!--.........fourth...........-->
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Upload Honor Board </h2>
            
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <h3>
                <?php
                    $msg=$this->session->userdata('message4');
                    if($msg)
                    {
                        echo $msg;
                        $this->session->unset_userdata('message4');
                    }
                ?>
            </h3>
        <div class="box-content">
            <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url();?>super_admin/save_tab_4" method="post">
                <fieldset>
                    <legend></legend>
                   
                   <input type="hidden" class="span6 typeahead" id="typeahead"  name="image_id" value="4">
                   
                   <div class="control-group">
                        <label class="control-label" for="typeahead">Honor Board Heading  </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="heading">
                            
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Honor Board Description </label>
                        <div class="controls">
                            <!--<input type="text" class="span6 typeahead" id="typeahead"  name="descriptions">-->
                             <textarea class="cleditor" id="textarea2" rows="3" name="descriptions"></textarea>
                            
                        </div>
                    </div>
                    
                     <div class="control-group">
                        <label class="control-label" for="typeahead">Upload Honor Board</label>
                        <div class="controls">
                            <input type="file" class="span6"  name="seleced_file">
                            
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

</div>

<!--...............5th.................-->

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Upload Scholarship </h2>
            
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <h3>
                <?php
                    $msg=$this->session->userdata('message5');
                    if($msg)
                    {
                        echo $msg;
                        $this->session->unset_userdata('message5');
                    }
                ?>
            </h3>
        <div class="box-content">
            <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url();?>super_admin/save_tab_5" method="post">
                <fieldset>
                    <legend></legend>
                   
                   <input type="hidden" class="span6 typeahead" id="typeahead"  name="image_id" value="5">
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Scholarship Heading  </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="heading">
                            
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Scholarship Description </label>
                        <div class="controls">
                            <!--<input type="text" class="span6 typeahead" id="typeahead"  name="descriptions">-->
                             <textarea class="cleditor" id="textarea2" rows="3" name="descriptions"></textarea>
                            
                        </div>
                    </div>
                    
                     <div class="control-group">
                        <label class="control-label" for="typeahead">Upload Scholarship</label>
                        <div class="controls">
                            <input type="file" class="span6"  name="seleced_file">
                            
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

</div>
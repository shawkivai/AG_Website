
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Upload Banner Image</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Upload 1st Banner Image</h2>
            
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
            <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url();?>super_admin/save_slider_image" method="post">
                <fieldset>
                    <legend></legend>
                   
                   <input type="hidden" class="span6 typeahead" id="typeahead"  name="image_id" value="1">
                    
                     <div class="control-group">
                        <label class="control-label" for="typeahead">Upload 1st Banner Image </label>
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
            <h2><i class="icon-edit"></i> Upload 2nd Banner Image</h2>            
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <h3>
                <?php
                    $msg2=$this->session->userdata('message2');
                    if($msg2)
                    {
                        echo $msg2;
                        $this->session->unset_userdata('message2');
                    }
                ?>
            </h3>
        <div class="box-content">
            <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url();?>super_admin/save_slider_image_2" method="post">
                <fieldset>
                    <legend></legend>                   
                   <input type="hidden" class="span6 typeahead" id="typeahead"  name="image_id" value="2">                    
                     <div class="control-group">
                        <label class="control-label" for="typeahead">Upload 2nd Banner Image </label>
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
            <h2><i class="icon-edit"></i> Upload 3rd Banner Image</h2>            
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
            <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url();?>super_admin/save_slider_image_3" method="post">
                <fieldset>
                    <legend></legend>
                   
                   <input type="hidden" class="span6 typeahead" id="typeahead"  name="image_id" value="3">                    
                     <div class="control-group">
                        <label class="control-label" for="typeahead">Upload Banner Image </label>
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
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Upload 4th Banner Image</h2>            
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <h3>
                <?php
                    $msg2=$this->session->userdata('message4');
                    if($msg2)
                    {
                        echo $msg2;
                        $this->session->unset_userdata('message4');
                    }
                ?>
            </h3>
        <div class="box-content">
            <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url();?>super_admin/save_slider_image_4" method="post">
                <fieldset>
                    <legend></legend>                   
                   <input type="hidden" class="span6 typeahead" id="typeahead"  name="image_id" value="2">                    
                     <div class="control-group">
                        <label class="control-label" for="typeahead">Upload 4th Banner Image </label>
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
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Upload 5th Banner Image</h2>            
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <h3>
                <?php
                    $msg2=$this->session->userdata('message5');
                    if($msg2)
                    {
                        echo $msg2;
                        $this->session->unset_userdata('message5');
                    }
                ?>
            </h3>
        <div class="box-content">
            <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url();?>super_admin/save_slider_image_5" method="post">
                <fieldset>
                    <legend></legend>                   
                   <input type="hidden" class="span6 typeahead" id="typeahead"  name="image_id" value="5">                    
                     <div class="control-group">
                        <label class="control-label" for="typeahead">Upload 2nd Banner Image </label>
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
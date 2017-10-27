
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Update Security Question</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Update Security Question</h2>
            
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
            <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url();?>super_teacher/update_security_question" method="post">
                <fieldset>
                    <legend></legend>
                   
                   
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Security Question  </label>
                        <select name="security_question" required="">
                                <option><?php echo $teacher_info->security_question; ?></option>
                                
                                <option value="What is your favorite color?">What is your favorite color? </option>
                                <option value="What is your favorite food?">What is your favorite food?</option>
                                <option value="What is the name of your village?">What is the name of your village?</option>
                                <option value="What is the name of your favorite teacher?">What is the name of your favorite teacher?</option>
                                <option value="Enter your most secured password">Enter your most secured password</option>
                               
                            </select>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Answer </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="answer">
                            
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
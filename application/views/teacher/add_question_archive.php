
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Add Question</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Upload Question</h2>
            
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
            <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url();?>super_teacher/save_question_archive" method="post">
                <fieldset>
                    <legend></legend>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Question Course Title  </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="course_title">
                            
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Question Course Code  </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="course_code">
                            
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Question Semester  </label>
                        <select name="semester" required="">
                                <option>Select Semester</option>
                                
                                <option value="1">First Semester</option>
                                <option value="2">Second Semester</option>
                                <option value="3">Third Semester</option>
                                <option value="4">Fourth Semester</option>
                                <option value="5">Fifth Semester</option>
                                <option value="6">Sixth Semester</option>
                                <option value="7">Seventh Semester</option>
                                <option value="8">Eighth Semester</option>
                                <option value="9">MBA/EMBA</option>
                            </select>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Question Session </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead"  name="session">
                            
                        </div>
                    </div>
                   
                    
                             
                    
                   
                    
                     <div class="control-group">
                        <label class="control-label" for="typeahead">Select Question </label>
                        <div class="controls">
                            <input type="file" class="span6"   name="selected_question">
                            
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
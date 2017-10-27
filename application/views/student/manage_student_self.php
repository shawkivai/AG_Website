
<div class="row-fluid sortable">
    <div class="box span16">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> View Profile</h2>
            
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
     



<div class="box-content">
    
    
    
    <table class="table table-striped table-bordered bootstrap-datatable datatable">

        <tbody>
            <?php
                foreach($all_student as $v_student)
                {
            ?>
           
            <tr> <td><h1><?php echo $v_student->student_name?></h1><br><b>Reg. No :</b>&nbsp;&nbsp;<?php echo $v_student->student_reg_no?><br><b>ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     :</b>&nbsp;&nbsp;<?php echo $v_student->student_roll_no?><br><b>Session&nbsp;:</b>&nbsp;&nbsp;<?php echo $v_student->student_session?>   </td>
                <td><b><img src="<?php echo base_url(). $v_student->student_image?> "height=200 width=200 alt="Image Not Found"></b></td> </tr>
           
                 <tr><td><b>Contact no.</b></td> <td> <?php echo $v_student->student_contact_no?></td> </tr>
                 <tr><td><b>Email</b></td> <td> <?php echo $v_student->student_email?></td> </tr>
                 <tr><td><b>Address</b></td> <td> <?php echo $v_student->student_address?></td> </tr>
                 <tr><td><b>Blood Group</b></td> <td> <?php echo $v_student->student_blood_group?></td> </tr>
                 <tr><td><b>Fathers Name</b></td> <td> <?php echo $v_student->student_father_name?></td> </tr>
                 <tr><td><b>Mother Name</b></td> <td> <?php echo $v_student->student_mother_name?></td> </tr>
                 <tr><td><b>Current Job Sector</b></td> <td> <?php echo $v_student->student_job_location?></td> </tr>
                 <tr><td><b>Expert Area</b></td> <td> <?php echo $v_student->student_expert_area?></td> </tr>
                 <tr><td><b>Designation</b></td> <td> <?php echo $v_student->student_designation?></td> </tr>
                 <!--<tr><td><b>Completed Credit</b></td> <td>Value not updated</td> </tr>-->
<!--                 <tr><td><b>CGPA</b></td> <td><?php echo $v_student->student_cgpa?> </td> </tr>-->
                 <tr><td><b>Edit Profile</b></td> <td><a class="btn btn-info" href="<?php echo base_url();?>super_student/edit_student/<?php echo $v_student->student_id?>" title="Edit"><i class="icon-edit icon-white"></i>  
                                                                
                    </a></td> </tr>
            
               
               
                
               
                
                
               
               
                    
                    
                   
            </tr>
                <?php } ?>
        </tbody>
    </table>            
</div>

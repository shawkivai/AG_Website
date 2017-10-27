<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Manage teacher</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span16">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Manage teacher</h2>
            
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
     



<div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable">
<!--        <thead>
            <tr>
                <th>Teacher Id</th>
                <th>Teacher Name</th>
                <th> Department</th>
                <th>designation</th>
                <th>about </th>
                 <th>contact no.</th>
                <th>Research Area</th>
                 
                <th> Publication Status</th>
                <th> Chairman</th>
                <th>Teacher Email</th>
                <th>Password</th>
                <th>Actions</th>
            </tr>
        </thead>   -->
        <tbody>
            <?php
                foreach($all_teacher as $v_teacher)
                {
            ?>
            
                <!--<td><?php echo $v_teacher->teacher_id?></td>-->
            <tr><td><b> Name</b></td>  <td class="center"><?php echo $v_teacher->teacher_name?></td></tr>
                
               <tr><td><b> Department</b></td> <td class="center"><?php echo $v_teacher->department_name?></td></tr>
               <tr><td><b>Designation </b></td> <td class="center"><?php echo $v_teacher->teacher_designation?></td></tr>
               <tr><td><b> Email</b> </td><td class="center"><?php echo $v_teacher->teacher_email?></td></tr>
               <tr><td><b> Contact No</b></td> <td class="center"><?php echo $v_teacher->teacher_contact_no?></td></tr>
               <tr><td><b> About</b> </td><td class="center"><?php echo $v_teacher->teacher_about?></td></tr>
               
               <tr><td><b> Research Area</b> </td><td class="center"><?php echo $v_teacher->research_area?></td></tr>
               <tr><td><b> Publication</b> </td><td class="center"><?php echo $v_teacher->teacher_publication?></td></tr>
               <tr><td><b> Award</b> </td><td class="center"><?php echo $v_teacher->teacher_award?></td></tr>
               <tr><td><b> Profile Link</b> </td><td class="center"><?php echo $v_teacher->teacher_link?></td></tr>
                
               
                
                
                
                
                
                  
                
                    
                    
                    
                   <tr><td><b> Edit Profile</b> </td><td class="center"> <a class="btn btn-info" href="<?php echo base_url();?>super_teacher/edit_teacher/<?php echo $v_teacher->teacher_id?>" title="Edit">
                        <i class="icon-edit icon-white"></i>  
                                                                
                    </a></td>
                   
            </tr>
                <?php } ?>
        </tbody>
    </table>            
</div>

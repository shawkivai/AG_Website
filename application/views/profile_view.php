
<div class="main_page">
    <div class="page_content_offset">
        <div class="container">
            <div class="d_table full_width d_xs_block m_bottom_20">
                <div class="d_table_cell v_align_m d_xs_block m_xs_bottom_15">
                    <h1> <?php echo $teacher_info->teacher_name; ?> </h1>
                    <?php
                    if ($teacher_info->teacher_designation != null) {
                        ?>
                        <h3 style="margin-top: 10px;"> <?php echo $teacher_info->teacher_designation; ?> </h3> 

                        <?php
                    }
                    ?> 
                    <hr>
                </div>


            </div>

            <div class="row clearfix">
                <section class="col-lg-4 col-md-4 col-sm-4">
                    <div class="photoframe r_corners shadow wrapper m_bottom_30">
                        <img src=" <?php echo base_url() . $teacher_info->teacher_image ?>" weight="300px" alt="" class="tr_all_long_hover">

                    </div>



                </section>
                <aside class="col-lg-8 col-md-8 col-sm-8 m_xs_bottom_10">
                    <?php
                    if ($teacher_info->teacher_contact_no != null) {
                        ?>

                        <h5><strong>Contact No:</strong> <?php echo $teacher_info->teacher_contact_no; ?></h5><br>
                        <?php
                    }
                    ?> 
                    <?php
                    if ($teacher_info->teacher_email != null) {
                        ?>

                        <h5><strong>Email Address:</strong> <?php echo $teacher_info->teacher_email; ?> </h5><br> 
                        <?php
                    }
                    ?> 
                    <?php
                    if ($teacher_info->on_leave == 0) {
                        $teacher_info->on_leave = "On duty";
                    } else {
                        $teacher_info->on_leave = "On Leave";
                    }
                    ?>

                    <h5><strong>Status:</strong> <?php echo $teacher_info->on_leave; ?></h5> <br>
                    <?php
                    if ($teacher_info->teacher_about != null) {
                        ?>


                        <h5><strong> About: </strong> </h5> <h5 style="margin: 10px;"> <?php echo $teacher_info->teacher_about; ?> </h5> 
                        <?php
                    }
                    ?> 

                    <?php
                    if ($teacher_info->research_area != null) {
                        ?>
                        <h5><strong>Research Area:</strong> </h5> <h5 style="margin: 10px;">  <?php echo $teacher_info->research_area; ?> </h5> 

                        <?php
                    }
                    ?> 
                    <?php
                    if ($teacher_info->teacher_research_details != null) {
                        ?>

                        <h5><strong>Research Details:</strong> </h5> <h5 style="margin: 10px;">  <?php echo $teacher_info->teacher_research_details; ?> </h5>
                        <?php
                    }
                    ?> 

                    <?php
                    if ($teacher_info->teacher_education != null) {
                        ?>

                        <h5><strong>Education:</strong> </h5> <h5 style="margin: 10px;">  <?php echo $teacher_info->teacher_education; ?> </h5> 
                        <?php
                    }
                    ?> 




                    <?php
                    if ($teacher_info->teacher_publication != null) {
                        ?>

                        <h5><strong>Publications:</strong> </h5> <h5 style="margin: 10px;">  <?php echo $teacher_info->teacher_publication; ?> </h5> 
                        <?php
                    }
                    ?> 

                    <?php
                    if ($teacher_info->teacher_publication != null) {
                        ?>

                        <h5><strong>Award:</strong> </h5> <h5 style="margin: 10px;">  <?php echo $teacher_info->teacher_award; ?> </h5>
                        <?php
                    }
                    ?> 
                    <?php
                    if ($teacher_info->teacher_link != null) {
                        ?>
                        <h5><strong>Profile Link:</strong> </h5> <h5 style="margin: 10px;">  <?php echo $teacher_info->teacher_link; ?> </h5>

                        <?php
                    }
                    ?> 

                </aside>
            </div>
            
        </div>
    </div>
</div>
<br>

<br>
<div>

    <style>
        .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
            color: #fff;
            cursor: default;
            background-color: #33b5e5;
            border: 1px solid #33b5e5;
            border-bottom-color: #fff !important;
        }

        .nav-tabs>li>a {
            margin-right: 0 !important;
            color: #fff !important;
            border: 1px solid transparent;
            border-radius: 0 !important;
        }
        .h2{
            color: #fff !important; 
        }

        .nav-tabs>li>a:hover {
            margin-right: 0 !important;
            color: #000 !important;
            border: 1px solid transparent;
            border-radius: 0 !important;
        }
        .table,
.table tr{
    background-color: #33b5e5 !important;
}
.table td {
    background-color: white !important;
}
        
    </style>
    <div class="home_tab" >
        <div class="container">
            <br>
         <h2><b> <p style="color: white"> Course Materials </p> </b></h2>
            <br>            
            <ul class="nav nav-tabs"  >
                <li class="active"><a data-toggle="tab" href="#first">1st Semester</a></li>
                <li ><a data-toggle="tab" href="#seconed">2nd Semester</a></li>
                <li><a data-toggle="tab" href="#third">3rd Semester</a></li>
                <li><a data-toggle="tab" href="#fourth">4th Semester</a></li>
                <li><a data-toggle="tab" href="#fifth">5th Semester</a></li>
                <li><a data-toggle="tab" href="#sixth">6th Semester</a></li>
                <li><a data-toggle="tab" href="#seventh">7th Semester</a></li>
                <li><a data-toggle="tab" href="#eighth">8th Semester</a></li>
                <li><a data-toggle="tab" href="#mba">MBA/EMBA</a></li>


            </ul>

            <div class="tab-content">
                <div id="first" class="tab-pane fade in active">

                    <div class="row">
                        <div class="col-12">


                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th><b>Course Code</b></th>
                                        <th><b>File Name</b></th>
                                        <th><b>Upload Date and Time</b></th>
                                        <th><b>Action</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($all_published_teacher_file as $v_file) {
                                        ?>
                                        <?php
                                        if ($v_file->author_name == $teacher_info->teacher_name) {
                                             
                                         if ($v_file->semester == 1) {
                            ?>
                                            

                                            <tr>
                                                <td><?php echo $v_file->course_code; ?></td>
                                                <td><?php echo $v_file->file_name; ?></td>
                                                <td><?php echo $v_file->created_date_time; ?></td>
                                                <td><a href="<?php echo base_url().$v_file->file_location; ?>" target="_blank" >Download</a>
                                                    <a href="<?php echo base_url()?>welcome/course_materials_details/<?php echo $v_file->file_id?>" _target="blank" >&nbsp;&nbsp;&nbsp;View</a>
                                
                                                
                                                </td>
                                            </tr>
                                        <?php }}
                                    }
                                    ?>					
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
                <div id="seconed" class="tab-pane fade ">

                    <div class="row">
                        <div class="col-12">
                           <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th><b>Course Code</b></th>
                                        <th><b>File Name</b></th>
                                        <th><b>Upload Date and Time</b></th>
                                        <th><b>Action</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($all_published_teacher_file as $v_file) {
                                        ?>
                                        <?php
                                        if ($v_file->author_name == $teacher_info->teacher_name) {
                                             
                                         if ($v_file->semester == 2) {
                            ?>
                                            

                                            <tr>
                                                <td><?php echo $v_file->course_code; ?></td>
                                                <td><?php echo $v_file->file_name; ?></td>
                                                <td><?php echo $v_file->created_date_time; ?></td>
                                              <td><a href="<?php echo base_url().$v_file->file_location; ?>" target="_blank" >Download</a>
                                                    <a href="<?php echo base_url()?>welcome/course_materials_details/<?php echo $v_file->file_id?>" _target="blank" >&nbsp;&nbsp;&nbsp;View</a>
                                
                                                
                                                
                                            </tr>
                                        <?php }}
                                    }
                                    ?>					
                                </tbody>
                            </table>
                        </div>


                    </div>

                </div>
                
                <div id="third" class="tab-pane fade">


                    <div class="col-12">
                        <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th><b>Course Code</b></th>
                                        <th><b>File Name</b></th>
                                        <th><b>Upload Date and Time</b></th>
                                        <th><b>Action</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($all_published_teacher_file as $v_file) {
                                        ?>
                                        <?php
                                        if ($v_file->author_name == $teacher_info->teacher_name) {
                                             
                                         if ($v_file->semester == 3) {
                            ?>
                                            

                                            <tr>
                                                <td><?php echo $v_file->course_code; ?></td>
                                                <td><?php echo $v_file->file_name; ?></td>
                                                <td><?php echo $v_file->created_date_time; ?></td>
                                                <td><a href="<?php echo base_url().$v_file->file_location; ?>" target="_blank" >Download</a>
                                                    <a href="<?php echo base_url()?>welcome/course_materials_details/<?php echo $v_file->file_id?>" _target="blank" >&nbsp;&nbsp;&nbsp;View</a>
                                
                                                
                                                </td>
                                            </tr>
                                        <?php }}
                                    }
                                    ?>					
                                </tbody>
                            </table>
                        
                </div>
                </div>

                <div id="fourth" class="tab-pane fade">
                    <div class="col-12">
                        <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th><b>Course Code</b></th>
                                        <th><b>File Name</b></th>
                                        <th><b>Upload Date and Time</b></th>
                                        <th><b>Action</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($all_published_teacher_file as $v_file) {
                                        ?>
                                        <?php
                                        if ($v_file->author_name == $teacher_info->teacher_name) {
                                             
                                         if ($v_file->semester == 4) {
                            ?>
                                            

                                            <tr>
                                                <td><?php echo $v_file->course_code; ?></td>
                                                <td><?php echo $v_file->file_name; ?></td>
                                                <td><?php echo $v_file->created_date_time; ?></td>
                                                <td><a href="<?php echo base_url().$v_file->file_location; ?>" target="_blank" >Download</a>
                                                    <a href="<?php echo base_url()?>welcome/course_materials_details/<?php echo $v_file->file_id?>" _target="blank" >&nbsp;&nbsp;&nbsp;View</a>
                                
                                                
                                                </td>
                                            </tr>
                                        <?php }}
                                    }
                                    ?>					
                                </tbody>
                            </table>
                    </div>
                </div>
                    
                    
                <div id="fifth" class="tab-pane fade">
                    <div class="col-12">
                        <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th><b>Course Code</b></th>
                                        <th><b>File Name</b></th>
                                        <th><b>Upload Date and Time</b></th>
                                        <th><b>Action</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($all_published_teacher_file as $v_file) {
                                        ?>
                                        <?php
                                        if ($v_file->author_name == $teacher_info->teacher_name) {
                                             
                                         if ($v_file->semester == 5) {
                            ?>
                                            

                                            <tr>
                                                <td><?php echo $v_file->course_code; ?></td>
                                                <td><?php echo $v_file->file_name; ?></td>
                                                <td><?php echo $v_file->created_date_time; ?></td>
                                               <td><a href="<?php echo base_url().$v_file->file_location; ?>" target="_blank" >Download</a>
                                                    <a href="<?php echo base_url()?>welcome/course_materials_details/<?php echo $v_file->file_id?>" _target="blank" >&nbsp;&nbsp;&nbsp;View</a>
                                
                                                
                                                </td>
                                            </tr>
                                        <?php }}
                                    }
                                    ?>					
                                </tbody>
                            </table>
                    </div>
                </div>
                <div id="sixth" class="tab-pane fade">
                    <div class="col-12">
                        <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th><b>Course Code</b></th>
                                        <th><b>File Name</b></th>
                                        <th><b>Upload Date and Time</b></th>
                                        <th><b>Action</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($all_published_teacher_file as $v_file) {
                                        ?>
                                        <?php
                                        if ($v_file->author_name == $teacher_info->teacher_name) {
                                             
                                         if ($v_file->semester == 6) {
                            ?>
                                            

                                            <tr>
                                                <td><?php echo $v_file->course_code; ?></td>
                                                <td><?php echo $v_file->file_name; ?></td>
                                                <td><?php echo $v_file->created_date_time; ?></td>
                                                <td><a href="<?php echo base_url().$v_file->file_location; ?>" target="_blank" >Download</a>
                                                    <a href="<?php echo base_url()?>welcome/course_materials_details/<?php echo $v_file->file_id?>" _target="blank" >&nbsp;&nbsp;&nbsp;View</a>
                                
                                                
                                                </td>
                                            </tr>
                                        <?php }}
                                    }
                                    ?>					
                                </tbody>
                            </table>
                    </div>
                </div>
                <div id="seventh" class="tab-pane fade">
                    <div class="col-12">
                        <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th><b>Course Code</b></th>
                                        <th><b>File Name</b></th>
                                        <th><b>Upload Date and Time</b></th>
                                        <th><b>Action</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($all_published_teacher_file as $v_file) {
                                        ?>
                                        <?php
                                        if ($v_file->author_name == $teacher_info->teacher_name) {
                                             
                                         if ($v_file->semester == 7) {
                            ?>
                                            

                                            <tr>
                                                <td><?php echo $v_file->course_code; ?></td>
                                                <td><?php echo $v_file->file_name; ?></td>
                                                <td><?php echo $v_file->created_date_time; ?></td>
                                                <td><a href="<?php echo base_url().$v_file->file_location; ?>" target="_blank" >Download</a>
                                                    <a href="<?php echo base_url()?>welcome/course_materials_details/<?php echo $v_file->file_id?>" _target="blank" >&nbsp;&nbsp;&nbsp;View</a>
                                
                                                
                                                </td>
                                            </tr>
                                        <?php }}
                                    }
                                    ?>					
                                </tbody>
                            </table>
                    </div>
                </div>
                <div id="eighth" class="tab-pane fade">
                    <div class="col-12">
                        <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th><b>Course Code</b></th>
                                        <th><b>File Name</b></th>
                                        <th><b>Upload Date and Time</b></th>
                                        <th><b>Action</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($all_published_teacher_file as $v_file) {
                                        ?>
                                        <?php
                                        if ($v_file->author_name == $teacher_info->teacher_name) {
                                             
                                         if ($v_file->semester == 8) {
                            ?>
                                            

                                            <tr>
                                                <td><?php echo $v_file->course_code; ?></td>
                                                <td><?php echo $v_file->file_name; ?></td>
                                                <td><?php echo $v_file->created_date_time; ?></td>
                                               <td><a href="<?php echo base_url().$v_file->file_location; ?>" target="_blank" >Download</a>
                                                    <a href="<?php echo base_url()?>welcome/course_materials_details/<?php echo $v_file->file_id?>" _target="blank" >&nbsp;&nbsp;&nbsp;View</a>
                                
                                                
                                                </td>
                                            </tr>
                                        <?php }}
                                    }
                                    ?>					
                                </tbody>
                            </table>
                    </div>
                </div>
                <div id="mba" class="tab-pane fade">
                    <div class="col-12">
                        <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th><b>Course Code</b></th>
                                        <th><b>File Name</b></th>
                                        <th><b>Upload Date and Time</b></th>
                                        <th><b>Action</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($all_published_teacher_file as $v_file) {
                                        ?>
                                        <?php
                                        if ($v_file->author_name == $teacher_info->teacher_name) {
                                             
                                         if ($v_file->semester == 9) {
                            ?>
                                            

                                            <tr>
                                                <td><?php echo $v_file->course_code; ?></td>
                                                <td><?php echo $v_file->file_name; ?></td>
                                                <td><?php echo $v_file->created_date_time; ?></td>
                                               <td><a href="<?php echo base_url().$v_file->file_location; ?>" target="_blank" >Download</a>
                                                    <a href="<?php echo base_url()?>welcome/course_materials_details/<?php echo $v_file->file_id?>" _target="blank" >&nbsp;&nbsp;&nbsp;View</a>
                                
                                                
                                                </td>
                                            </tr>
                                        <?php }}
                                    }
                                    ?>					
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>






<!--testing-->



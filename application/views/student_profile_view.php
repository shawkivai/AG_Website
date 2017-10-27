

<div class="main_page">
    <div class="page_content_offset">
        <div class="container">
            <div class="d_table full_width d_xs_block m_bottom_20">
                <div class="d_table_cell v_align_m d_xs_block m_xs_bottom_15">
                    <h1> <?php echo $student_info->student_name; ?> </h1>
                    <?php
                    if ($student_info->student_batch != null) {
                        ?>
                        <h3 style="margin-top: 10px;"> <?php echo $student_info->student_batch; ?> </h3> 

                        <?php
                    }
                    ?> 
                    <hr>
                </div>


            </div>

            <div class="row clearfix">
                <section class="col-lg-4 col-md-4 col-sm-4">
                    <div class="photoframe r_corners shadow wrapper m_bottom_30">
                        <img src=" <?php echo base_url() . $student_info->student_image ?>" weight="300px" alt="" class="tr_all_long_hover">

                    </div>



                </section>
                <aside class="col-lg-8 col-md-8 col-sm-8 m_xs_bottom_10">
                    <?php
                    if ($student_info->student_contact_no != null) {
                        ?>

                        <h5><strong>Contact No:</strong> <?php echo $student_info->student_contact_no; ?></h5><br>
                        <?php
                    }
                    ?> 
                    <?php
                    if ($student_info->student_email != null) {
                        ?>

                        <h5><strong>Email Address:</strong> <?php echo $student_info->student_email; ?> </h5><br> 
                        <?php
                    }
                    ?> 
                    <?php
                    if ($student_info->student_session != null) {
                        ?>

                        <h5><strong>Session:</strong> <?php echo $student_info->student_session; ?> </h5><br> 
                        <?php
                    }
                    ?> 
					<?php
                    if ($student_info->student_blood_group != null) {
                        ?>

                        <h5><strong>Blood Group:</strong> <?php echo $student_info->student_blood_group; ?> </h5><br> 
                        <?php
                    }
                    ?> 

                   
                    

                    <?php
                    if ($student_info->student_expert_area != null) {
                        ?>
                        <h5><strong>Expert Area:</strong> </h5> <h5 style="margin: 10px;">  <?php echo $student_info->student_expert_area; ?> </h5> 

                        <?php
                    }
                    ?> 
                    

                    <?php
                    if ($student_info->student_job_location != null) {
                        ?>

                        <h5><strong>Job Location:</strong> </h5> <h5 style="margin: 10px;">  <?php echo $student_info->student_job_location; ?> </h5> 
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

</div>






<!--testing-->



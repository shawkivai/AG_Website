<div class="main_page">
<!--content-->
<div class="page_content_offset">
    <div class="container">
        <div class="d_table full_width d_xs_block">
            <div class="d_table_cell v_align_m d_xs_block m_xs_bottom_15">
                <h2 class="tt_uppercase color_dark"align="center" >Teachers Portfolio  </h2>
                <hr>
                
            </div>
       
        </div>
        <!--portfolio isotope-->
        
 

            
     <div class="d_table full_width d_xs_block">
            <div class="d_table_cell v_align_m d_xs_block m_xs_bottom_15">
                <h2 class="tt_uppercase color_dark" align="center">  <?php echo $chairman->department_name?> </h2>
                <hr>
                
            </div>
       
        </div>
        <?php 
            foreach ($all_teacher as $v_teacher)
            { 
              
                if($v_teacher->publication_status==1)
                    { 
                  
                        if($chairman->chairman_id==$v_teacher->teacher_id)
                        {
            ?>
<section class="portfolio_isotope_container four_columns">
            
            <div class="portfolio_item t_xs_align_c people">
                <figure class="d_xs_inline_b">
                    <div class="photoframe with_buttons relative shadow r_corners wrapper m_bottom_15">
                        <img src="<?php echo base_url().$v_teacher->teacher_image?>" height="180" width="250" alt="" class="tr_all_long_hover">
                        <div class="open_buttons clearfix">
                            <div class="f_left f_size_large tr_all_hover"><a href="<?php echo base_url().$v_teacher->teacher_image?>" role="button" class="color_light button_type_13 r_corners box_s_none d_block jackbox" data-group="portfolio" data-title="<?php echo $v_teacher->teacher_name?>"><i class="fa fa-camera"></i></a></div>
                            <div class="f_left m_left_10 f_size_large tr_all_hover"><a href="<?php echo base_url()?>welcome/teacher_details/<?php echo $v_teacher->teacher_id?>" role="button" class="color_light button_type_13 r_corners box_s_none d_block"><i class="fa fa-link"></i></a></div>
                        </div>
                    </div>
                    <figcaption class="t_xs_align_l">
                        <a href="<?php echo base_url()?>welcome/teacher_details/<?php echo $v_teacher->teacher_id?>" class="color_dark"><b><?php echo $v_teacher->teacher_name?></b></a><br>
                        <?php echo $v_teacher->teacher_designation?><br>
                            Chairman <br>
                            Email: <?php echo $v_teacher->teacher_email?><br>
                       Contact No: <?php echo $v_teacher->teacher_contact_no?><br>
                         <h6 class="m_bottom_3"><a href="<?php echo base_url()?>welcome/teacher_details/<?php echo $v_teacher->teacher_id?>" class="color_dark"><b>View Profile</b></a></h6>   

                    </figcaption>
                </figure>
            </div>
             <?php
                   }
                 }
               }
            
             ?>      
             
             
             
       
             </section>
    <section class="portfolio_isotope_container four_columns">
             <?php 
            foreach ($all_teacher as $v_teacher)
            { 
               if($v_teacher->publication_status==1)
                    { 
                    if($v_teacher->department_id==$chairman->department_id)
                        {
                        if($v_teacher->teacher_id!=$chairman->chairman_id)
                        {
                    
            ?>
            <div class="portfolio_item t_xs_align_c people">
                <figure class="d_xs_inline_b">
                    <div class="photoframe with_buttons relative shadow r_corners wrapper m_bottom_15">
                        <img src="<?php echo base_url().$v_teacher->teacher_image?>" height="180" width="250" alt="" class="tr_all_long_hover">
                        <div class="open_buttons clearfix">
                            <div class="f_left f_size_large tr_all_hover"><a href="<?php echo base_url().$v_teacher->teacher_image?>" role="button" class="color_light button_type_13 r_corners box_s_none d_block jackbox" data-group="portfolio" data-title="<?php echo $v_teacher->teacher_name?>"><i class="fa fa-camera"></i></a></div>
                            <div class="f_left m_left_10 f_size_large tr_all_hover"><a href="<?php echo base_url()?>welcome/teacher_details/<?php echo $v_teacher->teacher_id?>" role="button" class="color_light button_type_13 r_corners box_s_none d_block"><i class="fa fa-link"></i></a></div>
                        </div>
                    </div>
                    <figcaption class="t_xs_align_l">
                        <h4 class="m_bottom_3"><a href="<?php echo base_url()?>welcome/teacher_details/<?php echo $v_teacher->teacher_id?>" class="color_dark"><b><?php echo $v_teacher->teacher_name?></b></a></h4>
                        <?php echo $v_teacher->teacher_designation?><br>
                            Email: <?php echo $v_teacher->teacher_email?><br>
                       Contact No: <?php echo $v_teacher->teacher_contact_no?><br>
                         <h6 class="m_bottom_3"><a href="<?php echo base_url()?>welcome/teacher_details/<?php echo $v_teacher->teacher_id?>" class="color_dark"><b>View Profile</b></a></h6>   
                      
                    </figcaption>
                </figure>
            </div>
             <?php
                  }
                }
              }
            }
             ?>  
            

            
           
</section>  

               
        </div>
    </div>
</div>
</div>





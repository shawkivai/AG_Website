<div class="main_page">

  

            
        <div class="row clearfix">
            <div class="col-lg-4 col-md-4 col-sm-4 t_xs_align_c m_bottom_25">
             <?php
    foreach ($gallery_category as $v_category) {
        ?>
          <div class="portfolio_item t_xs_align_c people">
                <figure class="d_xs_inline_b">
                   <div class="photoframe with_buttons relative shadow r_corners wrapper m_bottom_15">
                     <!-- <div class="circle wrapper team_photo d_inline_b m_bottom_15">-->
                        <img src="<?php echo base_url().$v_category->file_location; ?>" height="300" width="700" alt="" class="tr_all_long_hover">
                        
                    </div>
                    <figcaption class="t_xs_align_l">
                        <h4 class="m_bottom_3"><a href="<?php echo base_url();?>welcome/gallery_category_details/<?php echo $v_category->gallery_category_id;?>/<?php echo str_replace(' ', '_', $v_category->gallery_category_name);?>" class="color_dark"><b><?php echo $v_category->gallery_category_name; ?></b></a></h4>
                        
                      <br>   <br>
               
                        
                    </figcaption>
                </figure>
            </div>
        
          <?php }?>
        
						
							
       
</div>
</div>


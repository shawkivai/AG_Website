<div class="main_page">
 <?php
    foreach ($all_published_news as $v_news) {
        ?>
<hr class="divider_type_3 m_bottom_30">
<article class="m_bottom_20 clearfix">
    <a href="#" class="photoframe d_block d_xs_inline_b f_xs_none wrapper shadow f_left m_right_20 m_bottom_10 r_corners">
        <img src="<?php echo base_url() . $v_news->file_location ?>" width="350" height="220" class="tr_all_long_hover" alt="">
    </a>
    <div class="mini_post_content">
        <h4 class="m_bottom_5"><a href="#" class="color_dark fw_medium"><?php echo $v_news->news_title; ?></a></h4>
        <p class="f_size_medium m_bottom_10"><?php echo $v_news->created_date_time; ?> </p>
        

        
        <p class="m_bottom_10"><?php echo $v_news->news_short_description; ?></p>
        <a href="<?php echo base_url() ?>welcome/news_details/<?php echo $v_news->news_id ?>/<?php echo $v_news->news_title;?>" class="tt_uppercase f_size_large">Read More</a>
    </div>
</article>
<?php } ?>
</div>
</div>
















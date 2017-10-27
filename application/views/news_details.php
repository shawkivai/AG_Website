<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '600570166802194',
      xfbml      : true,
      version    : 'v2.8'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=600570166802194";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="main_page">

<div class="page_content_offset">
    <div class="container">
        <div class="row clearfix">
            <!--left content column-->
            <section class="col-lg-9 col-md-9 col-sm-9">
                <!--blog post-->
                <article class="m_bottom_15">
                    <div class="row clearfix m_bottom_15">
                        <div class="col-lg-9 col-md-9 col-sm-8">
                            <h2 class="m_bottom_5 color_dark fw_medium m_xs_bottom_10"><?php echo $news_info->news_title; ?></h2>
                            <p class="f_size_medium"><?php echo $news_info->created_date_time; ?> </p>
                            <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//cse.pstu.ac.bd/welcome/news_details/<?php echo $news_info->news_id; ?>/<?php echo $news_info->news_title;?>">Share on Facebook</a>
                        </div>
                          
 
                    </div>
                    <a href="#" class="d_block photoframe r_corners wrapper shadow m_bottom_15">
                        <img src="<?php echo base_url() . $news_info->file_location ?>" width="828" height="363" class="tr_all_long_hover" alt="">
                    </a>
                    <!--post content-->
                    <p class="m_bottom_15" align="justify"><?php echo $news_info->news_long_description; ?></p>
                </article>

        </section>
        <!--right column-->
        <aside class="col-lg-3 col-md-3 col-sm-3">
            <!--widgets-->

            <!--Popular articles-->
            <figure class="widget shadow r_corners wrapper m_bottom_30">
                <figcaption>
                    <h3 class="color_light">More News</h3>
                </figcaption>

                <div class="widget_content">
                    <?php
                    foreach ($all_published_news as $v_news) {
                        ?>
                        <article class="clearfix m_bottom_15">
                            <img src="<?php echo base_url() . $v_news->file_location ?>"width="80" height="80" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                            <a href="<?php echo base_url()?>welcome/news_details/<?php echo $v_news->news_id; ?>" class="color_dark d_block bt_link p_vr_0"><?php echo $v_news->news_title; ?> </a>

                        </article>

                        <?php
                    }
                    ?>
                </div>
            </figure>
            <!--Bestsellers-->

            <!--Latest articles-->

            <!--tags-->

        </aside>
    </div>
</div>
</div>
    </div>
</div>
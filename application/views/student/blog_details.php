<!--<link href="<?php echo base_url();?>blog/css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/coin-slider.css" />
<script type="text/javascript" src="<?php echo base_url();?>blog/js/cufon-yui.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>blog/js/cufon-aller.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>blog/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>blog/js/script.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>blog/js/coin-slider.min.js"></script>-->

<div class="mainbar">
    <div class="article">
        <p><span style="font-size: 18px"><?php echo $blog_info->blog_title?></span></p>
        <div class="clr"></div>
        <p>Posted by <a href="#"><?php echo $blog_info->author_name?></a> <span>&nbsp;&bull;&nbsp;</span></p>
        <?php echo $blog_info->blog_description?>
    </div>
    <div class="article">
        <h2>
            <?php
                echo count($blog_comments) . '  Responses';
            ?>
        </h2>
        <div class="clr"></div>
        <?php
        foreach($blog_comments as $v_comments)
        {
        ?>
        <div class="comment"> <a href="#"><img src="images/userpic.gif" width="40" height="40" alt="" class="userpic" /></a>
            <p><a href="#"><?php echo $v_comments->comments_author_name?></a> Says:<br />
                <?php echo $v_comments->created_date_time?></p>
            <?php
                echo $v_comments->comments;
            ?>
        </div>
        <?php } ?>
    </div>
    <?php
        $user_id=$this->session->userdata('user_id');
       
    ?>
    <div class="article">
        <h2><span>Leave a</span> Reply</h2>
        <h3 style="color: red" >
              <?php
                $msg=$this->session->userdata('message');
                if($msg)
                {
                    echo $msg;
                    $this->session->unset_userdata('message');
                }
                
              
              ?>
          </h3>
        <div class="clr"></div>
        <form action="<?php echo base_url();?>super_student/save_comments" method="post" id="leavereply">
            <ul>
               
                <li>
                    <label for="message">Your Message</label>
                    <input type="hidden" name="blog_id" value="<?php echo $blog_info->blog_id?>" />
                    <textarea id="message" name="comments" rows="8" cols="50"></textarea>
                </li>
<!--                 <li>
                     &nbsp;
                </li>-->
                <li>
                    <input type="submit" name="btn" value="Post a Comments" />
                    <div class="clr"></div>
                </li>
            </ul>
        </form>
    </div>
        
        
</div>
<style>
    
    <link href="<?php echo base_url()?>asset/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php echo base_url()?>asset/css/bootstrap.min.css" rel="stylesheet">
</style>
<!--<div class="page_content_offset">
				<div class="container">
					<div class="row clearfix">
						left content column
						<section class="col-lg-5 col-md-5 col-sm-5">
							blog post
							<article class="m_bottom_15">
								<div class="row clearfix m_bottom_15">
									<div class="col-lg-9 col-md-9 col-sm-8">
										<h2 class="m_bottom_5 color_dark fw_medium m_xs_bottom_10"><?php echo $blog_info->blog_title;?></h2>
										<p class="f_size_medium m_bottom_10">Posted on <span class="date"><?php echo $blog_info->created_date_time;?></span> by <?php echo $blog_info->author_name;?></a></p>
									</div>
									
								</div>
								<a href="#" class="d_block photoframe r_corners wrapper shadow m_bottom_15">
									<img src="<?php echo base_url().$blog_info->file_location ?>" height="323" width="828" class="tr_all_long_hover" alt="">
								</a>
								post content
                                                                <p class="m_bottom_15"><?php echo $blog_info->news_long_description;?></p></article>
                                               
                                                        </div>
                                </div>
    </div>-->
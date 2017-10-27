<div class="main_page">

     <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>css/bootstrap.min.css">
<?php
    foreach($all_published_blog as $v_blog)
    {
        
?>
<div class="panel panel-info">
      <div class="panel-heading"><h4><u><?php echo $v_blog->blog_title;?></u></h4><p class="infopost"><b><?php echo $v_blog->author_name;?> </b>( <?php echo $v_blog->author_designation;?>) | Posted on <span class="date"> at <?php echo $v_blog->created_date_time;?></span> </a> </div>
      <div class="panel-body"><?php echo $v_blog->blog_short_description;?><p class="spec"></p></div>
    
     <p class="spec"><a href="<?php echo base_url()?>super_student/blog_details/<?php echo $v_blog->blog_id?>" class="rm">  Read more &raquo;</a></p>
    </div>
         <?php } ?>
    </div>
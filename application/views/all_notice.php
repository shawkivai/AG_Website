<div class="main_page">

     
<?php
    foreach($all_published_notice as $v_notice)
    {
?>

<div class="container">
  
  <div class="panel panel-default">
      <div class="panel-heading"><h4><?php echo $v_notice->notice_title;?></h4><p class="infopost">Posted on <span class="date"><?php echo $v_notice->created_date_time;?></span> by <?php echo $v_notice->author_name;?><hr> </p>
   <?php echo $v_notice->notice_short_description;?><p class="spec"><a href="<?php echo base_url()?>welcome/notice_details/<?php echo $v_notice->notice_id?>" class="rm">Read more &raquo;</a></p></div>
  </div>
</div> 
    <?php } ?>
    </div>
</div>





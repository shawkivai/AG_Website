
<div class="main_page">
    
     
<div class="mainbar">
    

    <div class="article">
        <p><span style="font-size: 18px"><?php echo $notice_info->notice_title?><br></span></p>
               <span style="font-size: 13px"> Posted on <span class="date"><?php echo $notice_info->created_date_time;?></span>
        
        
        <br>Posted by <a href="#"><?php echo $notice_info->author_name?></a>
        <hr>
        <?php echo $notice_info->notice_long_description?>
        
         <?php if ($notice_info->file_location== null)
        {
        $notice_info->file_location = 'images/er_D.PNG';}
    ?>
        
        <br><p class="spec"><a href="<?php echo base_url().$notice_info->file_location?>" class="rm">Download Pdf &raquo;</a></p>
     <br>
     
         <iframe width="1100" height="400" src="<?php echo base_url().$notice_info->file_location?>" frameborder="20" ></iframe>
    
    </div>
    <br><br>
<br><br> 
</div>
    </div>
    <div class="main_page">
 <h4 align="center" color:white> More Notice </h4>
<hr>
    
        
        

<?php
    foreach($all_published_notice as $v_notice)
    {
?>

<div class="container">
  
  <div class="panel panel-default">
    <div class="panel-heading"><h4><?php echo $v_notice->notice_title;?></h4><p class="infopost">Posted on <span class="date"><?php echo $v_notice->created_date_time;?></span> by <?php echo $v_notice->author_name;?></a> </p></div>
    <div class="panel-body"><?php echo $v_notice->notice_short_description;?><p class="spec"><a href="<?php echo base_url()?>welcome/notice_details/<?php echo $v_notice->notice_id?>" class="rm">Read more &raquo;</a></p></div>
  </div>
</div>
    <?php } ?>
</div>



     

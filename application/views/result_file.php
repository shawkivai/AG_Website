<div class="main_page">
    
    <h3> Download Result Files  </h3>
    <hr>
    
    <?php
    foreach($all_result_file as $v_result_file)
    {
?>

<div class="container">
  
  <div class="panel panel-default">
    <div class="panel-heading"><h6>
            <strong>Semester:  <?php echo $v_result_file->semester;?><br></strong> 
           
        </h6><p class="infopost">Posted on <span class="date"><?php echo $v_result_file->created_date_time;?></span> by <?php echo $v_result_file->author_name;?></a> <p class="spec"><a href="<?php echo base_url()?><?php echo $v_result_file->result_file_location?>" class="rm">Download&raquo;</a></p></div>
    </div>
</div>
    <?php } ?>
      
        
        
</div>

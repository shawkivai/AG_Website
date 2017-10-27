<div class="main_page">

     
<?php
    foreach($query as $v_notice)
    {
?>

<div class="container">
  
  <div class="panel panel-default">
    <div class="panel-heading"><h4></h4><p class="infopost">Posted on <span class="date"></span> by </a> </p></div>
    <div class="panel-body"><?php echo $v_notice->student_name;?><p class="spec"><a href="" class="rm">Read more &raquo;</a></p></div>
  </div>
</div> 
    <?php } ?>
    </div>
</div>


   <div class="mainbar">
       <br>
       <br>
        <h3><u>Course Layout of Bachelor of Science in Computer Science and Engineering [B.Sc.Engg.(CSE)]</u></h3>
       <br>
       <h3><u>Level-1,Semester-I</u></h3>
       
       <br>
     
    <table class="table table-striped table-bordered bootstrap-datatable datatable" margin-left="10px" border="0" width='100%' bgcolor='#ff00ff'margin-top="10px" >
        <thead>
            <tr>
             
                <th><u>Course Code</u></th>
                <th><u>Course Title</u></th>
                <th><u>Credit Hour</u></th>
                <th><u>Course Details </u></th>
                
               
            </tr>
        </thead>   
        <tbody>
            <?php
                foreach($all_published_course as $v_course)
                {
                    if($v_course->semester_id==1)
                    {
            ?>
            <tr>
              
                <td class="center"><?php echo $v_course->course_code?></td>
                <td class="center"><?php echo $v_course->course_title?></td>
                <td class="center"><?php echo $v_course->credit_hour?></td>
                <td class="center"> <p class="spec"><a href="<?php echo base_url().$v_course->course_file_location?>" class="rm">Download</a></p></td>
               
              
            </tr>
                <?php } }?>
        </tbody>
    </table>            
</div>
  <br>
       <h3><u>Level-1,Semester-II</u></h3>
      
       <br>
     <div class="box-content" margin-left="10px">
    <table class="table table-striped table-bordered bootstrap-datatable datatable" margin-left="10px" border="0" width='100%' bgcolor='#ff00ff'margin-top="10px" >
        <thead>
            <tr>
             
               <th><u>Course Code</u></th>
                <th><u>Course Title</u></th>
                <th><u>Credit Hour</u></th>
                <th><u>Course Details</u></th>
                
               
            </tr>
        </thead>   
        <tbody>
            <?php
                foreach($all_published_course as $v_course)
                {
                    if($v_course->semester_id==2)
                    {
            ?>
            <tr>
              
                <td class="center"><?php echo $v_course->course_code?></td>
                <td class="center"><?php echo $v_course->course_title?></td>
                <td class="center"><?php echo $v_course->credit_hour?></td>
                <td class="center"> <p class="spec"><a href="<?php echo base_url().$v_course->course_file_location?>" class="rm">Download</a></p></td>
               
              
            </tr>
                <?php } }?>
        </tbody>
    </table>            
</div>
        <br>
       <h3><u>Level-2,Semester-I</u></h3>
        <br>
      
     <div class="box-content" margin-left="10px">
    <table class="table table-striped table-bordered bootstrap-datatable datatable" margin-left="10px" border="0" width='100%' bgcolor='#ff00ff'margin-top="10px" >
        <thead>
            <tr>
             
                <th><u>Course Code</u></th>
                <th><u>Course Title</u></th>
                <th><u>Credit Hour</u></th>
                <th><u>Course Details</u></th>
                
               
            </tr>
        </thead>   
        <tbody>
            <?php
                foreach($all_published_course as $v_course)
                {
                    if($v_course->semester_id==3)
                    {
            ?>
            <tr>
              
                <td class="center"><?php echo $v_course->course_code?></td>
                <td class="center"><?php echo $v_course->course_title?></td>
                <td class="center"><?php echo $v_course->credit_hour?></td>
               <td class="center"> <p class="spec"><a href="<?php echo base_url().$v_course->course_file_location?>" class="rm">Download</a></p></td>
               
              
            </tr>
                <?php } }?>
        </tbody>
    </table>            
</div>
           <br>
       <h3><u>Level-2,Semester-II</u></h3>
    
       <br>
     <div class="box-content" margin-left="10px">
    <table class="table table-striped table-bordered bootstrap-datatable datatable" margin-left="10px" border="0" width='100%' bgcolor='#ff00ff'margin-top="10px" >
        <thead>
            <tr>
             
                <th><u>Course Code</u></th>
                <th><u>Course Title</u></th>
                <th><u>Credit Hour</u></th>
                <th><u>Course Details</u></th>
                
               
            </tr>
        </thead>   
        <tbody>
            <?php
                foreach($all_published_course as $v_course)
                {
                    if($v_course->semester_id==4)
                    {
            ?>
            <tr>
              
                <td class="center"><?php echo $v_course->course_code?></td>
                <td class="center"><?php echo $v_course->course_title?></td>
                <td class="center"><?php echo $v_course->credit_hour?></td>
               <td class="center"> <p class="spec"><a href="<?php echo base_url().$v_course->course_file_location?>" class="rm">Download</a></p></td>
               
              
            </tr>
                <?php } }?>
        </tbody>
    </table>            
</div>
       <br>
       <h3><u>Level-3,Semester-I</u></h3>
        
       <br>
     <div class="box-content" margin-left="10px">
    <table class="table table-striped table-bordered bootstrap-datatable datatable" margin-left="10px" border="0" width='100%' bgcolor='#ff00ff'margin-top="10px" >
        <thead>
            <tr>
             
               <th><u>Course Code</u></th>
                <th><u>Course Title</u></th>
                <th><u>Credit Hour</u></th>
                <th><u>Course Details</u></th>
                
                
               
            </tr>
        </thead>   
        <tbody>
            <?php
                foreach($all_published_course as $v_course)
                {
                    if($v_course->semester_id==5)
                    {
            ?>
            <tr>
              
                <td class="center"><?php echo $v_course->course_code?></td>
                <td class="center"><?php echo $v_course->course_title?></td>
                <td class="center"><?php echo $v_course->credit_hour?></td>
                <td class="center"> <p class="spec"><a href="<?php echo base_url().$v_course->course_file_location?>" class="rm">Download</a></p></td>
               
              
            </tr>
                <?php } }?>
        </tbody>
    </table>            
</div>
       <br>
       <h3><u>Level-3,Semester-II</u></h3>
        
       <br>
     <div class="box-content" margin-left="10px">
    <table class="table table-striped table-bordered bootstrap-datatable datatable" margin-left="10px" border="0" width='100%' bgcolor='#ff00ff'margin-top="10px" >
        <thead>
            <tr>
             
                <th><u>Course Code</u></th>
                <th><u>Course Title</u></th>
                <th><u>Credit Hour</u></th>
                <th><u>Course Details </u></th>
                
               
            </tr>
        </thead>   
        <tbody>
            <?php
                foreach($all_published_course as $v_course)
                {
                    if($v_course->semester_id==6)
                    {
            ?>
            <tr>
              
                <td class="center"><?php echo $v_course->course_code?></td>
                <td class="center"><?php echo $v_course->course_title?></td>
                <td class="center"><?php echo $v_course->credit_hour?></td>
                <td class="center"> <p class="spec"><a href="<?php echo base_url().$v_course->course_file_location?>" class="rm">Download</a></p></td>
               
              
            </tr>
                <?php } }?>
        </tbody>
    </table>            
</div>
        <br>
       <h3><u>Level-4,Semester-I</u></h3>
       
       <br>
     <div class="box-content" margin-left="10px">
    <table class="table table-striped table-bordered bootstrap-datatable datatable" margin-left="10px" border="0" width='100%' bgcolor='#ff00ff'margin-top="10px" >
        <thead>
            <tr>
             
                <th><u>Course Code</u></th>
                <th><u>Course Title</u></th>
                <th><u>Credit Hour</u></th>
                <th><u>Credit Hour</u></th>
                
               
            </tr>
        </thead>   
        <tbody>
            <?php
                foreach($all_published_course as $v_course)
                {
                    if($v_course->semester_id==7)
                    {
            ?>
            <tr>
              
                <td class="center"><?php echo $v_course->course_code?></td>
                <td class="center"><?php echo $v_course->course_title?></td>
                <td class="center"><?php echo $v_course->credit_hour?></td>
               <td class="center"> <p class="spec"><a href="<?php echo base_url().$v_course->course_file_location?>" class="rm">Download</a></p></td>
              
            </tr>
                <?php } }?>
        </tbody>
    </table>            
</div>
         <br>
       <h3><u>Level-4,Semester-II</u></h3>
      
       <br>
     <div class="box-content" margin-left="10px">
    <table class="table table-striped table-bordered bootstrap-datatable datatable" margin-left="10px" border="0" width='100%' bgcolor='#ff00ff'margin-top="10px" >
        <thead>
            <tr>
             
               <th><u>Course Code</u></th>
                <th><u>Course Title</u></th>
                <th><u>Credit Hour</u></th>
                <th><u>Course Details</u></th>
                
               
            </tr>
        </thead>   
        <tbody>
            <?php
                foreach($all_published_course as $v_course)
                {
                    if($v_course->semester_id==8)
                    {
            ?>
            <tr>
              
                <td class="center"><?php echo $v_course->course_code?></td>
                <td class="center"><?php echo $v_course->course_title?></td>
                <td class="center"><?php echo $v_course->credit_hour?></td>
                <td class="center"> <p class="spec"><a href="<?php echo base_url().$v_course->course_file_location?>" class="rm">Download</a></p></td>
               
              
            </tr>
                <?php } }?>
        </tbody>
    </table>            
</div>
</div>
<h3>Total Course Credit for BSc Engineering in CSE=165.00</h3>
<br>
<h3> <u>Optional Courses:</u></h3>
<hr>
 <div class="box-content" margin-left="10px">
    <table class="table table-striped table-bordered bootstrap-datatable datatable" margin-left="10px" border="0" width='100%' bgcolor='#ff00ff'margin-top="10px" >
        <thead>
            <tr>
             
               <th><u>Course Code</u></th>
                <th><u>Course Title</u></th>
                <th><u>Credit Hour</u></th>
                <th><u>Course Details</u></th>
               
            </tr>
        </thead>   
        <tbody>
            
            <tr>
              
                <td class="center">OPTIONAL</td>
                <td class="center">Digital Signal Processing</td>
                <td class="center">3.00</td>
               <td class="center"> <p class="spec"><a href="<?php echo base_url().$v_course->course_file_location?>" class="rm">Download</a></p></td>
               
              
            </tr>
            <tr>
              
                <td class="center">OPTIONAL</td>
                <td class="center">Robotics and Computer Vision</td>
                <td class="center">3.00</td>
                <td class="center"> <p class="spec"><a href="<?php echo base_url().$v_course->course_file_location?>" class="rm">Download</a></p></td>
               
              
            </tr>
            <tr>
              
                <td class="center">OPTIONAL</td>
                <td class="center">Machine Learning</td>
                <td class="center">3.00</td>
                <td class="center"> <p class="spec"><a href="<?php echo base_url().$v_course->course_file_location?>" class="rm">Download</a></p></td>
               
              
            </tr>
            <tr>
              
                <td class="center">OPTIONAL</td>
                <td class="center">Parallel Processing and Distributed System</td>
                <td class="center">3.00</td>
               <td class="center"> <p class="spec"><a href="<?php echo base_url().$v_course->course_file_location?>" class="rm">Download</a></p></td>
               
              
            </tr>
                
        </tbody>
    </table>            
</div>

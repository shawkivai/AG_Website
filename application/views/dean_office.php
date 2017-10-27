
    
<div class="main_page">
    <div>
        <h3 class="mainHeader">Dean</h3>
        <hr>
         <?php
                foreach($dean_staff as $staff)
                    { 
                    if($staff->dean_office_staff_designation == 'dean')
                        {
                        ?>
        <hr>
        <br><div class=leftDiv> <img src="<?php echo base_url().$staff->dean_office_staff_image; ?>" height="120px" weight="100px"alt="Dean image"></div> <div class="rightDiv"> <?php echo $staff->dean_office_staff_name;?>
<br>Email: <?php echo $staff->dean_office_staff_email;?>
<br>Mobile No. <?php echo $staff->dean_office_staff_contact_no;?>

                    <?php 
                    
                        } 
                        
                        } 
                        ?>

        </div>
                <p></p>
                <h3 class="mainHeader">Administrative</h3>
                <hr>
                <?php
                foreach($dean_staff as $staff)
                    { 
                    if($staff->dean_office_staff_designation != 'dean')
                        {
                        ?>
           
                <br>
        
        <hr>
        <br><div class=leftDiv> <img src="<?php echo base_url().$staff->dean_office_staff_image; ?> height="120px" weight="100px"alt="image" ></div> <div class="rightDiv"><?php echo $staff->dean_office_staff_name;?>  <br> <?php echo $staff->dean_office_staff_designation;?> <br>Contact No: <?php echo $staff->dean_office_staff_contact_no;?> <br>Email: <?php echo $staff->dean_office_staff_email;?>
                  
  <?php
                    
                        } 
                        
                        }
                        ?>
        </div>
              </div>
         <hr>
                                                                                            </div>
                                                                                            </div>
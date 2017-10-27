

<div class="main_page">

    <br>
    <h3 class="mainHeader">Office Staffs</h3>
    <hr>
    <?php 
    foreach($office_staff as $staff){?>
    <br><div class=leftDiv> <img src="<?php echo base_url().$staff->staff_image;?>" height="120px" weight="100px"alt="image" ></div> <div class="rightDiv"> <?php echo $staff->staff_name;?> <br> <?php echo $staff->staff_designation;?> <br> Department: <?php echo $staff->staff_department;?> <br> Contact no: <?php echo $staff->staff_contact_no;?>

    </div>
    <?php }?>
    <p></p>


    <hr>

</div>

</div>

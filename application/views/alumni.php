- <div class="mainbar">
      <br>
       <br>
        
       
       <br>
   
      
      <style>
#myInput {
    background-image: url('/css/searchicon.png'); /* Add a search icon to input */
    background-position: 10px 12px; /* Position the search icon */
    background-repeat: no-repeat; /* Do not repeat the icon image */
    width: 50%; /* Full-width */
    font-size: 16px; /* Increase font-size */
    padding: 12px 20px 12px 40px; /* Add some padding */
    border: 1px solid #ddd; /* Add a grey border */
    margin-bottom: 12px; /* Add some space below the input */
}

#myTable {
    border-collapse: collapse; /* Collapse borders */
    width: 100%; /* Full-width */
    border: 1px solid #ddd; /* Add a grey border */
    font-size: 18px; /* Increase font-size */
}

#myTable th, #myTable td {
    text-align: left; /* Left-align text */
    padding: 12px; /* Add padding */
}

#myTable tr {
    /* Add a bottom border to all table rows */
    border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
    /* Add a grey background color to the table header and on hover */
    background-color: #f1f1f1;
}


a{color:black;}
</style>


<li style="list-style:none"><input type="text" id="myInput1"   onkeyup="myFunction1()" placeholder="Search by Name.." title="Type in a name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="myInput2" onkeyup="myFunction2()" placeholder="Search by Batch.." title="Type in a name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="myInput3" onkeyup="myFunction3()" placeholder="Search by Expert Area.." title="Type in a name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="myInput4" onkeyup="myFunction4()" placeholder="Search by Job Location..." title="Type in a name"></li>



 
     
      
      <br>
<table id="myTable">
  <tr class="header">
    <th style="width:20%; color: black">Name</th>
    <th style="width:20%;color: black">Batch</th>
    <th style="width:20%;color: black">Expert Area</th>
	<th style="width:20%;color: black">Current Job Sector</th>
    <th style="width:20%;color: black">Designation</th>
    <th style="width:20%;color: black">Email</th>
  </tr>
  <tr>
   <?php
                foreach($all_batch as $v_batch)
                {
                foreach($all_student as $v_student)
                {
                    if($v_student->student_batch==$v_batch->batch_name)
                    {
                    
            ?>
  
    <td><a href=<?php echo base_url()?>welcome/student_details/<?php echo $v_student->student_id;?> ><?php echo $v_student->student_name;?></a></td>
    <td><?php echo $v_student->student_batch;?></td>
    <td><?php echo $v_student->student_expert_area;?></td>
    <td><?php echo $v_student->student_job_location;?></td>
	<td><?php echo $v_student->student_designation;?></td>
    <td><?php echo $v_student->student_email;?></td>

  </tr>
                <?php }}}?>
</table>
              
<script>
function myFunction1() {
  // Declare variables
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput1");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  
   for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

function myFunction2() {
  // Declare variables
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput2");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  
   for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
function myFunction3() {
  // Declare variables
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput3");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  
   for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
function myFunction4() {
  // Declare variables
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput4");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  
   for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

</div>
</div>
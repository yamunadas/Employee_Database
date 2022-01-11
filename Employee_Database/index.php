<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//echo "helloo yamuna";
include 'connection.php';
?>
<head>
  <title>Employee Database</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="css/style.css">
</head>
 <main class="main-content">
        <div class="container-fluid">
                        <div class="row">
            
                 <div class="col-md-3">
                    <div class="bg-white addemp">
                        <h2 class="">Employee Details</h2> 
                        <span><a href="add_details.php" style="text-decoration: none;">  <button type="button" class="btn addBtn" > <i class="fa fa-plus mr-2"></i> ADD DETAILS</button></a></span> 
                    </div>
                  
                </div>
            
             </div>
            <div class="row listrow">
                
                
                <div class="col-md-6 ">
                    <div class="tableCustom bg-white">
                  
                        
                        <table class="table table-striped table-bordered cusDatable" style="width:50%">
                            <thead>
                                <tr>
                                    <th>#Sl</th>
                                    <th>Employee Code</th>
                                    <th>Employee Name</th>
                                    <th>Department</th>
                                    <th>Age</th>
                                    <th>Experience</th>
                                </tr>
                            </thead>
                          <tbody>
                               <?php 
$query = mysqli_query($conn,"SELECT * FROM emp_details"); 
$resultrow = array();
   $cnt = mysqli_num_rows($query);
             if($cnt>0)
             {
                
             while($rws = mysqli_fetch_assoc($query) )
                     $data[] = $rws;
             {
                  $i = 1;
             foreach($data as $rw){
                 
  $diff = date_diff(date_create($rw['dob']), date_create(date("d-m-Y")));

  $exp = date_diff(date_create($rw['joining_date']), date_create(date("d-m-Y")));
  
             ?>
                
                                <tr>
                                    <td><?php echo $i;?></td>
                                    <td><?php echo $rw['emp_code'];?></td>
                                    <td><?php echo $rw['emp_name'];?></td>
                                    <td><?php echo $rw['dept'];?></td>
                                    <td><?php echo $diff->format('%y').' years';?></td>
                                    <td><?php echo $exp->format('%y years %m months and %d days');?></td>
                                </tr>
             <?php
             $i++;
             
             }} }?>
                            </tbody>
                      
                        </table>
                    </div>
                </div>
               
                  
            </div>
        </div>
    </main>



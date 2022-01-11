<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "connection.php";


//$tmpName = $_FILES['file']['tmp_name'];
//$csvAsArray = array_map('str_getcsv', file($tmpName));


if (isset($_POST["submit"])) {
    
    $fileName = $_FILES["file"]["tmp_name"];
    
    if ($_FILES["file"]["size"] > 0) {
        
        $ext = pathinfo($fileName, PATHINFO_EXTENSION);
        
        $allowed = array('csv');
        
        $file = fopen($fileName, "r");
        fgetcsv($file);
        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
            
//            $id = "";
//            if (isset($column[0])) {
//                $id = mysqli_real_escape_string($conn, $column[0]);
//            }
        
            $emp_code = "";
            if (isset($column[1])) {
                $emp_code = mysqli_real_escape_string($conn, $column[1]);
            }
            $emp_name = "";
            if (isset($column[2])) {
                $emp_name = mysqli_real_escape_string($conn, $column[2]);
            }
            $dept = "";
            if (isset($column[3])) {
                $dept = mysqli_real_escape_string($conn, $column[3]);
            }
            $dob = "";
            if (isset($column[4])) {
                $dob = mysqli_real_escape_string($conn, $column[4]);
            }
            $joining_date = "";
            if (isset($column[5])) {
                $joining_date = mysqli_real_escape_string($conn, $column[5]);
            }
            
             $status = "";
            if (isset($column[6])) {
                $status = mysqli_real_escape_string($conn, $column[6]);
            }
            
            
            
            $sql = "INSERT into emp_details (`emp_code`, `emp_name`, `dept`, `dob`, `joining_date`, `status`)
                   values ('$emp_code','$emp_name','$dept','$dob','$joining_date',$status)";
        

            mysqli_query($conn, $sql);
            header('Location: index.php');
        }
        
    }else{
        echo "No Data Found!";
    }
}
?>
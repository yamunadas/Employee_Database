<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<head>
    <title>Employee Database</title>
    <link rel="stylesheet" href="css/style.css">
</head>



<form class="formclass"action="savefile.php" method="post" enctype="multipart/form-data">
   
    <input type="file" class="upload" name="file" value="" />
     <label>* Please Upload .csv files</label>
<input type="submit" class="upload submitfile" name="submit" value="Upload" /></form>
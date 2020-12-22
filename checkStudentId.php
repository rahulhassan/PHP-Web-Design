<?php
    include 'phpValidation/validation_student_info.php';
    $id = $_GET["u"];
    $uid = getId($id);
    if($uid){
        echo "<span style='color:red'>Already Taken</span>";
    }else{
        echo "<span style='color:green'>Username Valid</span>";
    }
?>
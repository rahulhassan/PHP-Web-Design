<?php
    include "../models/db_connect.php";
    $id= $_GET['id'];
    deleteId($id);
    function deleteId($id){
        $query = "DELETE FROM `student` WHERE id= $id";

        execute($query);
        header ("location: ../info/student_info.php");
    }
?>
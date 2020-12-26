<?php
    include "../models/db_connect.php";
    $id= $_GET['id'];
    deleteId($id);
    function deleteId($id){
        $query = "DELETE FROM `faculty` WHERE id= $id";

        execute($query);
        header ("location: ../info/faculty_info.php");
    }
?>
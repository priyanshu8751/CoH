<?php
include 'includes/auth_check.php';
    require_once 'Database/conn.php';
    if(!isset($_GET['id'])){
        header("Location: viewrecords.php");
    }else{
        // Get ID values
        $id = $_GET['id'];

        //Call Delete function
        $result = $crud->deletePatient($id);
        //Redirect to list
        if($result)
        {
            header("Location: viewrecords.php");
        }
       
    }

?>
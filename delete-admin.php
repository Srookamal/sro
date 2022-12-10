<?php
    include('insert.php');
    //get id
    $id = $_GET['id'];

    //create sql
    $sql = "DELETE FROM tbl_user WHERE id = $id";

    // execute query 
    $res = mysqli_query($conn,$sql);

    //check the execute
    if($res != ''){
        //executed
        // echo "executed";
        // create session 
        $_SESSION['delete'] ="<div class='sucsses'> admin is deleted.</div>";
         //redirect
         
        header('location:'.SITEURL.'insert.php');
    }else{
        //executed
        // echo "not executed";
        // create session 
        $_SESSION['delete'] ="<div class='error'>faild to delete admin ,try again.</div>";
         //redirect
        header('location:'.SITEURL.'insert.php');
    }

    //redirect


?>

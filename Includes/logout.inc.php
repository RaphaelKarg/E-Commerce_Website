<?php
    session_start();

    //If user click the return button
    if(isset($_POST['return'])){
        header("Location: ../index.php?return"); //Back to index Page
    }//Else if user cler the exit button
    else if(isset($_POST['exit'])){
        session_unset(); 
        session_destroy();
        header("Location: ../login.php?logout=success"); //Go to log in page
        exit();
    }
?>
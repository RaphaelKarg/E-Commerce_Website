<?php
    /*  CONNECT WITH DATABASE  */
    $dbServername = "localhost"; //Host Database Name
    $dbUsername = "efoodAdmin"; //Username of Database
    $dbPassword = "3f00d4dm1n"; //Password of Database
    $dbName = "websitedatabase"; //Database name

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName); //Connection query to access in database
    //IF CONNECTION FAILD
    if(!$conn){
        die("<center><img src='../Images/importantIcon.png' alt='WARNING ICON' title='WARNING ICON' width='250px' height='250px' /></center>
             <center><h2>ΑΠΟΤΥΧΙΑ ΣΥΝΔΕΣΗΣ ΣΤΗΝ ΒΑΣΗ ΔΕΔΟΜΕΝΩΝ</h2></center>
             <center><h3>Δοκιμάστε ξανά αργότερα.</h3></center>
             <center>Πατήστε <b><a href='../login.php'>εδώ</a></b> για να επιστρέψετε πίσω.</center>"
        );
    }
?>

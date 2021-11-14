<?php
    //If put the submit button
    if(isset($_POST['submit'])){

        $firstLastName = $_POST['first_lastName']; //First and Last name
        $subject = $_POST['subject']; // Subject
        $mailFrom = $_POST['email']; 
        $comments = $_POST['comments'];
    
        $mailTo = "rafasliakos123@gmail.com"; 
        $header = "From: " . $mailFrom; 
    
        $txt = "Λάβατε ένα e-mail από " . $firstLastName ." (".$mailFrom.")". "\n\n" . $comments; 
   
        mail($mailTo, $subject, $txt, $header);
        header("Location: ../contact.php?mailsend");
    }
      
        /*//Connect to the Database
        include_once 'connectDatabase.inc.php';

        //Initialization of variables and remove special characters
        $firstLastName = mysqli_real_escape_string($conn, $_POST['first_lastName']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $comments = mysqli_real_escape_string($conn, $_POST['comments']);

        //Select all of the table
        $sqlTable = "SELECT * FROM contact";
        $result = mysqli_query($conn, $sqlTable);
        
        //If the rows of table is greater equan than 0
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck >= 0){
            //SQL Query(Insert the datas)
            $sql = "INSERT INTO contact(firstLastName, email, comments)
                VALUES ('$firstLastName', '$email', '$comments');";
            mysqli_query($conn, $sql);
            header("Location: ../contact.php?sending_datas=success");
        }
            */
?>
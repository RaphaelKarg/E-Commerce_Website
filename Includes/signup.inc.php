<?php
    //If click the submit button
    if(isset($_POST['submit'])){

        //Including the file for connect in Database
        include_once 'connectDatabase.inc.php';

        //Initialization of the datas
        $firstname = mysqli_real_escape_string($conn, $_POST['name']);
        $lastname = mysqli_real_escape_string($conn, $_POST['surname']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $email = mysqli_real_escape_string($conn, $_POST['mail']);
        $password = mysqli_real_escape_string($conn, $_POST['pass']);

        $hashedPwdInDB = password_hash($password, PASSWORD_DEFAULT); //HASHED PASSWORD

        //Query database to take all the user_phone and user_email column
        $sqlTable = "SELECT user_phone,user_email FROM users";
        $resultTable = mysqli_query($conn, $sqlTable);

        /*******Scan the columns if the phone or email are exist*******/
        while($row = mysqli_fetch_assoc($resultTable)){
            //If the username is equal to another username in database
            if($phone == $row['user_phone'] || $email == $row['user_email']){
                header("Location: ../register.php?error=user_exists&first=$firstname&last=$lastname");
                exit();
            }
        }
        //Save the rows of phone and email
        $resultCheck = mysqli_num_rows($resultTable);
        //If the rows of username is equal and greater than 0
        if($resultCheck >= 0){
            //Insert the datas in Database
            $sql = "INSERT INTO users(user_first, user_last, user_phone, user_email, user_password)
                    VALUES('$firstname', '$lastname', '$phone', '$email', '$hashedPwdInDB');";
            mysqli_query($conn, $sql);

            //Go to this path
            header("Location: ../register.php?signup=success");
        }
        //CLOSE THE SQL CONNECTION
        msqli_close($conn);
    }
    else{ //Else, stay in register form
        header("Location: ../register.php");
        exit();
    }
?>

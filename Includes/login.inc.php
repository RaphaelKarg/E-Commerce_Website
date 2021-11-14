<?php
    //If click the submit button
    if(isset($_POST['submit'])){

        //Connect to database
        include_once 'connectDatabase.inc.php';

        //Remove the special characters from the first and Second Input
        function strip_post($field){
            if (!isset($_POST[$field])) $_POST[$field] = '';

            return htmlspecialchars(stripslashes($_POST[$field]));
        }

        /*************************! ! !  FOR THE FIRST INPUT(EMAIL OR PHONE) ! ! !**************************/
        $firstInput = strip_post('emailOrPhone'); //ENTRY FIRST INPUT DATA IN THE VARIABLE

        /*************************! ! !  FOR THE SECOND INPUT(PASSWORD) ! ! !**************************/
        $secondInput = strip_post('password'); //ENTRY SECOND INPUT DATA IN THE VARIABLE 
        $password = $secondInput;

        //If the inputs is emptys
        if(empty($firstInput) || empty($password)){
            header("Location: ../login.php?error=emptyfields"); //Faild connection(The inputs are emptys)
            exit();
        }//Else if the inputs are not emptys
        else{
            //Check if the first input is email
            if(filter_var($firstInput, FILTER_VALIDATE_EMAIL)){
                $email = $firstInput;

                //SQL Query for registered user.
                $sql = "SELECT * FROM users WHERE user_email = '$email';";
                $result = mysqli_query($conn, $sql);

                //If the column of user is exist
                if($rowOfUser = mysqli_fetch_assoc($result)){
                    $passwordCheck = password_verify($password, $rowOfUser['user_password']);
                    if($passwordCheck == false){
                        header("Location: ../login.php?error=wrongpwd"); //Faild Connection(Wrong passwords)
                        exit();
                    }
                    else if($passwordCheck == true){
                        //Start the Session for this user
                        session_start();
                        
                        $_SESSION['firstname'] = $rowOfUser['user_first']; // FIRST NAME SESSION
                        $_SESSION['lastname'] = $rowOfUser['user_last']; //LAST NAME SESSION
                        $_SESSION['phone'] = $rowOfUser['user_phone']; //PHONE SESSION
                        $_SESSION['email'] = $rowOfUser['user_email']; //EMAIL SESSION
                        $_SESSION['password'] = $password; //PASSWORD SESSION*/

                        header("Location: ../index.php?login=success"); //Successful connection
                        exit();
                    }
                }//If the column of user is not exist
                else{
                    header("Location: ../login.php?error=noUser"); //Faild Connection(The user does not exist with this information)
                    exit();
                }
            }//Check if the first input is phone
            else if(preg_match('/^[6]{1}[9]{1}[0-9]{8}$/', $firstInput)){
                $phone = $firstInput;

                //SQL Query for registered user.
                $sql = "SELECT * FROM users WHERE user_phone = '$phone';";
                $result = mysqli_query($conn, $sql);

                //If the column of user is exist
                if($rowOfUser = mysqli_fetch_assoc($result)){
                    $passwordCheck = password_verify($password, $rowOfUser['user_password']);
                    if($passwordCheck == false){
                        header("Location: ../login.php?error=wrongpwd"); //Faild Connection(Wrong passwords)
                        exit();
                    }
                    else if($passwordCheck == true){
                        //Start the Session for this user
                        session_start();
                        
                        $_SESSION['firstname'] = $rowOfUser['user_first']; // FIRST NAME SESSION
                        $_SESSION['lastname'] = $rowOfUser['user_last']; //LAST NAME SESSION
                        $_SESSION['phone'] = $rowOfUser['user_phone']; //PHONE SESSION
                        $_SESSION['email'] = $rowOfUser['user_email']; //EMAIL SESSION
                        $_SESSION['password'] = $password; //PASSWORD SESSION

                        header("Location: ../index.php?login=success"); //Successful connection
                        exit();
                    }
                }//If the column of user is not exist
                else{
                    header("Location: ../login.php?error=noUser");//Faild Connection(The user does not exist with this information)
                    exit(); 
                }
            }
            else{ //If first input is not email and is not phone
                header("Location: ../login.php?error=noUser");//Faild Connection(The user does not exist with this information)
                exit(); 
            }
        }
        msqli_close($conn);
    }
    else{//If not click the submit button, stay in login form
        header("Location: ../login.php");
        exit();
    }
?>
<?php
    //
    //include config file
    include('../app/config/webconfig.php');

    if($_SERVER['REQUEST_METHOD'] = 'POST')
    {
        try
        {
            function test_input($input)
            {
                $input = trim($input);
                $input = stripslashes($input);
                $input = htmlspecialchars($input);
                return $input;
            }

            if(isset($_POST['submit'])){
                //passing input from html input into models per say
                $email = $_POST['email'];
                $auth = $_POST['auth'];
                $confirm = $_POST['confirm'];

                if($email == "" || $auth = "" || $confirm = "")
                {
                    $error = "Please fill the form!";
                }

                //compare password
                if($auth != $confirm)
                {
                    $error = "Passwords don't match!";
                }
                else if($auth == $confirm)
                    {
                        //check for username/email duplicity
                        $dupEmail = "SELECT * FROM appuser WHERE email='$email'";
                        $dupResult = $connect->query($dupEmail);
                        $dupArray = $dupResult->fetch(PDO::FETCH_ASSOC);

                        if($dupArray == null)
                        {
                            $_email = test_input($email);
                            $_auth = test_input($auth);
                            $_hash = password_hash($_auth, PASSWORD_BCRYPT);

                            //Insert into database. Sort of like _db.Add() && _db.SaveChanges() in ASP.NET
                            $sql = "INSERT INTO appuser(username, email, password) VALUES ('$_email', '$_email', '$_hash')";

                            if($connect->query($sql))
                            {
                                $success = "Sign up successful!";
                            }
                            else
                            {
                                $error = "Error! Try again!";
                            }
                        }
                        else
                        {
                            $error = "Error! E-mail already in use!";
                        }// duplicity check end
                    }
            }//submit procedure end
            $connect = null;
        }//try end
        catch(PDOException $e)
        {
            echo $e -> getMessage();
        }
    }// server request end

?>
<?php
    require("validate.html");
    require_once "validate.php";
    $forename = $surname = $username = $password = $age =$email = "";
    if(isset($_POST['forename'])){
        $forename = fix_string($_POST['forename']);
    }
    if(isset($_POST['surname'])){
        $surname = fix_string($_POST['surname']);
    }
    if(isset($_POST['username'])){
        $username = fix_string($_POST['username']);
    }
    if(isset($_POST['password'])){
        $password = fix_string($_POST['password']);
    }
    if(isset($_POST['age'])){
        $age = fix_string($_POST['age']);
    }
    if(isset($_POST['email'])){
        $email = fix_string($_POST['email']);
    }
    $fail = validateForename($forename);
    $fail .= validateSurname($surname);
    $fail .= validateUsername($username);
    $fail .= validatePassword($password);
    $fail .= validateAge($age);
    $fail .= validateEmail($email);
    // echo "<pre>";
    echo "<!DOCTYPE html>\n
            <html>
                <head>
                    <title>Form</title>";
    if($fail == ""){
        echo "</head>
                <body>Successfully validated: $forename, $surname, $username, $password, $age, $email.
                </body>
            </html>";
        exit;
    }else{
        echo "
                </head>
                    <body>
                    <pre> Error message:\n $fail
                    </pre>
                    </body>
            </html>";
    }
?>
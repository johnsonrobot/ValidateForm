<?php
function validateForename($field){
    return $field == "" ? "No Forename was entered.\n" : "";
}
function validateSurname($field){
    return $field == "" ? "No Surname was entered.\n" : "";
}
function validateUsername($field){
    if($field == ""){
        return "No Username was entered.\n";
    }else if(strlen($field) < 5){
        return "Please input Username at least 5 characters.\n";
    }else if(preg_match("/[^a-zA-Z0-9]/",$field)){
        return "Only numbers and alphabet allowed in Usernames.\n ";
    }else{
        return "";
    }
}
function validatePassword($field){
    if($field == ""){
        return "No Password was entered.\n";
    }else if(strlen($field) < 6){
        return "Please input Password at least 6 characters.\n";
    }else if(!preg_match("/[a-z]/",$field) || !preg_match("/[A-Z]/",$field) || !preg_match("/[0-9]/",$field)){
        return "Passwords require uppercase, lowercase letter and numbers. \n ";
    }else{
        return "";
    }
}
function validateAge($field){
    if($field == ""){
        return "No Age was entered.\n";
    }else if($field < 130 && $field > 0){
        return "Please input correct age.\n";
    }else{
        return "";
    }
}
function validateEmail($field){
    if($field == ""){
        return "No Email was entered.\n";
    }else if(!((strpos($field,".") > 0) && 
                (strpos($field,"@") > 0)) ||
                 @preg_match("/[^a-zA-Z0-9._-@]/",$field)){
        return "Please input correct email format.\n";
    }else{
        return "";
    }
}
function fix_string($string){
    // $string = stripslashes($string);
    // return htmlentities($string);
    return $string;
}
?>
function validateForename(field){
    return field == "" ? "No Forename was entered.\n" : ""
}
function validateSurname(field){
    return field == "" ? "No Surname was entered.\n" : ""
}
function validateUsername(field){
    if(field == ""){
        return "No Username was entered.\n"
    }else if(field.length < 5){
        return "Please input Username at least 5 characters.\n"
    }else if(/[^a-zA-Z0-9]/.test(field)){
        return "Only numbers and alphabet allowed in Usernames.\n "
    }else{
        return ""
    }
}
function validatePassword(field){
    if(field == ""){
        return "No Password was entered.\n"
    }else if(field.length < 6){
        return "Please input Password at least 6 characters.\n"
    }else if(!/[a-z]/.test(field) || !/[A-Z]/.test(field) || !/[0-9]/.test(field)){
        return "Passwords require uppercase, lowercase letter and numbers. \n "
    }else{
        return ""
    }
}
function validateAge(field){
    if(field == "" || isNaN(field)){
        return "No Age was entered.\n"
    }else if(field < 130 && isNaN(field)){
        return "Please input correct age.\n"
    }else{
        return ""
    }
}
function validateEmail(field){
    if(field == ""){
        return "No Email was entered.\n"
    }else if(!((field.indexOf(".") > 0) && 
                (field.indexOf("@") > 0)) ||
                 /[^a-a-zA-Z0-9._-@]/.test(field)){
        return "Please input correct email format.\n"
    }else{
        return ""
    }
}
function validate(form){
    fail = validateForename(form.forename.value)
    fail += validateSurname(form.surname.value)
    fail += validateUsername(form.username.value)
    fail += validatePassword(form.password.value)
    fail += validateAge(form.age.value)
    fail += validateEmail(form.email.value)
    if(fail == "") 
        return true
    else {
        alert(fail)
        return false    
    }
}
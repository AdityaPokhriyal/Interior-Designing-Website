function my_Validate(){
    var name = document.forms["register_form"]["username"].value;
    var pass=document.forms["register_form"]["password"].value;
    var cpass=document.forms["register_form"]["cpassword"].value;
    var bool = check_password(pass,cpass)&&check_name(name);
    if(bool){
        return bool;
    }
    else{
        return alert('Password does not match!');
    }
}

function check_name(name){
    if(name){
        return true;
    }
    else{
        return false;
    }
}

function check_password(pass,cpass)
{
    if(pass == cpass)
        return true;
    else
        return false;
}

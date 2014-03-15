/*Validation for member login page*/
function validate(f)
{
    /*condition for email*/
    mail=f.usr_email.value;
    a=mail.indexOf('@',0);
    b=mail.indexOf('.',0);
    if(f.usr_email.value=="" || a==-1 || b==-1 || (b-a)<2)
    {
        f.usr_email.value="";
        alert("Invalid email address");
        return false;
    }
    if(f.usr_pass.value=="" || f.usr_pass.value<6)// condition for password
    {
        f.usr_pass.value=="";
        alert("Password length should be at least 6 characters");
        return false;
    }

    var status=<?php echo $status;?>;
    if(status==1)
        {

        }
    return true;
}



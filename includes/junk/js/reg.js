/*function for agreement check*/
function agreement()
{
    if(document.reg_frm.agree.checked)
    {
        document.reg_frm.btn.disabled=false;
    }
    else
    {
        document.reg_frm.btn.disabled=true;
    }
}
/*function for validation*/
function validate(f)
{
    if(f.usr_fname.value=="" || f.usr_fname.value<6)//condition for first name
    {
        f.usr_fname.value=="";
        alert("Invalid name");
        return false;
    }

    if(f.usr_lname.value=="")//condition for last name
    {
        alert("Insert last name");
        return false;
    }
    
    /*Condition for email address */
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

    if(f.c_pass.value!=f.usr_pass.value)// condition for confirm password
    {
        f.c_pass.value=="";
        alert("Password and confirm password dont match");
        return false;
    }

    if(f.usr_add.value=="")// condition for address
    {
        alert("Please enter address");
        return false;
    }

    if(f.usr_city.value=="")// condition for city
    {
        alert("Please enter City");
        return false;
    }

    if(isNaN(f.usr_contact.value)==true || f.usr_contact.value=="")// condition for contact
    {
        f.usr_contact.value="";
        alert("Invalid contact number");
        return false;
    }
    
    return true;
}



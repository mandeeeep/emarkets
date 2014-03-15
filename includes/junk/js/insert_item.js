/*Inserted item validation*/
function validate(f)
{
    if(f.itm_name.value=="")// condition for title of the item
    {
        alert("Name cant be emtpy");
        return false;
    }

    if(isNaN(f.itm_time.value)==true || f.itm_time.value=="")//condition for time period
    {
        f.itm_time.value=="";
        alert("Invlid time period");
        return false;
    }

    if(f.itm_price.value=="" || isNaN(f.itm_price.value)==true)//condition for price
    {
        f.itm_price.value="";
        alert("Invalid price");
        return false;
    }

    if(!f.itm_condn[0].checked && !f.itm_condn[1].checked)// condition for condition state
    {
        alert("Please choose condition");
        return false;
    }

    if(!f.itm_nego[0].checked && !f.itm_nego[1].checked)// condition for negotiation
    {
        alert("Please choose negotiable or not");
        return false;
    }

    if(f.itm_mprice.value=="" || isNaN(f.itm_mprice.value)==true)//condition for market price
    {
        f.itm_mprice.value="";
        alert("Invalid market price");
        return false;
    }

    if(f.itm_model.value=="")// condition for model
    {
        alert("Model cant be emtpy");
        return false;
    }

    if(f.itm_contact.value=="" || isNaN(f.itm_contact.value)==true)//condition for contact
    {
        f.itm_contact.value="";
        alert("Invalid price");
        return false;
    }

    if(!f.itm_wrnty[0].checked && !f.itm_wrnty[1].checked && !f.itm_wrnty[2].checked)// condition for warranty
    {
        alert("Please choose warranty type");
        return false;
    }
    
    return true;
}


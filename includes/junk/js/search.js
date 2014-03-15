/*Validation for search items*/
function validate(f)
{
    if(f.srch_name.value=="")// condition for title of the search item
    {
        alert("Search item cant be emtpy");
        return false;
    }

    if(f.srch_brand.selectedIndex==0)// condition will brand
    {
        f.srch_brand.selectedIndex=0;
        alert("Please choose a brand");
        return false;
    }

    if(f.srch_price_min.value=="" || isNaN(f.srch_price_min.value)==true)//condition for minimum price
    {
        f.srch_price_min.value="";
        alert("Invalid minimum price");
        return false;
    }

    if(f.srch_price_max.value=="" || isNaN(f.srch_price_max.value)==true)//condition for  maximum price
    {
        f.srch_price_max.value="";
        alert("Invalid maximum price");
        return false;
    }

    if(!f.srch_condn[0].checked && !f.srch_condn[1].checked)// condition for condition state
    {
        alert("Please choose condition");
        return false;
    }

    if(!f.srch_nego[0].checked && !f.srch_nego[1].checked)// condition for negotiation    {
        alert("Please choose condition");
        return false;
    }
    return true;
}


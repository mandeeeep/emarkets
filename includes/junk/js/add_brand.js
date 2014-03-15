function validate(f)
{
    if(f.brand.value=="")
    {
        alert("Insert Brand name");
        return false;
    }
    return true;        
}
function agreement()
{
    if(document.add_brand.agree.checked==true)
    {
        document.add_brand.submit_btn.disabled=false;
    }else
    {
        document.add_brand.submit_btn.disabled=true;
    }
}



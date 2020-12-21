function getElement(id){

    return document.getElementById(id);
}

function validate(){
    refresh()
    var hasError= false;
    var e_uniname = getElement("uniname");
    var e_since = getElement("since");
    var e_location = getElement("location");
    var err_uniname = getElement("err_uniname");
    var err_since = getElement("err_since");
    var err_location = getElement("err_location");
    
    if(e_uniname.value == ""){
        hasError= true;
        err_uniname.innerHTML = "* please provide a name";
        e_uniname.style.border="1px solid red";
    }
    if(e_since.value == ""){
        hasError= true;
        err_since.innerHTML = "* please provide a since";
        e_since.style.border="1px solid red";
    }
    if(e_location.value == ""){
        hasError= true;
        err_location.innerHTML = "* please provide a location";
        e_location.style.border="1px solid red";
    }
   
    return !hasError;
}
function refresh(){
    var e_uniname = getElement("uniname");
    var e_since = getElement("since");
    var e_location = getElement("location");

    var erruni=getElement("err_uniname");
    var err_since= getElement("err_since");
    var err_location= getElement("err_location");
    erruni.innerHTML="";
    err_since.innerHTML="";
    err_location.innerHTML="";
    var e_location = getElement("location");

    e_uniname.style.border="1px solid green";
    e_since.style.border="1px solid green";
    e_location.style.border="1px solid green";
}

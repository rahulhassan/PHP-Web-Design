function getElement(id){

    return document.getElementById(id);
}

function validate(){
    refresh();
    var hasError = false;
    var e_sname = getElement("sname");
    var e_section = getElement("section");
    var e_day = getElement("day");
    var e_time = getElement("time");
   
    var err_sname = getElement("err_sname");
    var err_section = getElement("err_section");
    var err_day = getElement("err_day");
    var err_time = getElement("err_time");
    
    if(e_sname.value == ""){
        hasError = true;
        err_sname.innerHTML = "* name required";
        e_sname.style.border="1px solid red";
    }
    if(e_section.value == ""){
        hasError= true;
        err_section.innerHTML = "* section required";
        e_section.style.border="1px solid red";
    }
    if(e_day.value == ""){
        hasError= true;
        err_day.innerHTML = "* day required";
        e_day.style.border="1px solid red";
    }
    if(e_time.value == ""){
        hasError= true;
        err_time.innerHTML = "* time required";
        e_time.style.border="1px solid red";
    }
   
    return !hasError;
}
function refresh(){
    var e_sname = getElement("sname");
    var e_section = getElement("section");
    var e_day = getElement("day");
    var e_time = getElement("time");
  
  
    var err_sname = getElement("err_sname");
    var err_section = getElement("err_section");
    var err_day = getElement("err_day");
    var err_time = getElement("err_time");
   
   err_sname.innerHTML="";
   err_section.innerHTML="";
   err_day.innerHTML="";
   err_time.innerHTML="";

   
    e_sname.style.border="2px solid green";
    e_section.style.border="2px solid green";
    e_day.style.border="2px solid green";
    e_time.style.border="2px solid green";
}

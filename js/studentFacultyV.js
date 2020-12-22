function getElement(id){

    return document.getElementById(id);
}

function validate(){
    refresh();
    var hasError = false;
    var e_fname = getElement("fname");
    var e_id = getElement("id");
    var e_dob = getElement("dob");
    var e_phone = getElement("phone");
    var e_pass= getElement("pass");
    var err_fname = getElement("err_fname");
    var err_id = getElement("err_id");
    var err_dob = getElement("err_dob");
    var err_phone = getElement("err_phone");
    var err_pass = getElement("err_pass");

    if(e_fname.value == ""){
        hasError = true;
        err_fname.innerHTML = "* first name required";
        e_fname.style.border="1px solid red";
    }
    if(e_id.value == ""){
        hasError= true;
        err_id.innerHTML = "* id required";
        e_id.style.border="1px solid red";
    }
    if(e_dob.value == ""){
        hasError= true;
        err_dob.innerHTML = "* date of birth required";
        e_dob.style.border="1px solid red";
    }
   
    if(e_phone.value == ""){
        hasError= true;
        err_phone.innerHTML = "* phone required";
        e_phone.style.border="1px solid red";
    }
    if(e_pass.value == ""){
        hasError= true;
        err_pass.innerHTML = "* password required";
        e_pass.style.border="1px solid red";
    }
   
    return !hasError;
}
function refresh(){
    var e_fname = getElement("fname");
    var e_id = getElement("id");
    var e_dob = getElement("dob");
    var e_phone = getElement("phone");
    var e_pass= getElement("pass");

    var err_fname= getElement("err_fname");
    var err_id= getElement("err_id");
    var err_dob= getElement("err_dob");
    var err_phone= getElement("err_phone");
    var err_pass = getElement("err_pass");
    err_fname.innerHTML="";
    err_id.innerHTML="";
    err_dob.innerHTML="";
    err_phone.innerHTML="";
    err_pass.innerHTML="";

    e_fname.style.border="2px solid green";
    e_id.style.border="2px solid green";
    e_dob.style.border="2px solid green";
    e_phone.style.border="2px solid green";
    e_pass.style.border="2px solid green";
}
function checkStudent(id){
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange=function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("err_id").innerHTML =this.responseText;
        }
    };
    xhr.open("GET","checkStudentId.php?u="+id.value, true);
    xhr.send();
}
function checkFaculty(id){
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange=function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("err_id").innerHTML =this.responseText;
        }
    };
    xhr.open("GET","checkFacultyId.php?u="+id.value, true);
    xhr.send();
}
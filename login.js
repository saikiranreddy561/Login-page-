function validate(){
    var name=document.getElementById("name").value;
    var email=document.getElementById("email").value;
    var pass=document.getElementById("password").value;

    if(name==="" || email==="" || pass===""){
        alert("Enter Details Properly");
    }
    else{
        alert("Registered Successfully");
    }
}
function show(){
    var s=document.getElementById("password");
    if(s.Type==="password"){
        s.Type="text";
    }
    else{
        s.Type="password";
    }
}
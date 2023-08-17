function validateform(){
    var regno=document.getElementById("regno").value;
    var pass=document.getElementById("pass").value;
    var rr=/^[0-9]{9}$/;
    var rp=/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,}$/
    if(!rr.test(regno)){
        event.preventDefault();
        alert("Registration no should not be blank and should conatin only digits");
    }
    else if(!rp.test(pass)){
        event.preventDefault();
        alert("Password should not be blank and should contain atleast 1 uppercase,1 lowercase,1 number,1 special character");
    }
}
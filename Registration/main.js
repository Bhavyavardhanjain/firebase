function validateform(){
    var name=document.getElementById("name").value;
    var regno=document.getElementById("regno").value;
    var course=document.getElementById("course").value;
    var branch=document.getElementById("branch").value;
    var email=document.getElementById("email").value;
    var phoneno=document.getElementById("phoneno").value;
    var password=document.getElementById("password").value;
    var rncb=/^[a-zA-Z\s]+$/;
    var rr=/^[0-9]{9}$/;
    var re=/^[a-zA-Z0-9.]+@[a-zA-Z.]{15,}$/;
    var rph=/^[0-9]{10}$/;
    var rpa=/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,}$/;
    if(!rncb.test(name)){
        alert("Name should not be blank and should contain only letters");
        event.preventDefault();
        return false;
    }
    else if(!rr.test(regno)){
        alert("Registration No should not be blank and should be of 9 digits");
        event.preventDefault();
        return false;
    }
    else if(!rncb.test(course)){
        alert("Course should not be blank and should contain only letters");
        event.preventDefault();
        return false;
    }
    else if(!rncb.test(branch)){
        alert("Branch should not be blank and should contain only letters");
        event.preventDefault();
        return false;
    }
    else if(!re.test(email)){
        alert("Email should not be blank and should be of correct format");
        event.preventDefault();
        return false;
    }
    else if(!rph.test(phoneno)){
        alert("Phone No shhould not be blank and should contain only 10 digits");
        event.preventDefault();
        return false;
    }
    else if(!rpa.test(password)){
        alert("Password should contain at least 1 lowercase,1 uppercase,1 number and 1 special character and should be of more than 8 digits");
        event.preventDefault();
        return false;
    }
    else{
        return true;
    }
}
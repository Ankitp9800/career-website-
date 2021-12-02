function validate(){
    var name=document.stud_form.name;
    var email=document.stud_form.email;
    if(email.value.length<=0){
        alert("name is required");
        email.focus()
        return false;
    }
    return false;

}
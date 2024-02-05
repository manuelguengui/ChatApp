const pswrdField = document.querySelector('.form .field input[type="password"]'),
taggleBtn = document.querySelector('.form .field i')

taggleBtn.onclick = () => {
    if(pswrdField.type == "password"){
        pswrdField.type = "text";
        taggleBtn.classList.add("showpw");
    }else {
        pswrdField.type = "password";
        taggleBtn.classList.add("active");
        taggleBtn.classList.remove("showpw");

    }
}
/* By: Manuel Francisco Chimdemba Guengui copywrite Coding Napel*/
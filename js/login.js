const form = document.querySelector(".login form"),
continueBtn = form.querySelector(".button input"),
textError = form.querySelector(".error-text");

form.onsubmit = (e) =>{
  e.preventDefault();
}
continueBtn.onclick = () => {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "php/login.php", true);

  xhr.onload = () => {
    if(xhr.readyState === XMLHttpRequest.DONE){
      if(xhr.status === 200){
        
        let data = xhr.response;
        if(data === "Sucess"){
          location.href = "users.php";
        }else {
          textError.textContent = data;
          textError.style.display = "block";
          
        }
      }
    }
  }
  let formData = new FormData(form);
  xhr.send(formData);
}
/* By: Manuel Francisco Chimdemba Guengui copywrite Coding Napel*/
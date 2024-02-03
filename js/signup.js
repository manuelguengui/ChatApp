const form = document.querySelector('.signup form'),
	continueBtn = form.querySelector('.button input'),
	textError = form.querySelector('.error-text');

form.onsubmit = (e) => {
	e.preventDefault();
}
continueBtn.onclick = () => {
	// let's start AJAX

	let xhr = new XMLHttpRequest();
	xhr.open("POST", "php/signup.php", true);

	xhr.onload = () => {
		if (xhr.readyState === XMLHttpRequest.DONE) {
			if (xhr.status === 200) {
				let data = xhr.response;

				if (data === "Sucess") {
					location.href = "users.php";
				} else {
					textError.textContent = data;
					textError.style.display = "block";
					
				}

			}
		}
	}
	// We have to send the form data through ajax to php.
	let formData = new FormData(form); // Create new Formdata Object
	xhr.send(formData); //Sending the form data to php
}

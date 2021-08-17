"use strict";

document.addEventListener("DOMContentLoaded", function () {
	const form = document.querySelector('#form');
	form.addEventListener('submit', formSend);

	async function formSend(e) {
		e.preventDefault();
		let error = formValidate(form);
		let formData = new FormData(form);
		if(error === 0) {
			form.classList.add('_sending');
			let response = await fetch('../vendor/signup.php', {
				method: 'POST',
				body: formData,
				});
			if(response.ok) {
				let result = await response.json();
				messageAlert(result.message);
				form.reset();
				form.classList.remove('_sending');
				if("location" in result)
				document.location = result.location;
				else console.log(result.message);
			}
			else {
				messageAlert("Ошибка отправки.");
				form.classList.remove('_sending');
			}
		} else {
			messageAlert("Заполните обязательные поля");
		}
	}	

	function messageAlert(message){
		let messageEl = document.querySelector('.message__row');
		messageEl.innerHTML = '';
		messageEl.insertAdjacentHTML('afterbegin', `<div class="message__item"><p>${message}</p></div>`); 
	}

	function formValidate(form) {
		let error = 0;
		let formReq = document.querySelectorAll('._req');

		for (let i = 0; i < formReq.length; i++) {
			const element = formReq[i];
			formRemoveError(element);
			if (element.value === '') {
				formAddError(element);
				error++;
			}

		}
		return error;
	}

	function formAddError(input) {
		input.parentElement.classList.add('_error');
		input.classList.add('_error');
	}

	function formRemoveError(input) {
		input.parentElement.classList.remove('_error');
		input.classList.remove('_error');
	}
});
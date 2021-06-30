"use strict";

function checked(){
	if(!this.previousElementSibling.hasAttribute('checked'))
		this.previousElementSibling.setAttribute('checked', "");
	else this.previousElementSibling.removeAttribute('checked', "");

}

let optionsInput = document.querySelectorAll('.options__label');

if (optionsInput.length > 0) {
	optionsInput.forEach(item => {
		item.addEventListener('click', checked);
	});
}

//----------------------------------------------------------------------

document.addEventListener("DOMContentLoaded", function () {
	const form = document.querySelector('#form');
	form.addEventListener('submit', formSend);

	async function formSend(e) {
		e.preventDefault();
		let error = formValidate(form);

		let formData = new FormData(form);
		formData.append('image', formImage.files[0]);
		//formData = Object.fromEntries(formData.entries()); 
		//console.log(formData['image']);
		if(error === 0) {
			form.classList.add('_sending');
			let response = await fetch('sendmail.php', {
				method: 'POST',
				body: formData
				});

			if(response.ok) {

				let result = await response.json();
				alert(result.message);
				formPreview.innerHTML = '';
				form.reset();
				form.classList.remove('_sending');
				
			}
			else {
				alert("Ошибка");
				form.classList.remove('_sending');
			}
		} else {
			alert("Заполните обязательные поля");
		}
	}	

	function formValidate(form) {
		let error = 0;
		let formReq = document.querySelectorAll('._req');

		for (let i = 0; i < formReq.length; i++) {
			const element = formReq[i];
			formRemoveError(element);

			if(element.classList.contains('_pass')){
				if(!passwordTest(element, formReq[i+1])){
					formAddError(element);
					error++;
				}
			}
			else if(element.classList.contains('_repass')){
				  if(element.value === ""){
						formAddError(element);
						console.log("Поле пустое");
						error++;
						element.nextElementSibling.insertAdjacentHTML('afterbegin', '<p>Поле пустое*</p>');
					}
					else if (element.value !== document.querySelector('._pass').value) {
						formAddError(element);
						console.log("Пароли не совпадают");
						error++;
						element.nextElementSibling.insertAdjacentHTML('afterbegin', '<p>Пароли не совпадают*</p>');
					}
			}

			else if(element.classList.contains('_email')){
				if (!emailTest(element)){
					formAddError(element);
					error++;
				}
			}
			else if (element.getAttribute("type") === "checkbox" && element.checked === false) {
				formAddError(element);
				error++;
			}
			else{
				if (element.value === '') {
					formAddError(element);
					error++;
				}
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

		function emailTest(element) {
			return /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/.test(element.value);
		}

		function passwordTest(pass, repass) {
			return pass.value === repass.value;
		}

		// Получаем инпут file в переменную
		const formImage = document.querySelector('#formImage');
		// Получаем div для превью в переменную
		const formPreview = document.querySelector('#formPreview');


		// Слушаем изменения в input file
		formImage.addEventListener('change', () => {
			uploadFile(formImage.files[0]);
		});

		function uploadFile(file) {
			// проверяем тип файла
			if (!['image/jpeg', 'image/png', 'image/gif'].includes(file.type)){
				alert('Разрешены только изображения.');
				formImage.value = '';
				return;
			}
			// проверяем размер файлф (< 2 МБ)
			if (file.size > 2 * 1024 * 1024) {
				alert ('Файл должен быть менее 2 МБ.');
				return;
			}
			let reader = new FileReader();
			reader.onload = function (e) {
				formPreview.innerHTML = `<img src="${e.target.result}" alt="Фото">`;
			};
			reader.onerror = function (e) {
				alert('Ошибка');
			}
			reader.readAsDataURL(file);
		}
});
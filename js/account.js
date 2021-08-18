 "use strict";

const isMobile = {
	Android: function () { 
		return navigator.userAgent.match(/Android/i); 
	},
	BlackBerry: function () { 
		return navigator.userAgent.match(/BlackBerry/i); 
	},
	iOS: function () { 
		return navigator.userAgent.match(/iPhone|iPad|iPod/i); 
	},
	Opera: function () { 
		return navigator.userAgent.match(/Opera Mini/i); 
	},
	Windows: function () { 
		return navigator.userAgent.match(/IEMobile/i); 
	},
	any: function () {
		return (
			isMobile.Android() ||
			isMobile.BlackBerry() ||
			isMobile.iOS() ||
			isMobile.Opera() ||
			isMobile.Windows());
	}
};

if(isMobile.any()) {
	document.body.classList.add('_touch');

	let menuArrows = document.querySelectorAll('.menu__arrow');
	if(menuArrows.length > 0){
		for(let index = 0; index < menuArrows.length; index++) {
			const menuArrow = menuArrows[index];
			menuArrow.addEventListener("click", function(e) {
				menuArrow.parentElement.classList.toggle('_active');
			});
		}
	}
}

else {
	document.body.classList.add('_pc');
}

const iconMenu = document.querySelector('.menu__icon');
const iconBody = document.querySelector('.menu__body');
if(iconMenu) {
	iconMenu.addEventListener("click", function(e){
		document.body.classList.toggle('_lock');
		iconMenu.classList.toggle('_active');
		iconBody.classList.toggle('_active');
	});
}

const menuLinks = document.querySelectorAll('.menu__link[data-goto]');
if (menuLinks.length > 0){
	menuLinks.forEach(menuLink => {
		menuLink.addEventListener("click", onMenuLinkClick);
	});

	function onMenuLinkClick(e) {
		const menuLink = e.target;
		if (menuLink.dataset.goto && document.querySelector(menuLink.dataset.goto)){
			const gotoBlock = document.querySelector(menuLink.dataset.goto);
			const gotoBlockValue = gotoBlock.getBoundingClientRect().top + pageYOffset - document.querySelector('header').offsetHeight;
			
			if(iconMenu.classList.contains('_active')){
				document.body.classList.remove('_lock');
				iconMenu.classList.remove('_active');
				iconBody.classList.remove('_active');
			}

			window.scrollTo({
				top: gotoBlockValue,
				behavior: "smooth",
			});
			e.preventDefault();
		}
	}
}

async function exitOnAccount(e){
	var data = {exit: 1};
	var formData = new FormData();
	for(var i in data)
	   formData.append(i,data[i]);
	
	let response = await fetch('../vendor/signup.php', {
		method: 'post',
		body: formData
	});

	if (response.ok){
		let result = await response.json();
		result.message;
	}
	else {
		alert('Не вышло');
	}
	location.reload();
}

const exit = document.querySelector('.exit');
if(exit){
	exit.addEventListener("click", exitOnAccount);
}
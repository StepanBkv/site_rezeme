"use strict"
// Код с Владосом, поднятие вверх хэдера вверх, при скроле вниз.
// let prevScrollpos = window.pageYOffset;
// window.onscroll = function() {
// 	let headerNavBar = document.querySelector('.header')
// 	let currentScrollPos = window.pageYOffset;
// 	if (prevScrollpos > currentScrollPos) {
// 		headerNavBar.style.top = "0";
// 	}
// 	else {
// 		headerNavBar.style.top = "-70px";
// 	}
// 	prevScrollpos = currentScrollPos;
// } 

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

// if(isMobile.any()) {
// 	document.body.classList.add('_touch');

// 	let menuArrows = document.querySelectorAll('.menu__arrow');
// 	if(menuArrows.length > 0){
// 		for(let index = 0; index < menuArrows.length; index++) {
// 			const menuArrow = menuArrows[index];
// 			menuArrow.addEventListener("click", function(e) {
// 				menuArrow.parentElement.classList.toggle('_active');
// 			});
// 		}
// 	}
// }

// else {
// 	document.body.classList.add('_pc');
// }

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
			const gotoBlockValue = gotoBlock.getBoundingClientRect().top + pageYOffset;
			
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
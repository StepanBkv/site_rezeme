 "use strict";

let prevScrollpos = window.pageYOffset;
window.onscroll = function() {
	let headerNavBar = document.querySelector('.header')
	let currentScrollPos = window.pageYOffset;
	if (prevScrollpos > currentScrollPos) {
		headerNavBar.style.top = "0";
	}
	else {
		headerNavBar.style.top = "-70px";
	}
	prevScrollpos = currentScrollPos;
} 

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

// const random = (min, max) => {
//   return Math.floor(Math.random() * (max - min + 1)) + min;
// }

// const childBlock = document.querySelector('.block__row');
// let colorArr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'a', 'b', 'c', 'd', 'e', 'f'];
// let changeColor = setInterval(() => {
// 	let i = random(0, 4);
// 	let color = '#';
// 	for( let k = 0; k < 6; k++){
// 		 color += String(colorArr[random(0, 15)]); 
// 	}
// 	childBlock.children[i].style.backgroundColor = color;

// },150);
// -------------------------------------------------------
 const allLang = ['en','ru'];
 const select  = document.querySelector('.change__lang');
 select.addEventListener('change', changeLang);

 // function changeURLLang() {
 // 		let lang = select.value;
 // 		location.reload();
 // }

function switchLang(){
		let options = select.querySelectorAll('option');
		options.forEach((item) => {
 			if (item.hasAttribute('selected')) item.removeAttribute('selected');
 		});
 		let lang = select.value;
 		options.forEach((item) => {
 			if (lang == item.value) item.setAttribute('selected', "");
 		});
}

function changeLang() {
	//let hash = location.hash.substr(1);
	// if(!allLang.includes(hash)) {
	// 	location.href = location.pathname + "#ru";
	// 	location.reload();
	// }
	for (let item in langArr) {
		let itemElementLeng = document.querySelector("."+item);
		if(itemElementLeng)
			document.querySelector("."+item).innerHTML = langArr[item][select.value];
		else console.log(item);
	}
	switchLang()
	// location.reload();

// 	Object.keys(langArr).forEach((item) => {}
}

async function exitOnAccount(e){
	var data = {exit: 1, ajax: 1};
	var formData = new FormData();
	for(var i in data)
	   formData.append(i,data[i]);
	
	let response = await fetch('../application/models/login.php', {
		method: 'post',
		body: formData
	});

	if (response.ok){
		let result = await response.json();
		result.message;
	}
	else {
		alert('???? ??????????');
	}
	location.reload();
}


//document.addEventListener("DOMContentLoaded",changeLang);
const exit = document.querySelector('.exit');
if(exit){
	exit.addEventListener("click", exitOnAccount);
}
// -------------------------------------------------------



/* 
?????????????????? ?????????? ??????????????...

...?????????? ????????????????
textElement.before(newElement);
...?????????? ??????????????
textElement.after(newElement);
...???????????? ?? ?? ???????????? ??????????????
textElement.prepend(newElement);
...???????????? ?? ?? ?????????? ??????????????
textElement.append(newElement);

--before--
<div class="added__text">
--prepend--
	<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi, earum!</p>
	<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi, earum!</p>
--append--
</div>
--after--
____________________________________________________________________________
textElement.insertAdjesentHTML(`???????? ???? ?????????????? ????????????????`, `?????????? HTML, 
?????????????? ?????????????????? ?? ?????????? ??????????????????, ???????????????? ?????????????????????? ?????????????? ??????????????????`)

...?????????? ????????????????
beforebegin 
...???????????? ?? ?? ???????????? ??????????????
afterbegin
...???????????? ?? ?? ?????????? ??????????????
beforeend
...?????????? ??????????????
afterend

--beforebegin--
<div class="added__text">
--afterbegin--
	<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi, earum!</p>
	<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi, earum!</p>
--beforeend--
</div>
--afterend--

textElement.insertAdjesentElement(`???????? ???? ?????????????? ????????????????`, `?????????????? HTML`)
*/

// function appendText() {
// 	const inputItem = this.previousElementSibling;
// 	if(inputItem.value != ""){
// 		const newElement = document.createElement('p');
// 		newElement.textContent = inputItem.value;
// 		this.closest('.append__item').after(newElement);
// 	}
// }

// const appendItem = document.querySelector('.append__item');
// const buttonAppend = appendItem.lastElementChild;
// buttonAppend.addEventListener('click', appendText);


// const moveImgDiv = document.querySelector('.move__img__div .cards__row');
// const removeImgDiv = document.querySelector('.cards .cards__row');
// const cardsColomnCollection = document.querySelectorAll('.cards__colomn');

// function moveImgtoDiv() { 
// 	if(!moveImgDiv.parentElement.classList.contains('_active'))
// 		moveImgDiv.parentElement.classList.add('_active');
// 	moveImgDiv.append(this);
// 	this.removeEventListener('click', moveImgtoDiv);
// 	if (document.querySelectorAll('.move__img__div .cards__row .cards__colomn').length == 3) {
// 		const newArrImg = document.querySelectorAll('.move__img__div .cards__row .cards__colomn');
// 		setTimeout(() => {
// 			newArrImg.forEach(item => removeImgDiv.append(item));
// 			moveImgDiv.parentElement.classList.remove('_active');
// 			newArrImg.forEach(item => item.addEventListener('click', moveImgtoDiv));
// 		}, 2000);
// 	}
// }

// if (cardsColomnCollection.length > 0) {
// 	cardsColomnCollection.forEach( item => {
// 		item.addEventListener('click', moveImgtoDiv);
// 	});
// }

// async function awaitRemove(){
// 	let timer = setInterval(() => {
// 	if (document.querySelectorAll('.move__img__div .cards__row .cards__colomn').length == 3) return true;
// 	}, 1000);
// 	timer;
// }

// async function moveImg() {

	// let result = setTimeout( () => cardsColomnCollection.forEach(item => removeImgDiv.append(item)), 5000);

	// console.log(result);
// }

//const cardsColomnCollection = document.querySelectorAll('.cards__colomn');


// if (cardsColomnCollection.length > 0) {
	// const imgArray = Array.from(imgCollection).map(item =>{
	// 	return item.children[0];
	// });
	// 
	// 
	// cardsColomnCollection.forEach( item => {
	// 	item.addEventListener('click', moveImgtoDiv);
	// });

	// cardsColomnCollection[0].addEventListener('click', moveImgtoDiv);
	// cardsColomnCollection[1].addEventListener('click', moveImgtoDiv);
	// cardsColomnCollection[2].addEventListener('click', moveImgtoDiv);
	
	// while(document.querySelectorAll('.move__img__div .cards__row .cards__colomn') != 3){
	// let arrNewImg = document.querySelectorAll('.move__img__div .cards__row .cards__colomn');
	// console.log(arrNewImg);

	// if(arrNewImg.childElementCount == 3){
	// 		arrNewImg.forEach((item) => {
	// 			item.onclick = null;
	// });
	//}	
	// cardsColomnCollection.forEach( item => {
	// 	item.addEventListener('click', moveImgtoDiv(item));
	// });
//  }
// }
// cardsImage.children[0].onclick = () =>{
// 	cardsImage.children[0].style.cssText +=
// 	`top: 50px;`
// }

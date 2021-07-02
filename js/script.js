 "use strict";

let time = setInterval(() => {
	const date = new Date();
	let list = [date.getHours(), date.getMinutes(), date.getSeconds()]
	let	str = ""
	for (let i = 0; i < list.length; i++){
		if(list[i] < 10) str += "0" + list[i] 
		else str += list[i]
		if (i < list.length - 1) str += ":"
	}

document.querySelector(".time__write").innerHTML = str ;
}, 1000);


let date = setInterval(() => {
	const now = new Date()
	let	list = [now.getDate(), now.getMonth(), now.getFullYear(), now.getDay()]
	let	month = ["январь", "февраль", "март", "апрель", "май", "июнь", "июль", "август", "сентябрь", "октябрь", "ноябрь", "декабрь"]
	let	week = ["понедельник", "вторник", "среда", "четверг", "пятница", "суббота", "воскресенье"]
	let	week_short = ["пн", "вт", "ср", "чт", "пт", "сб", "вс"]
	let	str = ""
	for(let i = 0; i < list.length; i++){
		if(i == 1){
			for(let j = 0; j < month.length; j++) {
				if (j == list[i]) str += month[j] + " "
			}
		}

		else if(i == 3){
			for(let j = 0; j < week.length; j++) {
				if (j == list[i] - 1) str += week[j] + " "
			}
		}

		else str += list[i] + " "
	}
document.querySelector(".date__write").innerHTML = str;

}, 1000);

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

const random = (min, max) => {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

const childBlock = document.querySelector('.block__row');
let colorArr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'a', 'b', 'c', 'd', 'e', 'f'];
let changeColor = setInterval(() => {
	let i = random(0, 4);
	let color = '#';
	for( let k = 0; k < 6; k++){
		 color += String(colorArr[random(0, 15)]); 
	}
	childBlock.children[i].style.backgroundColor = color;

},150);

/* 
Вставляем новый элемент...

...перед объектом
textElement.before(newElement);
...после объетом
textElement.after(newElement);
...внутрь и в начало объекта
textElement.prepend(newElement);
...внутрь и в конец объекта
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
textElement.insertAdjesentHTML(`одно из четырёх значений`, `текст HTML, 
который вставится в текст документа, согласна переданному первому параметру`)

...перед объектом
beforebegin 
...внутрь и в начало объекта
afterbegin
...внутрь и в конец объекта
beforeend
...после объекта
afterend

--beforebegin--
<div class="added__text">
--afterbegin--
	<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi, earum!</p>
	<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi, earum!</p>
--beforeend--
</div>
--afterend--

textElement.insertAdjesentElement(`одно из четырёх значений`, `Элемент HTML`)
*/

function appendText() {
	const inputItem = this.previousElementSibling;
	if(inputItem.value != ""){
		const newElement = document.createElement('p');
		newElement.textContent = inputItem.value;
		this.closest('.append__item').after(newElement);
	}
}

const appendItem = document.querySelector('.append__item');
const buttonAppend = appendItem.lastElementChild;
buttonAppend.addEventListener('click', appendText);


const moveImgDiv = document.querySelector('.move__img__div .cards__row');
const removeImgDiv = document.querySelector('.cards .cards__row');
const cardsColomnCollection = document.querySelectorAll('.cards__colomn');

function moveImgtoDiv() { 
	if(!moveImgDiv.parentElement.classList.contains('_active'))
		moveImgDiv.parentElement.classList.add('_active');
	moveImgDiv.append(this);
	this.removeEventListener('click', moveImgtoDiv);
	if (document.querySelectorAll('.move__img__div .cards__row .cards__colomn').length == 3) {
		const newArrImg = document.querySelectorAll('.move__img__div .cards__row .cards__colomn');
		setTimeout(() => {
			newArrImg.forEach(item => removeImgDiv.append(item));
			moveImgDiv.parentElement.classList.remove('_active');
			newArrImg.forEach(item => item.addEventListener('click', moveImgtoDiv));
		}, 2000);
	}
}

if (cardsColomnCollection.length > 0) {
	cardsColomnCollection.forEach( item => {
		item.addEventListener('click', moveImgtoDiv);
	});
}

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

let formTest = document.querySelector('.form__test');
formTest.addEventListener('click', function(e) {
	console.log(e.target, "  ", this)

});
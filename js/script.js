 "use strict";

 /* Установите ширину боковой навигации до 200 пикселей */
function openNav() {
    document.getElementById("mySide").style.cssText = `justify-content: space-between;`;
}

/* Установите ширину боковой навигации в 0 */
function closeNav() {
    document.getElementById("mySide").style.justifyContent = "none";
    document.getElementById("mySide").style.flexDirection = "row";
}			

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
// Начиная с первой позиции (Иштван), до 2-й позиции "Оля" (не включая)
// let arr2 = arr1.slice(0, 2);
// console.log(arr2);
// console.log(arr1.indexOf("Иштван", 2));
// console.log(arr1.includes('Иштван'б 1))
// // Удаляем элемент и возвращаем его в переменную
// let arr2 = ["Ваня", "Иштван", "Оля"];
// let removed = arr2.splice(1, 1);
// console.log(removed);

// // Заменяем элементы
// let arr3 = ["Ваня", "Иштван", "Оля"];
// // Начиная с нулевой позиции (Ваня), заменяем один элемент
// arr3.splice(0, 1, 'Коля');
// console.log(arr3);

// // Добавляем элементы
// let arr4 = ["Ваня", "Иштван", "Оля"];
// // Начиная с первой позиции (перед "Иштван"), добавляем два элемента
// arr4.splice(1, 0, "Коля", "Маша");
// console.log(arr4);

// // Удаляем элемент
// let arr5 = ["Ваня", "Иштван", "Оля"];
// // Начиная с последней позиции (Оля), удаляем один элемент.
// arr5.splice(-1, 1);
// console.log(arr5);


// let arrTwo = [
// 	"Коля",
// 	{
// 		type: "JS",
// 		age: 36,
// 	},
// 	true,
// 	function (){
// 		console.log("Привет, я Коля!");
// 	}
// ];

// console.log(arrTwo);
// console.log(arrTwo[0]);
// console.log(arrTwo[1]["type"]);
// console.log(arrTwo[1]["age"]);
// console.log(arrTwo[2]);
// arrTwo[3]();

// let matrix = [
// 	[1, 2, 3],
// 	[4, 5, 6],
// 	[7, 8, 9],
// ];
// console.log(matrix);
// console.log(matrix[0][1]);





























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

document.getElementById("time").innerHTML = str ;
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
document.getElementById("date").innerHTML = str;
}, 1000);

let textOne = "fsdfsdfsdfllo!";

//'your string'.replace(/\b\w/g, l => l.toUpperCase());

// Удаляем элемент
let arr1 = ["Ваня", "Иштван", "Оля"];
let resultOne = arr1.find((item, index, array) => item.age == 21);
console.log(resultOne);

let result = arr1.map((item, index, array) => item[0]);
console.log(result);

// arr1.forEach((item, index, array) => console.log(`${item} находится на ${index} позиции в ${array}`));

let arr2 = [1, 2, 3, 4 ,5];
let value = arr2.reduce((previousValue, item, index, array) => previousValue + item, 0);
console.log(value);


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





























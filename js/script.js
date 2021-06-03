 /* Установите ширину боковой навигации до 200 пикселей */
function openNav() {
    document.getElementById("mySide").style.width = "0";
}

/* Установите ширину боковой навигации в 0 */
function closeNav() {
    document.getElementById("mySide").style.width = "100";
}			

let time = setInterval(() => {
	let date = new Date();
	let list = [date.getHours(), date.getMinutes(), date.getSeconds()]
	let str = ""
	for (let i = 0; i < list.length; i++){
		if(list[i] < 10) str += "0" + list[i] 
		else str += list[i]
		if (i < list.length - 1) str += ":"
	}

document.getElementById("time").innerHTML = str ;
}, 1000);


let date = setInterval(() => {
	let now = new Date()
	let list = [now.getDate(), now.getMonth(), now.getFullYear(), now.getDay()]
	let month = ["январь", "февраль", "март", "апрель", "май", "июнь", "июль", "август", "сентябрь", "октябрь", "ноябрь", "декабрь"]
	let week = ["понедельник", "вторник", "среда", "четверг", "пятница", "суббота", "воскресенье"]
	let week_short = ["пн", "вт", "ср", "чт", "пт", "сб", "вс"]
	let str = ""
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

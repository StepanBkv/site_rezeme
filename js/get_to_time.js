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
  	let	month, week 
  //if(select.value == 'ru'){
  	month = ["январь", "февраль", "март", "апрель", "май", "июнь", "июль", "август", "сентябрь", "октябрь", "ноябрь", "декабрь"];
  	week = ["понедельник", "вторник", "среда", "четверг", "пятница", "суббота", "воскресенье"];
  //}
 //  else {
	// month = ["january", "february", "march", "april", "may", "june", 'july', 'august', 'september', 'october', 'november', 'december'];
	// week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday","sunday"]
	// }
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
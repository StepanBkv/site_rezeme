function getDay(date) { // получить номер дня недели, от 0 (пн) до 6 (вс)
      let day = date.getDay();
      if (day == 0) day = 7; // сделать воскресенье (0) последним днем
      return day - 1;} 

let calendar = setInterval(() => {
	  let now = new Date();
	  let year = now.getFullYear()
	  let month = now.getMonth();; // месяцы в JS идут от 0 до 11, а не от 1 до 12
    let d = new Date(year, month);
    let week_short = ["пн", "вт", "ср", "чт", "пт", "сб", "вс"]

    let table = '<table><tr>';

    for(let i = 0; i < week_short.length; i++){
    	table += `<th>${week_short[i]}</th>`;
    }
	  table += '</tr><tr>'

    // пробелы для первого ряда
    // с понедельника до первого дня месяца
    // * * * 1  2  3  4

    for (let i = 0; i < getDay(d); i++) {
      table += '<td>-</td>';
    }

    // <td> ячейки календаря с датами

    while (d.getMonth() == month) {
    	if (now.getDate() == d.getDate()) table += '<td class="this_day">' + d.getDate() + '</td>'
    	else table += '<td>' + d.getDate() + '</td>';

      if (getDay(d) % 7 == 6) { 
      // вс, последний день - перевод строки
        table += '</tr><tr>';
      }

      d.setDate(d.getDate() + 1);
    }

    // добить таблицу пустыми ячейками, если нужно
    // 29 30 31 * * * *

    if (getDay(d) != 0) {
      for (let i = getDay(d); i < 7; i++) {
      	table += '<td>-</td>';
      }
    }

    // закрыть таблицу
    table += '</tr></table>';
    document.querySelector(".calendar__item").innerHTML = table;
   
}, 500);

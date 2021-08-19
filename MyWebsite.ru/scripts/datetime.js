function zero_first_format(value)
{
  if (value < 10)
  {
    value ='0'+value;
  }
  return value;
}

function date_time()
{
  let current_time = new Date();
  let month = zero_first_format(current_time.getMonth());
  let day = zero_first_format(current_time.getDate());
  let year = current_time.getFullYear();
  let hours = zero_first_format(current_time.getHours());
  let minutes = zero_first_format(current_time.getMinutes());
  let seconds = zero_first_format(current_time.getSeconds());
  let week = new Array("Воскресенье","Понедельник","Вторник","Среда","Четверг","Пятница","Суббота")
  return "Дата: "+ year + "." + day + "." + month + "<br/>День недели - " + week[current_time.getDay()]  + "<br/>Время: " + hours + ":" + minutes + ":" + seconds
}

setInterval(function() {
  document.getElementById('time_block').innerHTML = date_time();
},1000);
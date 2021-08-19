let item = document.getElementById("userdiv");

item.onclick = function(){
    answer = prompt("Введите текст","");
    if (answer != null) {
       let a = document.createElement('a')
       a.innerHTML = answer
       item.prepend(a)
    }
}

item.oncontextmenu = function(){
    let child = item.lastElementChild
    answer = confirm(`Удалить элемент?\n${child.innerText}`)
    if (answer == true){
        child.remove()
    }
}
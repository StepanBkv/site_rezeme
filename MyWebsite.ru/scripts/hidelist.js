let hl = document.getElementById("hidelist");
let title = hl.querySelector('.title');

title.onclick = function(){
    hl.classList.toggle('open');
}

let ul = hl.getElementsByTagName("ul")[0];
let count = 0;

ul.onclick = function(event) {
    let target = event.target;
    hidetarget(target, div =>{
        div.classList.add("message");
        div.append("Сладости закончились")
    });
}

function hidetarget(li,callback) {
    li.style.display = "none";
    count += 1;
    if (count == ul.childElementCount){
        let div = document.createElement('div'); 
        ul.append(div);
        callback(div);     
    }
}

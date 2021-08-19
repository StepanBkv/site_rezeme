let div = document.getElementById("changediv")

div.onmouseover = function(){
    div.style.border = "solid #000 20px";
    div.style.fontStyle = 'italic';
    div.style.fontSize = '20px';
    div.style.color = 'white';
}

div.onmouseout = function(){
    div.style.border = "solid #ff0000 10px";
    div.style.fontStyle = 'normal';
    div.style.fontSize = '10px';
    div.style.color = '#ff0000';
}
let imgdiv = document.getElementById("imagediv");
let img = imgdiv.firstElementChild;
let opacity = 0;

setInterval(function() {
    if (opacity == 0){
        img.style.opacity = "1"
        opacity = 1
    }
    else{
        img.style.opacity = "0"
        opacity = 0
    }
    
}, 5000);
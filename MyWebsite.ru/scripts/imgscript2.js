let imgdiv2 = document.getElementById("imagediv2");
let img2 = imgdiv2.firstElementChild;
let txtdiv = document.getElementById('centered');

imgdiv2.onmouseover = function(){
    img2.style.opacity = "0"
    txtdiv.style.opacity = "1"
}

imgdiv2.onmouseout = function() {
    img2.style.opacity = "1"
    txtdiv.style.opacity = "0"
}
function getRandomInt(min, max) {
   min = Math.ceil(min);
   max = Math.floor(max);
   return Math.floor(Math.random() * (max - min)) + min; //Максимум не включается, минимум включается
 }


setInterval(function() {
   let items = document.getElementsByTagName("div");
   
   for(i = 0;i < items.length; i++){
      items[i].style.visibility ='visible'
   }

   let randitem = getRandomInt(0,items.length);

   items[randitem].style.visibility ="hidden"
   
  },500);


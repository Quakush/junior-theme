function getTimer() {
    let now = new Date();
     var d = new Date();
     d.setHours(9);
     d.setMinutes(0);
     d.setSeconds(0);
     d.setDate(d.getDate()+1);
     let diff = (d.getTime()-now.getTime())/1000;
     
     let days = Math.floor(diff/(60*60*24));
     diff%=60*60*24;
     let hours = Math.floor(diff/(60*60));
     diff%=60*60;
     let min = Math.floor(diff/60);
     
     diff%=60;
  	diff = Math.floor(diff);
     return `${hours}:${min}:${diff}`;
 }
    
 (function(){
    document.querySelector("#timer").innerHTML = getTimer();
   setTimeout(arguments.callee,1000);
 })();
 
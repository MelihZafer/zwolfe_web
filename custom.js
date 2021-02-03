$(document).ready(function(){

    var time = setInterval(timee, 1000);
    function timee(){
    var d = new Date();
    var n = d.getHours();
    var m = d.getMinutes();
    var s =d.getSeconds();
  
    if(n<=12){
        if(m<10){
            if(s<10){
                $("#time").text("0"+n + ':' + "0"+m + ":" + "0"+s);
            }
            else{
                $("#time").text("0"+n + ':' + "0"+m + ":" +s);
            }
        }
        else{
            if(s<10){
                $("#time").text("0"+n + ':' + m + ":" + "0"+s);
            }
            else{
                $("#time").text("0"+n + ':' + m + ":" +s);
            }
        }
    }






    else{   
         if(m<10){
        if(s<10){
                $("#time").text(n + ':' + "0"+m + ":" + "0"+s);
            }
            else{
                $("#time").text(n + ':' + "0"+m + ":" +s);
            }
            }
            else{
                if(s<10){
                    $("#time").text(n + ':' +m + ":" + "0"+s);
                }
                else{
                    $("#time").text(n + ':' +m + ":" +s);
                }
            }}
    }
   
   

});
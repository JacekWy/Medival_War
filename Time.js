var i = 1;
function timer(){

    i++;
    document.getElementById('clock').innerHTML = i;
    setTimeout("timer()",1000);
}




var a = prompt("Enter Your Name");
var b = prompt("Enter Your Lover's Name");

var num=(Math.floor(Math.random()*100)+1);

if(num >=70){
    alert("Your Love Percentage is "+num+" %  Rab ne bana di jodi");
}

if(num<70 && num>=40){
    alert("Your Love Percentage is "+num+" %  Mamla Thora Gadbad hai");
}

else{
    alert("Your Love Percentage is "+num+" %  Breakup kr lo Nhi to pachtaoge");
}





document.querySelector("button").addEventListener("click",handleClick);
function handleClick(){
	alert("i got clicked oooo la la")
}

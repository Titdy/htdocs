//cislo = Math.random(1,100);
function Pridej(){
    document.getElementById("pridat").innerHTML = Math.random();
} 

var pole = [""];

function TextField(){
    var inputText = document.getElementById("textAdd").value;

    pole.push(inputText);

    var pValue = "";
    for(i = 0; i < pole.length; i++){
        pValue = pValue + pole[i] + "<br/>";
    }
    document.getElementById("pText").innerHTML = pValue;
}

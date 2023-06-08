function testExample(min, max){
    return Math.floor(Math.random() *  (max - min) ) + min;
}
console.log(testExample(1,100));

function cisla(n){
    n = Math.random(0,100);
for(i = 0; i < n; i++){
    console.log(n);
    n++;
}
}
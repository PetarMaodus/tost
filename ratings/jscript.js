let menuD = document.getElementById('menuOpt');
let menuT = [];
let menuO = document.getElementById('menuX');

menuO.addEventListener('click', function(){
  if(menuT.length == 0){
    menuT.push("1");
    menuD.style.display = "block";
} else if (menuT.length == 1) {
   menuT.shift();
   menuD.style.display = "none";
}
});
let logB = document.getElementById('logIn');
let sigB = document.getElementById('signIn');
let loX = document.getElementById('lo5');
let siX = document.getElementById('sig9');
let baC = document.getElementById('backCloth');
logB.addEventListener('click', function(){
  document.getElementById('logDiv').style.display = "grid";
  baC.style.display = "block";
});
sigB.addEventListener('click', function(){
  document.getElementById('sigDiv').style.display = "grid";
  baC.style.display = "block";
});
loX.addEventListener('click', function(){
  document.getElementById('logDiv').style.display = "none";
  baC.style.display = "none";
});
siX.addEventListener('click', function(){
  document.getElementById('sigDiv').style.display = "none";
  baC.style.display = "none";
});




//chat app
let nxt = document.getElementById('btnNext1');
let chatB = document.getElementById('ctextArea').children;
var countNext = 0;
let btnsA = document.getElementById('abtnArea').children;

nxt.addEventListener('click', function(){
  if(countNext == 0){
    chatB[0].style.display = "none";
    chatB[1].style.display = "block";
    countNext++;
    btnsA[2].innerHTML = "What?";

}

else if (countNext == 2) {
  chatB[2].style.display = "none";
  chatB[3].style.display = "block";
  countNext++;
  btnsA[1].innerHTML = "No";
  btnsA[3].innerHTML = "Yes";
}
else if (countNext == 4) {
  chatB[4].style.display = "none";
  chatB[5].style.display = "none";
  chatB[6].style.display = "block";
  countNext++;
  btnsA[1].innerHTML = "Hi!";
  btnsA[3].innerHTML = "m i drunk ?";
}
else if (countNext == 6) {
  chatB[7].style.display = "none";
  chatB[8].style.display = "none";
  chatB[9].style.display = "block";
  countNext++;
  btnsA[2].innerHTML = "ok?";

}
else if (countNext == 8) {

  chatB[10].style.display = "none";
  chatB[11].style.display = "block";
  countNext++;
  btnsA[1].innerHTML = "oh";
  btnsA[3].innerHTML = "wow";
}
else if (countNext == 10) {
  chatB[12].style.display = "none";
  chatB[13].style.display = "none";
  chatB[14].style.display = "block";
  countNext++;
  btnsA[1].innerHTML = "ok";
  btnsA[3].innerHTML = "no";

}
else if (countNext == 12) {
  chatB[15].style.display = "none";
  chatB[16].style.display = "none";
  chatB[17].style.display = "block";
  countNext++;
  btnsA[0].innerHTML = "bread";
  btnsA[1].innerHTML = "warm tost";
  btnsA[2].innerHTML = "tost";
  btnsA[3].innerHTML = "tosty tost";
  btnsA[4].innerHTML = "overtosted tost";
}
});
btnsA[0].addEventListener('click', function(){
  if(countNext == 13){
    chatB[17].style.display = "none";
    chatB[18].style.display = "block";
    countNext++;
    btnsA[0].innerHTML = " ";
    btnsA[1].innerHTML = " ";
    btnsA[2].innerHTML = " ";
    btnsA[3].innerHTML = " ";
    btnsA[4].innerHTML = " ";
}

});
btnsA[2].addEventListener('click', function(){
  if(countNext == 1){
    chatB[1].style.display = "none";
    chatB[2].style.display = "block";
    countNext++;
    btnsA[2].innerHTML = " ";
}
if(countNext == 7){
  chatB[9].style.display = "none";
  chatB[10].style.display = "block";
  countNext++;
  btnsA[2].innerHTML = " ";
}
if(countNext == 13){
  chatB[17].style.display = "none";
  chatB[20].style.display = "block";
  countNext++;
  btnsA[0].innerHTML = " ";
  btnsA[1].innerHTML = " ";
  btnsA[2].innerHTML = " ";
  btnsA[3].innerHTML = " ";
  btnsA[4].innerHTML = " ";
}
});
btnsA[1].addEventListener('click', function(){
  if(countNext == 3){
    chatB[3].style.display = "none";
    chatB[4].style.display = "block";
    countNext++;
    btnsA[1].innerHTML = " ";
    btnsA[3].innerHTML = " ";
}
else if (countNext == 5) {
  chatB[6].style.display = "none";
  chatB[7].style.display = "block";
  countNext++;
  btnsA[1].innerHTML = " ";
  btnsA[3].innerHTML = " ";
}
else if (countNext == 9) {
  chatB[11].style.display = "none";
  chatB[12].style.display = "block";
  countNext++;
  btnsA[1].innerHTML = " ";
  btnsA[3].innerHTML = " ";
}
else if (countNext == 11) {
  chatB[14].style.display = "none";
  chatB[15].style.display = "block";
  countNext++;
  btnsA[1].innerHTML = " ";
  btnsA[3].innerHTML = " ";
}
if(countNext == 13){
  chatB[17].style.display = "none";
  chatB[19].style.display = "block";
  countNext++;
  btnsA[0].innerHTML = " ";
  btnsA[1].innerHTML = " ";
  btnsA[2].innerHTML = " ";
  btnsA[3].innerHTML = " ";
  btnsA[4].innerHTML = " ";
}
});
btnsA[3].addEventListener('click', function(){
  if(countNext == 3){
    chatB[3].style.display = "none";
    chatB[5].style.display = "block";
    countNext++;
    btnsA[1].innerHTML = " ";
    btnsA[3].innerHTML = " ";
}
else if (countNext == 5) {
  chatB[6].style.display = "none";
  chatB[8].style.display = "block";
  countNext++;
  btnsA[1].innerHTML = " ";
  btnsA[3].innerHTML = " ";
}
else if (countNext == 9) {
  chatB[11].style.display = "none";
  chatB[13].style.display = "block";
  countNext++;
  btnsA[1].innerHTML = " ";
  btnsA[3].innerHTML = " ";
}
else if (countNext == 11) {
  chatB[14].style.display = "none";
  chatB[16].style.display = "block";
  countNext++;
  btnsA[1].innerHTML = " ";
  btnsA[3].innerHTML = " ";
}
if(countNext == 13){
  chatB[17].style.display = "none";
  chatB[21].style.display = "block";
  countNext++;
  btnsA[0].innerHTML = " ";
  btnsA[1].innerHTML = " ";
  btnsA[2].innerHTML = " ";
  btnsA[3].innerHTML = " ";
  btnsA[4].innerHTML = " ";
}
});
btnsA[4].addEventListener('click', function(){
  if(countNext == 13){
    chatB[17].style.display = "none";
    chatB[22].style.display = "block";
    countNext++;
    btnsA[0].innerHTML = " ";
    btnsA[1].innerHTML = " ";
    btnsA[2].innerHTML = " ";
    btnsA[3].innerHTML = " ";
    btnsA[4].innerHTML = " ";
}

});

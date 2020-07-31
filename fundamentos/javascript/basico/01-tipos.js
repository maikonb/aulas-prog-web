// Tipos primitivos

var bCondicao = false;
var nNum1 = -15;
var nNum2 = 5.5;
var sStr = "Meu nome eh Homer";
var null1 = null;
var indefinido1;
var indefinido2;

console.log("bCondicao  : " + bCondicao);
console.log("nNum1      : " + nNum1);
console.log("nNum2      : " + nNum2);
console.log("sStr       : " + sStr);
console.log("null1      : " + null1);
console.log("indefinido1: " + indefinido1);
console.log("indefinido2: " + indefinido2);

var n1 = "100";
var n2 = 5;
var n3 = n1 + n2;
var n4 = n2 + n1;
var n5 = n1 - n2;
console.log("n3 = " + n3 + " n4 = " + n4 + " n5 = " + n5);

console.log("tipo de n3: " + typeof(n3));
console.log("tipo de n4: " + typeof(n4));
console.log("tipo de n5: " + typeof(n5));

n3 = parseInt(n1) + n2;
n4 = n2 + parseInt(n1);
console.log("depois da conversao: ");
console.log("tipo de n3: " + typeof(n3));
console.log("tipo de n4: " + typeof(n4));

var i1 = 0144;
var i2 = 0x64;
var i3 = 0b01100100;

console.log("tipo de i1=" + typeof(i1) + " i1=" +  i1); 
console.log("tipo de i2=" + typeof(i2) + " i2=" +  i2); 
console.log("tipo de i3=" + typeof(i3) + " i3=" +  i3); 

var f1 = 100.0;
var f2 = .001;
var f3 = 1e-3;
var f4 = .1e-2;

console.log("tipo de f1=" + typeof(f1) + " f1=" +  f1); 
console.log("tipo de f2=" + typeof(f2) + " f2=" +  f2); 
console.log("tipo de f3=" + typeof(f3) + " f3=" +  f3); 
console.log("tipo de f4=" + typeof(f4) + " f4=" +  f4); 


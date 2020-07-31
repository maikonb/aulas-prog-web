 // The var statement declares a function-scoped or 
 // globally-scoped variable, optionally initializing it 
 // to a value.
var a;
var b = 4;

// Declares a block-scoped, local variable, optionally 
// initializing it to a value.
let e;
let f = "Ola";

console.log("O valor de a é " + a); // saída "O valor de a é undefined"
console.log("O valor de b é " + b); 
// console.log("O valor de c é " + c); // (ReferenceError)

// Escopo, diferencas entre let e var

///////////////////////////////////////////////////////////

// Códigos no escopo global
if (true) {
  var x = 20;
}
console.log(x); 

if (true) {
  let y = 5;
}

// ReferenceError: y não está definido
// console.log(y); 

///////////////////////////////////////////////////////////

// var
var x = 1;
if (x === 1) {
  var x = 2;
  console.log(x); // expected output: 2
}
console.log(x);   // expected output: 2


// let
let x = 1;
if (x === 1) {
  let x = 2;
  console.log(x); // expected output: 2
}
console.log(x);  // expected output: 1


///////////////////////////////////////////////////////////



// Conceito de Hoisting
// Pode-se utilizar a variável e declará-la depois, sem obter uma exceção

console.log(u === undefined); // exibe "true"
var u = 3;


// Um pouco mais sobre variaveis do tipo boolean

var c = true;
console.log("Tipo da variavel c: " + typeof(c));


// Comparadores logicos

var b = [,,,,,,,,,];

b[0] = 1 == 1;   // verdadeiro, se x igual a y, caso contrario, falso
b[1] = 2 == 1;   // verdadeiro, se d igual a y, caso contrario, falso
b[2] = 1 != 2;   // verdadeiro, se x diferente de y, caso contrario, falso
b[3] = 1 < 2;    // verdadeiro, se x menor que y, caso contrario, falso
b[4] = 1 > 0;    // verdadeiro, se x maior que y, caso contrario, falso
b[5] = 1 >= 1;   // verdadeiro, se x maior igual a y, caso contrario, falso
b[6] = 1 <= 1;   // verdadeiro, se x maior igual a y, caso contrario, falso
b[7] = ! 1 == 1; // negacao( x == y ), se x==y: falso, caso contrario, verdadeiro
b[8] = ! true;   // negacao( true ) = false

console.log(b);

var a;
a = 1 == "1";
console.log(a);
a = 1 == "1.0";
console.log(a);
a = 1 == '1';
console.log(a);
a = 1 === "1";
console.log(a);

// Expressoes logicas

var e = [];
var x = 10, y = 20, z = 30;

e[0] = x == 10 || y == 100; // (Expr.1) OU (Expr.2)
e[1] = x != 10 && y == 100; // (Expr.1) E  (Expr.2)
e[2] = x == 10 && y == 100; // (Expr.1) E  (Expr.2)
e[3] = x == 10 && y == 20;  // (Expr.1) E  (Expr.2)
e[4] = ((x == "10" || y == 99) && y == 20);  // ((Expr.1 OU Expr.2) E  (Expr.3))
console.log(e);


// Operador ternario

a = (x == 10) ? 100 : 200;
b = (x == 20) ? 100 : 200;
console.log("a = " + a + " b = " + b);


// Se.... entao faca isso, caso contrario, faca aquilo
if (b) 
    console.log("Valor de b = verdadeiro");
else
    console.log("Valor de b = falso");

if (b) {
    console.log("Comando 1: Valor de b = verdadeiro");
    console.log("Comando 2: Valor de b = verdadeiro");
}
else
    console.log("Valor de b = falso");



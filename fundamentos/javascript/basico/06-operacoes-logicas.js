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


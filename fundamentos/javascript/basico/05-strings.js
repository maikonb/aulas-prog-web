var s1 = "foo";
var s2 = 'bar';
var s3 = "1234";
var s4 = "uma linha \n outra linha";
var s5 = "pingo d'agua";

console.log(s1);
console.log(s2);
console.log(s3);
console.log(s4);
console.log(s5);



// Caracteres Especiais em javascript

/* 
    \b  Backspace
    \n  Nova linha
    \t  Tabulação
    \v  Tabulação vertical
    \'  Apóstrofo ou aspas simples
    \"  Aspas dupla
    \\  Caractere de barra invertid
*/

s1 = "minha string\b sem o g";
console.log(s1);

s1 = "minha string\n em duas linhas";
console.log(s1);

s1 = "minha string\t com TAB";
console.log(s1);


s1 = "minha string\v com TAB vertical";
console.log(s1);

s1 = 'minha string com o caracter \'';
console.log(s1);

s1 = "minha string com o caracter \"";
console.log(s1);

s1 = 'minha string com o caracter \\';
console.log(s1);



// Quantidade de caracteres de uma string

s1 = "123456789";
console.log("Length de s1 = " + s1.length);
console.log("Length de s1 = " + "123456789".length);



// Acessando caractere a caractere

s1 = "teste";
console.log(s1[0] + s1[1] + s1[2] + s1[3] + s1[4]);




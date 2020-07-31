var b,a,x,y;

b = true;

// Se.... entao faca isso, caso contrario, faca aquilo
if (b) 
    console.log("Valor de b = verdadeiro");
else
    console.log("Valor de b = falso");

// Executando mais que duas linhas de comandos 
if (b) {
    console.log("Comando 1: Valor de b = verdadeiro");
    console.log("Comando 2: Valor de b = verdadeiro");
}
else
    console.log("Valor de b = falso");

x=100;
y=200;

if ( b && (x>500 || x<=y) ) {
    console.log("Expressao retornou verdadeira");
}

// CUIDADO, nunca utilize apenas um "=" na comparacao
// A nao ser que saiba o que esteja fazendo.
// Se fizer isso, a variavel `a esquerda recebera o valor `a direita.
if (x=999) {
    console.log("X igual a 999");
}
console.log("x = " + x);

// Valores interpretados como FALSOS
var i;
var j=0;
var k='';
var l=null;
var m=false;
var n="A"; // Verdadeiro
var o=0.00001; // Verdadeiro

if (i)
    console.log("(i) retornou verdadeiro");
else
    console.log("(i) retornou falso");

if (j)
    console.log("(j) retornou verdadeiro");
else
    console.log("(j) retornou falso");

if (k)
    console.log("(k) retornou verdadeiro");
else
    console.log("(k) retornou falso");

if (m)
    console.log("(m) retornou verdadeiro");
else
    console.log("(m) retornou falso");

if (n)
    console.log("(n) retornou verdadeiro");
else
    console.log("(n) retornou falso");

if (o)
    console.log("(o) retornou verdadeiro");
else
    console.log("(o) retornou falso");



// Comparacoes multiplas
x=10; // x=40 
y=20;

if (x==10 && y==30)
    console.log("Primeira expressao correta!");
else if (x==20 && y==20) 
    console.log("Segunda expressao correta!");
else if (x==10 || y==999)
    console.log("Terceira expressao correta!");
else
    console.log("NENHUMA expressao correta!");


// Estrutura de comparacao Case

var tipoCarne = "Maminha";

switch (tipoCarne) {
   case "Maminha":
      console.log("O quilo da maminha esta R$ 20.00.");
      break; // Nao esquecer
   case "Alcatra":
      console.log("O quilo da alcatra esta R$ 30.00.");
      break;
   case "Picanha":
      console.log("O quilo da picanha esta R$ 35.00.");
      break;
   default:
      console.log("Nao temos " + tipoCarne);
}

var anosCasamento = 25;

switch(anosCasamento) {
	case 1: 
		console.log("Bodas de papel");
		break;
	case 25: 
		console.log("Bodas de prata");
		break;
	case 50: 
		console.log("Bodas de ouro");
		break;
	default:
		console.log("Nao sei");
}


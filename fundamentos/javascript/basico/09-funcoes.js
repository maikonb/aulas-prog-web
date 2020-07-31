function somar(n1, n2) {
  return n1+n2;
}
function imprimirObjeto(o) {
  console.log();
  console.log('ID: ' + o.id);
  console.log('nome: ' + o.nome);
  console.log('Idade: ' + o.idade);
  console.log();
}

console.log(   somar(4,5)   );
imprimirObjeto( {
  id: 1,
  nome: "Jose Miranda",
  idade: 40
});

// Primitive parameters (such as a number) are passed to functions by value; 
// the value is passed to the function, but if the function changes the value 
// of the parameter, this change is not reflected globally or in the calling 
// function.

// If you pass an object (i.e. a non-primitive value, such as Array or a 
// user-defined object) as a parameter and the function changes the object's 
// properties, that change is visible outside the function

function modificarTipoPrimitivo(n) {
  n=5;
}
function modificarObjeto(o) {
  if ( o != null && typeof o == "object") {
    o.email = "jose@miranda.com";
    if (o.hasOwnProperty('idade'))
      o.idade = 52;
  }
}
function modificarArray(a) {
  if (Array.isArray(a))
    a.push(1000,2000,3000);
}

var n = 100;
o = {
  id: 1,
  nome: "Jose Miranda",
  idade: 40
};
a = [10,20,30];

console.log('tipo primitivo antes : ', n);
modificarTipoPrimitivo(n);
console.log('tipo primitivo depois: ', n);

console.log('tipo objeto antes : ', o);
modificarObjeto(o);
console.log('tipo objeto depois: ', o);

console.log('tipo array antes : ', a);
modificarArray(a);
console.log('tipo array depois: ', a);


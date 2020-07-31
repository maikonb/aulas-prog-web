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


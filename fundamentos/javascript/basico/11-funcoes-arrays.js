// principais funcoes utilizadas em arrays

const nomes = [ 'joao', 'maria', 'andre', 'rosangela', 'beatriz'];

//
console.log('\nforEach =>> ');
nomes.forEach( nome => {
  console.log(nome);
});
nomes.forEach( (nome, i) => {
  console.log(`nome[${i}] = ${nome}`);
});

//
console.log('\nindexOf =>> ');
console.log('indexof(rosangela) = ', nomes.indexOf('rosangela') );

//
console.log('\nsplice =>> ');
var v = Array.from(nomes); // copia do array
console.log('antes: ', v);
v.splice(3, 2);
console.log('removendo 2, a partir da pos 3: ', v);
v.splice(1, 1);
console.log('removendo 1, a partir da pos 1: ', v);

//

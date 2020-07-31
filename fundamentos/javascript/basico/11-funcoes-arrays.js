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


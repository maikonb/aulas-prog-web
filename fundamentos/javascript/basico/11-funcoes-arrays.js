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
console.log('\nslice =>> ');
v = nomes.slice();
console.log('v: ', v);
console.log('slice(1,3): ', v.slice(1,3));
console.log('v: ', v); // o slice copia uma parte do array, mas nao remove 

//
console.log('\nmap =>> ');
v = nomes.map( nome => `${nome} silva`);
console.log('map: ', v);
console.log('nomes: ', nomes);

//
console.log('\nfilter =>> ');
v = nomes.map( nome => nome.includes('an'));
console.log('v (map): ', v);
v = nomes.filter( nome => nome.includes('an'));
console.log('v (filter - includes "an"): ', v);

//
const pessoas = [ 
  { nome: 'joao', idade: 20 } ,
  { nome: 'maria', idade: 30 } ,
  { nome: 'andre', idade: 50 } ,
  { nome: 'rosangela', idade: 55 } ,
  { nome: 'beatriz', idade: 11 } 
];

//
console.log('\nfind =>> ');
let p = pessoas.find( p => p.nome==='andre');
console.log(p);

//
console.log('\nfindIndex =>> ');
let idx = pessoas.findIndex( p => p.nome==='andre');
console.log('index of "andre": ', idx);
idx = pessoas.findIndex( p => p.nome==='antonio');
console.log('index of "antonio": ', idx);


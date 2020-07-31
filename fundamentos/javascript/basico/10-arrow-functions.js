/* Sintaxe

([param[, param]]) => {
   statements
}

param => expression

*/

quadrado = n => n*n ;
cubo = n => n*n*n;
v = [1,2,3,4,5];

mapearElementos = (a, f) => {
  if (Array.isArray(a))
    for(i=0;i<a.length;i++)
      a[i] = f(a[i]);
  return a;
}

console.log("array ao quadrado: ", mapearElementos(Array.from(v), quadrado));
console.log("array ao cubo: ", mapearElementos(Array.from(v), cubo));


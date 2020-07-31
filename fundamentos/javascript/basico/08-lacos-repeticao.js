
var v = [90,80,70,60,50,40,30,20,10,0];
console.log(v[0]);
console.log(v[1]);
// ...
console.log(v[9]);

var i = 0;


// Laco de Repeticao: while
i = 0;
while ( i < v.length ) {
    console.log(v[i]);
    i++;
}



// Laco de Repeticao: for
for (i=0;i<v.length;i++) 
    console.log(v[i]);



// Laco de Repeticao: do...while
i = 0;
do {
    console.log(v[i]);
} 
while ( ++i < v.length );

i = v.length - 1;
do {
    console.log(v[i]);
} 
while ( --i >= 0 );



// Laco de Repeticao: break
i = 0;
while ( true ) {
    if (i<v.length) {
        console.log( v[i] );
        i++;
    }
    else
        break;
}



// Laco de Repeticao: continue
for (i=0;i<v.length;i++) { 
    if (i % 2 == 1)
        continue;
    console.log(v[i]);
}    


// Laco de Repeticao: for...in
console.log("Laco de Repeticao: for...in");
for (let i in v) 
    console.log(i);

console.log("Laco de Repeticao: for...in em objetos");
let p = {
    nome: "Maria",
    idade: 50,
    cidade: "Curitiba",
    uf: "PR"
}

for (let i in p) 
    console.log(i);


// Laco de Repeticao: for...of
console.log("Laco de Repeticao: for...of");
for (let i of v) 
    console.log(i);

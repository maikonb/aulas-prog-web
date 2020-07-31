var x , y, z;

// Operadores aritmeticos
x = 20;
y = 2;
z = x + y;
console.log(z);
z = x * y;
console.log(z);
z = x / y;
console.log(z);
z = x + y;
console.log(z);

x = 20;
y = 1;
z = x & y;
console.log(z);
z = x | y;
console.log(z);
z = x ^ y;
console.log(z);

y = 0xFFFF0000;
z = ! y;
console.log(z);

x=10;
z = x >> 2;
console.log(z);
z = x << 2;
console.log(z);



// Atribuição de adição    x += y  x = x + y
x = 10; y = 5;
x += y;
console.log(x);

// Atribuição de multiplicação 
x = 10; y = 5;
x *= y;
console.log(x);

// Atribuição de subtração 
x = 10; y = 5;
x -= y;  
console.log(x);

// Atribuição de divisão  
x = 10; y = 5;
x /= y; 
console.log(x);


// Atribuição de resto 
x = 10; y = 5;
x %= y;  
console.log(x);


// Atribuição exponencial  
x = 10; y = 5;
x **= y;
console.log(x);


// Atribuição bit-a-bit por deslocamento á esquerda    
x = 10; y = 2;
x <<= y ;
console.log(x);


// Atribuição bit-a-bit por deslocamento á direita 
x = 20; y = 2;
x >>= y;
console.log(x);


// Atribuição AND bit-a-bit    
x = 10; // 1010 
y = 6;  // 0110
x &= y;
console.log(x);


// Atribuição XOR bit-a-bit    
x = 10; // 1010 
y = 6;  // 0110
x ^= y;
console.log(x);


// Atribuição OR bit-a-bit 
x = 11; // 1011 
y = 5;  // 0101
x |= y;
console.log(x);





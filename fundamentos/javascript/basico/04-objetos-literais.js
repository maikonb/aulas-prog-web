var cliente = { 
    nome    : "Mauro da Silva", 
    telefone: "11 9 8774-2499", 
    idade   : 25,
    cidade  : "Sao Paulo" };

console.log(cliente);

console.log("nome    : " + cliente.nome    );
console.log("telefone: " + cliente.telefone);
console.log("idade   : " + cliente.idade   );
console.log("cidade  : " + cliente.cidade  );

cliente.nome = "Joao da Silva";
console.log("nome    : " + cliente.nome    );

cliente.pais = "Brasil";
console.log(cliente);

// Outra forma de acessar as propriedades

console.log("Outra forma de acessar as propriedades:");
console.log("nome    : " + cliente["nome"]);
console.log("telefone: " + cliente["telefone"]);
console.log("idade   : " + cliente["idade"]);
console.log("cidade  : " + cliente["cidade"]);


// Array de objetos

var clientes = [
    { nome: "Joao", cidade: "Sao Paulo" },
    { nome: "Eduardo", cidade: "Vitoria" },
    { nome: "Antonio", cidade: "Sao Jose do Rio Preto" },
];

console.log(clientes[0].nome + " " + clientes[0].cidade);
console.log(clientes[1].nome + " " + clientes[1].cidade);
console.log(clientes[2].nome + " " + clientes[2].cidade);



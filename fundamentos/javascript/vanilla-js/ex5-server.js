const http = require('http');
const { parse } = require('querystring');
const port = 3000;

const requestHandler = (req, res) => {

  console.log('URL: ', req.url);
  console.log('Method: ', req.method);

  if (req.url==='/' && req.method === 'GET') {
    res.writeHead(200, { 'Content-Type': 'text/html' });
    res.end('<h1>Oi</h1>');
  }
  else if (req.url==='/' && req.method === 'POST') {

    var body = "";
    req.on('data', (chunk) => {
      body += chunk;
    });
    req.on('end', () => {
      let obj = parse(body);

      // res.writeHead(200, { 'Content-Type': 'application/json' });
      // res.end(JSON.stringify( obj ));

      // res.writeHead(200, { 'Content-Type': 'text/plain' });
      // res.end(JSON.stringify( obj ));

      res.writeHead(200, { 'Content-Type': 'text/html' });
      res.end(`
        <h1>Oi, recebi seus dados.</h1>
        <p> ${body} </p>
        <p> Nome: ${obj.name_nome} </p>
        <p> Idade: ${obj.name_idade} </p>
      `);
    });
  }  
  else {
    res.writeHead(404);
    res.end();
  }

};

const server = http.createServer( requestHandler );

server.listen(port, (err) => {
  if (err) {
    console.error('Erro ao abrir a porta.', err);
    return;
  }
  console.log(`Servidor escutando na porta ${port}`);
})

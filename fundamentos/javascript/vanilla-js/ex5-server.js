const http = require('http');
const port = 3000;

const requestHandler = (req, res) => {
  console.log('requestHandler()');
};

const server = http.createServer( requestHandler );

server.listen(port, (err) => {
  if (err) {
    console.error('Erro ao abrir a porta.', err);
    return;
  }
  console.log(`Servidor escutando na porta ${port}`);
})

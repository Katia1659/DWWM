// Créez un fichier index.js , que nous utiliserons comme point d’entrée pour notre serveur. En haut
// du fichier, nous aurons besoin du module express module, déclarer le bodyParser et configurer nos
// variables app et port

const express = require('express');
const bodyParser = require('body-parser');
const app = express();
const port = 3000;
// Pour obtenir toutes les fonctions exportées à partir de queries.js , nous avons besoin exporter le fichier en l’affectant à une variable.
const db = require('./queries');

app.use(bodyParser.json());
app.use(
  bodyParser.urlencoded({
    extended: true,
  })
);

// Nous allons mapper une requête . GET sur l’URL racine ( / ) pour renvoyer un flux JSON

app.get('/', (request, response) => {
  response.json({ info: 'Node.js, Express, and Postgres API' });
});

// Désormais, pour chaque service, nous allons définir la méthode HTTP, le chemin d’URL et la fonction correspondante.
app.get('/users', db.getUsers);
app.get('/users/:id', db.getUserById);
app.post('/users', db.createUser);
app.put('/users/:id', db.updateUser);
app.delete('/users/:id', db.deleteUser);

// Maintenant, configurez l'application pour qu'elle écoute sur le port que vous avez défini.

app.listen(port, () => {
  console.log(`App running on port ${port} .`);
});

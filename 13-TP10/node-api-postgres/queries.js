// Créez un fichier appelé queries.js et y ajouter la configuration de votre connexion PostgreSQL.
const Pool = require('pg').Pool;
const pool = new Pool({
  user: 'me',
  host: 'localhost',
  database: 'api',
  password: 'password',
  port: 5432,
});

// Nous allons sélectionner ( SELECT ) tous les utilisateurs et les trier par identifiant.
const getUsers = (request, response) => {
  pool.query('SELECT * FROM users ORDER BY id ASC', (error, results) => {
    if (error) {
      throw error;
    }
    response.status(200).json(results.rows);
  });
};

// Pour notre requête /users/:id , nous allons obtenir le paramètre id personnalisé de l’URL et
// l'utiliser dans une clause WHERE pour afficher le résultat.
// Dans la requête SQL, nous recherchons les lignes qui vérifient la condition id=$1 . Dans cet
// exemple $1 est le premier paramétre d'entré.

const getUserById = (request, response) => {
  const id = parseInt(request.params.id);
  pool.query('SELECT * FROM users WHERE id = $1', [id], (error, results) => {
    if (error) {
      throw error;
    }
    response.status(200).json(results.rows);
  });
};

// Ajouter un nouvel utilisateur
// L'API gérera deux services GET et POST en utilisant le même url /users . En POST nous allons
// ajouter un nouvel utilisateur. Dans cette fonction, nous extrayons les propriétés name et email du
// corps (bodu) http de la requêtes et insérons ( INSERT ) les valeurs en base de données en sql.

const createUser = (request, response) => {
  const { name, email } = request.body;
  pool.query(
    'INSERT INTO users (name, email) VALUES ($1, $2)',
    [name, email],
    (error, results) => {
      if (error) {
        throw error;
      }
      response.status(201).send(`User added with ID: ${results.insertId}`);
    }
  );
};

// Mettre à jour un utilisateur existant
// L'url /users/:id prendra également deux requêtes HTTP : Le GET que nous avons créé pour
// getUserById , et un PUT , pour modifier un utilisateur existant. Pour cette requête, nous allons
// combiner ce que nous avons appris dans GET et POST pour utiliser la clause UPDATE
// Il est à noter que PUT est idempotent, ce qui signifie que le même appel peut être répété encore et
// encore et produira le même résultat. En POST , le même appel répété créera continuellement de
// nouveaux utilisateurs avec les mêmes données.

const updateUser = (request, response) => {
  const id = parseInt(request.params.id);
  const { name, email } = request.body;
  pool.query(
    'UPDATE users SET name = $1, email = $2 WHERE id = $3',
    [name, email, id],
    (error, results) => {
      if (error) {
        throw error;
      }
      response.status(200).send(`User modified with ID: ${id}`);
    }
  );
};

// Supprimer un utilisateur
// Enfin, nous allons utiliser la clause DELETE pour l'url /users/:id afin de supprimer un utilisateur
// spécifique par son identifiant. Cet appel est très similaire à notre fonction getUserById()

const deleteUser = (request, response) => {
  const id = parseInt(request.params.id);
  pool.query('DELETE FROM users WHERE id = $1', [id], (error, results) => {
    if (error) {
      throw error;
    }
    response.status(200).send(`User deleted with ID: ${id}`);
  });
};

// Exportation
// Pour accéder à ces fonctions à partir de index.js en utilisant module.exports , en créant un objet
// à partir d'une fonctions. Comme nous utilisons la syntaxe ES6, nous pouvons écrire getUsers au lieu
// de getUsers:getUsers , etc.

module.exports = {
  getUsers,
  getUserById,
  createUser,
  updateUser,
  deleteUser,
};

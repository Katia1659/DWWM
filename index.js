const express = require('express')
const bodyParser = require('body-parser')
const app = express()
const port = 3000
app.use(bodyParser.json())
app.use(

bodyParser.urlencoded({
 extended: true,
 })
)

app.get('/', (request, response) => {

    response.json({ info: 'Node.js, Express, and Postgres API' })
    })

    app.listen(port, () => {

        console.log(`App running on port ${port}.`)
        })

        // permet de lier le dossier queries au dossier index
        const db = require('./queries')

        // définit une méthode http en indiquant le chemin URL et sa fonction attribuée
        app.get('/users', db.getUsers)
app.get('/users/:id', db.getUserById)
app.post('/users', db.createUser)
app.put('/users/:id', db.updateUser)
app.delete('/users/:id', db.deleteUser)
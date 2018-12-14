//imports
const express = require('express')
const Mongo = require('mongodb')
const mongoClient  = Mongo.MongoClient
const ObjectId = Mongo.ObjectID
const assert = require('assert')
const todos = require('./todo.js')
const bodyParser = require('body-parser')

//presettings
const app = express()
const port = 3000
//terminal output once node index.js is run
app.listen(port, () => console.log('App is listening on port:  ' + port))

//connecting to NOSQL Mongo -> connection to the URL
const url = 'mongodb://localhost:27017'
//Database Name
const dbName = 'todo'
//instantiating new mongo client
const client = new mongoClient(url)

//bodyParser
let jsonParser = bodyParser.json()


app.get('/todos', (req, res) =>  {
    client.connect((err, client) => {
        assert.equal(null, err)
        console.log("Connected successfully to server")

        const db = client.db(dbName);
        //defining todos variable to be fetched from post request.

        //functions will go in here
        todos.getAllTodos(db)

        client.close()
    })
    res.send('done')
})

app.post('/todos', jsonParser, (req, res) =>  {
    client.connect((err, client) => {
        assert.equal(null, err)
        console.log("Connected successfully to server")

        const db = client.db(dbName);
        //declaring
        let name = req.body.name

        //functions will go in here
        todos.createNewTodo(db, name)

        client.close()
    })
    res.send('done')
})

app.put('/todos/:id', jsonParser, (req, res) =>  {
    client.connect((err, client) => {
        assert.equal(null, err)
        console.log("Connected successfully to server")

        const db = client.db(dbName);
        //declaring
        let name = req.body.name
        let completed = req.body.completed


        let id = new ObjectId(req.params.id)
        //functions will go in here
        todos.markAsCompleted(db, id, completed)

        client.close()
    })
    res.send('done')
})

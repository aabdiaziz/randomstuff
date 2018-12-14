const express = require('express')
const todos = require('./todoapp.js')
const bodyParser = require('body-parser')
const exphbs = require('express-handlebars')
const mongoClient  = require('mongodb').MongoClient
const assert = require('assert')
const mysql  = require('mysql')


const app = express()
const port = 3000


//connecting to NOSQL Mongo -> connection to the URL
const url = 'mongodb://localhost:27017'
//Database Name
const dbName = 'phadgers'
//instantiating new mongo client
const client = new mongoClient(url)


app.get('/mongodb', (req, res) =>  {
    client.connect((err, client) => {
        assert.equal(null, err)
        console.log("Connected successfully to server")

        const db = client.db(dbName);
        getDataFromDB(db)

        client.close()
    })
    res.send('done')
})

let getDataFromDB = (db) => {
    let collection = db.collection('students')
    collection.find({}).toArray((err, docs) => {
        console.log("Found the following records")
        console.log(docs)
    })
}


//sql stuff

let connection = mysql.createPool({
    connectionLimit: 10,
    host: "192.168.20.20",
    user: 'root',
    database: "pokedex"
})

// let connection2 = mysql.createPool({
//     connectionLimit: 10,
//     host: "192.168.20.20",
//     user: 'root',
//     database: "Todo"
// })


app.get('/mysql', (req, res) => {
    connection.query('SELECT * FROM `pokemon`', (error, results, fields) => {
        res.render('home', {data: results})
    })
})





let jsonParser = bodyParser.json()


//sql query and connection.



//staticfiles in express
app.use('/public', express.static('public'))
//making routes for my todos app.
app.get('/todos', (req, res) => res.send(todos.getALLToDos()))
app.get('/todos/:id', (req, res) => res.send(todos.getOneToDo(req.param.id)))
app.post('/todo', jsonParser , (req, res) => res.json(req.body))
app.post('/finishedTodo/:name', (req, res) => res.send('finished todo number: ' + req.param('name')))
app.delete('/deleteTodo/:name', (req, res) => res.send('todo number: ' + req.param('name')))

app.engine('handlebars', exphbs({defaultLayout: 'main'}));
app.set('view engine', 'handlebars');

//handle
app.get('/:name/:age', (req, res) => res.render('home', {data: req.params}) );
// app.get('/:name/:age', (req, res) => res.render('home', {data: req.params}) );



app.listen(port, () => console.log('App is listening on port:  ' + port))
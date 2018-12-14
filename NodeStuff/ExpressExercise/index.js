const express = require('express')
const name = require('./abdi.js')
const bodyParser = require('body-parser')

const app = express()
const port = 3000

let jsonParser = bodyParser.json


app.get('/', (req, res) => res.send("hello World!"))
// app.get('/abdi', (req, res) => res.send(name.tanzania()))
app.get('/abdi', (req, res) => res.json(req.query))
app.get('/a/:tagId', (req, res) => res.send('Hello: ' + req.param('tagId'))) //get request with a/[variable] being inputted into the front-end.
app.post('/abdi', jsonParser,(req, res) => res.json(req.body))
// app.delete('/abdi', (req, res) => res.send(name.tanzania()))

app.listen(port, () => console.log('App is listening on port:  ' + port))
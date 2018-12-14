module.exports.getAllTodos = (db) => {
    let collection = db.collection('todos')
    collection.find({}).toArray((err, docs) => {
        console.log("Found the following records")
        console.log(docs)
    })
}

module.exports.createNewTodo = (db, name) => {
    db.collection('todos').insertOne({
        "name" : name
    }, function(err, result) {
        console.log("Inserted an address into the places collection.");
        console.log(result.ops);
    })
}

module.exports.markAsCompleted = (db, id, completed) => {
    let collection = db.collection('todos')

    collection.updateOne({"_id" : id},
         { $set: {"completed" : completed}}, (err, results) => {
            if (err  == null) {
                console.log('it brokeded')
            }
            if (results.modifiedCount != 1) {
                console.log('no record found')
            }

            console.log("Todo: "+ name + "Completed for todo")
        })
}


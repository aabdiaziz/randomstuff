todos =
    { data:
        [
            {"id":1, "name":"cleaning"},
            {"id":2, "name":"washing"},
            {"id":3, "name":"shopping"},
            {"id":4, "name":"dropping the kids off!"},
        ]
    }

module.exports.getALLToDos = function () {
    allTodos = JSON.stringify(todos)
    console.log(allTodos)
    return allTodos
}

module.exports.getOneToDo = function (id) {
    todo = todos.data.forEach( (elements) => {
        if (elements.id === id) {
            console.log(elements.id + elements.name)
        } else {
            return 'hello'
        }
    })
}


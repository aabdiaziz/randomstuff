document.getElementById('myForm').addEventListener('submit', function (e) {
    e.preventDefault();

    var dataObj = document.querySelectorAll('.form-control')
    var object = {}
    dataObj.forEach(function(item){
        if (item.type == 'checkbox'){
            object[item.value] = item.checked
        } else {
            object[item.name] = item.value
        }
    });

    console.log(object)

// exercise 4 sending data via ajax.

var http = new XMLHttpRequest()




$('#orders').on('submit', function (e) {
    processData(e)
    calculateTotal()
    // playWithData(object)
})

var object = {}

function processData(e) {
    //then select all the elements with the class .form-control
    e.preventDefault();
    var dataObj = document.querySelectorAll('.form-control')
    dataObj.forEach(function (item) {
        object[item.name] = item.value
    });
    console.log(object)
    return object
}

$('[name=quantity], [name=price]').on('input', function calculateTotal() {
    // var $total = $('[name=quantity]').value * $('[name=price]').value
    console.log($('#quantity').value)
    // $('<div> New Content</div>').insertBefore('#total')
})


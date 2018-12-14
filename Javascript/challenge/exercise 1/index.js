var foo = 'bar'

function tmp(){
    console.log(foo)
    var foo = 'hello'
    console.log(foo)
}

tmp()
//
// outputs foo first which is 'bar' then changes it to 'hello'


// var fruit = document.getElementById('fruit').textContent = 'Hello, This text is changed.'
//
//
// var animals = document.getElementsByClassName('animals')
//
// console.log(animals)
//
// for (var i = 0; i<animals.length; i++){
//     animals[i].textContent = 'Hello, This text is changed.'
// }
//
// var cars = document.querySelectorAll('.cars')
//
// cars.forEach(function (cars){
//     cars.innerHTML = '\'Hello, This text is changed.\''
//     cars.innerHTML += '<form><input type="button" value="cars"></form>'
// })
//
// cars.textContent = 'these cars are red'

// document.getElementById('changingCar').addEventListener('click', function () {
//     var changingCar = document.getElementById('changingCar')
//     changingCar.setAttribute('data-cars', 20)
//     console.log(changingCar)
// })
//
// function myFunction() {
//     var x = document.getElementById("changingCar").value;
//     document.getElementById("demo").innerHTML = "You wrote: " + x;
// }
//
// function saveFunction() {
//     var y = document.getElementById()
// }



//
// var cars = document.getElementsByTagName("div.cars").textContent = 'Hello, This text is changed.'
//
//
// var tytyt = function (iuiu){
//
// }
//
// var ooo = document.getElementById('changingCar')
//

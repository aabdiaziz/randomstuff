
var menu = $('#menu').hide()

$('#burgerMenu').on('click',function () {
    menu.slideToggle()
})

var modal = $('#Modal').hide()

$('#openModal').on('click', function (){
    modal.slideToggle()
})


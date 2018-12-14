var build = new CustomEvent('myBuild', {
    bubbles: true,
    cancelable: true,
    detail : {
        name: 'Abdi',
        city: 'skyPeer',
        house: 20,
        TotalCars: 200
    }
})

// document.getElementById('build').addEventListener('myBuild', function(e) {
//     console.log(e.detail.city)
//     console.log(e.detail.name)
//     // document.getElementById("build").innerHTML = ;
//
// })
//
// setTimeout(function () {
//     document.getElementById('build').dispatchEvent(build)
// }, 3000)

var build = document.querySelectorAll('.build')

build.forEach(function (build) {
    build.addEventListener('click', function (e) {
        e.target.textContent += 'hello '
    })
})

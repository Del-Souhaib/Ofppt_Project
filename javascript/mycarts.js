/*********navbar *********/
var tracker = 0
var toggle = document.getElementById('toggle')
var items = document.getElementsByClassName('item')
toggle.addEventListener('click', function () {
    if (tracker == 0) {
        toggle.src = "../images/Icons/close.png";
        for (var i = 0; i < 7; i++) {
            items[i].style.display = "block"
        }
        tracker = 1;

    } else if (tracker == 1) {
        toggle.src = "../images/Icons/toggle.png"
        for (var i = 0; i < 7; i++) {
            items[i].style.display = "none"
        }
        tracker = 0;
    }
})

/*****change* */
var form1 = document.getElementById('form1')
var form2 = document.getElementById('form2')

document.getElementById('orders').addEventListener('click', function () {

    form2.style.display = "none"
    form1.style.display = "flex"


})
document.getElementById('carts').addEventListener('click', function () {
    form1.style.display = "none"
    form2.style.display = "flex"


})
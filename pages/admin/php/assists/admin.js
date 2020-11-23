/*************navbar 2********* */
var tracker2 = 0;
var toggle2 = document.getElementById('togglecm')
var item2 = document.getElementsByClassName('item2')
toggle2.addEventListener('click', function () {
    if (tracker2 == 0) {
        toggle2.src = "close.png"
        for (var i = 0; i <= 5; i++) {
            item2[i].style.display = "block"
        }
        tracker2 = 1

    } else {
        toggle2.src = "toggle.png"
        for (var i = 0; i <= 5; i++) {
            item2[i].style.display = "none"
        }
        tracker2 = 0

    }

})
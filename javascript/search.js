/*********navbar *********/
var tracker = 0
var toggle = document.getElementById('toggle')
var items = document.getElementsByClassName('item')
var height = document.getElementById('nav2')
toggle.addEventListener('click', function () {
    if (tracker == 0) {
        toggle.src = "../images/Icons/close.png";
        height.style.height = "70vh";
        for (var i = 0; i <= 8; i++) {
            items[i].style.display = "block"

        }
        tracker = 1;

    } else if (tracker == 1) {
        height.style.height = "0px";

        toggle.src = "../images/Icons/toggle.png"
        for (var i = 0; i <= 8; i++) {
            items[i].style.display = "none"

        }
        tracker = 0;
    }
})


/***********navbar 2*********/


var animal = document.getElementsByClassName('animal')
var arrow = document.getElementsByClassName('navarrow')
var dropdown = document.getElementsByClassName('dropdown')
// 1
var tracker0 = 0
arrow[0].addEventListener('click', function () {

    if (tracker0 == 0) {
        for (var i = 0; i <= 5; i++) {
            dropdown[i].style.display = "none"
            arrow[i].src = "../images/Icons/right.svg"
            tracker0 = 0
            tracker1 = 0
            tracker2 = 0
            tracker3 = 0
            tracker4 = 0
            tracker5 = 0
            tracker6 = 0

        }
        dropdown[0].style.display = "block"
        arrow[0].src = "../images/Icons/downright.png"
        tracker0 = 1


    } else {
        dropdown[0].style.display = "none"
        arrow[0].src = "../images/Icons/right.svg"
        tracker0 = 0
    }
})
// 2
var tracker1 = 0
arrow[1].addEventListener('click', function () {
    if (tracker1 == 0) {
        for (var i = 0; i <= 5; i++) {
            dropdown[i].style.display = "none"
            arrow[i].src = "../images/Icons/right.svg"
            tracker0 = 0
            tracker1 = 0
            tracker2 = 0
            tracker3 = 0
            tracker4 = 0
            tracker5 = 0
            tracker6 = 0

        }
        dropdown[1].style.display = "block"
        arrow[1].src = "../images/Icons/downright.png"
        tracker1 = 1
    } else {
        dropdown[1].style.display = "none"
        arrow[1].src = "../images/Icons/right.svg"
        tracker1 = 0
    }
})
// 3
var tracker2 = 0
arrow[2].addEventListener('click', function () {
    if (tracker2 == 0) {
        for (var i = 0; i <= 5; i++) {
            dropdown[i].style.display = "none"
            arrow[i].src = "../images/Icons/right.svg"
            tracker0 = 0
            tracker1 = 0
            tracker2 = 0
            tracker3 = 0
            tracker4 = 0
            tracker5 = 0
            tracker6 = 0

        }
        dropdown[2].style.display = "block"
        arrow[2].src = "../images/Icons/downright.png"
        tracker2 = 1
    } else {
        dropdown[2].style.display = "none"
        arrow[2].src = "../images/Icons/right.svg"
        tracker2 = 0
    }
})
// 4
var tracker3 = 0
arrow[3].addEventListener('click', function () {
    if (tracker3 == 0) {
        for (var i = 0; i <= 5; i++) {
            dropdown[i].style.display = "none"
            arrow[i].src = "../images/Icons/right.svg"
            tracker0 = 0
            tracker1 = 0
            tracker2 = 0
            tracker3 = 0
            tracker4 = 0
            tracker5 = 0
            tracker6 = 0

        }
        dropdown[3].style.display = "block"
        arrow[3].src = "../images/Icons/downright.png"
        tracker3 = 1
    } else {
        dropdown[3].style.display = "none"
        arrow[3].src = "../images/Icons/right.svg"
        tracker3 = 0
    }
})
// 5
var tracker4 = 0
arrow[4].addEventListener('click', function () {
    if (tracker4 == 0) {
        for (var i = 0; i <= 5; i++) {
            dropdown[i].style.display = "none"
            arrow[i].src = "../images/Icons/right.svg"
            tracker0 = 0
            tracker1 = 0
            tracker2 = 0
            tracker3 = 0
            tracker4 = 0
            tracker5 = 0
            tracker6 = 0

        }
        dropdown[4].style.display = "block"
        arrow[4].src = "../images/Icons/downright.png"
        tracker4 = 1
    } else {
        dropdown[4].style.display = "none"
        arrow[4].src = "../images/Icons/right.svg"
        tracker4 = 0
    }
})
// 6
var tracker5 = 0
arrow[5].addEventListener('click', function () {
    if (tracker5 == 0) {
        for (var i = 0; i <= 5; i++) {
            dropdown[i].style.display = "none"
            arrow[i].src = "../images/Icons/right.svg"
            tracker0 = 0
            tracker1 = 0
            tracker2 = 0
            tracker3 = 0
            tracker4 = 0
            tracker5 = 0
            tracker6 = 0

        }
        dropdown[5].style.display = "block"
        arrow[5].src = "../images/Icons/downright.png"
        tracker5 = 1
    } else {
        dropdown[5].style.display = "none"
        arrow[5].src = "../images/Icons/right.svg"
        tracker5 = 0
    }
})
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

/************* Slider 1 *************/
if (window.innerWidth > 623) {
    var tracker2 = 1
    var img = document.getElementById('sliderpic')
    var poits = document.getElementsByClassName('poit')
    var date = document.getElementsByClassName('date')
    var left = document.getElementById('left').addEventListener('click', function () {
        if (tracker2 == 1) {
            for (var i = 0; i <= 4; i++) {
                poits[i].src = "../images/Icons/poit1.png"
                date[i].style.fontSize = "25px"
                poits[i].style.width = "20px"
                poits[i].style.height = "20px"

            }
            poits[4].src = "../images/Icons/poit2.png"
            date[4].style.fontSize = "35px"
            poits[4].style.width = "30px"
            poits[4].style.height = "30px"
            img.src = "../images/story/pic5.png"
            tracker2 = 5
        } else if (tracker2 == 2) {
            for (var i = 0; i <= 4; i++) {
                poits[i].src = "../images/Icons/poit1.png"
                date[i].style.fontSize = "25px"
                poits[i].style.width = "20px"
                poits[i].style.height = "20px"
            }
            poits[0].src = "../images/Icons/poit2.png"
            date[0].style.fontSize = "35px"
            poits[0].style.width = "30px"
            poits[0].style.height = "30px"
            img.src = "../images/story/pic4.png"
            tracker2 = 1
        } else if (tracker2 == 3) {
            for (var i = 0; i <= 4; i++) {
                poits[i].src = "../images/Icons/poit1.png"
                date[i].style.fontSize = "25px"
                poits[i].style.width = "20px"
                poits[i].style.height = "20px"
            }
            poits[1].src = "../images/Icons/poit2.png"
            date[1].style.fontSize = "35px"
            poits[1].style.width = "30px"
            poits[1].style.height = "30px"
            img.src = "../images/story/pic3.png"
            tracker2 = 2
        } else if (tracker2 == 4) {
            for (var i = 0; i <= 4; i++) {
                poits[i].src = "../images/Icons/poit1.png"
                date[i].style.fontSize = "25px"
                poits[i].style.width = "20px"
                poits[i].style.height = "20px"
            }
            poits[2].src = "../images/Icons/poit2.png"
            date[2].style.fontSize = "35px"
            poits[2].style.width = "30px"
            poits[2].style.height = "30px"
            img.src = "../images/story/pic2.png"
            tracker2 = 3
        } else if (tracker2 == 5) {
            for (var i = 0; i <= 4; i++) {
                poits[i].src = "../images/Icons/poit1.png"
                date[i].style.fontSize = "25px"
                poits[i].style.width = "20px"
                poits[i].style.height = "20px"
            }
            poits[3].src = "../images/Icons/poit2.png"
            date[3].style.fontSize = "35px"
            poits[3].style.width = "30px"
            poits[3].style.height = "30px"
            img.src = "../images/story/pic4.png"
            tracker2 = 4
        }
    })
    var right = document.getElementById('right').addEventListener('click', function () {
        if (tracker2 == 1) {
            for (var i = 0; i <= 4; i++) {
                poits[i].src = "../images/Icons/poit1.png"
                date[i].style.fontSize = "25px"
                poits[i].style.width = "20px"
                poits[i].style.height = "20px"

            }
            poits[1].src = "../images/Icons/poit2.png"
            date[1].style.fontSize = "35px"
            poits[1].style.width = "30px"
            poits[1].style.height = "30px"
            img.src = "../images/story/pic2.png"
            tracker2 = 2
        } else if (tracker2 == 2) {
            for (var i = 0; i <= 4; i++) {
                poits[1].src = "../images/Icons/poit1.png"
                date[i].style.fontSize = "25px"
                poits[i].style.width = "20px"
                poits[i].style.height = "20px"
            }
            poits[2].src = "../images/Icons/poit2.png"
            date[2].style.fontSize = "35px"
            poits[2].style.width = "30px"
            poits[2].style.height = "30px"
            img.src = "../images/story/pic3.png"
            tracker2 = 3
        } else if (tracker2 == 3) {
            for (var i = 0; i <= 4; i++) {
                poits[i].src = "../images/Icons/poit1.png"
                date[i].style.fontSize = "25px"
                poits[i].style.width = "20px"
                poits[i].style.height = "20px"
            }
            poits[3].src = "../images/Icons/poit2.png"
            date[3].style.fontSize = "35px"
            poits[3].style.width = "30px"
            poits[3].style.height = "30px"
            img.src = "../images/story/pic4.png"
            tracker2 = 4
        } else if (tracker2 == 4) {
            for (var i = 0; i <= 4; i++) {
                poits[i].src = "../images/Icons/poit1.png"
                date[i].style.fontSize = "25px"
                poits[i].style.width = "20px"
                poits[i].style.height = "20px"
            }
            poits[4].src = "../images/Icons/poit2.png"
            date[4].style.fontSize = "35px"
            poits[4].style.width = "30px"
            poits[4].style.height = "30px"
            img.src = "../images/story/pic5.png"
            tracker2 = 5
        } else if (tracker2 == 5) {
            for (var i = 0; i <= 4; i++) {
                poits[i].src = "../images/Icons/poit1.png"
                date[i].style.fontSize = "25px"
                poits[i].style.width = "20px"
                poits[i].style.height = "20px"
            }
            poits[0].src = "../images/Icons/poit2.png"
            date[0].style.fontSize = "35px"
            poits[0].style.width = "30px"
            poits[0].style.height = "30px"
            img.src = "../images/story/pic1.png"
            tracker2 = 1
        }
    })
    poits[0].addEventListener('click', function () {
        for (var i = 0; i <= 4; i++) {
            poits[i].src = "../images/Icons/poit1.png"
            date[i].style.fontSize = "25px"
            poits[i].style.width = "20px"
            poits[i].style.height = "20px"
        }
        poits[0].src = "../images/Icons/poit2.png"
        date[0].style.fontSize = "35px"
        poits[0].style.width = "30px"
        poits[0].style.height = "30px"
        img.src = "../images/story/pic1.png"
        tracker2 = 1

    })
    poits[1].addEventListener('click', function () {

        for (var i = 0; i <= 4; i++) {
            poits[i].src = "../images/Icons/poit1.png"
            date[i].style.fontSize = "25px"
            poits[i].style.width = "20px"
            poits[i].style.height = "20px"
        }
        poits[1].src = "../images/Icons/poit2.png"
        date[1].style.fontSize = "35px"
        poits[1].style.width = "30px"
        poits[1].style.height = "30px"
        img.src = "../images/story/pic2.png"
        tracker2 = 2

    })
    poits[2].addEventListener('click', function () {

        for (var i = 0; i <= 4; i++) {
            poits[i].src = "../images/Icons/poit1.png"
            date[i].style.fontSize = "25px"
            poits[i].style.width = "20px"
            poits[i].style.height = "20px"
        }
        poits[2].src = "../images/Icons/poit2.png"
        date[2].style.fontSize = "35px"
        poits[2].style.width = "30px"
        poits[2].style.height = "30px"
        img.src = "../images/story/pic3.png"
        tracker2 = 3

    })
    poits[3].addEventListener('click', function () {

        for (var i = 0; i <= 4; i++) {
            poits[i].src = "../images/Icons/poit1.png"
            date[i].style.fontSize = "25px"
            poits[i].style.width = "20px"
            poits[i].style.height = "20px"
        }
        poits[3].src = "../images/Icons/poit2.png"
        date[3].style.fontSize = "35px"
        poits[3].style.width = "30px"
        poits[3].style.height = "30px"
        img.src = "../images/story/pic4.png"
        tracker2 = 4

    })
    poits[4].addEventListener('click', function () {

        for (var i = 0; i <= 4; i++) {
            poits[i].src = "../images/Icons/poit1.png"
            date[i].style.fontSize = "25px"
            poits[i].style.width = "20px"
            poits[i].style.height = "20px"
        }
        poits[4].src = "../images/Icons/poit2.png"
        date[4].style.fontSize = "35px"
        poits[4].style.width = "30px"
        poits[4].style.height = "30px"
        img.src = "../images/story/pic5.png"
        tracker2 = 5

    })

    date[0].addEventListener('click', function () {
        for (var i = 0; i <= 4; i++) {
            poits[i].src = "../images/Icons/poit1.png"
            date[i].style.fontSize = "25px"
            poits[i].style.width = "20px"
            poits[i].style.height = "20px"
        }
        poits[0].src = "../images/Icons/poit2.png"
        date[0].style.fontSize = "35px"
        poits[0].style.width = "30px"
        poits[0].style.height = "30px"
        img.src = "../images/story/pic1.png"
        tracker2 = 1

    })
    date[1].addEventListener('click', function () {

        for (var i = 0; i <= 4; i++) {
            poits[i].src = "../images/Icons/poit1.png"
            date[i].style.fontSize = "25px"
            poits[i].style.width = "20px"
            poits[i].style.height = "20px"
        }
        poits[1].src = "../images/Icons/poit2.png"
        date[1].style.fontSize = "35px"
        poits[1].style.width = "30px"
        poits[1].style.height = "30px"
        img.src = "../images/story/pic2.png"
        tracker2 = 2

    })
    date[2].addEventListener('click', function () {

        for (var i = 0; i <= 4; i++) {
            poits[i].src = "../images/Icons/poit1.png"
            date[i].style.fontSize = "25px"
            poits[i].style.width = "20px"
            poits[i].style.height = "20px"
        }
        poits[2].src = "../images/Icons/poit2.png"
        date[2].style.fontSize = "35px"
        poits[2].style.width = "30px"
        poits[2].style.height = "30px"
        img.src = "../images/story/pic3.png"
        tracker2 = 3

    })
    date[3].addEventListener('click', function () {

        for (var i = 0; i <= 4; i++) {
            poits[i].src = "../images/Icons/poit1.png"
            date[i].style.fontSize = "25px"
            poits[i].style.width = "20px"
            poits[i].style.height = "20px"
        }
        poits[3].src = "../images/Icons/poit2.png"
        date[3].style.fontSize = "35px"
        poits[3].style.width = "30px"
        poits[3].style.height = "30px"
        img.src = "../images/story/pic4.png"
        tracker2 = 4

    })
    date[4].addEventListener('click', function () {

        for (var i = 0; i <= 4; i++) {
            poits[i].src = "../images/Icons/poit1.png"
            date[i].style.fontSize = "25px"
            poits[i].style.width = "20px"
            poits[i].style.height = "20px"
        }
        poits[4].src = "../images/Icons/poit2.png"
        date[4].style.fontSize = "35px"
        poits[4].style.width = "30px"
        poits[4].style.height = "30px"
        img.src = "../images/story/pic5.png"
        tracker2 = 5

    })

} else {
    var tracker2 = 1
    var img = document.getElementById('sliderpic')
    var poits = document.getElementsByClassName('poit')
    var date = document.getElementsByClassName('date')
    var left = document.getElementById('left').addEventListener('click', function () {
        if (tracker2 == 1) {
            for (var i = 0; i <= 4; i++) {
                poits[i].src = "../images/Icons/poit1.png"
                date[i].style.fontSize = "15px"
                poits[i].style.width = "20px"
                poits[i].style.height = "20px"

            }
            poits[4].src = "../images/Icons/poit2.png"
            date[4].style.fontSize = "25px"
            poits[4].style.width = "30px"
            poits[4].style.height = "30px"
            img.src = "../images/story/pic5.png"
            tracker2 = 5
        } else if (tracker2 == 2) {
            for (var i = 0; i <= 4; i++) {
                poits[i].src = "../images/Icons/poit1.png"
                date[i].style.fontSize = "25px"
                poits[i].style.width = "20px"
                poits[i].style.height = "20px"
            }
            poits[0].src = "../images/Icons/poit2.png"
            date[0].style.fontSize = "25px"
            poits[0].style.width = "30px"
            poits[0].style.height = "30px"
            img.src = "../images/story/pic4.png"
            tracker2 = 1
        } else if (tracker2 == 3) {
            for (var i = 0; i <= 4; i++) {
                poits[i].src = "../images/Icons/poit1.png"
                date[i].style.fontSize = "15px"
                poits[i].style.width = "20px"
                poits[i].style.height = "20px"
            }
            poits[1].src = "../images/Icons/poit2.png"
            date[1].style.fontSize = "25px"
            poits[1].style.width = "30px"
            poits[1].style.height = "30px"
            img.src = "../images/story/pic3.png"
            tracker2 = 2
        } else if (tracker2 == 4) {
            for (var i = 0; i <= 4; i++) {
                poits[i].src = "../images/Icons/poit1.png"
                date[i].style.fontSize = "15px"
                poits[i].style.width = "20px"
                poits[i].style.height = "20px"
            }
            poits[2].src = "../images/Icons/poit2.png"
            date[2].style.fontSize = "25px"
            poits[2].style.width = "30px"
            poits[2].style.height = "30px"
            img.src = "../images/story/pic2.png"
            tracker2 = 3
        } else if (tracker2 == 5) {
            for (var i = 0; i <= 4; i++) {
                poits[i].src = "../images/Icons/poit1.png"
                date[i].style.fontSize = "15px"
                poits[i].style.width = "20px"
                poits[i].style.height = "20px"
            }
            poits[3].src = "../images/Icons/poit2.png"
            date[3].style.fontSize = "25px"
            poits[3].style.width = "30px"
            poits[3].style.height = "30px"
            img.src = "../images/story/pic4.png"
            tracker2 = 4
        }
    })
    var right = document.getElementById('right').addEventListener('click', function () {
        if (tracker2 == 1) {
            for (var i = 0; i <= 4; i++) {
                poits[i].src = "../images/Icons/poit1.png"
                date[i].style.fontSize = "15px"
                poits[i].style.width = "20px"
                poits[i].style.height = "20px"

            }
            poits[1].src = "../images/Icons/poit2.png"
            date[1].style.fontSize = "25px"
            poits[1].style.width = "30px"
            poits[1].style.height = "30px"
            img.src = "../images/story/pic2.png"
            tracker2 = 2
        } else if (tracker2 == 2) {
            for (var i = 0; i <= 4; i++) {
                poits[1].src = "../images/Icons/poit1.png"
                date[i].style.fontSize = "15px"
                poits[i].style.width = "20px"
                poits[i].style.height = "20px"
            }
            poits[2].src = "../images/Icons/poit2.png"
            date[2].style.fontSize = "25px"
            poits[2].style.width = "30px"
            poits[2].style.height = "30px"
            img.src = "../images/story/pic3.png"
            tracker2 = 3
        } else if (tracker2 == 3) {
            for (var i = 0; i <= 4; i++) {
                poits[i].src = "../images/Icons/poit1.png"
                date[i].style.fontSize = "15px"
                poits[i].style.width = "20px"
                poits[i].style.height = "20px"
            }
            poits[3].src = "../images/Icons/poit2.png"
            date[3].style.fontSize = "25px"
            poits[3].style.width = "30px"
            poits[3].style.height = "30px"
            img.src = "../images/story/pic4.png"
            tracker2 = 4
        } else if (tracker2 == 4) {
            for (var i = 0; i <= 4; i++) {
                poits[i].src = "../images/Icons/poit1.png"
                date[i].style.fontSize = "15px"
                poits[i].style.width = "20px"
                poits[i].style.height = "20px"
            }
            poits[4].src = "../images/Icons/poit2.png"
            date[4].style.fontSize = "25px"
            poits[4].style.width = "30px"
            poits[4].style.height = "30px"
            img.src = "../images/story/pic5.png"
            tracker2 = 5
        } else if (tracker2 == 5) {
            for (var i = 0; i <= 4; i++) {
                poits[i].src = "../images/Icons/poit1.png"
                date[i].style.fontSize = "15px"
                poits[i].style.width = "20px"
                poits[i].style.height = "20px"
            }
            poits[0].src = "../images/Icons/poit2.png"
            date[0].style.fontSize = "25px"
            poits[0].style.width = "30px"
            poits[0].style.height = "30px"
            img.src = "../images/story/pic1.png"
            tracker2 = 1
        }
    })
    poits[0].addEventListener('click', function () {
        for (var i = 0; i <= 4; i++) {
            poits[i].src = "../images/Icons/poit1.png"
            date[i].style.fontSize = "15px"
            poits[i].style.width = "20px"
            poits[i].style.height = "20px"
        }
        poits[0].src = "../images/Icons/poit2.png"
        date[0].style.fontSize = "25px"
        poits[0].style.width = "30px"
        poits[0].style.height = "30px"
        img.src = "../images/story/pic1.png"
        tracker2 = 1

    })
    poits[1].addEventListener('click', function () {

        for (var i = 0; i <= 4; i++) {
            poits[i].src = "../images/Icons/poit1.png"
            date[i].style.fontSize = "15px"
            poits[i].style.width = "20px"
            poits[i].style.height = "20px"
        }
        poits[1].src = "../images/Icons/poit2.png"
        date[1].style.fontSize = "25px"
        poits[1].style.width = "30px"
        poits[1].style.height = "30px"
        img.src = "../images/story/pic2.png"
        tracker2 = 2

    })
    poits[2].addEventListener('click', function () {

        for (var i = 0; i <= 4; i++) {
            poits[i].src = "../images/Icons/poit1.png"
            date[i].style.fontSize = "15px"
            poits[i].style.width = "20px"
            poits[i].style.height = "20px"
        }
        poits[2].src = "../images/Icons/poit2.png"
        date[2].style.fontSize = "25px"
        poits[2].style.width = "30px"
        poits[2].style.height = "30px"
        img.src = "../images/story/pic3.png"
        tracker2 = 3

    })
    poits[3].addEventListener('click', function () {

        for (var i = 0; i <= 4; i++) {
            poits[i].src = "../images/Icons/poit1.png"
            date[i].style.fontSize = "15px"
            poits[i].style.width = "20px"
            poits[i].style.height = "20px"
        }
        poits[3].src = "../images/Icons/poit2.png"
        date[3].style.fontSize = "25px"
        poits[3].style.width = "30px"
        poits[3].style.height = "30px"
        img.src = "../images/story/pic4.png"
        tracker2 = 4

    })
    poits[4].addEventListener('click', function () {

        for (var i = 0; i <= 4; i++) {
            poits[i].src = "../images/Icons/poit1.png"
            date[i].style.fontSize = "15px"
            poits[i].style.width = "20px"
            poits[i].style.height = "20px"
        }
        poits[4].src = "../images/Icons/poit2.png"
        date[4].style.fontSize = "25px"
        poits[4].style.width = "30px"
        poits[4].style.height = "30px"
        img.src = "../images/story/pic5.png"
        tracker2 = 5

    })

    date[0].addEventListener('click', function () {
        for (var i = 0; i <= 4; i++) {
            poits[i].src = "../images/Icons/poit1.png"
            date[i].style.fontSize = "15px"
            poits[i].style.width = "20px"
            poits[i].style.height = "20px"
        }
        poits[0].src = "../images/Icons/poit2.png"
        date[0].style.fontSize = "25px"
        poits[0].style.width = "30px"
        poits[0].style.height = "30px"
        img.src = "../images/story/pic1.png"
        tracker2 = 1

    })
    date[1].addEventListener('click', function () {

        for (var i = 0; i <= 4; i++) {
            poits[i].src = "../images/Icons/poit1.png"
            date[i].style.fontSize = "15px"
            poits[i].style.width = "20px"
            poits[i].style.height = "20px"
        }
        poits[1].src = "../images/Icons/poit2.png"
        date[1].style.fontSize = "25px"
        poits[1].style.width = "30px"
        poits[1].style.height = "30px"
        img.src = "../images/story/pic2.png"
        tracker2 = 2

    })
    date[2].addEventListener('click', function () {

        for (var i = 0; i <= 4; i++) {
            poits[i].src = "../images/Icons/poit1.png"
            date[i].style.fontSize = "15px"
            poits[i].style.width = "20px"
            poits[i].style.height = "20px"
        }
        poits[2].src = "../images/Icons/poit2.png"
        date[2].style.fontSize = "25px"
        poits[2].style.width = "30px"
        poits[2].style.height = "30px"
        img.src = "../images/story/pic3.png"
        tracker2 = 3

    })
    date[3].addEventListener('click', function () {

        for (var i = 0; i <= 4; i++) {
            poits[i].src = "../images/Icons/poit1.png"
            date[i].style.fontSize = "15px"
            poits[i].style.width = "20px"
            poits[i].style.height = "20px"
        }
        poits[3].src = "../images/Icons/poit2.png"
        date[3].style.fontSize = "25px"
        poits[3].style.width = "30px"
        poits[3].style.height = "30px"
        img.src = "../images/story/pic4.png"
        tracker2 = 4

    })
    date[4].addEventListener('click', function () {

        for (var i = 0; i <= 4; i++) {
            poits[i].src = "../images/Icons/poit1.png"
            date[i].style.fontSize = "15px"
            poits[i].style.width = "20px"
            poits[i].style.height = "20px"
        }
        poits[4].src = "../images/Icons/poit2.png"
        date[4].style.fontSize = "25px"
        poits[4].style.width = "30px"
        poits[4].style.height = "30px"
        img.src = "../images/story/pic5.png"
        tracker2 = 5

    })
}
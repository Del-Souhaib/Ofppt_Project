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



/******main****/
/* Assurance type */
var tracker1_1 = 0
var tracker1_2 = 0
var tracker1_3 = 0
var tracker1_4 = 0
var lifetime = document.getElementById('lifetime')
var Maximum = document.getElementById('Maximum')
var limited = document.getElementById('limited')
var Accident = document.getElementById('Accident')
var type = document.getElementsByClassName('type')
/*lifetime.style.display = "none"

    Maximum.style.display = "none"
    limited.style.display = "none"
    Accident.style.display = "none"*/
type[0].addEventListener('click', function () {

    Maximum.style.display = "none"
    limited.style.display = "none"
    Accident.style.display = "none"
    tracker1_2 = 0
    tracker1_3 = 0
    tracker1_4 = 0
    if (tracker1_1 == 0) {
        lifetime.style.display = "block"
        tracker1_1 = 1

    } else {
        lifetime.style.display = "none"
        tracker1_1 = 0
    }
})


type[1].addEventListener('click', function () {
    lifetime.style.display = "none"
    limited.style.display = "none"
    Accident.style.display = "none"
    tracker1_1 = 0
    tracker1_3 = 0
    tracker1_4 = 0
    if (tracker1_2 == 0) {
        Maximum.style.display = "block"
        tracker1_2 = 1

    } else {
        Maximum.style.display = "none"
        tracker1_2 = 0
    }
})


type[2].addEventListener('click', function () {
    lifetime.style.display = "none"
    Maximum.style.display = "none"
    Accident.style.display = "none"
    tracker1_1 = 0
    tracker1_2 = 0
    tracker1_4 = 0
    if (tracker1_3 == 0) {
        limited.style.display = "block"
        tracker1_3 = 1

    } else {
        limited.style.display = "none"
        tracker1_3 = 0
    }
})

type[3].addEventListener('click', function () {
    lifetime.style.display = "none"
    Maximum.style.display = "none"
    limited.style.display = "none"
    tracker1_1 = 0
    tracker1_2 = 0
    tracker1_3 = 0
    if (tracker1_4 == 0) {
        Accident.style.display = "block"
        tracker1_4 = 1

    } else {
        Accident.style.display = "none"
        tracker1_4 = 0
    }
})

document.getElementById('learn1').addEventListener('click', function () {

    Maximum.style.display = "none"
    limited.style.display = "none"
    Accident.style.display = "none"
    tracker1_2 = 0
    tracker1_3 = 0
    tracker1_4 = 0
    if (tracker1_1 == 0) {
        lifetime.style.display = "block"
        tracker1_1 = 1

    } else {
        lifetime.style.display = "none"
        tracker1_1 = 0
    }
})

document.getElementById('learn2').addEventListener('click', function () {

    lifetime.style.display = "none"
    limited.style.display = "none"
    Accident.style.display = "none"
    tracker1_1 = 0
    tracker1_3 = 0
    tracker1_4 = 0
    if (tracker1_2 == 0) {
        Maximum.style.display = "block"
        tracker1_2 = 1

    } else {
        Maximum.style.display = "none"
        tracker1_2 = 0
    }
})

document.getElementById('learn3').addEventListener('click', function () {
    lifetime.style.display = "none"
    Maximum.style.display = "none"
    Accident.style.display = "none"
    tracker1_1 = 0
    tracker1_2 = 0
    tracker1_4 = 0
    if (tracker1_3 == 0) {
        limited.style.display = "block"
        tracker1_3 = 1

    } else {
        limited.style.display = "none"
        tracker1_3 = 0
    }
})

document.getElementById('learn4').addEventListener('click', function () {
    lifetime.style.display = "none"
    Maximum.style.display = "none"
    limited.style.display = "none"
    tracker1_1 = 0
    tracker1_2 = 0
    tracker1_3 = 0
    if (tracker1_4 == 0) {
        Accident.style.display = "block"
        tracker1_4 = 1

    } else {
        Accident.style.display = "none"
        tracker1_4 = 0
    }
})

/*go to products*/
var product_tracker = 0
var products = document.getElementById('typeofproduct')
document.getElementById('clickproduct').addEventListener('click', function () {
    if (product_tracker == 0) {
        products.style.display = "block"
        product_tracker = 1
    } else {
        products.style.display = "none"
        product_tracker = 0
    }
})



//dog
var tracker2 = 0;
var block3 = document.getElementById('block3')
var box = document.getElementsByClassName('box')
box[0].addEventListener('click', function () {
    for (var i = 3; i <= 12; i++) {
        document.getElementById('block' + i).style.display = "none"
    }
    tracker3 = 0;
    tracker4 = 0;
    tracker5 = 0;
    tracker6 = 0;
    tracker7 = 0;
    tracker8 = 0;
    tracker9 = 0;
    tracker10 = 0;
    tracker11 = 0;
    if (tracker2 == 0) {
        block3.style.display = "block"
        tracker2 = 1;
    } else {
        block3.style.display = "none"
        tracker2 = 0;
    }

})
//cats
var tracker3 = 0;
var block4 = document.getElementById('block4')
box[1].addEventListener('click', function () {
    for (var i = 3; i <= 12; i++) {
        document.getElementById('block' + i).style.display = "none"
    }
    tracker2 = 0;
    tracker4 = 0;
    tracker5 = 0;
    tracker6 = 0;
    tracker7 = 0;
    tracker8 = 0;
    tracker9 = 0;
    tracker10 = 0;
    tracker11 = 0;
    if (tracker3 == 0) {
        block4.style.display = "block"
        tracker3 = 1;
    } else {
        block4.style.display = "none"
        tracker3 = 0;
    }

})
//birds
var tracker4 = 0;
var block5 = document.getElementById('block5')
box[2].addEventListener('click', function () {
    for (var i = 3; i <= 12; i++) {
        document.getElementById('block' + i).style.display = "none"
    }
    tracker2 = 0;
    tracker3 = 0;
    tracker5 = 0;
    tracker6 = 0;
    tracker7 = 0;
    tracker8 = 0;
    tracker9 = 0;
    tracker10 = 0;
    tracker11 = 0;
    if (tracker4 == 0) {
        block5.style.display = "block"
        tracker4 = 1;
    } else {
        block5.style.display = "none"
        tracker4 = 0;
    }

})
//fishes
var tracker5 = 0;
var block6 = document.getElementById('block6')
box[3].addEventListener('click', function () {
    for (var i = 3; i <= 12; i++) {
        document.getElementById('block' + i).style.display = "none"
    }
    tracker2 = 0;
    tracker3 = 0;
    tracker4 = 0;
    tracker6 = 0;
    tracker7 = 0;
    tracker8 = 0;
    tracker9 = 0;
    tracker10 = 0;
    tracker11 = 0;
    if (tracker5 == 0) {
        block6.style.display = "block"
        tracker5 = 1;
    } else {
        block6.style.display = "none"
        tracker5 = 0;
    }

})
//hamsters
var tracker6 = 0;
var block7 = document.getElementById('block7')
box[4].addEventListener('click', function () {
    for (var i = 3; i <= 12; i++) {
        document.getElementById('block' + i).style.display = "none"
    }
    tracker2 = 0;
    tracker3 = 0;
    tracker4 = 0;
    tracker5 = 0;
    tracker7 = 0;
    tracker8 = 0;
    tracker9 = 0;
    tracker10 = 0;
    tracker11 = 0;
    if (tracker6 == 0) {
        block7.style.display = "block"
        tracker6 = 1;
    } else {
        block7.style.display = "none"
        tracker6 = 0;
    }

})

//horses
var tracker7 = 0;
var block8 = document.getElementById('block8')
box[5].addEventListener('click', function () {
    for (var i = 3; i <= 12; i++) {
        document.getElementById('block' + i).style.display = "none"
    }
    tracker2 = 0;
    tracker3 = 0;
    tracker4 = 0;
    tracker5 = 0;
    tracker6 = 0;
    tracker8 = 0;
    tracker9 = 0;
    tracker10 = 0;
    tracker11 = 0;
    if (tracker7 == 0) {
        block8.style.display = "block"
        tracker7 = 1;
    } else {
        block8.style.display = "none"
        tracker7 = 0;
    }

})

//Turtles
var tracker8 = 0;
var block9 = document.getElementById('block9')
box[6].addEventListener('click', function () {
    for (var i = 3; i <= 12; i++) {
        document.getElementById('block' + i).style.display = "none"
    }
    tracker2 = 0;
    tracker3 = 0;
    tracker4 = 0;
    tracker5 = 0;
    tracker6 = 0;
    tracker7 = 0;
    tracker9 = 0;
    tracker10 = 0;
    tracker11 = 0;
    if (tracker8 == 0) {
        block9.style.display = "block"
        tracker8 = 1;
    } else {
        block9.style.display = "none"
        tracker8 = 0;
    }

})

//Lizards
var tracker9 = 0;
var block10 = document.getElementById('block10')
box[7].addEventListener('click', function () {
    for (var i = 3; i <= 12; i++) {
        document.getElementById('block' + i).style.display = "none"
    }
    tracker2 = 0;
    tracker3 = 0;
    tracker4 = 0;
    tracker5 = 0;
    tracker6 = 0;
    tracker7 = 0;
    tracker8 = 0;
    tracker10 = 0;
    tracker11 = 0;
    if (tracker9 == 0) {
        block10.style.display = "block"
        tracker9 = 1;
    } else {
        block10.style.display = "none"
        tracker9 = 0;
    }

})

//Rabbits
var tracker10 = 0;
var block11 = document.getElementById('block11')
box[8].addEventListener('click', function () {
    for (var i = 3; i <= 12; i++) {
        document.getElementById('block' + i).style.display = "none"
    }
    tracker2 = 0;
    tracker3 = 0;
    tracker4 = 0;
    tracker5 = 0;
    tracker6 = 0;
    tracker7 = 0;
    tracker8 = 0;
    tracker9 = 0;
    tracker11 = 0;
    if (tracker10 == 0) {
        block11.style.display = "block"
        tracker10 = 1;
    } else {
        block11.style.display = "none"
        tracker10 = 0;
    }

})


//squirrels
var tracker11 = 0;
var block12 = document.getElementById('block12')
box[9].addEventListener('click', function () {
    for (var i = 3; i <= 12; i++) {
        document.getElementById('block' + i).style.display = "none"
    }
    tracker2 = 0;
    tracker3 = 0;
    tracker4 = 0;
    tracker5 = 0;
    tracker6 = 0;
    tracker7 = 0;
    tracker8 = 0;
    tracker9 = 0;
    tracker10 = 0;
    if (tracker11 == 0) {
        block12.style.display = "block"
        tracker11 = 1;
    } else {
        block12.style.display = "none"
        tracker11 = 0;
    }


})
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
/*******Send message *******/
var forms1 = document.getElementById('forms1')
var choice = document.getElementById('option')
var form1 = document.getElementById('forms1')
var form2 = document.getElementById('forms2')
var form3 = document.getElementById('forms3')
var tracker2 = 0
document.getElementById('sendmessage').addEventListener('click', function () {
    if (tracker2 == 0) {
        forms1.style.display = "block"

        tracker2 = 1
    } else if (tracker2 == 1) {
        forms1.style.display = "none"
        forms2.style.display = "none"
        forms3.style.display = "none"

        tracker2 = 0
    }
})
choice.addEventListener('change', function () {


    if (choice.value == "choice1" || choice.value == "choice2" || choice.value == "choice4") {
        form2.style.display = "block"
        form3.style.display = "none"

    } else if (choice.value == "choice3") {
        form2.style.display = "none"
        form3.style.display = "block"
    } else if (choice.value == "choice0") {
        form2.style.display = "none"
        form3.style.display = "none"
    }

})


//validation
var nametest = /^[a-zA-Zéèçà]{3,30}([\s]{1,1}[a-zA-Zéèçà]{3,30})?$/
var emailtest = /^[\w]{2,50}([.]{0,1}[\w]{0,50})?[@]{1,1}[\w]{2,10}[.]{1,1}[\w]{2,10}$/
var numbertest = /^[\d+]{10,13}$/
var adressetest = /^[\w]{3,100}([\s]{1,1}[\w]{3,30}){0,50}$/
var messagetest = /^[\w]{1,15}([\s]{1,1}[\w]{2,30}){0,50}$/
/*validation 1*/
var name1 = document.getElementById('fullname')
var email1 = document.getElementById('email1')
var message1 = document.getElementById('message1')
var send1 = document.getElementById('send1')
var error1 = document.getElementById('error1')
//name
name1.addEventListener('blur', function () {
    if (nametest.test(name1.value) == false) {
        error1.innerHTML = 'Write your correct name'
        send1.disabled = true
    } else {
        error1.innerHTML = ''
    }
})

name1.addEventListener('keyup', function () {
    if (nametest.test(name1.value) == true) {
        error1.innerHTML = ''
    }
    if ((nametest.test(name1.value) == true) && (emailtest.test(email1.value) == true) &&
        (messagetest.test(message1.value) == true)) {
        send1.disabled = false

    }
})
//email
email1.addEventListener('blur', function () {
    if (emailtest.test(email1.value) == false) {
        error2.innerHTML = 'Write your correct email'
        send1.disabled = true
    } else {
        error2.innerHTML = ''
    }
})
email1.addEventListener('keyup', function () {
    if (emailtest.test(email1.value) == true) {
        error2.innerHTML = ''
    }
    if ((nametest.test(name1.value) == true) && (emailtest.test(email1.value) == true) &&
        (messagetest.test(message1.value) == true)) {
        send1.disabled = false

    }
})
//message
message1.addEventListener('blur', function () {
    if (messagetest.test(message1.value) == false) {
        error3.innerHTML = 'Write at least 10 caracteres'
        send1.disabled = true
    } else {
        error3.innerHTML = ''
    }
})
message1.addEventListener('keyup', function () {
    if (messagetest.test(message1.value) == true) {
        error3.innerHTML = ''
    }
    if ((nametest.test(name1.value) == true) && (emailtest.test(email1.value) == true) &&
        (messagetest.test(message1.value) == true)) {
        send1.disabled = false

    }
})

/*validation 2*/

var name2 = document.getElementById('fullname2')
var email2 = document.getElementById('email2')
var number = document.getElementById('phone')
var adresse = document.getElementById('adresse')
var message2 = document.getElementById('message2')
var send2 = document.getElementById('send2')
var error4 = document.getElementById('error4')
var error5 = document.getElementById('error5')
var error6 = document.getElementById('error6')
var error7 = document.getElementById('error7')
var error8 = document.getElementById('error8')




//name
name2.addEventListener('blur', function () {
    if (nametest.test(name2.value) == false) {
        error4.innerHTML = 'Write your correct name'
        send2.disabled = true
    } else {
        error4.innerHTML = ''
    }
})

name2.addEventListener('keyup', function () {
    if (nametest.test(name2.value) == true) {
        error1.innerHTML = ''
    }
    if ((nametest.test(name2.value) == true) && (emailtest.test(email2.value) == true) &&
        (messagetest.test(message2.value) == true) && (adressetest.test(adresse.value) == true) &&
        (numbertest.test(number.value) == true)) {
        send2.disabled = false

    }
})
//email
email2.addEventListener('blur', function () {
    if (emailtest.test(email2.value) == false) {
        error5.innerHTML = 'Write your correct email'
        send2.disabled = true
    } else {
        error5.innerHTML = ''
    }
})
email2.addEventListener('keyup', function () {
    if (emailtest.test(email2.value) == true) {
        error5.innerHTML = ''
    }
    if ((nametest.test(name2.value) == true) && (emailtest.test(email2.value) == true) &&
        (messagetest.test(message2.value) == true) && (adressetest.test(adresse.value) == true) &&
        (numbertest.test(number.value) == true)) {
        send2.disabled = false

    }
})
//message
message2.addEventListener('blur', function () {
    if (messagetest.test(message2.value) == false) {
        error6.innerHTML = 'Write at least 10 caracteres'
        send2.disabled = true
    } else {
        error6.innerHTML = ''
    }
})
message2.addEventListener('keyup', function () {
    if (messagetest.test(message2.value) == true) {
        error6.innerHTML = ''
    }
    if ((nametest.test(name2.value) == true) && (emailtest.test(email2.value) == true) &&
        (messagetest.test(message2.value) == true) && (adressetest.test(adresse.value) == true) &&
        (numbertest.test(number.value) == true)) {
        send2.disabled = false

    }
})
//phone number
number.addEventListener('blur', function () {
    if (numbertest.test(number.value) == false) {
        error7.innerHTML = 'Write a valid phone number'
        send2.disabled = true
    } else {
        error7.innerHTML = ''
    }
})
number.addEventListener('keyup', function () {
    if (numbertest.test(number.value) == true) {
        error7.innerHTML = ''
    }
    if ((nametest.test(name2.value) == true) && (emailtest.test(email2.value) == true) &&
        (messagetest.test(message2.value) == true) && (adressetest.test(adresse.value) == true) &&
        (numbertest.test(number.value) == true)) {
        send2.disabled = false

    }
})

//adresse
adresse.addEventListener('blur', function () {
    if (adressetest.test(adresse.value) == false) {
        error8.innerHTML = 'Write a valid adresse'
        send2.disabled = true
    } else {
        error8.innerHTML = ''
    }
})
adresse.addEventListener('keyup', function () {
    if (adressetest.test(adresse.value) == true) {
        error8.innerHTML = ''
    }
    if ((nametest.test(name2.value) == true) && (emailtest.test(email2.value) == true) &&
        (messagetest.test(message2.value) == true) && (adressetest.test(adresse.value) == true) &&
        (numbertest.test(number.value) == true)) {
        send2.disabled = false

    }
})
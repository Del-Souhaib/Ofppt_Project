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


/*****************Main**************/
//forget password
tracker0 = 0;
$form3 = document.getElementById('form3')
var form1 = document.getElementById('form1')

document.getElementById('forget').addEventListener('click', function () {
    if (tracker0 == 0) {
        form1.style.display = "none"
        form3.style.display = "block"
        tracker0 = 1
    } else if (tracker0 == 1) {
        form1.style.display = "block"
        form3.style.display = "none"
        tracker0 = 0
    }
})
document.getElementById('login2').addEventListener('click', function () {
    if (tracker0 == 1) {
        form1.style.display = "block"
        form3.style.display = "none"
        tracker0 = 0
    } else if (tracker0 == 0) {
        form1.style.display = "none"
        form3.style.display = "block"
        tracker0 = 1
    }
})
//join
var tracker2 = 0;
var join = document.getElementById('join')
var login = document.getElementById('login')
var form1 = document.getElementById('form1')
var form2 = document.getElementById('form2')
join.addEventListener('click', function () {
    if (tracker2 == 0) {
        form1.style.display = "none"
        form2.style.display = "block"
        tracker2 = 1
    } else if (tracker2 == 1) {
        form1.style.display = "block"
        form2.style.display = "none"
        tracker2 = 0
    }

})
login.addEventListener('click', function () {
    form1.style.display = "block"
    form2.style.display = "none"
    tracker2 = 0
})

//validation
var nametest = /^[a-zA-Zéèçà]{3,30}$/
var emailtest = /^[\w]{2,50}([.]{0,1}[\w]{0,50})?[@]{1,1}[\w]{2,10}[.]{1,1}[\w]{2,10}$/
var passwordtest = /^[\w]{6,30}$/
var numbertest = /^[\d+]{10,13}$/

var firstname = document.getElementById('firstname')
var lastname = document.getElementById('lastname')
var email2 = document.getElementById('email2')
var phonenumber = document.getElementById('phonenumber')
var passowrd2 = document.getElementById('password2')
var passowrd3 = document.getElementById('password3')
var securitycode = document.getElementById('securityquestion')
var signup = document.getElementById('signup')

var error3 = document.getElementById('error3')
var error4 = document.getElementById('error4')
var error5 = document.getElementById('error5')
var error6 = document.getElementById('error6')
var error7 = document.getElementById('error7')
var error8 = document.getElementById('error8')
var error9 = document.getElementById('error9')


//phonenumber
phonenumber.addEventListener('blur', function () {
    if (numbertest.test(phonenumber.value) == false) {
        error8.innerHTML += "- Write your correct first name"
        signup.disabled = true
    } else if ((nametest.test(firstname.value) == true) && (nametest.test(lastname.value) == true) &&
        (emailtest.test(email2.value) == true) && (passwordtest.test(passowrd2.value) == true) &&
        (passowrd2.value == passowrd3.value) && (nametest.test(securitycode.value) == true) &&
        (numbertest.test(phonenumber.value) == true)) {
        signup.disabled = false

    } else {
        error8.innerHTML = ""

    }
})
phonenumber.addEventListener('keyup', function () {
    if (numbertest.test(phonenumber.value) == true) {
        error8.innerHTML = ""
    } else if ((nametest.test(firstname.value) == true) && (nametest.test(lastname.value) == true) &&
        (emailtest.test(email2.value) == true) && (passwordtest.test(passowrd2.value) == true) &&
        (passowrd2.value == passowrd3.value) && (nametest.test(securitycode.value) == true) &&
        (numbertest.test(phonenumber.value) == true)) {
        signup.disabled = false

    }
})


//securitycode
securitycode.addEventListener('blur', function () {
    if (nametest.test(securitycode.value) == false) {
        error9.innerHTML += "- Write your correct first name"
        signup.disabled = true
    } else if ((nametest.test(firstname.value) == true) && (nametest.test(lastname.value) == true) &&
        (emailtest.test(email2.value) == true) && (passwordtest.test(passowrd2.value) == true) &&
        (passowrd2.value == passowrd3.value) && (nametest.test(securitycode.value) == true) &&
        (numbertest.test(phonenumber.value) == true)) {
        signup.disabled = false

    } else {
        error9.innerHTML = ""

    }
})
securitycode.addEventListener('keyup', function () {
    if (nametest.test(securitycode.value) == true) {
        error9.innerHTML = ""
    } else if ((nametest.test(firstname.value) == true) && (nametest.test(lastname.value) == true) &&
        (emailtest.test(email2.value) == true) && (passwordtest.test(passowrd2.value) == true) &&
        (passowrd2.value == passowrd3.value) && (nametest.test(securitycode.value) == true)) {
        signup.disabled = false

    }
})


//first name
firstname.addEventListener('blur', function () {
    if (nametest.test(firstname.value) == false) {
        error3.innerHTML += "- Write your correct first name"
        signup.disabled = true
    } else if ((nametest.test(firstname.value) == true) && (nametest.test(lastname.value) == true) &&
        (emailtest.test(email2.value) == true) && (passwordtest.test(passowrd2.value) == true) &&
        (passowrd2.value == passowrd3.value)) {
        signup.disabled = false

    } else {
        error3.innerHTML = ""

    }
})
firstname.addEventListener('keyup', function () {
    if (nametest.test(firstname.value) == true) {
        error3.innerHTML = ""
    } else if ((nametest.test(firstname.value) == true) && (nametest.test(lastname.value) == true) &&
        (emailtest.test(email2.value) == true) && (passwordtest.test(passowrd2.value) == true) &&
        (passowrd2.value == passowrd3.value)) {
        signup.disabled = false

    }
})
//lastname
lastname.addEventListener('blur', function () {
    if (nametest.test(lastname.value) == false) {
        error4.innerHTML += "- Write your correct last name"
        signup.disabled = true

    } else if ((nametest.test(firstname.value) == true) && (nametest.test(lastname.value) == true) &&
        (emailtest.test(email2.value) == true) && (passwordtest.test(passowrd2.value) == true) &&
        (passowrd2.value == passowrd3.value)) {
        signup.disabled = false

    } else {
        error4.innerHTML = ""

    }
})
lastname.addEventListener('keyup', function () {
    if (nametest.test(lastname.value) == true) {
        error4.innerHTML = ""
    } else if ((nametest.test(firstname.value) == true) && (nametest.test(lastname.value) == true) &&
        (emailtest.test(email2.value) == true) && (passwordtest.test(passowrd2.value) == true) &&
        (passowrd2.value == passowrd3.value)) {
        signup.disabled = false

    }
})
//email
email2.addEventListener('blur', function () {
    if (emailtest.test(email2.value) == false) {
        error5.innerHTML = "- Write a correct email"
        signup.disabled = true

    } else if ((nametest.test(firstname.value) == true) && (nametest.test(lastname.value) == true) &&
        (emailtest.test(email2.value) == true) && (passwordtest.test(passowrd2.value) == true) &&
        (passowrd2.value == passowrd3.value)) {
        signup.disabled = false

    } else {
        error5.innerHTML = ""

    }
})
email2.addEventListener('keyup', function () {
    if (emailtest.test(email2.value) == true) {
        error5.innerHTML = ""
    } else if ((nametest.test(firstname.value) == true) && (nametest.test(lastname.value) == true) &&
        (emailtest.test(email2.value) == true) && (passwordtest.test(passowrd2.value) == true) &&
        (passowrd2.value == passowrd3.value)) {
        signup.disabled = false

    }
})
//password
passowrd2.addEventListener('blur', function () {
    if (passwordtest.test(passowrd2.value) == false) {
        error6.innerHTML = "- Write a strong password"
        signup.disabled = true

    } else if ((nametest.test(firstname.value) == true) && (nametest.test(lastname.value) == true) &&
        (emailtest.test(email2.value) == true) && (passwordtest.test(passowrd2.value) == true) &&
        (passowrd2.value == passowrd3.value)) {
        signup.disabled = false

    } else {
        error6.innerHTML = ""

    }
})
passowrd2.addEventListener('keyup', function () {
    if (passwordtest.test(passowrd2.value) == true) {
        error6.innerHTML = ""
    } else if ((nametest.test(firstname.value) == true) && (nametest.test(lastname.value) == true) &&
        (emailtest.test(email2.value) == true) && (passwordtest.test(passowrd2.value) == true) &&
        (passowrd2.value == passowrd3.value)) {
        signup.disabled = false

    }
})
//password varify
passowrd3.addEventListener('blur', function () {
    if (passowrd2.value != passowrd3.value) {
        error7.innerHTML = "- Password inccorect"
        signup.disabled = true


    } else if ((nametest.test(firstname.value) == true) && (nametest.test(lastname.value) == true) &&
        (emailtest.test(email2.value) == true) && (passwordtest.test(passowrd2.value) == true) &&
        (passowrd2.value == passowrd3.value)) {
        signup.disabled = false

    } else {
        error7.innerHTML = ""

    }
})
passowrd3.addEventListener('keyup', function () {
    if (passowrd2.value == passowrd3.value) {
        error7.innerHTML = ""
    } else if ((nametest.test(firstname.value) == true) && (nametest.test(lastname.value) == true) &&
        (emailtest.test(email2.value) == true) && (passwordtest.test(passowrd2.value) == true) &&
        (passowrd2.value == passowrd3.value)) {
        signup.disabled = false

    }
})
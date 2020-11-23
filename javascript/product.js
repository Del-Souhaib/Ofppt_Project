/*********navbar *********/
var tracker = 0
var toggle = document.getElementById('toggle')
var items = document.getElementsByClassName('item')
toggle.addEventListener('click', function () {
    if (tracker == 0) {
        toggle.src = "../images/Icons/close.png";
        items[1].style.display = "block"
        items[0].style.display = "block"

        tracker = 1;

    } else if (tracker == 1) {
        toggle.src = "../images/Icons/toggle.png"
        items[0].style.display = "none"
        items[1].style.display = "none"

        tracker = 0;
    }
})

/**slider 1** */

var galleryThumbs = new Swiper('.gallery-thumbs', {
    spaceBetween: 10,
    slidesPerView: 3,
    loop: true,
    freeMode: true,
    loopedSlides: 5, //looped slides should be the same
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
});
var galleryTop = new Swiper('.gallery-top', {
    spaceBetween: 10,
    loop: true,
    loopedSlides: 3, //looped slides should be the same
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    thumbs: {
        swiper: galleryThumbs,
    },
});
/*****Slider 2** */
if (window.innerWidth > 1208) {
    var swiper = new Swiper('.swiper-container2', {
        slidesPerView: 4,
        spaceBetween: 30,
        slidesPerGroup: 4,
        loop: true,
        loopFillGroupWithBlank: true,

        navigation: {
            nextEl: '.swiper-button-next2',
            prevEl: '.swiper-button-prev2',
        },
    });
} else if (window.innerWidth < 1208 && window.innerWidth > 908) {
    var swiper = new Swiper('.swiper-container2', {
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: true,

        navigation: {
            nextEl: '.swiper-button-next2',
            prevEl: '.swiper-button-prev2',
        },
    });
} else if (window.innerWidth <= 908 && window.innerWidth > 600) {
    var swiper = new Swiper('.swiper-container2', {
        slidesPerView: 2,
        spaceBetween: 30,
        slidesPerGroup: 2,
        loop: true,
        loopFillGroupWithBlank: true,

        navigation: {
            nextEl: '.swiper-button-next2',
            prevEl: '.swiper-button-prev2',
        },
    });
} else if (window.innerWidth <= 600) {
    var swiper = new Swiper('.swiper-container2', {
        slidesPerView: 1,
        spaceBetween: 30,
        slidesPerGroup: 1,
        loop: true,
        loopFillGroupWithBlank: true,

        navigation: {
            nextEl: '.swiper-button-next2',
            prevEl: '.swiper-button-prev2',
        },
    });
}


/** information*/
var order = document.getElementById('order')
var form = document.getElementById('form1')
var ordertracker = 0
order.addEventListener('click', function () {
    if (ordertracker == 0) {
        form.style.display = 'block'
        ordertracker = 1
    } else {
        form.style.display = 'none'
        ordertracker = 0
    }
})
//validation 

var adressetest = /^[\w]{2,100}([\s]{1,1}[\w]{2,100})?$/
var ziptest = /^[\w]{4,10}$/
var error = document.getElementsByClassName('error')
var sendorder = document.getElementById('buy')
//zip test
var zip = document.getElementById('zipcode')
zip.addEventListener('blur', function () {
    if (ziptest.test(zip.value) == false) {
        error[0].innerHTML = "Enter your correct zip code"
        sendorder.disabled = true

    } else if ((adressetest.test(adresse1.value) == true) && (adressetest.test(adresse2.value) == true) &&
        (ziptest.test(zip.value) == true)) {
        sendorder.disabled = false
    } else {
        error[0].innerHTML = ""
    }
})
zip.addEventListener('keyup', function () {

    if (ziptest.test(zip.value) == true) {
        error[0].innerHTML = ""
    } else if ((adressetest.test(adresse1.value) == true) && (adressetest.test(adresse2.value) == true) &&
        (ziptest.test(zip.value) == true)) {
        sendorder.disabled = false
    }
})


//adresse1
var adresse1 = document.getElementById('adresse1')
adresse1.addEventListener('blur', function () {
    if (adressetest.test(adresse1.value) == false) {
        error[5].innerHTML = "Enter you correct  adresse 1"
        sendorder.disabled = true

    } else if ((adressetest.test(adresse1.value) == true) && (adressetest.test(adresse2.value) == true) &&
        (ziptest.test(zip.value) == true)) {
        sendorder.disabled = false
    } else {
        error[5].innerHTML = ""
    }
})
adresse1.addEventListener('keyup', function () {

    if (adressetest.test(adresse1.value) == true) {
        error[5].innerHTML = ""
    } else if ((adressetest.test(adresse1.value) == true) && (adressetest.test(adresse2.value) == true) &&
        (ziptest.test(zip.value) == true)) {
        sendorder.disabled = false
    }
})
//adresse2
var adresse2 = document.getElementById('adresse2')
adresse2.addEventListener('blur', function () {
    if (adressetest.test(adresse2.value) == false) {
        error[6].innerHTML = "Enter you correct  adreese 2"
        sendorder.disabled = true

    } else if ((adressetest.test(adresse1.value) == true) && (adressetest.test(adresse2.value) == true) &&
        (ziptest.test(zip.value) == true)) {
        sendorder.disabled = false
    } else {
        error[6].innerHTML = ""
    }
})
adresse2.addEventListener('keyup', function () {

    if (adressetest.test(adresse2.value) == true) {
        error[6].innerHTML = ""
    } else if ((adressetest.test(adresse1.value) == true) && (adressetest.test(adresse2.value) == true) &&
        (ziptest.test(zip.value) == true)) {
        sendorder.disabled = false
    }
})



qt = document.getElementById('qantite')
price = document.getElementById('price')
document.getElementById('total').innerHTML = "Total of your orders is : " +
    parseFloat(qt.value) * parseFloat(price.textContent) + " $"
qt.addEventListener('change', function () {
    document.getElementById('total').innerHTML = "Total of your orders is : " +
        parseFloat(qt.value) * parseFloat(price.textContent) + " $"
})
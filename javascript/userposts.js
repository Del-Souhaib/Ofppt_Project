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


/*************navbar 2********* */
var tracker2 = 0;
var toggle2 = document.getElementById('togglecm')
var item2 = document.getElementsByClassName('item2')
toggle2.addEventListener('click', function () {
    if (tracker2 == 0) {
        toggle2.src = "../images/Icons/close.png"
        for (var i = 0; i <= 2; i++) {
            item2[i].style.display = "block"
        }
        tracker2 = 1

    } else {
        toggle2.src = "../images/Icons/toggle.png"
        for (var i = 0; i <= 2; i++) {
            item2[i].style.display = "none"
        }
        tracker2 = 0

    }

})
//logout
document.getElementById('logout').addEventListener('click', function () {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {}
    };
    xhttp.open("GET", "../pages/cummunity/logout.php", true);
    xhttp.send();
    //  window.location.href = 'Login.php';
})



//posts
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById('posts').innerHTML = this.responseText
    }
};
xhttp.open("GET", "../pages/posts/userposts.php", true);
xhttp.send();


//love
function react(user, post) {

    var lovereact = document.getElementById("post" + post)
    // lovereact.src = "../images/Icons/love.svg"
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", "../pages/cummunity/love.php?user=" + user + "&post=" + post, true);
    xhttp.send();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText == false) {
                lovereact.src = "../images/Icons/love2.svg";
                //    document.getElementById('like' + post).innerHTML += 1
            } else if (this.responseText == true) {
                lovereact.src = "../images/Icons/love.svg";
                //  document.getElementById('like' + post).innerHTML -= 1
            }
        }
    };




}
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
                var bb = parseInt(document.getElementById('like' + post).textContent) - 1
                document.getElementById('like' + post).innerHTML = bb;
            } else if (this.responseText == true) {
                lovereact.src = "../images/Icons/love.svg";
                var bb = parseInt(document.getElementById('like' + post).textContent) + 1
                document.getElementById('like' + post).innerHTML = bb;
            }
        }
    };




}


/**********comment**** */
var count = 0;

function displaycomments(postid) {
    var commenttools = document.getElementById('commentaires' + postid)
    if (count == 0) {
        commenttools.style.display = "block"
        count = 1
    } else if (count == 1) {
        commenttools.style.display = "none"
        count = 0
    }
}


////comment


function comment(post) {
    var commntext = document.getElementById('commenttext' + post).value

    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            window.location.href = '../pages/community.php';

        }
    };
    xhttp.open("GET", "../pages/cummunity/comment.php?postid=" + post + "&&text=" + commntext, true);
    xhttp.send();

}
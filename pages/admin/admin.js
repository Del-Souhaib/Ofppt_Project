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


////Messages

var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById('messages').innerHTML = this.responseText
    }
};
xmlhttp.open("GET", "php/messages.php", true);
xmlhttp.send();

document.getElementById('messages0').addEventListener('click', function () {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('messages').innerHTML = this.responseText
        }
    };
    xmlhttp.open("GET", "php/messages.php", true);
    xmlhttp.send();
})
//users
document.getElementById('users').addEventListener('click', function () {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        document.getElementById('messages').innerHTML = this.responseText

    };
    xmlhttp.open("GET", "php/users.php", true);
    xmlhttp.send();
})
//posts
document.getElementById('posts').addEventListener('click', function () {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        document.getElementById('messages').innerHTML = this.responseText

    };
    xmlhttp.open("GET", "php/posts.php", true);
    xmlhttp.send();
})
//Profile
document.getElementById('profile').addEventListener('click', function () {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        document.getElementById('messages').innerHTML = this.responseText

    };
    xmlhttp.open("GET", "php/profile.php", true);
    xmlhttp.send();
})
////logout
document.getElementById('logout').addEventListener('click', function () {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {

    };
    xmlhttp.open("GET", "php/logout.php", true);
    xmlhttp.send();
})
/////orders
document.getElementById('orders').addEventListener('click', function () {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        document.getElementById('messages').innerHTML = this.responseText

    };
    xmlhttp.open("GET", "php/orders.php", true);
    xmlhttp.send();
})
/////products
document.getElementById('products').addEventListener('click', function () {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        document.getElementById('messages').innerHTML = this.responseText

    };
    xmlhttp.open("GET", "php/products.php", true);
    xmlhttp.send();
})
/////Add products
document.getElementById('addproduct').addEventListener('click', function () {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        document.getElementById('messages').innerHTML = this.responseText

    };
    xmlhttp.open("GET", "php/addproduct.php", true);
    xmlhttp.send();
})
/////hotsells
document.getElementById('hotsells').addEventListener('click', function () {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        document.getElementById('messages').innerHTML = this.responseText

    };
    xmlhttp.open("GET", "php/hotsells.php", true);
    xmlhttp.send();
})
//add horsell
document.getElementById('addhotsell').addEventListener('click', function () {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        document.getElementById('messages').innerHTML = this.responseText

    };
    xmlhttp.open("GET", "php/addhotsells.php", true);
    xmlhttp.send();
})

///delete messsage
function deletemessage(id) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {

    };
    xmlhttp.open("GET", "php/deletemessage.php?id=" + id, true);
    xmlhttp.send();


    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('messages').innerHTML = this.responseText
        }
    };
    xmlhttp.open("GET", "php/messages.php", true);
    xmlhttp.send();
}
///delete post
function deletepost(postid) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {};

    xmlhttp.open("GET", "php/deleteposts.php?postid=" + postid, true);
    xmlhttp.send();


    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        document.getElementById('messages').innerHTML = this.responseText

    };
    xmlhttp.open("GET", "php/posts.php", true);
    xmlhttp.send();
}

///delete user
function deleteuser(userid) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {};

    xmlhttp.open("GET", "php/deleteuser.php?userid=" + userid, true);
    xmlhttp.send();

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        document.getElementById('messages').innerHTML = this.responseText
    };
    xmlhttp.open("GET", "php/users.php", true);
    xmlhttp.send();

}
///delete order
function deleteuser(orderid) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {};

    xmlhttp.open("GET", "php/deleteorder.php?orderid=" + orderid, true);
    xmlhttp.send();

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        document.getElementById('messages').innerHTML = this.responseText
    };
    xmlhttp.open("GET", "php/orders.php", true);
    xmlhttp.send();

}
///delete product
function deleteproduct(productid) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {

    };

    xmlhttp.open("GET", "php/deleteproduct.php?productid=" + productid, true);
    xmlhttp.send();

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        document.getElementById('messages').innerHTML = this.responseText

    };
    xmlhttp.open("GET", "php/products.php", true);
    xmlhttp.send();



}
///delete hotsell
function deletehotsell(hotsellid) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {

    };

    xmlhttp.open("GET", "php/deletehotsell.php?hotsellid=" + hotsellid, true);
    xmlhttp.send();

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        document.getElementById('messages').innerHTML = this.responseText

    };
    xmlhttp.open("GET", "php/hotsells.php", true);
    xmlhttp.send();
}
///delete all messages
function deleteallmessages() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {

    };
    xmlhttp.open("GET", "php/deleteallmessages.php", true);
    xmlhttp.send();


    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('messages').innerHTML = this.responseText
        }
    };
    xmlhttp.open("GET", "php/messages.php", true);
    xmlhttp.send();
}

////delete all posts
function deleteallposts() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {};

    xmlhttp.open("GET", "php/deleteallposts.php", true);
    xmlhttp.send();


    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        document.getElementById('messages').innerHTML = this.responseText

    };
    xmlhttp.open("GET", "php/posts.php", true);
    xmlhttp.send();
}
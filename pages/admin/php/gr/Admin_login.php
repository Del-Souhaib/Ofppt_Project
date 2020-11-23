
    <?php
require '../gr/login.php';

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <style>
        .container {
            margin-top: 30vh;
        }
    </style>
    <title>Admin</title>
</head>

<body>
    <form method="post" class="container">
        <div class="row mb-5">
            <div class="col-md-3">
                User :
            </div>
            <div class="col-md-5">
                <input type="text" name="user" id="" class="form-control">
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-3">
                Password :
            </div>
            <div class="col-md-5">
                <input type="password" name="password" id="" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <button class="btn btn-primary" name="login">Login</button>
            </div>
        </div>
    </form>





    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
</body>

</html>
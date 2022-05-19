<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title></title>
</head>

<body>
    <?php include_once "./inc/header.php" ?>

    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="./public/images/image1.png" width="100%">
                </div>
                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="indicator" />
                        </div>
                        <form id="login-form">
                            <input type="text" placeholder="Username">
                            <input type="password" placeholder="Password">
                            <button type="submit" class="btn">Login</button>
                            <a href="">Forgot password</a>
                        </form>
                        <form id="register-form">
                            <input type="text" placeholder="Username">
                            <input type="email" placeholder="Email">
                            <input type="password" placeholder="Password">
                            <button type="submit" class="btn">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once "./inc/footer.php" ?>
    <script src="./public/js/script.js"></script>
    <script>
        var register_form = document.getElementById("register-form");
        var login_form = document.getElementById("login-form");
        var indicator = document.getElementById("indicator");

        function register() {
            register_form.style.transform = "translateX(0px)";
            login_form.style.transform = "translateX(0px)";
            indicator.style.transform = "translateX(100px)";
        }

        function login() {
            register_form.style.transform = "translateX(300px)";
            login_form.style.transform = "translateX(300px)";
            indicator.style.transform = "translateX(0px)";
        }
    </script>
</body>

</html>
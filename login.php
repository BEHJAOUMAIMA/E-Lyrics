<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="./CSS/login.css">
    <title>E-lyrics</title>
</head>
<body class="d-flex justify-content-center align-items-center">
    <div class="wrapper d-flex justify-content-center align-items-center position-relative p-5 rounded-4">
        <div class="form-wrapper d-flex align-items-center w-100 h-100 sign-in">
            <form action="./Classes/login-inc.php" method="post" id="login" name="logForm">
                <h2 class="fs-2 fw-bolder text-center text-white mb-5">
                    Sign In 
                </h2>
                <div class="input-group position-relative">
                    <input type="email" id="email" name="Email" placeholder="exemple@gmail.com">
                    <label for="email">Email Address</label>
                    <div class="error mt-1 fw-bold" style="font-size: 12px; color: #7faaca;" id="errorEmail"></div>
                </div>
                <div class="input-group position-relative">
                    <input type="password" id="password" name="Password" placeholder="**************">
                    <label for="password">Password</label>
                    <div class="error mt-1 fw-bold" style="font-size: 12px; color: #7faaca;" id="errorPassword"></div>
                </div>
                <div class="remember">
                    <label> <input type="checkbox" id="rememberMe" name="rememberMe"> Remember me</label>
                </div>
                <button class="position-relative w-100 border-0 fw-bold rounded-3" style="height: 40px; background-color: #d49c4f; color: white;font-size: 16px; outline: none;" type="button" name="signIn" id="signIn">Sign In</button>
                <div class="signUp-link text-center">
                    <p class="text-white">Don't have an account ?<a href="./register.php" class="signUpBtn-link fw-bold" style="color: #d49c4f;"> Sign Up</a></p>
                </div>
                <div class="social-platform text-center" style="font-size: 14px; color: white;">
                    <p>Or Sign In with</p>
                    <div class="social-icons">
                        <a href="https://fr-fr.facebook.com/"><i class='bx bxl-facebook'></i></a>
                        <a href="https://twitter.com/?lang=fr"><i class='bx bxl-twitter'></i></a>
                        <a href="https://www.instagram.com/?hl=fr"><i class='bx bxl-instagram' ></i></a>
                    </div>
                </div>
            </form>
        </div>
   </div>
</body>
<script src="./JS/login.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>
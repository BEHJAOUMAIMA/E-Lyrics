<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./CSS/register.css">
    <title> E-lyrics</title>
</head>
<body class="d-flex justify-content-center align-items-center">
    <div class="wrapper position-relative p-5 rounded-4">
        <div class="form-wrapper d-flex align-items-center w-100 h-100 sign-up">
            <form action="./Classes/register-inc.php" method="post" id="registerForm" name="registerForm">
                <h2 class="fs-2 fw-bolder text-center text-white mb-5">
                    Sign Up 
                </h2>
                <div class="input-group position-relative">
                    <input type="text" id="userName" name="UserName">
                    <label for="userName">UserName</label>
                    <div class="error mt-1 fw-bold" style="font-size: 12px; color: #7faaca;" id="errorName"></div>
                </div>
                <div class="input-group position-relative">
                    <input type="email" id="email" name="Email">
                    <label for="email">Email Address</label>
                    <div class="error mt-1 fw-bold" style="font-size: 12px; color: #7faaca;" id="errorEmail"></div>
                </div>
                <div class="input-group position-relative">
                    <input type="password" id="password" name="Password">
                    <label for="password">Password</label>
                    <div class="error mt-1 fw-bold" style="font-size: 12px; color: #7faaca;" id="errorPass1"></div>
                </div>
                <div class="input-group position-relative">
                    <input type="password" id="confirmPass" name="passwordConfirm">
                    <label for="confirmPass">Confirm Password</label>
                    <div class="error mt-1 fw-bold" style="font-size: 12px; color: #7faaca;" id="errorPass2"></div>
                </div>
                <div class="agree">
                    <label> <input type="checkbox"> I agree to the termes & conditions</label>
                </div>
                <button class="position-relative w-100 border-0 fw-bold rounded-3" style="height: 40px; background-color: #d49c4f; color: white;font-size: 16px; outline: none;" type="button" name="registerBtn" id="registeBtn">Sign Up</button>
                <div class="signUp-link text-center">
                    <p class="text-white">Already have an account ?<a href="./login.php" class="signInBtn-link fw-bold" style="color: #d49c4f;"> Sign In</a></p>
                </div>
            </form>
        </div>
   </div>
</body>
<script src="./JS/register.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>
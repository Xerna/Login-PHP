<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://kit.fontawesome.com/ee2c3492f4.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="w-1/3 shadow-lg mx-auto mt-8 h-1/6 flex flex-col items-center">
        <div class="img-login w-3/4">
            <img src="img/undraw_welcome_cats_thqn.png" alt="" class="mx-auto">
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" class="w-1/2 text-center ml-5 pr-5">
            <div id="inputs" class="">
                <div class="input ">
                    <label for="name" class=" text-gray-700">Name</label>
                    <input type="text" name="name" id="" class="border border-black px-2 py-1 text-gray-400 rounded-xl text-center">
                </div>
                <div class="input pt-2">
                    <label for="last_name" class="ml-2 text-gray-700">Last Name</label>
                    <input type="text" name="last_name" class="border border-black px-2 py-1 text-gray-400 rounded-xl text-center">
                </div>
                <div class="input pt-2">
                    <label for="email" class="ml-2 text-gray-700">Email</label>
                    <input type="text" name="email" class="border border-black px-2 py-1 text-gray-400 rounded-xl text-center">
                </div>
                <div class="input pt-2">
                    <label for="user" class="ml-2 text-gray-700">User</label>
                    <input type="text" name="user" class="border border-black px-2 py-1 text-gray-400 rounded-xl text-center">
                </div>
                <div class="input pt-2">
                    <label for="pass" class="ml-2 text-gray-700">Password</label>
                    <input type="password" name="pass" class="border border-black px-2 py-1 text-gray-400 rounded-xl text-center">
                </div>
                <div class="input pt-2">
                    <label for="pass2" class="ml-2 text-gray-700">Repeat password</label>
                    <input type="password" name="pass2" class="border border-black px-2 py-1 text-gray-400 rounded-xl text-center">
                </div>
            </div>
            <br>
            <a href="forgot_password.php" id="forgot_password" class="text-indigo-400 mt-2">Have an account already? Log in</a>
            <br>
            <p class="mt-2 text-gray-400 ">Or</p>
            <div id="signup_with_google" class="shadow-lg bg-slate-800 text-white h-8 py-5 mt-1 flex items-center justify-center">
                <p><i class="fa-brands fa-google"></i>&nbsp;&nbsp; Sign up with Google</p>
            </div>
            <br>
            <button type="submit" class="p-2 bg-indigo-600 text-white text-center px-10 rounded-lg mt-1 mb-5 pb-3">Sign Up</button>
            <br>
            <?php if(!empty($error)):?>
            <p class="text-center"><?php echo $error;?></p>
            <?php endif;?>
        </form>

    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    .
<div class="w-1/2 shadow-lg mx-auto my-24 h-1/4 flex">
    <div class="img-login w-1/2">
        <img src="img/undraw_Unlock_re_a558.png" alt="" class="mx-auto">
    </div>
    <form class="w-1/2 flex flex-col justify-center items-start ml-5 pr-5">
        <div id="inputs" class="grid grid-cols-2 grid-rows-2 gap-2 w-1/2">
            <div class="input">
                <label for="user" class="ml-2 text-gray-700">User</label>
                <input type="text" name="user" id="" class="border border-black px-2 py-1 text-gray-400 rounded-xl">
            </div>
            <br>
            <div class="input">
                <label for="pass" class="ml-2 text-gray-700">Password</label>
                <input type="password" name="pass" class="border border-black px-2 py-1 text-gray-400 rounded-xl">
            </div>
        </div>
        <a href="forgot_password.php" id="forgot_password" class="text-indigo-400 mt-2">Forgot password?</a>
        <br>
        <button type="submit" class="p-2 bg-indigo-600 text-white text-center px-10 rounded-lg">Login</button>
        <a href="sign_up.php" id="sign_up"  class="text-indigo-400 mt-3">Don't have an account?</a>
    </form>
</div>

</body>
</html>
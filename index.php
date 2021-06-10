<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- /custom css -->
    <link rel="stylesheet" href="./CSS/index.css">
    <title>Todo App Login</title>

</head>

<body>
    <div class="field-container">
        <div class="heading">
            <h2>Login</h2>
        </div>
        <form action="login.php" method="post" class="form" id="form">
            <div class="field">
                <!-- <small>error message</small> -->
                <input type="text" name="username" id="username" required />
                <label for="name" class="label-name">
                    <span class="name-field">Username</span>
                </label>

            </div>
            <div class="field">
                <input type="password" name="password" id="password" required />
                <label for="name" class="label-name">
                    <span class="name-field">Password</span>
                </label>

            </div>
            <div class="field-btn">
                <button class="btn" name="submit">Login</button>
                <small>message error</small>
            </div>

        </form>
        <div class="sign-up">
            <p> <a href="./form/sign-up.html">Sign Up</a> </p>
        </div>
    </div>
</body>

</html>
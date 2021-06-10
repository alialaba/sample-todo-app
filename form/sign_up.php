<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- /custom css -->
    <link rel="stylesheet" href="../css/index.css">
    <title>Todo App</title>

</head>

<body>
    <div class="field-container">
        <div class="heading">
            <h2>Sign Up</h2>
        </div>
        <form action="reg.php" method="POST" class="form" id="form">
            <div class="field">
                <!-- <small>error message</small> -->
                <input type="text" name="fullname" id="fullname" required />
                <label for="name" class="label-name">
                    <span class="name-field">Fullname</span>
                </label>

            </div>
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
                <button class="btn" name="submit">Sign Up</button>
                <small>message error</small>
            </div>

        </form>
        <div class="sign-up">
            <p> <a href="../index.html">Login</a> </p>
        </div>
    </div>
</body>

</html>
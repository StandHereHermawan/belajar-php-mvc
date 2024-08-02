<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Login, PHP MVC</title>
</head>

<body>
    <div>
        <h1>Lorem Ipsum</h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Molestias, a consequatur. Quos molestiae reiciendis dignissimos
            labore quae cupiditate enim nisi excepturi, odio nihil eos, vero
            delectus voluptatibus totam commodi ratione!
        </p>
    </div>
    <!-- form:post>(label{Username : }>input:text)+br+(label{Password : }>input:password)+br+input:submit -->
    <form action="" method="post">
        <label>Username :
            <input type="text" name="username-login" id="username-login" />
        </label>
        <br />
        <label>Password :
            <input type="password" name="password-login" id="password-login" />
        </label>
        <br />
        <input type="submit" value="Login" />
    </form>
</body>

</html>
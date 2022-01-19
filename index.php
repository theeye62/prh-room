<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Admin Page</title>
</head>
<body>


    <div class="admin-index">
        <div class="container">
            <img src="img/admin-icon2.png" alt="">
            <h1>ADMINWARD LOGIN</h1>
            <form method="post" action="admin_login.php">
                <br><br>
                Username: <input type="text" name="user_name_id" placeholder="Ener Username" required>
                <br>
                Password: <input type="password" name="user_password" placeholder="Enter Password" required>
                <br><br>
                <input type="submit" name="user_login" value="Login">
            </form>
        </div>
    </div>

    <footer>
        <div class="container">
            <p>&copy; Copyright 2022. All Right Reserved PRH Ward</p>
        </div>
    </footer>


</body>
</html>
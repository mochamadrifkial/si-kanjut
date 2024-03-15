<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f2f2f2;
    }

    .login-container {
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 40px;
        width: 400px;
    }

    .login-container h2 {
        margin-bottom: 30px;
        text-align: center;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .form-group input {
        width: 100%;
        padding: 10px;
        border-radius: 4px;
        border: 1px solid #ccc;
    }

    .form-group button {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 4px;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
    }

    .form-group button:hover {
        background-color: #0056b3;
    }

</style>
</head>
<body>

<div class="login-container">
    <h2><strong>LOGIN</strong></h2>
    <h5><strong></strong></h5>
    <form action="#" method="post">
        <div class="form-group">
            <label for="username">Email</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
        <button><a href="login.php" class="btn btn-primary" class= "bg-dark "type="submit">LOGIN</a></button>
        <!-- <button type="submit">Login</button> -->
        </div>
    </form>
</div>

</body>
</html>
<!doctype html>
<html lang="en">
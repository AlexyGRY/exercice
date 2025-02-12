<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    if (empty($_POST['email'])) {
        $errorEmail="<p style=color:red'> L'email est obligatoire </p>"
    }elseif (!filter_var($_POST)) {
        # code...
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: rgb(255, 255, 255);
            font-family: Arial, Helvetica, sans-serif;
        }
        h1 {
            text-align: center;
            color: rgb(0, 0, 0);
        }

        form {
            background-color: rgb(240, 240, 240);
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="password"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 20px;
            display: block;
            border: none;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: rgb(0, 0, 0);
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: rgb(0, 128, 0);
        }
    </style>
</head>
<body>
    <h1>Login Form</h1>
    <form action="" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
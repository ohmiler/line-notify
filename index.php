<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        input {
            border:1px solid #ccc;
            width:200px;
            padding:10px;
            margin:5px 15px;
            border-radius:5px;
        }
        .send {
            width:220px;
        }
    </style>
</head>
<body>

    <form action="line-notify.php" method="post">
        <input name="firstname" placeholder='First Name (required)' type='text'>
        <br>
        <input name="lastname" placeholder='Last Name (required)' type='text'>
        <br>
        <input name="email" placeholder='Email (required)' type='email'>
        <br>
        <input placeholder='Phone' name="phone" type='text'>
        <br>
        <input class='send' name="submit" type='submit' value='Send'>
    </form>
    
</body>
</html>
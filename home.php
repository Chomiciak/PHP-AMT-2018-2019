<?php
    session_start();

mysqli_connect();

$users = [
    0 => [
        "username" => "Adam",
        "password" => "haslo123"
    ],
    1=>[
        "username" => "Jan",
        "password" => "pass123"
    ],
    2 => [
        "username" => "Krzysztof",
        "password" => "000000000"
    ]
];



function czyJestZalogowany($users){
    if (isset($_POST['username'])) {
        if(isset($_POST['password'])){
            foreach ($users as $user){
                if($user['username'] == $_POST['username']){
                    if($user['password'] == $_POST['password']){
                        return true;
                    }else {
                        return false;
                    }
                }
            }
        }
    }
    return false;
}


if(isset($_POST['przycisk-zaloguj'])){
    $_SESSION['zalogowano'] = czyJestZalogowany($users);
}

echo gettype($_SESSION['zalogowano']);
echo $_SESSION['zalogowano']."...";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>
            <?php 

            ?>
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
        <script src="main.js"></script>


        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    
        <style>
            body {
                background-color: #EE00DF; 
                color: #FFF;
            }
        </style>
    
    </head>
    <body>
        <div class="container">
            <?php 
                if(!$_SESSION['zalogowano']){
            ?>
            <form method="POST">
                <div class="form-group">
                    <label>Nazwa użytkownika</label>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class="form-group">
                <label>Hasło</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <input type="submit" class="form-control" name="przycisk-zaloguj">
                </div>
            </form>
            <?php 
                }else {
            ?>

            <div class="alert alert-success" role="alert">
            Brawo! Zalogowałeś się. Witaj na stronie internetowej.
            </div>

            <?php 
                }
            ?>
        </div>



    </body>

</html>
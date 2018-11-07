<?php
$zmienna = 5;
$tekst = "Ala ma kota <br>";

$tablica = [4,4,"tekst",33,-1,"%%"];

foreach($tablica as $klucz=>$wartosc){
    echo $wartosc."<br>";
    echo $klucz;
}

?>
<html>
    <head>        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
    <body>
        <div class="container">
            <form method="POST" class="form-group">
                <div class="form-group">
                    <input type="number" class="form-control" name="liczba1" placeholder="Wpisz liczbę 1." />
                </div>
                <input type="text"  class="form-control" name="znak" placeholder="Wpisz znak +/-/*/:" />
                <input type="number" class="form-control"  name="liczba2" placeholder="Wpisz liczbę 2." />
                <input type="submit" class="form-control"  />
            </form>
        </div>
        <br>
        <br>
        <?php
            if($_POST['znak'] == "*"){
                echo "mnożenie";
                echo $_POST['liczba1']
                    * $_POST['liczba2'];
            }else if($_POST['znak'] == "+"){
                echo "dodawanie".
                ($_POST['liczba1']
                + $_POST['liczba2']);
            }else if($_POST['znak'] == "-"){
                echo "odejmowanie";
                echo $_POST['liczba1']
                - $_POST['liczba2'];
            }else if($_POST['znak'] == ":"){
                echo "dzielenie";
                echo $_POST['liczba1']
                / $_POST['liczba2'];
            }

        ?>
    </body>
</html>
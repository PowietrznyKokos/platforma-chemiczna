<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MetaMorfizon</title>
    <link rel="stylesheet" type="text/css" href="style-koksotronic.css">
</head>
<body>
    <header>
    
        <div class="flex-container">
            <div class="flex-container-left">
                <div>MetaMorfizon</div>
            </div>
            <div class="flex-container-right">
                <div><a href="Konto.html">8</a></div>
            </div>

        </div>
    
        <nav>
            <ul class="navbar">
                <li><a href="StronaGłówna.html">Strona główna</a></li>
                <li><a href="Kryształ.html">Kryształ</a></li>
                <li><a href="Prosze.html">Proszek</a></li>
                <li><a href="Chemia.html">Chemia</a></li>
                <li><a href="Farma.html">Farma</a></li>
                <li><a href="Destylacja.html">Destylacja</a></li>
                <li><a href="podprodukty.html">Podprodukty</a></li>
                <li><a href="kupsprzedaj.html">Kup/Sprzedaj</a></li>
                <li><a href="pytania.html">Pytania</a></li>
                <li><a href="onas.html">O nas</a></li>
                <li><a href="kontkat.html">Kontakt</a></li>
                <li><div class="search-container">
                    <input type="search" id="searchInput" placeholder="Szukanko...">
                    <button type="submit">Szukaj</button>
                </div></li>
            </ul>
        </nav>
    </header>
    <h4> 
        <div class="center">
            <button>Utwórz</button>
            <div class="badbad">Podziel się wiedzą!</div>
        </div>
    </h4> 

    <?php
    $servername ="localhost";
    $username ="root";
    $password = "";
    $dbname = "MetaMorfizon";

    $connection = new mysql($servername, $username, $password, $dbname);
    if ($connection->connect_error) {
        die("Połączenie nieudane: ". $connection->connect_error);
    }
    ?>

</body>
</html>
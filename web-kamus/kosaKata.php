<?php
require 'function.php';

$kata = query( "SELECT * FROM kosakata");

if(isset($_GET["cari"])){
    $kata = cari($_GET["keyword"]);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kamus Bahasa Jawa</title>
    <link rel="stylesheet" href="styleKamus.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Pacifico&display=swap" rel="stylesheet">
    <style>
        body,.container{
            background-color: #C68B59;
            font-family: Rhodium Libre;
        }
        .tab table,tr,td{
        border: 3px solid #865439 ;
        }
        td{
            width: 200px;
        }
        .tab{
            margin-top: 5%;
            margin-left: 15%;
        }
        td p{
            margin-left: 10px;
            font-family: 'Montserrat',sans-serif;
            color: white;
        }
        .kolompencarian  input{
        width: 55%;
        margin-left: 15%;
        }
    </style>
</head>
<body>
    <header>
        <h4>Kamus Bahasa Jawa</h4>
        <nav>
            <ul>
                <li><a href="kosaKata.php" >Kosa Kata</a></li>
                <li><a href="adatMantu.html" >Adat Mantu</a></li>
                <li><a href="novelJawa.html" >Novel Jawa</a></li>
                <li><a href="sesorah.html" >Sesorah</a></li>
                <li><a href="serat.html">Serat</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <div class="kolompencarian">
            <form action="" methon="get" >
                <input type="text"  name="keyword" size="40" placeholder="Masukan Kata">
                <button type="submit" name="cari" > Cari !</button>
            </form>
        </div>
            <div class="tab">
                <table>
                    <tr>
                        <td><p>Indonesia</p></td>
                        <td><p>Ngoko</p></td>
                        <td><p>Krama Madya</p></td>
                        <td><p>Krama Inggil</p></td>
                    </tr>
                    <?php foreach ($kata as $row) : ?>
                    <tr>
                        <td><p><?= $row["indonesia"]; ?></p></td>
                        <td><p><?= $row["ngoko"]; ?></p></td>
                        <td><p><?= $row["krama_madya"]; ?></p></td>
                        <td><p><?= $row["krama_inggil"]; ?></p></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>       
                
    </div>
</body>
</html>
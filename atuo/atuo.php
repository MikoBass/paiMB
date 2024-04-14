<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atuo</title>
    <link rel="stylesheet" href="atuo.css">
</head>
<body>
    <form action="atuo.php" method="post">
        <h1 style="text-align: center;">Auto</h1>
        <img src="funny-cars.webp"style="border-radius: 32px;">
        <section id="choose">
            <section id="fir">
                <input name="marka" placeholder="marka" class="inpat"><br>
                <input name="model" placeholder="model" class="inpat"><br>
                <input name="rok" placeholder="rok wydania" class="inpat"><br>
            </section>
            <section id="sec">
                <input type="radio" name="fuel" id="benz" value="Benzyna">
                <label for="benz">Benzyna</label><br>
                <input type="radio" name="fuel" id="die" value="Diesel">
                <label for="die">Diesel</label><br>
                <input type="radio" name="fuel" id="ele" value="Elektryczny">
                <label for="ele">Elektryczny</label><br>
                <input type="radio" name="fuel" id="hyb" value="Hybrydowy">
                <label for="hyb">Hybrydowy</label><br>
                <input type="color"name="color"> Kolor<br>
                <input type="checkbox" value=" Czujnik parkowania," name="czujka"> Czujnik parkowania <br>
                <input type="checkbox" value=" Kamera cofania," name="kam"> Kamera cofania<br>
                <input type="checkbox" value=" Ekran," name="ekran"> Ekran<br>
                <input type="submit" value="Samochod">
            </section>
        </section>
        <?php
            if(!isset($_POST["marka"]) || !isset($_POST["model"]) || !isset($_POST["rok"]) || !isset($_POST["fuel"]) || !isset($_POST["color"])){
                return 0;
            }
          
            $marka = $_POST["marka"];
            $model = $_POST["model"];
            $rok = $_POST["rok"];
            $paliw = $_POST["fuel"];
            $kolor = $_POST["color"];
            $czuj = $_POST["czujka"] ?? false;
            $kam= $_POST["kam"] ?? false;
            $ekran=$_POST["ekran"] ?? false;
            echo "<div style='text-wrap: wrap; max-width: 60%;'>";
            echo "Twój samochód to: ".  $marka . " " . $model . " z " . $rok . " r. ". " w kolorze " . "<span style='display: inline-block; background:$kolor; width: 12px; height:12px;'></span>" . " z " . $czuj . $kam . $ekran;
            echo "</div>";
            
        ?>
        <p></p>
    </form>
</body>
</html>
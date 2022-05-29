<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forma</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 class="naslov">Forma za unos ostecenja</h1>
    <div class="container">
    <form method="post" action="index.php">
        <div class="forma">
            <div class="tekst">
                <label for="tipIndustrije"><span>Tip industrije:</span></label>
            </div>
            <div class="inputi">
                <select id="tipIndustrije" class="input" name="tip_industrije[]">
                    <option name="tip_industrije[]" value="Energetika">Energetika</option>
                    <option name="tip_industrije[]" value="Rudarstvo">Rudarstvo </option>
                    <option name="tip_industrije[]" value="Metalurgija">Metalurgija</option>
                    <option name="tip_industrije[]" value="Ostalo">Ostalo</option>
                </select>
            </div>
            <div class="tekst">
                <label for="procenatInput"><span>Procenat:</span></label>
            </div>
            <div class="inputi">
                <input id="procenatInput" type="number" name="procenat" class="input">
            </div>
            <div class="tekstZvijezdica">
                <span>*Procenat unijeti kao vrijednost od 0 di 100!</span>
            </div>
            <div class="tekst">
                <label for="vrstaOstecenja"><span>Vrsta ostecenja: </span></label>
            </div>
            <div class="inputi">
                <input type="checkbox" id="vrstaOstecenja" name="vrsta_ostecenja[]" value="Ogrebotina">Ogrebotina
                <input type="checkbox" id="vrstaOstecenja" name="vrsta_ostecenja[]" value="Udubljenje">Udubljenje
                <input type="checkbox" id="vrstaOstecenja" name="vrsta_ostecenja[]" value="Prelom">Prelom
            </div>
            <div class="dugme">
                <button class="button" type="submit" name="posalji">Posalji</button>
            </div>
        </div>
    </div>
    </form>
    </div>
    <div class="rezultat">
    <?php
    if(isset($_POST['posalji'])){
        $tip_industrije = $_POST['tip_industrije'];
        foreach($tip_industrije as $izabrani_tip)
        echo "Tip industrije je " . $izabrani_tip;
        $procenat = $_POST['procenat'];
        echo "<br>";
        echo "Procenat ostecenja je: " . $procenat;
        echo "<br>";
        echo "Vrste ostecenja su: ";
        if(isset($_POST['vrsta_ostecenja'])){
            $vrsta_ostecenja = $_POST['vrsta_ostecenja'];
            foreach($vrsta_ostecenja as $izabrana_vrsta)
            echo $izabrana_vrsta . ", ";
        }
    }
    ?>
    </div>
</body>

</html>
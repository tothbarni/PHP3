<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Csapatmunka</title>
</head>
<style>
    body {
        display: grid;
        grid-template-columns: 1fr 1fr;
    }
    .szoveg {
        margin-top: 35px;
    }
</style>
<body>
    <?php
        include 'fuggvenyek.php';
        echo "<div class='kep'>";
            $imagePath = 'fenntart.png';
            echo "<img src='$imagePath' alt='kep'>";
        echo "</div>";
        echo "<div class='szoveg'>";
        bekezedes("A fenntarthatóság szintjei:");
        $elsoSzint = "Ökoszisztéma";
        $masodikSzint = "Társadalom";
        $harmadikSzint = "negyedikSzint";
        $negyedikSzint = "Pénz";
        echo "<ul>
                <li>$elsoSzint</li>
                <li>$masodikSzint</li>
                <li>$harmadikSzint</li>
                <li>$negyedikSzint</li>
              </ul>";
        echo "</div>";

        bekezedes("Táblázat:");
        $fogyasztas = [
            "több, mint amit a természet újratermelni képes",
            "a természet újratermelő kapacitásával azonos mértékű",
            "kevesebb, mint amit a természet újratermelni képes"
        ];
        
        $kornyezet = [
            "a környezet pusztul",
            "környezeti egyensúly",
            "a környezet megújul"
        ];
        
        $fenntarthatosag = [
            "nem fenntartható",
            "fenntartható, nem változó állapot",
            "fenntartható fejlődés"
        ];
        
        echo "<table border='1'>";
        echo "<tr><th>A megújuló erőforrások fogyasztása</th><th>A környezet helyzete</th><th>Fenntarthatóság</th></tr>";
        
        for ($i = 0; $i < count($fogyasztas); $i++) {
            echo "<tr><td>{$fogyasztas[$i]}</td><td>{$kornyezet[$i]}</td><td>{$fenntarthatosag[$i]}</td></tr>";
        }
        
        echo "</table>";
        echo "<p><strong>A megújuló erőforrások fogyasztása - A környezet helyzete - Fenntarthatóság</strong></p>";
        
        for ($i = 0; $i < count($fogyasztas); $i++) {
            echo "<p>{$fogyasztas[$i]} - {$kornyezet[$i]} - {$fenntarthatosag[$i]}</p>";
        }
    ?>
</body>
</html>
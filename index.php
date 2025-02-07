<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Csapatmunka</title>
</head>
<body>
    <main>
        <h1>Csapatmunka</h1>
        <div class="grid">
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
            ?> 
        </div">
        <?php
            echo "<div class='tablazat'>";
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
                
                echo "<table>";
                echo "<tr>
                        <th>A megújuló erőforrások fogyasztása</th>
                        <th>A környezet helyzete</th>
                        <th>Fenntarthatóság</th>
                      </tr>";
                
                for ($i = 0; $i < count($fogyasztas); $i++) {
                    echo "<tr>
                            <td>$fogyasztas[$i]</td>
                            <td>$kornyezet[$i]</td>
                            <td>$fenntarthatosag[$i]</td>
                          </tr>";
                }
                echo "</table>";
                bekezedes("Megújuló energiaforrás");
                echo "<p>Megújuló energiaforrásnak nevezzük az energiahordozók azon csoportját, amelyek emberi időléptékben képesek megújulni, azaz nem fogynak el, ellentétben a nem megújuló energiaforrásokkal. A megújuló energiaforrások a napenergia közvetlen termikus és fotoelektromos hasznosítása, a biomassza, szélenergia, vízenergia, a tenger hullámzásából kinyerhető energia, a geotermikus energia, valamint a Holddal összefüggésben az árapály energia. A geotermikus energia a Nappal való kapcsolat, a földfelszín Napból és a magmából származó energiaáram jelentős különbsége alapján sorolható a megújuló energiaforrások közé.</p>";
                $megUjAr = array(
                    "EU-átlag"  => 20,
                    "Belgium" => 13,
                    "Bulgária" => 16,
                    "Dánia" => 30,
                    "Németország" => 18,
                    "Észtország" => 25,
                    "Finnország" => 36,
                );
                echo "<table border='1'>";
            
                echo "<tr><th>Ország</th>
                    <th>EU-cél 2020</th></tr>";
            
                foreach ($megUjAr as $orszag => $cel) {
                    echo "<tr><td>" . $orszag . "</td><td>" . $cel . "%</td></tr>";
                }
                echo "</table>";
                echo "<p><a href='negyedik_feladat.php'>Negyedik feladat</a></p>";
            echo "</div>";
    
        ?>  
    </main>
</body>
</html>
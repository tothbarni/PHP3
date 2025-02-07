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
        <p><a href='index.php'>Vissza a fő oldalra</a></p>
        <h1>Hogyan takarékoskodhatunk a vízzel?</h1>
        <?php
            include 'fuggvenyek.php';
            bekezedes("A Föld édesvízkészlete véges, hogyan takarékoskodhatunk a vízzel?");
            echo "Az ivóvíz születéséért rengeteget dolgoznak a vízcseppek és az emberek is. Ráadásul a felhasználható víz mennyisége sem korlátlan. Ezért mondják a víztörténetét ismerő felnőttek, hogy óvd a természetet és takarékoskodj a vízzel. Fürdés helyett inkább zuhanyozz! Egészségesebb és takarékosabb is, mint a kádban fürdés. Ne folyasd feleslegesen a vizet, a fogmosáshoz használj poharat! Ha csöpögő csapot látsz, szólj a felnőtteknek! A mosógépet rakjuk tele ruhával, ha beindítjuk, egy-két pólóért pazarlás beindítani. De azzal is vizet spórolunk meg, ha vigyázunk a ruháink tisztáságára. Ha kevesebb ruhát piszkolunk össze, kevesebb lesz a mosnivalónk is. Ügyeljünk arra, hogy sáros lábbal ne menjünk be a lakásba, mert úgy is megspórolhatunk vizet, ha nem kell naponta többször felmosnunk. A kertet reggel és este locsold, ilyenkor kevésbé párolog a víz. De locsolásra használhatjuk az összegyűjtött esővizet is. A vizet a növények gyökeréhez juttasd!
            <p>A folyadékáram jellemző adata a folyadék áramlási sebessége (v). Az áramló folyadék mennyiségét a térfogatárammal fejezzük ki. A térfogatáram egy adott keresztmetszeten időegység alatt átáramló folyadék térfogata. A térfogatáram számítása: V = v × A ahol: </p>
            <p>V az adott keresztmetszeten időegység alatt átáramló folyadék térfogata, mértékegysége: m3/s  ,</p>
            <p>v a folyadék áramlási sebessége, mértékegysége: m/s ,</p>
            <p>A a folyadékáram keresztmetszete, mértékegysége: m2.</p>
            <p>V folyadékáram :  <input type='number'></p>
            <p>A folyadékáram áramlási sebessége :  <input type='number'></p>
            ";
            
        ?>  
    </main>
</body>
</html>
<link rel="stylesheet" href="./css_script/motorEladas.css"/>


<?php
    if (filter_input(INPUT_POST, "eladasMegerosites", FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE)){
        $error = false;
        $errormessage = "";
        $gyarto = filter_input(INPUT_POST, "gyarto");
        $tipus = filter_input(INPUT_POST, "tipus");
        $evjarat = filter_input(INPUT_POST, "evjarat");
        $allapot = filter_input(INPUT_POST, "allapot");
        $kobcenti = filter_input(INPUT_POST, "kobcenti");
        $jogositvany = filter_input(INPUT_POST, "jogositvany");
        $kW = filter_input(INPUT_POST, "kW");
        $ar = filter_input(INPUT_POST, "ar");
        
        $db->hirdetesKeszitese($gyarto, $tipus, $evjarat, $allapot, $kobcenti, $jogositvany, $ar, $kW);
        header("Location:index.php");
    }
?>


<h1>Hirdetés készítése</h1>
<div class="container">
    <div class="row">
        <form action="#" method="post" novalidate onsubmit="return teljesKitoltes()">
            <div class="from-group mb-4 row">
                <div class="col-6">
                    <!--GYARTO-->
                    <label for="Gyártó"><b>Gyártó:</b></label>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Gyártó" id="gyarto" name="gyarto" minlength="3" maxlength="40" autofocus required>
                    </div>
                </div>
                <div class="col-6">
                    <!--TIPUS-->
                    <label for="Típus"><b>Típus:</b></label>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Típus" id="tipus" name="tipus" minlength="3" maxlength="40" autofocus required>
                    </div>
                </div>
            </div>
            <div class="from-group mb-4 row">
                <div class="col-6">
                    <!--EVJARAT-->
                    <label for="Évjárat"><b>Évjárat:</b></label>
                    <div class="input-group">
                        <input type="number" class="form-control" placeholder="Évjárat" id="evjarat" name="evjarat" maxlength="4" autofocus required>
                    </div>
                </div>
                <div class="col-6">
                    <!--ALLAPOT-->
                    <label for="Állapot"><b>Állapot:</b></label>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Állapot" id="allapot" name="allapot" minlength="2" maxlength="40" autofocus required>
                    </div>
                </div>
            </div>
            <div class="from-group mb-4 row">
                <div class="col-6">
                    <!--KOBCENTI-->
                    <label for="Köbcenti"><b>Köbcenti:</b></label>
                    <div class="input-group">
                        <input type="number" class="form-control" placeholder="Köbcenti" id="kobcenti" name="kobcenti" minlength="1" maxlength="5" autofocus required>
                    </div>
                </div>
                <div class="col-6">
                    <!--JOGOSITVANY-->
                    <label for="Jogosítvány"><b>Jogosítvány:</b></label>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Használathoz szükséges jogosítvány (B, A1, A2, A)" id="jogositvany" name="jogositvany" minlength="1" maxlength="15" autofocus required>
                    </div>
                </div>
            </div>
            <div class="from-group mb-4 row">
                <div class="col-6">
                    <!--TELJESITMENY-->
                    <label for="Teljesítmény"><b>Teljesítmény:</b></label>
                    <div class="input-group">
                        <input type="number" class="form-control" placeholder="Teljesítmény (kW)" id="kW" name="kW" minlength="1" maxlength="4" autofocus required>
                    </div>
                </div>
                <div class="col-6">
                    <!--AR-->
                    <label for="Ár"><b>Ár:</b></label>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Ár forintban" id="ar" name="ar" minlength="1" maxlength="12" autofocus required>
                    </div>
                </div>
            </div>
            <div class="from-group mb-4">
                <div class="col-4">
                    <!--KEPFELTOLTES-->
                    <label for="Ár"><b>Kép feltöltése:</b></label>
                    <div class="input-group">
                        <input type="file" class="form-control" placeholder="A kép neve egyezzen meg a motor nevével" id="eladasKep" name="eladasKep" autofocus required>
                    </div>
                </div>
                <!--HIRDETES FELADASA GOMB-->
                <button type="submit" class="btn btn-warning" name="eladasMegerosites" id="eladasMegerosites" value="true">Hirdetés feladása</button>
            </div>
        </form>
    </div>
</div>

<!--FELTOLTOTT KEP ATHELYEZESE A 'KEPEK' MAPPABA-->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['eladasMegerosites'])) {
    // Célkönyvtár, ahova a képet szeretnénk feltölteni
    $targetDir = "../kepek/";
    // Az átmozgatandó fájl teljes elérési útja
    $targetFile = $targetDir . basename($_FILES["eladasKep"]["name"]);  //tipus?
    // A feltöltés sikerességét ellenőrző változó
    $uploadOk = 1;
    // A kép fájltípusának lekérdezése
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    // Ellenőrizd, hogy a fájl valóban kép-e
    $check = getimagesize($_FILES["eladasKep"]["tmp_name"]);
    if ($check === false) {
        echo "A fájl nem kép.";
        $uploadOk = 0;
    }
    // Korlátozd a fájltípusokat, ha szükséges
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Csak JPG, JPEG, PNG és GIF fájlok engedélyezettek.";
        $uploadOk = 0;
    }
    // Töltsd fel a fájlt, ha minden ellenőrzés sikeres
    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["eladasKep"]["tmp_name"], $targetFile)) {
            echo "A fájl sikeresen feltöltve.";
        } else {
            echo "Hiba történt a fájl feltöltése közben.";
        }
    } else {
        echo "A fájl feltöltése sikertelen.";
    }
}
?>

<!--<script src="./css_script/motorEladas.js"></script>-->
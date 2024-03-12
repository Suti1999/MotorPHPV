<link rel="stylesheet" href="./css_script/termekek.css"/>

<div class="container">
    <div class="row">
        <?php
            foreach ($db->osszesmotor() as $row){
                $image = null;
                if (file_exists("./kepek/" . $row['tipus'] . ".jpg")){
                    $image = "./kepek/" . $row['tipus'] . ".jpg";
                } else {
                    $image = "./kepek/noimage.jpg";
                }
                
                $card = '<div class="card">
                            <img src="'.$image.'" class="card-img-top" title="'.$row['gyarto'].' '.$row['tipus'].'">
                         <div class="card-body">
                            <h5 class="card-title">' . $row['tipus'] . '</h5>' .
                            '<hr>'.
                            '<div id="card-body-adatok">'.
                            '<p class="card-text"><p class="alcim">Gyártó:</p> ' . $row['gyarto'] . '</p>' . '|'.
                            /*'<p class="card-text"><p class="alcim">Évjárat:</p> ' . $row['evjarat'] . '</p>' .
                            '<p class="card-text"><p class="alcim">Állapot:</p> ' . $row['allapot'] . '</p>' .
                            '<p class="card-text"><p class="alcim">Köbcenti</p> <p id="index_szoveg">(cm<sup>3</sup>):</p> ' . $row['kobcenti'] . '</p>' .
                            '<p class="card-text"><p class="alcim">Jogosítvány:</p> ' . $row['jogositvany'] . '</p>' .
                            '<p class="card-text"><p class="alcim">Teljesítmény</p><p id="index_szoveg">(kW):</p> ' . $row['kW'] . '</p>' .
                            '<p class="card-text"><p class="alcim">Nálunk:</p> ' . $row['nalunk'] . '</p>' .*/
                            '<p class="card-text"><p class="alcim">Ár:</p> ' . $row['ar'] . ' Ft</p>'.
                            '</div>'.
                            '<a href="index.php?menu=kivalasztottMotor&id=' . $row['motorid'] . '" class="btn btn-primary">További információ</a>'.
                            '</div>'.
                            '</div>';
                echo $card; 
            }
        ?>
    </div>
</div>
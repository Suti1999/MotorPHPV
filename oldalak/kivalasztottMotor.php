<link rel="stylesheet" href="./css_script/kivalasztottMotor.css"/>

<?php
    $id= filter_input(INPUT_GET, "id");
    
    $motorAdatok = $db->getKivalasztottMotor($id);

    if ($motorAdatok!=null) {
        echo '<h1 id="kivalaszott_motor_cim">'.$motorAdatok['gyarto'].' '.$motorAdatok['tipus'].' ('.$motorAdatok['evjarat'].')</h1>';
        
        
        echo '<div class="container">';
            echo '<div class="row d-flex">';
                echo '<div class="col-4">';
                    $image = file_exists("./kepek/" . $motorAdatok['tipus'] . ".jpg") ? "./kepek/" . $motorAdatok['tipus'] . ".jpg" : "./kepek/noimage.jpg";
                    echo '<img id="kivalaszott_motor_kep" src="' . $image . '" alt="' . $motorAdatok['tipus'] . ' képe" title="' . $motorAdatok['gyarto'] . ' ' . $motorAdatok['tipus'] . '">';
                echo '</div>';
                echo '<div class="col-1"></div>';
                echo '<div class="col-7 mt-auto">';
                    echo ' <table>
                            <tr>
                              <th class="tablazat_cimek"><p class="adat-parag">Gyártó:</p></th>
                              <th class="tablazat_cimek"><p class="adat-parag">Típus:</p></th>
                              <th class="tablazat_cimek"><p class="adat-parag">Évjárat:</p></th>
                              <th class="tablazat_cimek"><p class="adat-parag">Állapot:</p></th>
                            </tr>
                            <tr>
                              <td>'.$motorAdatok['gyarto'].'</td>
                              <td>'.$motorAdatok['tipus'].'</td>
                              <td>'.$motorAdatok['evjarat'].'</td>
                              <td>'.$motorAdatok['allapot'].'</td>
                            </tr>
                            <tr>
                              <th class="tablazat_cimek"><p class="adat-parag">Köbcenti</p><p id="index_szoveg" class="adat-parag">(cm<sup>3</sup>):</p></th>
                              <th class="tablazat_cimek"><p class="adat-parag">Jogosítvány:</p></th>
                              <th class="tablazat_cimek"><p class="adat-parag">Teljesítmény</p><p id="index_szoveg" class="adat-parag">(kW):</p></th>
                              <th class="tablazat_cimek"><p class="adat-parag">Nálunk:</p></th>
                            </tr>
                            <tr>
                              <td>'.$motorAdatok['kobcenti'].'</td>
                              <td>'.$motorAdatok['jogositvany'].'</td>
                              <td>'.$motorAdatok['kW'].'</td>
                              <td>'.$motorAdatok['nalunk'].'</td>
                            </tr>
                          </table> ';
                    
                    echo '<div id="vasarlas_div" class="d-flex justify-content-between align-items-center">';
                                echo '<div>';
                                if (isset($_SESSION['login']) && $_SESSION['login']) {
                                    echo '<a href="index.php?menu=Vasarlas" class="btn btn-success">Vásárlás</a>';
                                } else {
                                    echo '<a href="index.php?menu=Bejelentkezes" class="btn btn-success">Bejelentkezés</a>';
                                }
                                echo '</div>
                                <div id="vasarlas_div_ar" class="tablazat_ar">'.$motorAdatok['ar'].' Ft</div>
                            </div>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
    } else {
        echo 'A kiválasztott motor nem található.';
    }

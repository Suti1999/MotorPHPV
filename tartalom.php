<?php
switch ($menu) {
    case 'Rolunk':
        require_once './oldalak/rolunk.php';
        break;
    
    case 'Bejelentkezes':
        require_once './oldalak/login.php';
        break;

    case 'Regisztracio':
        require_once './oldalak/regisztracio.php';
        break;
    
    case 'Kilepes':
        require_once './oldalak/logout.php';
        break;
    
    case 'kivalasztottMotor':
        require_once './oldalak/kivalasztottMotor.php';
        break;
    
    case 'Felhasznalo':
        require_once './oldalak/Felhasznalo.php';
        break;
    
    case 'MotorEladas':
        require_once './oldalak/motoreladas.php';
        break;
    
    case 'FiokModositas':
        require_once './oldalak/felhasznalomodositas.php';
        break;

    case 'EmailKerelem':
        require_once './oldalak/emailkerelem.php';
        break;
    
    case 'ElfelejtettJelszo':
        require_once './oldalak/elfelejtettjelszo.php';
        break;

    case 'Vasarlas':
        require_once './oldalak/vasarlas.php';
        break;

    case 'Főoldal':
        require_once './reszek/header.php';
        require_once './reszek/termekek.php';
        require_once './index.php';
        break;

    default:
        require_once './reszek/header.php';
        require_once './reszek/termekek.php';
        require_once './index.php';
        break;
}
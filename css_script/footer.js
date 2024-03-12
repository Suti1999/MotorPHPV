window.addEventListener('load', function() {
        var urlParams = new URLSearchParams(window.location.search);
        var menuParam = urlParams.get('menu');

        if (menuParam === 'Rolunk') {
            var footer = document.querySelector('.footer');
            footer.style.position = 'absolute';
        }else if (menuParam === 'Felhasznalo') {
            var footer = document.querySelector('.footer');
            footer.style.position = 'absolute';
        }else if (menuParam === 'Bejelentkezes') {
            var footer = document.querySelector('.footer');
            footer.style.position = 'absolute';
        }else if (menuParam === 'EmailKerelem') {
            var footer = document.querySelector('.footer');
            footer.style.position = 'absolute';
        }else if (menuParam === 'ElfelejtettJelszo') {
            var footer = document.querySelector('.footer');
            footer.style.position = 'absolute';
        }else if (menuParam === 'MotorEladas') {
            var footer = document.querySelector('.footer');
            footer.style.position = 'absolute';
        }
    });
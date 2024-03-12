function teljesKitoltes() {
    var gyarto = document.getElementById('Gyarto').value;
    var tipus = document.getElementById('Tipus').value;
    var evjarat = document.getElementById('Evjarat').value;
    var allapot = document.getElementById('Allapot').value;
    var kobcenti = document.getElementById('Kobcenti').value;
    var jogositvany = document.getElementById('Jogositvany').value;
    var teljesitmeny = document.getElementById('Teljesitmeny').value;
    var ar = document.getElementById('Ar').value;

    if (gyarto === "" || tipus === "" || evjarat === "" || allapot === "" || kobcenti === "" || jogositvany === "" || teljesitmeny === "" || ar === "") {
        alert('Töltse ki az összes mezőt!');
        return false;
    } else {
        return true;
    }
}
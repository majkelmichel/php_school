const piling = document.getElementById("piling");
const maska = document.getElementById("maska");
const masaz = document.getElementById("masaz");
const regulacja = document.getElementById("regulacja");

const button = document.getElementById("button");

const wynik = document.getElementById("wynik");

button.addEventListener('click', () => {
    let suma = 0;
    if (piling.checked) {
        suma += 45;
    }
    if (maska.checked) {
        suma += 30;
    }
    if (masaz.checked) {
        suma += 20;
    }
    if (regulacja.checked) {
        suma += 5;
    }

    wynik.innerHTML = `Cena zabiegów: ${suma}`;
});
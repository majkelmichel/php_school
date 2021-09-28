const lba = document.getElementById("a");
const lbb = document.getElementById("b");

const add = document.getElementById("add");
const subs = document.getElementById("subs");
const mult = document.getElementById("mult");
const div = document.getElementById("div");
const pow = document.getElementById("pow");

const wyn = document.getElementById('wyn');

[add, subs, mult, div, pow].map(el => el.addEventListener('click', () => {
    const znak = el.innerText;
    if (znak.length !== 3) {
        const wynik = eval(`${parseInt(lba.value)} ${znak} ${parseInt(lbb.value)}`);
        wyn.innerText = `Wynik: ${wynik}`;
    } else {
        const wynik = Math.pow(lba.value, lbb.value);
        wyn.innerText = `Wynik: ${wynik}`;
    }
}));
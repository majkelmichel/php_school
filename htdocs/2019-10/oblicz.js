const button = document.getElementById("button");
const rodzajInput = document.getElementById("rodzaj");
const iloscInput = document.getElementById("ilosc");
const output = document.getElementById("output");

button.addEventListener('click', () => {
    const rodzaj = parseInt(rodzajInput.value);
    const ilosc = parseInt(iloscInput.value);

    let koszt;

    switch (rodzaj) {
        case 1:
            koszt = 4 * ilosc;
            break;
        case 2:
            koszt = 3.5 * ilosc;
            break;
        case 3:
            koszt = 2 * ilosc;
            break;
        default:
            koszt = 0;
    }

    output.innerText = `koszt paliwa: ${koszt}`;
})

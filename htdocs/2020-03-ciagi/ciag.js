const aInput = document.getElementById('a');
const rInput = document.getElementById('r');
const nInput = document.getElementById('n');
const span = document.getElementById('wynik');

function ciag() {
    const a = parseInt(aInput.value);
    const r = parseInt(rInput.value);
    const n = parseInt(nInput.value);

    const ciag = [];
    //
    // for (let i = 0; i < n; i++) {
    //     ciag.push(a + r * i);
    // }

    for (let i = 0; i < n; i++) {
        ciag.push(fibonacci(i));
    }

    span.innerText = "Ciąg arytmetyczny zawiera: " + ciag.join(', ');
}

function fibonacci(n) {
    if (n  <= 1) {
        return 1;
    } else {
        return fibonacci(n - 1) + fibonacci(n - 2);
    }
}
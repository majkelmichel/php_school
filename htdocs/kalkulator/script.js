const changeButton = document.getElementById("change");
let calculatorState = 'basic';

const selectField = document.getElementById("znak");

const potega = document.createElement('option');
potega.setAttribute('value', '^');
potega.innerText = '^';

const log = document.createElement('option');
log.setAttribute('value', 'log');
log.innerText = 'log';

const squareRoot = document.createElement('option');
squareRoot.setAttribute('value', 'root');
squareRoot.innerText = '√';

changeButton.addEventListener('click', () => {
    if (calculatorState === 'basic') {
        selectField.appendChild(potega);
        selectField.appendChild(log);
        selectField.appendChild(squareRoot);
        calculatorState = 'advanced';
        changeButton.innerText = 'Podstawowy';
    } else if (calculatorState === 'advanced') {
        selectField.removeChild(potega);
        selectField.removeChild(log);
        selectField.removeChild(squareRoot);
        calculatorState = 'basic';
        changeButton.innerText = 'Zaawansowany';
    }
})
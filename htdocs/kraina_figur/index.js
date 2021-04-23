const wartosc = (cb, name) => {
    const elem = document.querySelector(`#${name}`);
    const children = document.querySelectorAll(`.${name}`);
    if (cb.checked) {
        elem.removeAttribute('hidden');
        Array.prototype.slice.call(children).map(e => e.removeAttribute('disabled'));
    } else {
        elem.setAttribute("hidden", "true");
        Array.prototype.slice.call(children).map(e => e.setAttribute('disabled', 'true'));
    }
}

window.onload = () => {
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    Array.prototype.slice.call(checkboxes).map(e => e.checked = false);
    ['trojkat', 'prostokat', 'kolo', 'trapez'].map(name => {
        const children = document.querySelectorAll(`.${name}`);
        Array.prototype.slice.call(children).map(e => e.setAttribute('disabled', 'true'));
    })
}
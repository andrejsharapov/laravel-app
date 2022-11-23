const btn = document.querySelector('.btn > span');

if (btn) {
    btn.addEventListener('click', () => {
        btn.innerHTML =
            (btn.innerHTML === 'Thx!') ? btn.innerHTML = 'Clap more' : btn.innerHTML = 'Thx!';
    })
}

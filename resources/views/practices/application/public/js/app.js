const btn = document.querySelector('.btn > span');

if(btn) {
    btn.addEventListener('click', function () {
        // console.log('123');
        btn.innerHTML =
            (btn.innerHTML === 'Thx!') ? btn.innerHTML = 'Clamp more' : btn.innerHTML = 'Thx!';
    })
}
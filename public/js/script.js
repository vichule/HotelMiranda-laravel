const buttonMenu = document.querySelector('.header__button')
const crossMenu = document.querySelector('#menuOpened')
const barsMenu = document.querySelector('#menuClosed')
const hiddenMenu = document.querySelector('.header__mobile-menu')
const headerBar = document.querySelector('header')
const form = document.querySelector('.details-container__form');

let dropdown = false;

buttonMenu.addEventListener('click', function () {

    if (!dropdown) {

        hiddenMenu.classList.remove('hidden');
        crossMenu.classList.remove('hidden');
        barsMenu.classList.add('hidden');
        dropdown = true;
    } else {
        hiddenMenu.classList.add('hidden');
        crossMenu.classList.add('hidden');
        barsMenu.classList.remove('hidden');
        dropdown = false;
    }
});

window.addEventListener('scroll', function () {

    let body = document.documentElement;

    let scrollT = body.scrollTop || document.body.scrollTop;
    let scrollH = body.scrollHeight || document.body.scrollHeight;


    document.addEventListener("mousemove", (event) => {
        let y = event.clientY



        if (scrollT > 200 && y >= 150) {
            headerBar.classList.remove('header-down')
            headerBar.classList.add('header-normal')

        } else if (scrollT < 200) {

            headerBar.classList.remove('header-normal')
            headerBar.classList.add('header-down')
        }
    });

})


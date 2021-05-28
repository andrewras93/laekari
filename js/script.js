const header = document.querySelector('#header');
const headerLogo = document.querySelector('#headerLogo');

window.onscroll = function() {

    let top = window.scrollY;

    if (top >= 100) {

        header.classList.add('bg-primary');
        headerLogo.classList.add('header-logo-small');

    } else {

        header.classList.remove('bg-primary');
        headerLogo.classList.remove('header-logo-small');

    }

}

const navBarTogglerIcon = document.querySelector('.navbar-toggler-icon');

navBarTogglerIcon.onclick = function () {

    header.classList.add('bg-primary');

}


const currentLocation = location.href;
const menuItem = document.querySelectorAll('.navbar-nav > a');
const menuLength = menuItem.length;

for (let i = 0; i < menuLength; i++) {

    if (menuItem[i].href === currentLocation) {

        menuItem[i].classList.add('active');

    }

}
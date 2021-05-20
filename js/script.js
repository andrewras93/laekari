const header = document.querySelector('#header');

window.onscroll = function() {

    let top = window.scrollY;

    if (top >= 100) {

        header.classList.add('bg-primary');        

    } else {

        header.classList.remove('bg-primary');        

    }

}

const currentLocation = location.href;
const menuItem = document.querySelectorAll('.navbar-nav > a');
const menuLength = menuItem.length;

for (let i = 0; i < menuLength; i++) {

    if (menuItem[i].href === currentLocation) {

        menuItem[i].classList.add('active');

    }

}
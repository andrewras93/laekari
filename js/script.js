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

if (currentLocation.match('blog-post.php')) {

    menuItem[4].classList.add('active');

}

function getOrderFormData(e) {

    e.preventDefault();

    let inputName = document.getElementById('inputName');
    let inputEmail = document.getElementById('inputEmail');
    let inputPhone = document.getElementById('inputPhone');
    let inputGuests = document.getElementById('inputGuests');
    let inputDescription = document.getElementById('inputDescription');
    let cakeOrderErrorMessage = document.getElementById('cakeOrderErrorMessage');

    cakeOrderErrorMessage.classList.remove('show');

    if ( !inputName.value || !inputEmail.value || !inputGuests.value || !inputDescription.value ) {

        cakeOrderErrorMessage.classList.add('show');

    }

    else {

        invalidEmailMessage.classList.remove('show');
        invalidPhoneMessage.classList.remove('show');

        var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/

        if ( !inputEmail.value.match(mailformat) && inputPhone.value && inputPhone.value.length !== 8 ) {

            let invalidEmailMessage = document.getElementById('invalidEmailMessage');

            invalidEmailMessage.classList.add('show');

            let invalidPhoneMessage = document.getElementById('invalidPhoneMessage');

            invalidPhoneMessage.classList.add('show');

            return;

        }

        if ( !inputEmail.value.match(mailformat) ) {

            let invalidEmailMessage = document.getElementById('invalidEmailMessage');

            invalidEmailMessage.classList.add('show');

            return;

        }

        if ( inputPhone.value && inputPhone.value.length !== 8 ) {

            let invalidPhoneMessage = document.getElementById('invalidPhoneMessage');

            invalidPhoneMessage.classList.add('show');

            return;

        }

         else {

            alert(`Hej ${inputName.value}, tak for din bestilling til ${inputGuests.value} g??ster. En bestillingsordre er sendt til dig via. din email: ${inputEmail.value}.`);

            inputName.value = '';
            inputEmail.value = '';
            inputPhone.value = '';
            inputGuests.value = '';
            inputDescription.value = '';

            invalidEmailMessage.classList.remove('show');
            invalidPhoneMessage.classList.remove('show');

        }

    }

}

let submitCakeOrder = document.getElementById('submitCakeOrder');

if (submitCakeOrder) {

    submitCakeOrder.addEventListener('click', getOrderFormData);

} else {
    console.log(`The ID #submitCakeOrder was not found`);
}

let chatButton = document.querySelector('.chat-btn');
let chatBox = document.querySelector('.chat-box');

chatButton.addEventListener('click', function () {

    chatBox.classList.toggle('hide');

});
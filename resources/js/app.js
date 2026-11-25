// import 'bootstrap';

// import "@fortawesome/fontawesome-free/css/all.css";

// import Alpine from 'alpinejs';

// window.Alpine = Alpine;

// Alpine.start();

// import Swal from 'sweetalert2';

// window.Swal = Swal;
// // import './bootstrap';




import 'bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import Swal from 'sweetalert2';

window.Swal = Swal;
import '../css/style.css';

document.addEventListener('click', (event) => {
    if (!(event.target instanceof Element)) {
        return;
    }

    const toggle = event.target.closest('[data-password-toggle]');

    if (!toggle) {
        return;
    }

    const input = document.getElementById(toggle.getAttribute('aria-controls'));

    if (!(input instanceof HTMLInputElement)) {
        return;
    }

    const isVisible = input.type === 'text';
    input.type = isVisible ? 'password' : 'text';
    toggle.textContent = isVisible ? 'Show' : 'Hide';
    toggle.setAttribute('aria-label', `${isVisible ? 'Show' : 'Hide'} password`);
    toggle.setAttribute('aria-pressed', String(!isVisible));
});
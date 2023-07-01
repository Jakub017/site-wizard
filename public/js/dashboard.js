const records = [...document.querySelectorAll('.records-list tr')];
const navOptions = [...document.querySelectorAll('.menu-link')];

// navOptions.forEach((option, i) => {
//     if (option.classList.contains('active')) {
//         navOptions.splice(i, 1);
//     }
// });

records.forEach((record, i) => {
    record.style.animationDelay += 0.15 * i + "s";
});

navOptions.forEach((option, i) => {
    option.style.animationDelay += 0.15 * i + "s";
})


const hamburgerBtn = document.querySelector('.hamburger-wrapper');
const sidebar = document.querySelector('.sidebar-container');

hamburgerBtn.addEventListener('click', () => {
    sidebar.classList.toggle('visible');
});



const modalBtns = [...document.querySelectorAll('.message-button')];
const modals = [...document.querySelectorAll('.form-modal')];
const modalBgc = document.querySelector('.modal-background');
const closeBtns = [...document.querySelectorAll('.form-close')];

modalBtns.forEach((btn, i) => {
    btn.addEventListener('click', () => {
        modals[i].classList.add('visible');
        modalBgc.classList.add('visible');
    });
});

closeBtns.forEach((btn, i) => {
    btn.addEventListener('click', () => {
        modals.forEach((modal) => {
            modal.classList.remove('visible');
        });
        modalBgc.classList.remove('visible');
    });
});


// Add animation to 

document.addEventListener('DOMContentLoaded', () => {
    const alert = document.querySelector('.alert');

    alert.classList.add('visible');
});

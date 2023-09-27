const dropdowns = [...document.querySelectorAll('[data-attribute="dropdown"]')];
const arrows = [...document.querySelectorAll('.fa-solid.fa-angle-right')];
const submenus = [...document.querySelectorAll('[data-attribute="submenu"]')];


dropdowns.forEach((dropdown, i) => {
    dropdown.addEventListener('click', () => {
        if (submenus[i].classList.contains('hidden')) {
            submenus[i].classList.remove('hidden');
            submenus[i].classList.add('flex');
            arrows[i].classList.add('rotate-90');
        } else {
            submenus[i].classList.add('hidden');
            submenus[i].classList.remove('flex');
            arrows[i].classList.remove('rotate-90');
        }
    });
});

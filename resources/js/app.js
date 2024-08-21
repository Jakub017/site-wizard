import "./bootstrap";

const userMenuBtn = document.querySelector(".user-menu-button");
const userMenu = document.querySelector(".user-menu");

userMenuBtn.addEventListener("click", () => {
    userMenu.classList.toggle("opacity-0");
    userMenu.classList.toggle("opacity-100");
    userMenu.classList.toggle("scale-95");
    userMenu.classList.toggle("scale-100");
});

const mobileMenuOnButton = document.querySelector(".mobile-menu-open");
const mobileBackdrop = document.querySelector(".mobile-backdrop");
const mobileMenu = document.querySelector(".mobile-menu");
const mobileMenuOffButton = document.querySelector(".close-sidebar");

mobileMenuOnButton.addEventListener("click", () => {
    mobileMenu.classList.toggle("translate-x-full");
    mobileMenu.classList.toggle("-translate-x-full");
    mobileBackdrop.classList.toggle("opacity-0");
    mobileBackdrop.classList.toggle("opacity-100");
    mobileBackdrop.classList.toggle("h-0");
    mobileBackdrop.classList.toggle("h-full");
});

mobileMenuOffButton.addEventListener("click", () => {
    mobileMenu.classList.toggle("translate-x-full");
    mobileMenu.classList.toggle("-translate-x-full");
    mobileBackdrop.classList.toggle("opacity-0");
    mobileBackdrop.classList.toggle("opacity-100");
    mobileBackdrop.classList.toggle("h-0");
    mobileBackdrop.classList.toggle("h-full");
});

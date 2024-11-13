const menuIcon = document.querySelector('#menu-icon');
const navbar = document.querySelector('.navbar');
const navbg = document.querySelector('.nav-bg');

menuIcon.addEventListener('click', () => {
    menuIcon.classList.toggle('bx-x');
    navbar.classList.toggle('active');
    navbg.classList.toggle('active');
});

// Add event listener to event cards
document.querySelectorAll('.event-card').forEach(card => {
    card.addEventListener('mouseover', event => {
        card.classList.add('hover');
    });

    card.addEventListener('mouseout', event => {
        card.classList.remove('hover');
    });
});
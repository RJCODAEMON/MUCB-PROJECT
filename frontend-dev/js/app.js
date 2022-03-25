window.addEventListener('scroll', function () {
    let nav = document.querySelector('.navbar');
    let windowPosition = window.scrollY > 0;
    nav.classList.toggle('scrolling-active', windowPosition);
})

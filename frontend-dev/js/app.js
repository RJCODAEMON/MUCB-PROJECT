window.addEventListener('scroll', function () {
    let nav = document.querySelector('.navbar');
    let windowPosition = window.scrollY > 0;
    nav.classList.toggle('scrolling-active', windowPosition);
})

// create password 
const passBox = document.getElementById('password');
checkBox = document.getElementById('flexCheckDefault').addEventListener('click', event => {
    if (event.target.checked) {
        passBox.classList.add('active')
    } else {
        passBox.classList.remove('active')
    }
});
/*Variables*/
const toggle = document.getElementById('j-nav-toggle'),
    navbar = document.getElementById('j-navbar'),
    bodypadding = document.getElementById('body-pd'), 
    linkCollapse = document.getElementsByClassName('j-collapse__link'), 
    linkColor = document.querySelectorAll('.j-nav__link');
var i, tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));

/*Funciones */
toggle.addEventListener('click', () => {
    bodypadding.classList.toggle('body-pd')
    navbar.classList.toggle('j-expander')
    if (navbar.classList.contains("j-expander") || bodypadding.classList.contains("body-pd")) {
        localStorage.setItem("key-nav", "enabled");
    } else localStorage.setItem("key-nav", "disabled");
});

if (localStorage.getItem('key-nav') != 'enabled') {
    bodypadding.classList.remove('body-pd')
    navbar.classList.remove('j-expander')
}

function colorLink() {
    linkColor.forEach(l => l.classList.remove('j-active'))
    this.classList.add('j-active')
}
linkColor.forEach(l => l.addEventListener('click', colorLink))

for (i = 0; i < linkCollapse.length; i++) {
    linkCollapse[i].addEventListener('click', function () {
        const collapseMenu = this.nextElementSibling
        collapseMenu.classList.toggle('j-showCollapse')

        const rotate = collapseMenu.previousElementSibling
        rotate.classList.toggle('j-rotate')
    })
}

var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
})
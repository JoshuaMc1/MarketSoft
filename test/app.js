/*===== EXPANDER MENU  =====*/
const showMenu = (toggleId, navbarId, bodyId) => {
    const toggle = document.getElementById(toggleId),
        navbar = document.getElementById(navbarId),
        bodypadding = document.getElementById(bodyId)

    if (toggle && navbar) {
        toggle.addEventListener('click', () => {
            // let drops = document.getElementById("drop");
            navbar.classList.toggle('j-expander')
            bodypadding.classList.toggle('body-pd')
            // if(navbar.classList.contains('j-expander')){
            //     drops.classList.add("dropdown")
            //     drops.classList.remove("dropend")
            // }else{
            //     drops.classList.remove("dropdown")
            //     drops.classList.add("dropend");
            // }
        })
    }
}
showMenu('j-nav-toggle', 'j-navbar', 'body-pd')

/*===== LINK ACTIVE  =====*/
const linkColor = document.querySelectorAll('.j-nav__link')
function colorLink() {
    linkColor.forEach(l => l.classList.remove('j-active'))
    this.classList.add('j-active')
}
linkColor.forEach(l => l.addEventListener('click', colorLink))


/*===== COLLAPSE MENU  =====*/
const linkCollapse = document.getElementsByClassName('j-collapse__link')
var i

for (i = 0; i < linkCollapse.length; i++) {
    linkCollapse[i].addEventListener('click', function () {
        const collapseMenu = this.nextElementSibling
        collapseMenu.classList.toggle('j-showCollapse')

        const rotate = collapseMenu.previousElementSibling
        rotate.classList.toggle('j-rotate')
    })
}

var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
})
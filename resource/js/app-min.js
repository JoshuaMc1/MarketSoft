const toggle=document.getElementById("j-nav-toggle"),navbar=document.getElementById("j-navbar"),bodypadding=document.getElementById("body-pd"),linkCollapse=document.getElementsByClassName("j-collapse__link"),linkColor=document.querySelectorAll(".j-nav__link");var i,tooltipTriggerList=[].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));function colorLink(){linkColor.forEach((e=>e.classList.remove("j-active"))),this.classList.add("j-active")}for("enabled"!=localStorage.getItem("key-nav")&&(bodypadding.classList.remove("body-pd"),navbar.classList.remove("j-expander")),toggle.addEventListener("click",(()=>{bodypadding.classList.toggle("body-pd"),navbar.classList.toggle("j-expander"),navbar.classList.contains("j-expander")||bodypadding.classList.contains("body-pd")?localStorage.setItem("key-nav","enabled"):localStorage.setItem("key-nav","disabled")})),linkColor.forEach((e=>e.addEventListener("click",colorLink))),i=0;i<linkCollapse.length;i++)linkCollapse[i].addEventListener("click",(function(){const e=this.nextElementSibling;e.classList.toggle("j-showCollapse");e.previousElementSibling.classList.toggle("j-rotate")}));var tooltipList=tooltipTriggerList.map((function(e){return new bootstrap.Tooltip(e)}));
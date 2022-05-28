let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');
let navlink = document.querySelector('.mainHeader .navbar a');



menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
    // loginForm.classList.remove("active");

    navlink.classList.remove('bttn');
    navlink.classList.add("linkbtn");
}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
    // loginForm.classList.remove("active");
}
// navbar nextElementSibling :
let header = document.querySelector('.header');


// Show more :
showMorebtn.onclick = () =>{
    var dots = document.getElementById("dots");
    var moreContent = document.getElementById("moreContent");
    var showMorebtn = document.getElementById("showMorebtn");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        showMorebtn.innerHTML = "Read more";
        moreContent.style.display = "none";
    } else {
        dots.style.display = "none";
        showMorebtn.innerHTML = "Read less";
        moreContent.style.display = "inline";
    }
}
let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
    loginForm.classList.remove("active");
}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
    loginForm.classList.remove("active");
}
// navbar nextElementSibling :
let header = document.querySelector('.header');
// let belowHeader = header.nextElementSibling;
// belowHeader.style.marginTop=header.clientHeight-20+'px';
console.log(header.clientHeight+'px');

// log in form ---------------
let loginForm = document.querySelector("header .login-form");
let logInBtn = [document.querySelector("#logIn"),document.querySelector("#LogIn")];
let body =document.querySelector("body");
for(let i=0;i<logInBtn.length;i++){
    logInBtn[i].onclick = () =>{
        loginForm.classList.toggle("active");
        menu.classList.remove('fa-times');
        navbar.classList.remove('active');
        // opacity :
        body.style.background = "rgba(0, 0, 0, .2)";
    }
}




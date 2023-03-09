var settings= document.querySelector(".setting");

 var list= settings.classList;

function settingMenuToggle(){
    
settings.classList.toggle("setting-max-height");
};


var dark_btn = document.querySelector(".toggle-btn");
function togglingEffect(){
    dark_btn.classList.toggle("toggle-btn-move");
    document.body.classList.toggle("dark_theme");


}
var target= document.getElementsByClassName("show_img")


// concept of local storage

// if (localStorage.getItem("theme")=="light"  ){
//     dark_btn.classList.   
// }

// localStorage.setItem("theme","dark"); //create a local storage with name theme which has value =" dark"
// localStorage.getItem("theme")    // to get value at local storage named "themem"
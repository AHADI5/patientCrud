var menu_button = document.querySelector(".menu-button");
var menu = document.querySelector(".menu");
var menu_items = document.querySelectorAll("li");
menu_button.addEventListener("click",()=>{

    menu.classList.toggle("hidden-menu");
    menu_items.forEach(item=>{
        item.classList.toggle("invisible")
    })
    console.log("hello");

})


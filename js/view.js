var view_button = document.querySelectorAll(".view");
var info_box = document.querySelector(".informations-displaying");

view_button.forEach(button =>{
    button.addEventListener("click",()=>{
        info_box.classList.add("show")
    })
    
})
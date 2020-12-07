document.querySelectorAll(".modal-container img").forEach(el=>{
    el.addEventListener("click",function(ev){
        ev.stopPropagation();
        this.parentNode.classList.add("active");
    })
})

document.querySelectorAll(".modal-container").forEach(el=>{
    el.addEventListener("click",function(ev){
        this.classList.remove("ative");
        console.log("click");
    })
})
let components=[
    'accueil',
    'programmes',
    'services',
    'images',
    'videos',
    'propos',
    'podcast',
    'contact',
]
function displayNoComponent(){
    components.forEach((component)=>{
         document.getElementById(component).style.display="none"
    })
}

function loadComponent(component){
    displayNoComponent()
    document.getElementById(component).style.display="block"
    items.classList.remove("active");
    menuBtn.classList.remove("hide");
    searchBtn.classList.remove("hide");
    cancelBtn.classList.remove("show");
    form.classList.remove("active");
} 
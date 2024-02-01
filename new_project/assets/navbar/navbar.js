const hamIcon = document.getElementById('hamIcon');
const mobileMenu = document.getElementById('mobileMenu');

hamIcon.addEventListener("click", () => {

    if (mobileMenu.style.display === "block") {
        mobileMenu.style.display = "none";
    } else{
        mobileMenu.style.display = "block";
    }
    
})

function myFunction(hamIcon) {
    hamIcon.classList.toggle("change");
}